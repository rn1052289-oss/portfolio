<?php
/* Template Name: about */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>私たちについて | 週末珈琲便</title>
<meta name="description" content="週末珈琲便の理念・ストーリー・焙煎へのこだわりをご紹介。金曜焙煎・週末届くコーヒー定期便。">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php get_header(); ?>

<main id="main-content"> 
<section class="c-page-hero c-page-hero--video">
<h1 class="u-visually-hidden">週末珈琲便について</h1>
<video class="c-page-hero__video" muted loop playsinline preload="metadata"
poster="<?php echo esc_url( get_template_directory_uri() ); ?>/images/aboutfirstview.webp">
<source src="<?php echo esc_url( get_template_directory_uri() ); ?>/video/about.mp4" type="video/mp4">
<!-- <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/video/beans-hero.webm" type="video/webm"> -->
お使いのブラウザは動画再生に対応していません。
</video>
<div class="c-page-hero__overlay" aria-hidden="true"></div>
</section>

<section class="about-story c-bg-deco c-bg-deco--left" id="about-story">
<div class="l-inner">
<div class="c-section-heading">
<span class="c-section-heading__en">Our Story</span>
<h2 class="c-section-heading__ja"><span class="u-keep">週末珈琲便が</span><span class="u-keep">生まれた理由</span></h2>
</div>
<div class="about-story__wrap">
<div class="about-story__img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ourstory.webp" alt="焙煎風景" width="707" height="404"></div>
<div class="about-story__body">
<p class="about-story__text">「焙煎してから72時間がコーヒーの香りのピーク」<br>
この事実に出会ったとき、私たちは確信しました。<br>
金曜に焙煎して、週末に届ける。<br>
この流れなら、最高の一杯を届けられる──</p>
</div>
</div>
</div>
</section>

<section class="about-commitment" id="about-commitment">
<div class="l-inner">
<div class="c-section-heading">
<span class="c-section-heading__en">Commitment</span>
<h2 class="c-section-heading__ja">3つのこだわり</h2>
</div>
<div class="c-deco-line"><span class="c-deco-line__icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/coffeebeans.svg" alt="コーヒー豆" width="512" height="512"></span></div>
<div class="about-commitment__grid">
<article class="about-commitment__item">
<div class="about-commitment__img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/aboutcard1.webp" alt="コーヒー売り場" width="1600" height="1195"></div>
<h3 class="about-commitment__title">産地直送の生豆</h3>
<p class="about-commitment__text">世界各地のスペシャルティコーヒーの中から厳選</p>
</article>
<article class="about-commitment__item">
<div class="about-commitment__img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/aboutcard2.webp" alt="焙煎シーン" width="1600" height="1195"></div>
<h3 class="about-commitment__title">毎週金曜の焙煎</h3>
<p class="about-commitment__text">注文を受けてから少量ずつ丁寧に焙煎</p>
</article>
<article class="about-commitment__item">
<div class="about-commitment__img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/aboutcard3.webp" alt="コーヒー豆の梱包" width="1600" height="1195"></div>
<h3 class="about-commitment__title">味わいガイド同封</h3>
<p class="about-commitment__text">初心者にも分かりやすい味わいチャートを毎月同封</p>
</article>
</div>
</div>
</section>

<section class="about-roaster" id="about-roaster">
<div class="l-inner">
<div class="c-section-heading">
<span class="c-section-heading__en">Roaster</span>
<h2 class="c-section-heading__ja">焙煎士紹介</h2>
</div>
<div class="about-roaster__wrap">
<div class="about-roaster__photo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/human.webp" alt="焙煎士" width="1600" height="1600"></div>
<div class="about-roaster__body">
<h3 class="about-roaster__name">焙煎 太郎</h3>
<p class="about-roaster__desc">SCA認定Qグレーダー。<br>
10年以上のキャリアを持つ焙煎士。<br>
「コーヒーは果実。<br>
その個性を最大限引き出す焙煎を心がけています。」</p>
<p class="c-demo-inline-note">※ 人物名・経歴を含むプロフィールは、デザイン表現用の架空設定です。</p>
</div>
</div>
</div>
</section>

<section id="about-cta">
<div class="l-inner">
<p class="c-cta-section__heading">あなたに合ったプランを探す</p>
<p class="c-cta-section__text">少量だから、気軽に始められる。<br>
あなたにぴったりの一杯がきっと見つかります。</p>
<div class="c-deco-line"><span class="c-deco-line__icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/coffeebeans.svg" alt="コーヒー豆" width="512" height="512"></span></div>
<div style="text-align:center;">
<a href="<?php echo esc_url( home_url('/plan/') ); ?>" class="c-btn">View plan</a>
</div>
</div>
</section>

</main>

<?php get_footer(); ?>

<?php wp_footer(); ?>
</body>
</html>
