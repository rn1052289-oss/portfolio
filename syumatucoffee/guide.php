<?php
/* Template Name: guide */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ご利用ガイド | 週末珈琲便</title>
  <meta name="description" content="初めての方向けに、注文から届くまでの流れ・焙煎度の違い・おいしい淹れ方をご紹介。">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php get_header(); ?>

<main id="main-content">
<section class="c-page-hero c-page-hero--video">
<h1 class="u-visually-hidden">週末珈琲便 ご利用ガイド</h1>
<video class="c-page-hero__video" muted loop playsinline preload="metadata"
poster="<?php echo esc_url( get_template_directory_uri() ); ?>/images/firstview1.webp">
<source src="<?php echo esc_url( get_template_directory_uri() ); ?>/video/guide.mp4" type="video/mp4">
お使いのブラウザは動画再生に対応していません。
</video>
<div class="c-page-hero__overlay" aria-hidden="true"></div>
</section>

<section class="guide-steps c-bg-deco c-bg-deco--left" id="guide-steps">
<div class="l-inner">
<div class="c-section-heading"><span class="c-section-heading__en">How to Order</span><h2 class="c-section-heading__ja">ご注文の流れ</h2></div>
<div class="guide-steps__row">
<div class="guide-steps__item">
<span class="guide-steps__num">STEP 01</span>
<div class="guide-steps__icon">📋</div>
<h3 class="guide-steps__label">プランを選ぶ</h3>
<p class="guide-steps__desc">ライト・スタンダード・プレミアムの3つからお選びください</p>
</div>
<div class="guide-steps__arrow">→</div>
<div class="guide-steps__item">
<span class="guide-steps__num">STEP 02</span>
<div class="guide-steps__icon">💳</div>
<h3 class="guide-steps__label">お申し込み</h3>
<p class="guide-steps__desc">フォームから簡単にお申し込みいただけます</p>
</div>
<div class="guide-steps__arrow">→</div>
<div class="guide-steps__item">
<span class="guide-steps__num">STEP 03</span>
<div class="guide-steps__icon">🔥</div>
<h3 class="guide-steps__label">金曜焙煎</h3>
<p class="guide-steps__desc">毎週金曜にあなたのために焙煎スタート</p>
</div>
<div class="guide-steps__arrow">→</div>
<div class="guide-steps__item">
<span class="guide-steps__num">STEP 04</span>
<div class="guide-steps__icon">🚚</div>
<h3 class="guide-steps__label">週末届く</h3>
<p class="guide-steps__desc">土日にご自宅のポストへお届けします</p>
</div>
</div>
</div>
</section>

<section class="guide-roast" id="guide-roast">
<div class="l-inner">
<div class="c-section-heading"><span class="c-section-heading__en">Roast Level</span><h2 class="c-section-heading__ja">焙煎度ガイド</h2></div>
<div class="guide-roast__visual">
<div class="guide-roast__item">
<div class="guide-roast__circle guide-roast__circle--light"></div>
<h3 class="guide-roast__name">浅煎り</h3>
<p class="guide-roast__flavor">酸味が強く<br>フルーティー</p>
</div>
<div class="guide-roast__item">
<div class="guide-roast__circle guide-roast__circle--medium"></div>
<h3 class="guide-roast__name">中煎り</h3>
<p class="guide-roast__flavor">バランス型<br>甘みとコク</p>
</div>
<div class="guide-roast__item">
<div class="guide-roast__circle guide-roast__circle--dark"></div>
<h3 class="guide-roast__name">深煎り</h3>
<p class="guide-roast__flavor">苦味が強く<br>重厚なコク</p>
</div>
</div>
<div class="guide-roast__btn-wrap">
<button class="c-btn" id="modalOpen" type="button">View more</button>
</div>
</div>
</section>

<div class="guide-modal-overlay" id="modalOverlay">
<div class="guide-modal" role="dialog" aria-label="焙煎度の違い">
<button class="guide-modal__close" id="modalClose" type="button" aria-label="閉じる">✕</button>
<h3 class="guide-modal__title">焙煎度の違い</h3>
<div class="guide-modal__grid">
<div class="guide-modal__item">
<div class="guide-modal__circle guide-roast__circle--light" style="width:56px;height:56px;border-radius:50%;margin:0 auto 8px;background:#C08050;"></div>
<p class="guide-modal__name">浅煎り（Light）</p>
<p class="guide-modal__text">酸味が強く、果実のようなフルーティーな風味が特徴。紅茶のような軽やかな口当たり。</p>
</div>
<div class="guide-modal__item">
<div class="guide-modal__circle" style="width:56px;height:56px;border-radius:50%;margin:0 auto 8px;background:#8B5E3C;"></div>
<p class="guide-modal__name">中煎り（Medium）</p>
<p class="guide-modal__text">酸味と苦味のバランスが良く、ナッツやチョコレートのような甘みとコクが楽しめます。</p>
</div>
<div class="guide-modal__item">
<div class="guide-modal__circle" style="width:56px;height:56px;border-radius:50%;margin:0 auto 8px;background:#3E2723;"></div>
<p class="guide-modal__name">深煎り（Dark）</p>
<p class="guide-modal__text">苦味が強く、力強いコクとスモーキーな余韻が特徴。ミルクとの相性も抜群です。</p>
</div>
</div>
</div>
</div>

<section class="guide-brewing" id="guide-brewing">
<div class="l-inner">
<div class="c-section-heading"><span class="c-section-heading__en">Brewing Tips</span><h2 class="c-section-heading__ja">おいしい淹れ方</h2></div>
<div class="guide-brewing__grid">
<article class="guide-brewing__item">
<div class="guide-brewing__icon">💧</div>
<h3 class="guide-brewing__title">ハンドドリップ</h3>
<p class="guide-brewing__text">お湯の温度は90〜92℃がベスト。中心からゆっくり「の」の字を描くように注ぎ、蒸らし30秒で旨みを引き出します。</p>
</article>
<article class="guide-brewing__item">
<div class="guide-brewing__icon">🫖</div>
<h3 class="guide-brewing__title">フレンチプレス</h3>
<p class="guide-brewing__text">粗挽きの豆を使い、お湯を注いだら4分間じっくり抽出。豆の油分まで楽しめる、コクのある一杯に。</p>
</article>
<article class="guide-brewing__item">
<div class="guide-brewing__icon">🥛</div>
<h3 class="guide-brewing__title">カフェオレ</h3>
<p class="guide-brewing__text">深煎り豆を濃いめに抽出し、温めたミルクを注ぐだけ。まろやかな甘みが広がります。</p>
</article>
</div>
</div>
</section>

<section class="c-cta-section" id="guide-cta">
<div class="l-inner">
<p class="c-cta-section__heading">まずはプランを選んでみる</p>
<p class="c-cta-section__text">あなたの週末を、もっと豊かに。</p>
<a href="<?php echo esc_url( home_url('/plan/') ); ?>" class="c-btn c-btn--white">View plan</a>
</div>
</section>
</main>

<?php get_footer(); ?>

<?php wp_footer(); ?>
</body>
</html>
