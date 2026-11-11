<?php
/* Template Name: contact */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>フォームUIデモ | 週末珈琲便</title>
<meta name="description" content="週末珈琲便を題材にしたフォームUIの操作デモです。入力内容は送信・保存されません。">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php get_header(); ?>

<main id="main-content">
<section class="contact-form" id="contact-form">
<div class="l-inner">
<div class="c-section-heading">
<span class="c-section-heading__en">Contact Form</span>
<h1 class="c-section-heading__ja">お問い合わせ</h1>
</div>
<div class="c-deco-line"><span class="c-deco-line__icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/coffeebeans.svg" alt="コーヒー豆" width="512" height="512"></span></div>

<form
method="get"
action="#contact-form"
class="contact-form__body"
id="contact-form-body"
data-contact-form
accept-charset="UTF-8"
aria-describedby="contact-form-note"
>
<div class="contact-form__group">
<label for="contact-name" class="contact-form__label">お名前<span class="contact-form__required">必須</span></label>
<input type="text" id="contact-name" class="contact-form__input" placeholder="山田太郎" autocomplete="name" required>
</div>

<div class="contact-form__group">
<label for="contact-email" class="contact-form__label">メールアドレス<span class="contact-form__required">必須</span></label>
<input type="email" id="contact-email" class="contact-form__input" placeholder="example@email.com" autocomplete="email" required>
</div>

<div class="contact-form__group">
<label for="contact-tel" class="contact-form__label">電話番号</label>
<input type="tel" id="contact-tel" class="contact-form__input" placeholder="090-0000-0000" autocomplete="tel" inputmode="tel">
</div>

<div class="contact-form__group">
<label for="contact-category" class="contact-form__label">お問い合わせ種別<span class="contact-form__required">必須</span></label>
<select id="contact-category" class="contact-form__select" required>
<option value="" selected disabled>選択してください。</option>
<option value="plan">定期便について</option>
<option value="roast">焙煎について</option>
<option value="delivery">配送について</option>
<option value="other">その他</option>
</select>
</div>

<div class="contact-form__group">
<label for="contact-message" class="contact-form__label">お問い合わせ内容<span class="contact-form__required">必須</span></label>
<textarea id="contact-message" class="contact-form__textarea" placeholder="お問い合わせ内容をご入力ください" required></textarea>
</div>

<p class="contact-form__note" id="contact-form-note">
このフォームは入力・検証・完了表示を確認する操作デモです。入力内容は外部へ送信・保存されません。実際の制作相談は<a href="https://rnportfolio.xsrv.jp/contact.html?source=shumatsu-demo">RikuのContact</a>をご利用ください。
</p>

<p class="contact-form__status" id="contact-form-status" role="status" aria-live="polite" tabindex="-1" hidden></p>

<button type="submit" class="contact-form__submit" data-contact-submit>入力内容を確認する（デモ）</button>
</form>
</div>
</section>

<section class="contact-faq" id="contact-faq">
<div class="l-inner">
<div class="c-section-heading">
<span class="c-section-heading__en">FAQ</span>
<h2 class="c-section-heading__ja">よくあるご質問</h2>
</div>

<div class="contact-faq__list">
<div class="contact-faq__item">
<div class="contact-faq__q"><span class="contact-faq__q-icon">Q.</span><p>定期便はいつでも解約できますか？</p></div>
<div class="contact-faq__a"><span class="contact-faq__a-icon">A.</span><p>はい、マイページからいつでも解約可能です。次回配送日の3日前までにお手続きください。</p></div>
</div>

<div class="contact-faq__item">
<div class="contact-faq__q"><span class="contact-faq__q-icon">Q.</span><p>届く豆の焙煎度は選べますか？</p></div>
<div class="contact-faq__a"><span class="contact-faq__a-icon">A.</span><p>スタンダードプラン以上で焙煎度の選択が可能です。ライトプランはおまかせとなります。</p></div>
</div>

<div class="contact-faq__item">
<div class="contact-faq__q"><span class="contact-faq__q-icon">Q.</span><p>配送日の指定はできますか？</p></div>
<div class="contact-faq__a"><span class="contact-faq__a-icon">A.</span><p>毎週金曜焙煎・土日お届けのスケジュールとなります。日時指定は承っておりません。</p></div>
</div>

<div class="contact-faq__item">
<div class="contact-faq__q"><span class="contact-faq__q-icon">Q.</span><p>支払い方法は何がありますか？</p></div>
<div class="contact-faq__a"><span class="contact-faq__a-icon">A.</span><p>クレジットカード（VISA / Master / JCB）のみ対応しております。</p></div>
</div>
</div>
</div>
</section>

<section class="contact-company" id="contact-company">
<div class="l-inner">
<div class="c-section-heading">
<span class="c-section-heading__en">About This Demo</span>
<h2 class="c-section-heading__ja">デモサイト情報</h2>
</div>
<div class="c-deco-line"><span class="c-deco-line__icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/coffeebeans.svg" alt="コーヒー豆" width="512" height="512"></span></div>

<table class="contact-company__table">
<tr><th>サイト区分</th><td>ポートフォリオ掲載用の自主制作デモ</td></tr>
<tr><th>ブランド名</th><td>週末珈琲便（架空）</td></tr>
<tr><th>所在地</th><td>架空ブランドのため実在する所在地はありません</td></tr>
<tr><th>連絡方法</th><td><a href="https://rnportfolio.xsrv.jp/contact.html?source=shumatsu-demo">RikuのContact</a>をご利用ください</td></tr>
</table>
</div>
</section>
</main>

<?php get_footer(); ?>

<?php wp_footer(); ?>
</body>
</html>
