#!/usr/bin/env node

import fs from 'node:fs';
import path from 'node:path';

const siteRoot = path.resolve(process.argv[2] || 'portfolio');
const expectedOrigin = 'https://rnportfolio.xsrv.jp';
const legacyHosts = [
	'riku-designworks.jp',
	'rn1522.shop',
	'odawara-lacquerware.example.jp',
];
const errors = [];
const warnings = [];

function walk(directory) {
	return fs.readdirSync(directory, { withFileTypes: true }).flatMap((entry) => {
		const absolutePath = path.join(directory, entry.name);
		return entry.isDirectory() ? walk(absolutePath) : [absolutePath];
	});
}

function relative(file) {
	return path.relative(siteRoot, file) || path.basename(file);
}

function report(collection, file, message) {
	collection.push(`${relative(file)}: ${message}`);
}

function isExternal(value) {
	return /^(?:[a-z][a-z\d+.-]*:|#|\/\/)/i.test(value);
}

function resolveLocalReference(file, rawValue) {
	const withoutFragment = rawValue.split('#')[0].split('?')[0].trim();
	if (!withoutFragment || /^%23/i.test(withoutFragment) || isExternal(withoutFragment) || /[<{]/.test(withoutFragment)) return null;
	let decoded;
	try {
		decoded = decodeURIComponent(withoutFragment);
	} catch {
		decoded = withoutFragment;
	}
	return decoded.startsWith('/')
		? path.join(siteRoot, decoded.replace(/^\/+/, ''))
		: path.resolve(path.dirname(file), decoded);
}

function checkReference(file, value, attribute) {
	const resolved = resolveLocalReference(file, value);
	if (!resolved) return;
	if (!resolved.startsWith(siteRoot + path.sep) && resolved !== siteRoot) {
		report(warnings, file, `${attribute}="${value}" がサイトルート外を参照しています`);
		return;
	}
	if (!fs.existsSync(resolved)) {
		report(errors, file, `${attribute}="${value}" の参照先がありません`);
	}
}

function checkHtml(file) {
	const source = fs.readFileSync(file, 'utf8');
	if (!/^<!doctype html>/i.test(source.trimStart())) {
		report(errors, file, '先頭のDOCTYPEが不正または不足しています');
	}
	if (!/<html\b[^>]*\blang=["'][^"']+["']/i.test(source)) {
		report(errors, file, 'html要素にlang属性がありません');
	}
	if (!/<meta\b[^>]*\bname=["']viewport["']/i.test(source)) {
		report(errors, file, 'viewportメタがありません');
	}
	if (!/<title>[^<]+<\/title>/i.test(source)) {
		report(errors, file, 'titleがありません');
	}
	const descriptionCount = (source.match(/<meta\b[^>]*\bname=["']description["'][^>]*>/gi) || []).length;
	if (descriptionCount !== 1) {
		report(errors, file, `meta descriptionが${descriptionCount}個あります（1個必要）`);
	}
	const h1Count = (source.match(/<h1\b/gi) || []).length;
	if (h1Count !== 1) report(errors, file, `h1が${h1Count}個あります（1個必要）`);
	for (const match of source.matchAll(/<img\b[^>]*>/gi)) {
		if (!/\balt=["'][^"']*["']/i.test(match[0])) report(errors, file, 'alt属性のない画像があります');
	}
	for (const match of source.matchAll(/<a\b[^>]*\btarget=["']_blank["'][^>]*>/gi)) {
		if (!/\brel=["'][^"']*noopener[^"']*["']/i.test(match[0])) {
			report(errors, file, 'target="_blank" のリンクに rel="noopener" がありません');
		}
	}
	for (const match of source.matchAll(/<script\b[^>]*type=["']application\/ld\+json["'][^>]*>([\s\S]*?)<\/script>/gi)) {
		try {
			JSON.parse(match[1]);
		} catch (error) {
			report(errors, file, `JSON-LDが不正です: ${error.message}`);
		}
	}

	const ids = [...source.matchAll(/\bid=["']([^"']+)["']/gi)].map((match) => match[1]);
	const duplicateIds = [...new Set(ids.filter((id, index) => ids.indexOf(id) !== index))];
	for (const id of duplicateIds) report(errors, file, `id="${id}" が重複しています`);

	for (const match of source.matchAll(/\b(href|src)=["']([^"']+)["']/gi)) {
		checkReference(file, match[2], match[1].toLowerCase());
		if (/fonts\.googleapis\.com/i.test(match[2]) && /&(?!amp;)/i.test(match[2])) {
			report(errors, file, 'Google Fonts URL内の & がHTMLエスケープされていません');
		}
	}
	for (const host of legacyHosts) {
		if (source.includes(host)) report(errors, file, `旧ホスト ${host} が残っています`);
	}

	if (path.dirname(file) === siteRoot) {
		const canonical = source.match(/<link\b[^>]*\brel=["']canonical["'][^>]*\bhref=["']([^"']+)["'][^>]*>/i)
			?? source.match(/<link\b[^>]*\bhref=["']([^"']+)["'][^>]*\brel=["']canonical["'][^>]*>/i);
		if (!canonical) {
			report(errors, file, 'canonicalがありません');
		} else if (!canonical[1].startsWith(expectedOrigin)) {
			report(errors, file, `canonicalが現公開ドメインではありません: ${canonical[1]}`);
		}
	}
}

function checkCss(file) {
	const source = fs.readFileSync(file, 'utf8');
	for (const match of source.matchAll(/url\(\s*["']?([^"')]+)["']?\s*\)/gi)) {
		checkReference(file, match[1], 'url');
	}
}

if (!fs.existsSync(siteRoot)) {
	console.error(`Site root not found: ${siteRoot}`);
	process.exit(2);
}

const files = walk(siteRoot);
for (const file of files.filter((item) => item.endsWith('.html'))) checkHtml(file);
for (const file of files.filter((item) => item.endsWith('.css'))) checkCss(file);
for (const file of files.filter((item) => /\.(?:xml|txt)$/i.test(item))) {
	const source = fs.readFileSync(file, 'utf8');
	for (const host of legacyHosts) {
		if (source.includes(host)) report(errors, file, `旧ホスト ${host} が残っています`);
	}
}

if (warnings.length) {
	console.log('\nWarnings');
	for (const warning of warnings) console.log(`- ${warning}`);
}
if (errors.length) {
	console.error('\nErrors');
	for (const error of errors) console.error(`- ${error}`);
	console.error(`\nSite audit failed with ${errors.length} error(s).`);
	process.exit(1);
}

console.log(`Site audit passed: ${files.filter((file) => file.endsWith('.html')).length} HTML files checked.`);
