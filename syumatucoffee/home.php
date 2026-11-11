<?php
/* Template Name: home */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>週末珈琲便 | 金曜焙煎・週末届く コーヒー定期便</title>
<meta name="description" content="金曜に焙煎した新鮮なコーヒー豆が週末届く定期便。少量飲み切り設計で、自分好みの一杯を見つけませんか。">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php get_header(); ?>

<main id="main-content">

	<!--HERO-->
	<section class="top-hero" id="hero">
		<div class="top-hero__inner">
			<h1 class="top-hero__catch"><span class="u-keep">金曜焙煎、</span><span class="u-keep">週末届く。</span></h1>
			<p class="top-hero__sub"><span class="top-hero__treat">"かおりのピーク"</span>で届くコーヒー定期便</p>
		</div>
	</section>

	<!--ABOUT（背景: #fff）-->
	<section class="c-bg-deco c-bg-deco--left" id="about">
		<div class="l-inner">
			<div class="c-section-heading">
				<span class="c-section-heading__en">About</span>
				<h2 class="c-section-heading__ja">週末珈琲便とは</h2>
			</div>
			<div class="top-about__grid">
				<div class="top-about__item">
					<div class="top-about__contents">
						<div class="top-about__icon"><img src="<?php echo get_template_directory_uri(); ?>/images/coffee.svg" alt="コーヒーカップ" width="48" height="48"></div>
						<h3 class="top-about__title">金曜焙煎</h3>
						<p class="top-about__text">注文を受けてから毎週金曜に<br>少量ずつ丁寧に焙煎します</p>
					</div>
				</div>
				<div class="top-about__item">
					<div class="top-about__contents">
						<div class="top-about__icon"><img src="<?php echo get_template_directory_uri(); ?>/images/delivery.svg" alt="配送アイコン" width="48" height="48"></div>
						<h3 class="top-about__title">少量飲み切り</h3>
						<p class="top-about__text">鮮度を保てる100g単位の<br>飲み切りパック設計</p>
					</div>
				</div>
				<div class="top-about__item">
					<div class="top-about__contents">
						<div class="top-about__icon"><img src="<?php echo get_template_directory_uri(); ?>/images/guide.svg" alt="ガイドアイコン" width="48" height="48"></div>
						<h3 class="top-about__title">味わいガイド付き</h3>
						<p class="top-about__text">初心者でも迷わない<br>焙煎度・味わいチャート同封</p>
					</div>
				</div>
			</div>
			<div class="c-deco-line"><span class="c-deco-line__icon"><img src="<?php echo get_template_directory_uri(); ?>/images/coffeebeans.svg" alt="コーヒー豆" width="512" height="512"></span></div>
			<div class="top-about__btn-wrap">
				<a href="<?php echo home_url('/about/'); ?>" class="c-btn">View more</a>
			</div>
		</div>
	</section>

	<!--BEANS-->
	<section class="top-beans" id="beans">
		<div class="l-inner">
			<div class="c-section-heading">
				<span class="c-section-heading__en">Beans</span>
				<h2 class="c-section-heading__ja">今月のコーヒー豆</h2>
			</div>
			<div class="top-beans__slider js-beans-slider">
				<!-- 1: エチオピア -->
				<div class="top-beans__card">
					<div class="top-beans__img"><span><img src="<?php echo get_template_directory_uri(); ?>/images/beanscard1.webp" alt="エチオピア イルガチェフェの豆" loading="lazy" decoding="async" width="1184" height="864"></span></div>
					<div class="top-beans__body">
						<span class="top-beans__tag top-beans__tag--light">浅煎り</span>
						<h3 class="top-beans__name"><span class="u-keep">エチオピア</span> <span class="u-keep">イルガチェフェ</span></h3>
						<p class="top-beans__flavor">フローラル・柑橘系のフレーバー</p>
					</div>
				</div>
				<!-- 2: グアテマラ -->
				<div class="top-beans__card">
					<div class="top-beans__img"><span><img src="<?php echo get_template_directory_uri(); ?>/images/beanscard2.webp" alt="グアテマラ アンティグアの豆" loading="lazy" decoding="async" width="1184" height="864"></span></div>
					<div class="top-beans__body">
						<span class="top-beans__tag top-beans__tag--medium">中煎り</span>
						<h3 class="top-beans__name"><span class="u-keep">グアテマラ</span> <span class="u-keep">アンティグア</span></h3>
						<p class="top-beans__flavor">チョコレート・ナッツの甘み</p>
					</div>
				</div>
				<!-- 3: ブラジル -->
				<div class="top-beans__card">
					<div class="top-beans__img"><span><img src="<?php echo get_template_directory_uri(); ?>/images/beanscard3.webp" alt="ブラジル サントスの豆" loading="lazy" decoding="async" width="1184" height="864"></span></div>
					<div class="top-beans__body">
						<span class="top-beans__tag top-beans__tag--dark">深煎り</span>
						<h3 class="top-beans__name">ブラジル サントス</h3>
						<p class="top-beans__flavor">重厚なコク・ビターな余韻</p>
					</div>
				</div>
				<!-- 4: コロンビア -->
				<div class="top-beans__card">
					<div class="top-beans__img"><span><img src="<?php echo get_template_directory_uri(); ?>/images/beanscard4.webp" alt="コロンビア スプレモの豆" loading="lazy" decoding="async" width="1184" height="864"></span></div>
					<div class="top-beans__body">
						<span class="top-beans__tag top-beans__tag--medium">中煎り</span>
						<h3 class="top-beans__name"><span class="u-keep">コロンビア</span> <span class="u-keep">スプレモ</span></h3>
						<p class="top-beans__flavor">まろやかでバランスの良い味わい</p>
					</div>
				</div>
				<!-- 5: ケニア -->
				<div class="top-beans__card">
					<div class="top-beans__img"><span><img src="<?php echo get_template_directory_uri(); ?>/images/beanscard5.webp" alt="ケニア AAの豆" loading="lazy" decoding="async" width="1184" height="864"></span></div>
					<div class="top-beans__body">
						<span class="top-beans__tag top-beans__tag--light">浅煎り</span>
						<h3 class="top-beans__name">ケニア AA</h3>
						<p class="top-beans__flavor">ジューシーな酸味とベリーの香り</p>
					</div>
				</div>
				<!-- 6: マンデリン -->
				<div class="top-beans__card">
					<div class="top-beans__img"><span><img src="<?php echo get_template_directory_uri(); ?>/images/beanscard6.webp" alt="マンデリン G1の豆" loading="lazy" decoding="async" width="1600" height="1195"></span></div>
					<div class="top-beans__body">
						<span class="top-beans__tag top-beans__tag--dark">深煎り</span>
						<h3 class="top-beans__name">マンデリン G1</h3>
						<p class="top-beans__flavor">スパイシーで力強いコク</p>
					</div>
				</div>
				<!-- 7: コスタリカ -->
				<div class="top-beans__card">
					<div class="top-beans__img"><span><img src="<?php echo get_template_directory_uri(); ?>/images/beanscard7.webp" alt="コスタリカ タラスの豆" loading="lazy" decoding="async" width="1600" height="1195"></span></div>
					<div class="top-beans__body">
						<span class="top-beans__tag top-beans__tag--medium">中煎り</span>
						<h3 class="top-beans__name">コスタリカ タラス</h3>
						<p class="top-beans__flavor">ハニーのような甘みとコク</p>
					</div>
				</div>
				<!-- 8: パナマ -->
				<div class="top-beans__card">
					<div class="top-beans__img"><span><img src="<?php echo get_template_directory_uri(); ?>/images/beanscard8.webp" alt="パナマ ゲイシャの豆" loading="lazy" decoding="async" width="1600" height="1195"></span></div>
					<div class="top-beans__body">
						<span class="top-beans__tag top-beans__tag--light">浅煎り</span>
						<h3 class="top-beans__name">パナマ ゲイシャ</h3>
						<p class="top-beans__flavor">ジャスミン・桃の華やかな香り</p>
					</div>
				</div>
				<!-- 9: タンザニア -->
				<div class="top-beans__card">
					<div class="top-beans__img"><span><img src="<?php echo get_template_directory_uri(); ?>/images/beanscard9.webp" alt="タンザニア キリマンジャロの豆" loading="lazy" decoding="async" width="1600" height="1195"></span></div>
					<div class="top-beans__body">
						<span class="top-beans__tag top-beans__tag--dark">深煎り</span>
						<h3 class="top-beans__name"><span class="u-keep">タンザニア</span> <span class="u-keep">キリマンジャロ</span></h3>
						<p class="top-beans__flavor">柔らかな苦みとワインのような後味</p>
					</div>
				</div>
				<!-- 10: ルワンダ -->
				<div class="top-beans__card">
					<div class="top-beans__img"><span><img src="<?php echo get_template_directory_uri(); ?>/images/beanscard10.webp" alt="ルワンダ ブルボンの豆" loading="lazy" decoding="async" width="1600" height="1195"></span></div>
					<div class="top-beans__body">
						<span class="top-beans__tag top-beans__tag--medium">中煎り</span>
						<h3 class="top-beans__name">ルワンダ ブルボン</h3>
						<p class="top-beans__flavor">カシスとオレンジの爽やかな酸味</p>
					</div>
				</div>
			</div>
			<div class="c-deco-line"><span class="c-deco-line__icon"><img src="<?php echo get_template_directory_uri(); ?>/images/coffeebeans.svg" alt="コーヒー豆" width="512" height="512"></span></div>
			<div class="top-beans__btn-wrap">
				<a href="<?php echo home_url('/beans/'); ?>" class="c-btn">View more</a>
			</div>
		</div>
	</section>

	<!--HOW IT WORKS-->
	<section class="top-howto c-bg-deco c-bg-deco--right" id="howto">
		<div class="l-inner">
			<div class="c-section-heading">
				<span class="c-section-heading__en">How It Works</span>
				<h2 class="c-section-heading__ja">届くまでの流れ</h2>
			</div>
			<div class="top-howto__steps">
				<div class="top-howto__step">
					<span class="top-howto__num">Step.1</span>
					<div class="top-howto__icon"><img src="<?php echo get_template_directory_uri(); ?>/images/binder.svg" alt="バインダー" width="48" height="48"></div>
					<h3 class="top-howto__label">プランを選ぶ</h3>
				</div>
				<div class="top-howto__arrow">→</div>
				<div class="top-howto__step">
					<span class="top-howto__num">Step.2</span>
					<div class="top-howto__icon"><img src="<?php echo get_template_directory_uri(); ?>/images/fire.svg" alt="焙煎の炎" width="48" height="48"></div>
					<h3 class="top-howto__label">金曜に焙煎</h3>
				</div>
				<div class="top-howto__arrow">→</div>
				<div class="top-howto__step">
					<span class="top-howto__num">Step.3</span>
					<div class="top-howto__icon"><img src="<?php echo get_template_directory_uri(); ?>/images/delivery.svg" alt="配送トラック" width="48" height="48"></div>
					<h3 class="top-howto__label">週末届く</h3>
				</div>
			</div>
			<div class="c-deco-line"><span class="c-deco-line__icon"><img src="<?php echo get_template_directory_uri(); ?>/images/coffeebeans.svg" alt="コーヒー豆" width="512" height="512"></span></div>
			<div class="top-howto__btn-wrap">
				<a href="<?php echo home_url('/guide/'); ?>" class="c-btn">View more</a>
			</div>
		</div>
	</section>

	<!--CTA SECTION-->
	<section class="c-cta-section" id="cta">
		<div class="l-inner">
			<p class="c-cta-section__heading">定期便サービスのデザインデモ</p>
			<p class="c-cta-section__text">プランや価格はすべて架空の設定です。<br>画面構成のサンプルとしてご覧ください。</p>
			<a href="<?php echo home_url('/plan/'); ?>" class="c-btn">View plan</a>
		</div>
	</section>

	<!--SNS SECTION-->
	<section class="c-sns-section" id="sns">
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
			<div class="c-deco-line"><span class="c-deco-line__icon"><img src="<?php echo get_template_directory_uri(); ?>/images/coffeebeans.svg" alt="コーヒー豆" width="512" height="512"></span></div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>
