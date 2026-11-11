<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<footer class="l-footer">
  <div class="l-footer__inner">

    <div class="l-footer__logo-wrap">
      <img
        src="<?php echo esc_url(get_template_directory_uri() . '/images/logo.png'); ?>"
        alt="週末珈琲便"
        class="l-footer__logo" width="179" height="120">
    </div>

    <div class="c-deco-line l-footer__deco">
      <span class="c-deco-line__icon">
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/images/coffeebeans.svg'); ?>"
          alt="コーヒー豆" width="512" height="512">
      </span>
    </div>

    <nav class="l-footer__nav" aria-label="フッターナビゲーション">
      <ul>
        <li><a href="<?php echo esc_url(home_url('/about/')); ?>" class="l-footer__nav-link">ABOUT</a></li>
        <li><a href="<?php echo esc_url(home_url('/beans/')); ?>" class="l-footer__nav-link">BEANS</a></li>
        <li><a href="<?php echo esc_url(home_url('/guide/')); ?>" class="l-footer__nav-link">GUIDE</a></li>
        <li><a href="<?php echo esc_url(home_url('/plan/')); ?>" class="l-footer__nav-link">PLAN</a></li>
        <li><a href="<?php echo esc_url(home_url('/news/')); ?>" class="l-footer__nav-link">NEWS</a></li>
        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="l-footer__nav-link">CONTACT</a></li>
      </ul>
    </nav>

    <div class="l-footer__sns">
      <span class="l-footer__sns-link is-demo-disabled" aria-hidden="true">
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/images/Xicon.svg'); ?>"
          alt="" width="48" height="48">
        <span class="l-footer__sns-name">X</span>
      </span>

      <span class="l-footer__sns-link is-demo-disabled" aria-hidden="true">
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/images/instagram.svg'); ?>"
          alt="" width="48" height="48">
        <span class="l-footer__sns-name">Instagram</span>
      </span>

      <span class="l-footer__sns-link is-demo-disabled" aria-hidden="true">
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/images/youtube.svg'); ?>"
          alt="" width="48" height="48">
        <span class="l-footer__sns-name">YouTube</span>
      </span>
    </div>

    <div class="l-footer__bottom">
      <p class="l-footer__disclaimer">※ 当サイトはポートフォリオ掲載用の自主制作デモです。実在する店舗・商品・サービスではありません。</p>
      <p class="l-footer__copyright">&copy; 2026 週末珈琲便</p>
    </div>

  </div>
</footer>
