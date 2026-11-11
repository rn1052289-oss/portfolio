<?php
/* Template Name: plan */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>料金プラン | 週末珈琲便</title>
<meta name="description" content="ライト・スタンダード・プレミアムの3つのプランを比較。あなたのライフスタイルに合った一杯を。">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php get_header(); ?>

<main id="main-content">
<section class="c-page-hero c-page-hero--video">
<h1 class="u-visually-hidden">週末珈琲便 料金プラン</h1>
<video class="c-page-hero__video" muted loop playsinline preload="metadata"
poster="<?php echo esc_url( get_template_directory_uri() ); ?>/images/planfv.webp">
<source src="<?php echo esc_url( get_template_directory_uri() ); ?>/video/plan.mp4" type="video/mp4">
お使いのブラウザは動画再生に対応していません。
</video>
<div class="c-page-hero__overlay" aria-hidden="true"></div>
</section>

<section class="plan-table" id="plan-table">
<div class="l-inner">
<div class="c-section-heading"><span class="c-section-heading__en">Choose Your Plan</span>
<h2 class="c-section-heading__ja">料金プラン</h2></div>
<p class="plan-table__intro">ライフスタイルに合わせて3つのプランからお選びいただけます</p>
<p class="c-demo-inline-note">表示中のプラン・価格・配送条件は自主制作デモ用の架空情報です。契約や決済はできません。</p>
<div class="plan-table__wrap">
<table class="plan-table__table">
<thead>
<tr>
<th></th>
<th><span class="plan-table__plan-name">ライト</span><span class="plan-table__plan-sub">お試しに</span></th>
<th class="plan-table__recommend"><span class="plan-table__badge">おすすめ</span><span class="plan-table__plan-name">スタンダード</span><span class="plan-table__plan-sub">一番人気</span></th>
<th><span class="plan-table__plan-name">プレミアム</span><span class="plan-table__plan-sub">こだわり派に</span></th>
</tr>
</thead>
<tbody>
<tr><th>月額料金</th><td>¥1,280</td><td><span class="plan-table__highlight">¥2,480</span></td><td>¥3,980</td></tr>
<tr><th>豆の量</th><td>100g × 1種</td><td>100g × 2種</td><td>100g × 3種</td></tr>
<tr><th>配送頻度</th><td>月1回</td><td>月2回</td><td>毎週</td></tr>
<tr><th>味わいガイド</th><td>○</td><td>○</td><td>◎ 詳細版</td></tr>
<tr><th>焙煎度選択</th><td>おまかせ</td><td>2種から選択</td><td>全種から選択</td></tr>
<tr><th>送料</th><td>無料</td><td>無料</td><td>無料</td></tr>
</tbody>
</table>
</div>
</div>
</section>

<section class="plan-detail" id="plan-detail">
<div class="l-inner">
<div class="c-section-heading"><span class="c-section-heading__en">Plan Detail</span>
<h2 class="c-section-heading__ja">各プランの特徴</h2></div>

<div class="plan-detail__grid">
<article class="plan-detail__card">
<h3 class="plan-detail__name">ライト</h3>
<p class="plan-detail__price">¥1,280<span class="plan-detail__price-unit">/月</span></p>
<p class="plan-detail__desc">初めてスペシャルティコーヒーを試す方におすすめ</p>
<div class="plan-detail__features">
<p class="plan-detail__feature">100g × 1種を月1回お届け</p>
<p class="plan-detail__feature">味わいガイド同封</p>
<p class="plan-detail__feature">焙煎度はおまかせ</p>
<p class="plan-detail__feature">送料無料</p>
</div>
</article>

<article class="plan-detail__card plan-detail__card--recommend">
<h3 class="plan-detail__name">スタンダード</h3>
<p class="plan-detail__price">¥2,480<span class="plan-detail__price-unit">/月</span></p>
<p class="plan-detail__desc">2種類の豆を飲み比べ。コーヒーの世界が広がります</p>
<div class="plan-detail__features">
<p class="plan-detail__feature">100g × 2種を月2回お届け</p>
<p class="plan-detail__feature">味わいガイド同封</p>
<p class="plan-detail__feature">2種の焙煎度から選択可能</p>
<p class="plan-detail__feature">送料無料</p>
</div>
</article>

<article class="plan-detail__card">
<h3 class="plan-detail__name">プレミアム</h3>
<p class="plan-detail__price">¥3,980<span class="plan-detail__price-unit">/月</span></p>
<p class="plan-detail__desc">毎週届く贅沢。全種類から好みの焙煎度を選べます</p>
<div class="plan-detail__features">
<p class="plan-detail__feature">100g × 3種を毎週お届け</p>
<p class="plan-detail__feature">詳細版味わいガイド同封</p>
<p class="plan-detail__feature">全焙煎度から自由に選択</p>
<p class="plan-detail__feature">送料無料</p>
</div>
</article>
</div>
</div>
</section>

<section class="c-cta-section" id="plan-cta">
<div class="l-inner">
<p class="c-cta-section__heading">まずはお気軽にお問い合わせください</p>
<p class="c-cta-section__text">ご質問やご相談はCONTACTからどうぞ。</p>
<a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="c-btn c-btn--white">Contact</a>
</div>
</section>
</main>

<?php get_footer(); ?>

<?php wp_footer(); ?>
</body>
</html>
