<?php
/* Template Name: beans */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>コーヒー豆紹介 | 週末珈琲便</title>
<meta name="description" content="今月お届けするスペシャルティコーヒー豆の産地・焙煎度・フレーバーノートをご紹介。">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php get_header(); ?>

<main id="main-content">
<section class="c-page-hero c-page-hero--video">
<h1 class="u-visually-hidden">コーヒー豆紹介</h1>
<video class="c-page-hero__video" muted loop playsinline preload="metadata"
poster="<?php echo esc_url( get_template_directory_uri() ); ?>/images/beansweek1.webp">
<source src="<?php echo esc_url( get_template_directory_uri() ); ?>/video/beans.mp4" type="video/mp4">
<!-- <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/video/beans-hero.webm" type="video/webm"> -->
お使いのブラウザは動画再生に対応していません。
</video>
<div class="c-page-hero__overlay" aria-hidden="true"></div>
</section>

<section class="beans-list" id="beans-list">
<div class="l-inner">
<div class="c-section-heading"><span class="c-section-heading__en">This Month</span>
<h2 class="c-section-heading__ja">今月のコーヒー豆</h2></div>
<p class="beans-list__intro">自主制作デモ用の架空ラインナップです。実際の販売・配送は行っていません。</p>

<div class="beans-list__grid">
<article class="beans-card">
<div class="beans-card__img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/beansweek1.webp" alt="エチオピア イルガチェフェ" width="1600" height="1195"></div>
<div class="beans-card__body">
<span class="beans-card__tag beans-card__tag--light">浅煎り Light</span>
<h3 class="beans-card__name">エチオピア イルガチェフェ</h3>
<p class="beans-card__detail">産地：エチオピア シダモ地区<br>
フレーバー：フローラル・柑橘・ベリー<br>
おすすめ抽出：ハンドドリップ</p>
</div>
</article>

<article class="beans-card">
<div class="beans-card__img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/beansweek2.webp" alt="グアテマラ アンティグア" width="1600" height="1195"></div>
<div class="beans-card__body">
<span class="beans-card__tag beans-card__tag--medium">中煎り Medium</span>
<h3 class="beans-card__name">グアテマラ アンティグア</h3>
<p class="beans-card__detail">産地：グアテマラ アンティグア地区<br>
フレーバー：チョコレート・ナッツ<br>
おすすめ抽出：ドリップ・フレンチプレス</p>
</div>
</article>

<article class="beans-card">
<div class="beans-card__img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/beansweek3.webp" alt="ブラジル サントス" width="1600" height="1195"></div>
<div class="beans-card__body">
<span class="beans-card__tag beans-card__tag--dark">深煎り Dark</span>
<h3 class="beans-card__name">ブラジル サントス</h3>
<p class="beans-card__detail">産地：ブラジル サンパウロ州<br>
フレーバー：重厚なコク・ビター<br>
おすすめ抽出：エスプレッソ</p>
</div>
</article>
</div>
</div>
</section>

<section class="beans-chart" id="beans-chart">
<div class="l-inner">
<div class="c-section-heading"><span class="c-section-heading__en">Flavor Chart</span>
<h2 class="c-section-heading__ja">味わい比較</h2></div>

<table class="beans-chart__table">
<thead>
<tr>
<th></th><th>酸味</th><th>苦味</th><th>甘み</th><th>コク</th><th>香り</th>
</tr>
</thead>
<tbody>
<tr>
<th>エチオピア イルガチェフェ</th>
<td>★★★★★</td><td>★★</td><td>★★★★</td><td>★★★</td><td>★★★★★</td>
</tr>
<tr>
<th>グアテマラ アンティグア</th>
<td>★★★</td><td>★★★</td><td>★★★★</td><td>★★★★</td><td>★★★★</td>
</tr>
<tr>
<th>ブラジル サントス</th>
<td>★★</td><td>★★★★★</td><td>★★★</td><td>★★★★★</td><td>★★★</td>
</tr>
</tbody>
</table>
</div>
</section>

<section class="c-cta-section" id="beans-cta">
<div class="l-inner">
<p class="c-cta-section__heading">気になる豆を見つけたら</p>
<p class="c-cta-section__text">あなたにぴったりのプランで、最高の一杯を。</p>
<a href="<?php echo esc_url( home_url('/plan/') ); ?>" class="c-btn c-btn--white">View plan</a>
</div>
</section>
</main>

<?php get_footer(); ?>

<?php wp_footer(); ?>
</body>
</html>
