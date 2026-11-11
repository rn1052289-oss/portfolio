<?php
/* Template Name: shop */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>オンラインショップ | 週末珈琲便</title>
<meta name="description" content="週末珈琲便のオンラインショップ画面を再現した自主制作デモです。購入・決済機能はありません。">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php get_header(); ?>

<main id="main-content">
<section class="c-page-hero">
<div class="c-page-hero__content">
<h1 class="c-page-hero__en">ONLINE SHOP</h1>
<p class="c-page-hero__breadcrumb"><a href="<?php echo esc_url( home_url('/') ); ?>">HOME</a> &gt; ONLINE SHOP</p>
</div>
</section>

<section class="shop-intro" id="shop-intro">
<div class="l-inner">
<div class="c-section-heading"><span class="c-section-heading__en">Coffee Beans</span>
<h2 class="c-section-heading__ja">オンラインショップ</h2></div>
<p class="shop-demo-notice" role="note"><strong>購入機能は実装していません</strong><br>商品・価格・在庫・配送条件は、ECサイトのUIデザインを示すための架空情報です。</p>
<p class="shop-intro__text">コーヒー豆の単品購入画面を想定したデザインサンプルです。<br>
商品一覧から購入導線までの画面構成をご覧いただけます。</p>
</div>
</section>

<section class="shop-products" id="shop-products">
<div class="l-inner">
<div class="shop-products__grid">

<article class="shop-card">
<div class="shop-card__img"><span class="shop-card__badge shop-card__badge--popular">人気</span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/shop1.webp" alt="エチオピア イルガチェフェ" width="1600" height="1195"></div>
<div class="shop-card__body">
<span class="shop-card__tag">浅煎り</span>
<h3 class="shop-card__name">エチオピア イルガチェフェ</h3>
<p class="shop-card__desc">フローラル・柑橘系の華やかなフレーバー</p>
<div class="shop-card__price-row">
<p class="shop-card__price">¥1,280<span class="shop-card__price-unit"> / 100g</span></p>
<span class="shop-card__cart-btn shop-card__cart-btn--disabled" aria-disabled="true">購入不可（デモ）</span>
</div>
</div>
</article>

<article class="shop-card">
<div class="shop-card__img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/shop2.webp" alt="グアテマラ アンティグア" width="1600" height="1195"></div>
<div class="shop-card__body">
<span class="shop-card__tag">中煎り</span>
<h3 class="shop-card__name">グアテマラ アンティグア</h3>
<p class="shop-card__desc">チョコレートとナッツの甘み</p>
<div class="shop-card__price-row">
<p class="shop-card__price">¥1,180<span class="shop-card__price-unit"> / 100g</span></p>
<span class="shop-card__cart-btn shop-card__cart-btn--disabled" aria-disabled="true">購入不可（デモ）</span>
</div>
</div>
</article>

<article class="shop-card">
<div class="shop-card__img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/shop3.webp" alt="ブラジル サントス" width="1600" height="1195"></div>
<div class="shop-card__body">
<span class="shop-card__tag">深煎り</span>
<h3 class="shop-card__name">ブラジル サントス</h3>
<p class="shop-card__desc">重厚なコクとビターな余韻</p>
<div class="shop-card__price-row">
<p class="shop-card__price">¥1,080<span class="shop-card__price-unit"> / 100g</span></p>
<span class="shop-card__cart-btn shop-card__cart-btn--disabled" aria-disabled="true">購入不可（デモ）</span>
</div>
</div>
</article>

<article class="shop-card">
<div class="shop-card__img"><span class="shop-card__badge shop-card__badge--new">NEW</span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/shop4.webp" alt="コロンビア スプレモ" width="1600" height="1195"></div>
<div class="shop-card__body">
<span class="shop-card__tag">中煎り</span>
<h3 class="shop-card__name">コロンビア スプレモ</h3>
<p class="shop-card__desc">まろやかでバランスの良い味わい</p>
<div class="shop-card__price-row">
<p class="shop-card__price">¥1,380<span class="shop-card__price-unit"> / 100g</span></p>
<span class="shop-card__cart-btn shop-card__cart-btn--disabled" aria-disabled="true">購入不可（デモ）</span>
</div>
</div>
</article>

<article class="shop-card">
<div class="shop-card__img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/shop5.webp" alt="ケニア AA" width="1600" height="1195"></div>
<div class="shop-card__body">
<span class="shop-card__tag">浅煎り</span>
<h3 class="shop-card__name">ケニア AA</h3>
<p class="shop-card__desc">ジューシーな酸味とベリーの香り</p>
<div class="shop-card__price-row">
<p class="shop-card__price">¥1,480<span class="shop-card__price-unit"> / 100g</span></p>
<span class="shop-card__cart-btn shop-card__cart-btn--disabled" aria-disabled="true">購入不可（デモ）</span>
</div>
</div>
</article>

<article class="shop-card">
<div class="shop-card__img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/shop6.webp" alt="はじめてドリッパーセット" width="1600" height="1195"></div>
<div class="shop-card__body">
<span class="shop-card__tag">器具</span>
<h3 class="shop-card__name">はじめてドリッパーセット</h3>
<p class="shop-card__desc">ドリッパー＋フィルター＋計量スプーン</p>
<div class="shop-card__price-row">
<p class="shop-card__price">¥2,980<span class="shop-card__price-unit"> / セット</span></p>
<span class="shop-card__cart-btn shop-card__cart-btn--disabled" aria-disabled="true">購入不可（デモ）</span>
</div>
</div>
</article>

</div>
</div>
</section>

<section class="shop-features" id="shop-features">
<div class="l-inner">
<div class="shop-features__grid">
<div class="shop-features__item">
<p class="shop-features__icon">🚚</p>
<h3 class="shop-features__title">全品送料無料</h3>
<p class="shop-features__text">ご注文金額にかかわらず、全商品送料無料でお届けします。</p>
</div>
<div class="shop-features__item">
<p class="shop-features__icon">🔥</p>
<h3 class="shop-features__title">注文後焙煎</h3>
<p class="shop-features__text">ご注文をいただいてから焙煎。最高の鮮度でお届けします。</p>
</div>
<div class="shop-features__item">
<p class="shop-features__icon">💝</p>
<h3 class="shop-features__title">ギフト対応</h3>
<p class="shop-features__text">大切な方への贈り物に。ギフト包装も承ります。</p>
</div>
</div>
</div>
</section>

<section class="shop-notice" id="shop-notice">
<div class="l-inner">
<div class="shop-notice__box">
<h3 class="shop-notice__title">この画面について</h3>
<p class="shop-notice__text">このオンラインショップはポートフォリオ掲載用の自主制作デモです。<br>
注文受付・決済・商品の発送は行われません。</p>
</div>
</div>
</section>

<section class="c-cta-section" id="shop-cta">
<div class="l-inner">
<p class="c-cta-section__heading">定期便もおすすめ</p>
<p class="c-cta-section__text">毎月届く、香りのピーク体験。</p>
<a href="<?php echo esc_url( home_url('/plan/') ); ?>" class="c-btn c-btn--white">View plan</a>
</div>
</section>
</main>

<?php get_footer(); ?>

<?php wp_footer(); ?>
</body>
</html>
