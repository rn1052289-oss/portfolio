#!/usr/bin/env node

import fs from 'node:fs';
import path from 'node:path';

const themeRoot = path.resolve(process.argv[2] || 'syumatucoffee');
const pageTemplates = [
	'home.php',
	'about.php',
	'beans.php',
	'guide.php',
	'plan.php',
	'news.php',
	'contact.php',
	'shop.php',
];
const errors = [];

function fail(file, message) {
	errors.push(`${file}: ${message}`);
}

for (const file of pageTemplates) {
	const absolutePath = path.join(themeRoot, file);
	if (!fs.existsSync(absolutePath)) {
		fail(file, 'テンプレートがありません');
		continue;
	}

	const source = fs.readFileSync(absolutePath, 'utf8');
	const h1Count = (source.match(/<h1\b/gi) || []).length;
	if (h1Count !== 1) fail(file, `h1が${h1Count}個あります（1個必要）`);
	if (!/language_attributes\s*\(/.test(source)) fail(file, 'language_attributes() がありません');
	if (!/body_class\s*\(/.test(source)) fail(file, 'body_class() がありません');
	if (!/wp_body_open\s*\(/.test(source)) fail(file, 'wp_body_open() がありません');
	if (!/wp_head\s*\(/.test(source)) fail(file, 'wp_head() がありません');
	if (!/wp_footer\s*\(/.test(source) && !/get_footer\s*\(/.test(source)) {
		fail(file, 'wp_footer() または get_footer() がありません');
	}
}

const textFiles = fs.readdirSync(themeRoot, { recursive: true })
	.filter((file) => /\.(?:php|css|js)$/i.test(file));
for (const file of textFiles) {
	const source = fs.readFileSync(path.join(themeRoot, file), 'utf8');
	if (/info@example\.com/i.test(source)) fail(file, 'ダミーメールアドレスが残っています');
	if (/href\s*=\s*["']#["']/i.test(source)) fail(file, '遷移しない href="#" が残っています');
}

const rootPhpFiles = fs.readdirSync(themeRoot)
	.filter((file) => file.endsWith('.php'));
for (const file of rootPhpFiles) {
	const source = fs.readFileSync(path.join(themeRoot, file), 'utf8');
	if (!/defined\(\s*['"]ABSPATH['"]\s*\)/.test(source)) {
		fail(file, 'WordPress外からの直接アクセス防止がありません');
	}
}

const functionsSource = fs.readFileSync(path.join(themeRoot, 'functions.php'), 'utf8');
if (!/function\s+shumatsu_coffee_asset_version\s*\(/.test(functionsSource)) {
	fail('functions.php', 'ローカルCSS/JSのキャッシュ更新関数がありません');
}
if (!/filemtime\s*\(/.test(functionsSource)) {
	fail('functions.php', 'ローカルCSS/JSに更新日時のバージョンが付きません');
}
for (const metaName of ['og:title', 'og:description', 'og:url', 'og:image', 'twitter:card']) {
	if (!functionsSource.includes(metaName)) {
		fail('functions.php', `${metaName} の共有メタ情報がありません`);
	}
}

const homeSource = fs.readFileSync(path.join(themeRoot, 'home.php'), 'utf8');
const lazyBeanImageCount = (homeSource.match(/beanscard\d+\.webp[^>]*loading="lazy"/g) || []).length;
if (lazyBeanImageCount !== 10) {
	fail('home.php', `豆画像の遅延読み込みが${lazyBeanImageCount}/10件です`);
}

const style = fs.readFileSync(path.join(themeRoot, 'style.css'), 'utf8');
if (!/\/\*[\s\S]*?Theme Name\s*:[\s\S]*?\*\//i.test(style)) {
	fail('style.css', 'WordPressテーマヘッダーの Theme Name がありません');
}

if (errors.length) {
	for (const error of errors) console.error(`- ${error}`);
	console.error(`Theme audit failed with ${errors.length} error(s).`);
	process.exit(1);
}

console.log(`Theme audit passed: ${pageTemplates.length} page templates checked.`);
