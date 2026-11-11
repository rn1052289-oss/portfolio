<?php
/* Template Name: news */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お知らせ | 週末珈琲便</title>
  <meta name="description" content="週末珈琲便の最新ニュース・キャンペーン・イベント情報をお届けします。">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php get_header(); ?>

<main id="main-content">
<section class="c-page-hero c-page-hero--video">
<h1 class="u-visually-hidden">週末珈琲便からのお知らせ</h1>
<video class="c-page-hero__video" muted loop playsinline preload="metadata"
poster="<?php echo esc_url( get_template_directory_uri() ); ?>/images/newsfv.webp">
<source src="<?php echo esc_url( get_template_directory_uri() ); ?>/video/news.mp4" type="video/mp4">
お使いのブラウザは動画再生に対応していません。
</video>
<div class="c-page-hero__overlay" aria-hidden="true"></div>
</section>

<section class="news-list" id="news-list">
<div class="l-inner">
<div class="c-section-heading"><span class="c-section-heading__en">Latest News</span><h2 class="c-section-heading__ja">お知らせ</h2></div>
<p class="c-demo-inline-note">掲載内容は自主制作デモ用の架空のお知らせです。キャンペーンやイベントは実施していません。</p>
<div class="news-list__items">

<article class="news-list__item">
<time class="news-list__date" datetime="2026-02-14">2026.02.14</time>
<span class="news-list__cat news-list__cat--beans">新着豆</span>
<h3 class="news-list__title">3月のコーヒー豆ラインナップを公開しました</h3>
</article>

<article class="news-list__item">
<time class="news-list__date" datetime="2026-02-01">2026.02.01</time>
<span class="news-list__cat news-list__cat--campaign">キャンペーン</span>
<h3 class="news-list__title">春のスタートキャンペーン！初回30%OFFクーポン配布中</h3>
</article>

<article class="news-list__item">
<time class="news-list__date" datetime="2026-01-20">2026.01.20</time>
<span class="news-list__cat news-list__cat--column">コラム</span>
<h3 class="news-list__title">コーヒーの保存方法──鮮度を保つ3つのコツ</h3>
</article>

<article class="news-list__item">
<time class="news-list__date" datetime="2026-01-10">2026.01.10</time>
<span class="news-list__cat">お知らせ</span>
<h3 class="news-list__title">年末年始の配送スケジュールについて</h3>
</article>

<article class="news-list__item">
<time class="news-list__date" datetime="2025-12-25">2025.12.25</time>
<span class="news-list__cat news-list__cat--event">イベント</span>
<h3 class="news-list__title">オンライン焙煎見学会を開催します</h3>
</article>

<article class="news-list__item">
<time class="news-list__date" datetime="2025-12-10">2025.12.10</time>
<span class="news-list__cat news-list__cat--beans">新着豆</span>
<h3 class="news-list__title">冬季限定ブレンド「冬ごもり」の予約受付を開始しました</h3>
</article>

</div>
</div>
</section>

<section class="c-sns-section" id="news-sns">
<div class="l-inner">
<div class="c-section-heading">
<span class="c-section-heading__en">Follow Us</span>
<h2 class="c-section-heading__ja">SNS表示サンプル</h2>
</div>
<p class="c-sns-section__text">デザイン見本のため、SNSアカウントやリンクは存在しません。</p>
<div class="c-sns-section__links">
<span class="c-sns-section__link is-demo-disabled" aria-hidden="true"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Xicon.svg" alt="" width="48" height="48"></span>
<span class="c-sns-section__link is-demo-disabled" aria-hidden="true"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/instagram.svg" alt="" width="48" height="48"></span>
<span class="c-sns-section__link is-demo-disabled" aria-hidden="true"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/youtube.svg" alt="" width="48" height="48"></span>
</div>
<p class="c-sns-section__names">X ・ Instagram ・ Youtube</p>
<div class="c-deco-line"><span class="c-deco-line__icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/coffeebeans.svg" alt="コーヒー豆" width="512" height="512"></span></div>
</div>
</section>
</main>

<?php get_footer(); ?>

<?php wp_footer(); ?>
</body>
</html>
