#!/usr/bin/env node

import fs from 'node:fs';
import path from 'node:path';

const root = path.resolve(process.argv[2] || 'portfolio');
const port = Number(process.env.QA_CDP_PORT || 9223);
const baseUrl = process.env.QA_BASE_URL || 'http://127.0.0.1:8787/';
const widths = (process.env.QA_WIDTHS || '320,390').split(',').map(Number);
const captureScreenshots = process.env.QA_CAPTURE === '1';
const captureFiles = new Set((process.env.QA_CAPTURE_FILES || [
  'index.html',
  'works.html',
  'pricing.html',
  'about.html',
  'contact.html',
  'works-shumatsu-coffee.html',
  'works-juku.html',
  'works-urushi.html',
  'works-yuakari.html',
  'juku_demo/index.html',
  'salon_demo/index.html',
  'odawara-lacquerware-fixed/index.html',
].join(',')).split(','));
const screenshotDirectory = path.resolve('qa-mobile-screenshots');
if (captureScreenshots) fs.mkdirSync(screenshotDirectory, { recursive: true });

function walk(directory) {
  return fs.readdirSync(directory, { withFileTypes: true }).flatMap((entry) => {
    const absolute = path.join(directory, entry.name);
    return entry.isDirectory() ? walk(absolute) : [absolute];
  });
}

async function createPage() {
  const response = await fetch(`http://127.0.0.1:${port}/json/new?about:blank`, { method: 'PUT' });
  if (!response.ok) throw new Error(`CDP target creation failed: ${response.status}`);
  const target = await response.json();
  const socket = new WebSocket(target.webSocketDebuggerUrl);
  await new Promise((resolve, reject) => {
    socket.addEventListener('open', resolve, { once: true });
    socket.addEventListener('error', reject, { once: true });
  });

  let sequence = 0;
  const pending = new Map();
  const eventWaiters = new Map();

  socket.addEventListener('message', (event) => {
    const message = JSON.parse(event.data);
    if (message.id && pending.has(message.id)) {
      const { resolve, reject } = pending.get(message.id);
      pending.delete(message.id);
      if (message.error) reject(new Error(message.error.message));
      else resolve(message.result);
      return;
    }
    const waiters = eventWaiters.get(message.method) || [];
    eventWaiters.delete(message.method);
    waiters.forEach((resolve) => resolve(message.params));
  });

  function send(method, params = {}) {
    const id = ++sequence;
    return new Promise((resolve, reject) => {
      pending.set(id, { resolve, reject });
      socket.send(JSON.stringify({ id, method, params }));
    });
  }

  function waitForEvent(method, timeoutMs = 15000) {
    return new Promise((resolve, reject) => {
      const timer = setTimeout(() => reject(new Error(`Timed out waiting for ${method}`)), timeoutMs);
      const wrapped = (params) => {
        clearTimeout(timer);
        resolve(params);
      };
      const waiters = eventWaiters.get(method) || [];
      waiters.push(wrapped);
      eventWaiters.set(method, waiters);
    });
  }

  await send('Page.enable');
  await send('Runtime.enable');

  return {
    target,
    send,
    waitForEvent,
    async close() {
      socket.close();
      await fetch(`http://127.0.0.1:${port}/json/close/${target.id}`);
    },
  };
}

const auditExpression = `(() => {
  const visible = (element) => {
    const style = getComputedStyle(element);
    const rect = element.getBoundingClientRect();
    return style.display !== 'none' && style.visibility !== 'hidden' && rect.width > 0 && rect.height > 0;
  };

  const pageWidth = Math.max(document.documentElement.scrollWidth, document.body?.scrollWidth || 0);
  const overflow = Math.max(0, Math.round((pageWidth - innerWidth) * 10) / 10);
  const overflowItems = overflow > 1
    ? Array.from(document.querySelectorAll('body *')).filter((element) => {
        if (!visible(element)) return false;
        const style = getComputedStyle(element);
        if (style.position === 'fixed' || style.position === 'sticky') return false;
        const rect = element.getBoundingClientRect();
        return rect.right > innerWidth + 1 || rect.left < -1;
      }).slice(0, 16).map((element) => {
        const rect = element.getBoundingClientRect();
        return {
          tag: element.tagName.toLowerCase(),
          id: element.id || '',
          class: String(element.className || '').slice(0, 100),
          left: Math.round(rect.left),
          right: Math.round(rect.right),
          width: Math.round(rect.width),
          text: (element.innerText || '').trim().replace(/\\s+/g, ' ').slice(0, 80),
        };
      })
    : [];

  const interactiveSelector = [
    'button', 'input:not([type="hidden"])', 'select', 'textarea',
    'header a', 'nav a', 'footer a', 'footer button',
    'a[class*="btn"]', 'a[class*="button"]', 'a[class*="cta"]',
    '[role="button"]'
  ].join(',');
  const smallTargets = Array.from(new Set(document.querySelectorAll(interactiveSelector)))
    .filter((element) => visible(element)
      && !element.disabled
      && element.tabIndex !== -1
      && !element.closest('[aria-hidden="true"]')
      && element.getAttribute('aria-disabled') !== 'true')
    .map((element) => {
      const hitElement = element.closest('label') || element;
      const rect = hitElement.getBoundingClientRect();
      return { element, rect };
    })
    .filter(({ rect }) => rect.width < 44 || rect.height < 44)
    .slice(0, 30)
    .map(({ element, rect }) => ({
      tag: element.tagName.toLowerCase(),
      id: element.id || '',
      class: String(element.className || '').slice(0, 100),
      width: Math.round(rect.width),
      height: Math.round(rect.height),
      text: (element.innerText || element.getAttribute('aria-label') || '').trim().replace(/\\s+/g, ' ').slice(0, 70),
    }));

  function headingLines(element) {
    const walker = document.createTreeWalker(element, NodeFilter.SHOW_TEXT);
    const groups = [];
    let node;
    while ((node = walker.nextNode())) {
      Array.from(node.nodeValue || '').forEach((character, index) => {
        if (!character.trim()) return;
        const range = document.createRange();
        range.setStart(node, index);
        range.setEnd(node, index + 1);
        const rect = range.getBoundingClientRect();
        if (!rect.width || !rect.height) return;
        let group = groups.find((item) => Math.abs(item.top - rect.top) < 2);
        if (!group) {
          group = { top: rect.top, text: '' };
          groups.push(group);
        }
        group.text += character;
      });
    }
    return groups.sort((a, b) => a.top - b.top).map((item) => item.text);
  }

  const headingWraps = Array.from(document.querySelectorAll('h1,h2,h3'))
    .filter(visible)
    .map((element) => ({
      tag: element.tagName.toLowerCase(),
      id: element.id || '',
      class: String(element.className || '').slice(0, 100),
      lines: headingLines(element),
    }))
    .filter((item) => item.lines.length > 1 && item.lines.at(-1).length <= 2);

  const brokenImages = Array.from(document.images)
    .filter((image) => image.complete && image.naturalWidth === 0)
    .map((image) => image.currentSrc || image.src);

  return {
    viewport: { width: innerWidth, height: innerHeight },
    pageWidth,
    pageHeight: Math.max(document.documentElement.scrollHeight, document.body?.scrollHeight || 0),
    overflow,
    overflowItems,
    smallTargets,
    headingWraps,
    brokenImages,
    title: document.title,
  };
})()`;

const htmlFiles = walk(root).filter((file) => file.endsWith('.html')).sort();
const report = [];

for (const width of widths) {
  const page = await createPage();
  try {
    await page.send('Emulation.setDeviceMetricsOverride', {
      width,
      height: 844,
      deviceScaleFactor: 1,
      mobile: true,
      screenWidth: width,
      screenHeight: 844,
    });

    for (const file of htmlFiles) {
      const relative = path.relative(root, file).split(path.sep).join('/');
      const url = new URL(relative, baseUrl).href;
      const loaded = page.waitForEvent('Page.loadEventFired');
      await page.send('Page.navigate', { url });
      await loaded;
      await page.send('Runtime.evaluate', {
        expression: 'document.fonts && document.fonts.ready',
        awaitPromise: true,
        returnByValue: true,
      });
      await new Promise((resolve) => setTimeout(resolve, 120));
      const evaluation = await page.send('Runtime.evaluate', {
        expression: auditExpression,
        returnByValue: true,
      });
      report.push({ file: relative, width, url, ...evaluation.result.value });

      if (captureScreenshots && width === 390 && captureFiles.has(relative)) {
        await page.send('Runtime.evaluate', {
          expression: `(async () => {
            const step = Math.max(360, Math.round(innerHeight * .72));
            for (let y = 0; y < document.documentElement.scrollHeight; y += step) {
              scrollTo(0, y);
              await new Promise((resolve) => setTimeout(resolve, 70));
            }
            scrollTo(0, 0);
            await new Promise((resolve) => setTimeout(resolve, 160));
          })()`,
          awaitPromise: true,
          returnByValue: true,
        });
        const screenshot = await page.send('Page.captureScreenshot', {
          format: 'png',
          captureBeyondViewport: true,
          fromSurface: true,
        });
        const filename = `${relative.replaceAll('/', '__').replace(/\.html$/, '')}-${width}.png`;
        fs.writeFileSync(path.join(screenshotDirectory, filename), Buffer.from(screenshot.data, 'base64'));
      }
    }
  } finally {
    await page.close();
  }
}

const reportPath = path.resolve('qa-mobile-report.json');
fs.writeFileSync(reportPath, `${JSON.stringify(report, null, 2)}\n`);

const failures = report.filter((item) => item.overflow > 1 || item.brokenImages.length > 0);
const wrapWarnings = report.filter((item) => item.headingWraps.length > 0);
const targetWarnings = report.filter((item) => item.smallTargets.length > 0);

console.log(`Checked ${report.length} page/viewport combinations.`);
console.log(`Hard failures: ${failures.length}`);
console.log(`Heading wrap warnings: ${wrapWarnings.length}`);
console.log(`Touch target warnings: ${targetWarnings.length}`);
console.log(`Report: ${reportPath}`);

if (failures.length) {
  failures.forEach((item) => {
    console.error(`${item.file} @ ${item.width}px: overflow=${item.overflow}, brokenImages=${item.brokenImages.length}`);
  });
  process.exitCode = 1;
}
