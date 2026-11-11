<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// 現在ページ判定（is-current用）
$is_home    = is_front_page();
$is_about   = is_page('about');
$is_beans   = is_page('beans');
$is_guide   = is_page('guide');
$is_plan    = is_page('plan');
$is_news    = is_page('news');
$is_contact = is_page('contact');
$is_shop    = is_page('shop'); 
?>

<!-- HEADER -->
<a class="c-skip-link" href="#main-content">本文へ移動</a>
<header class="l-header">
	<div class="l-header__inner">
		<div class="l-header__logo">
			<a href="<?php echo esc_url(home_url('/')); ?>">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/images/logo.png'); ?>" alt="週末珈琲便" width="179" height="120">
			</a>
		</div>

		<nav class="l-header__nav" aria-label="メインナビゲーション">
			<ul>
				<li>
					<a href="<?php echo esc_url(home_url('/about/')); ?>"
					   class="l-header__nav-link<?php echo $is_about ? ' is-current' : ''; ?>"<?php echo $is_about ? ' aria-current="page"' : ''; ?>>
						ABOUT
					</a>
				</li>
				<li>
					<a href="<?php echo esc_url(home_url('/beans/')); ?>"
					   class="l-header__nav-link<?php echo $is_beans ? ' is-current' : ''; ?>"<?php echo $is_beans ? ' aria-current="page"' : ''; ?>>
						BEANS
					</a>
				</li>
				<li>
					<a href="<?php echo esc_url(home_url('/guide/')); ?>"
					   class="l-header__nav-link<?php echo $is_guide ? ' is-current' : ''; ?>"<?php echo $is_guide ? ' aria-current="page"' : ''; ?>>
						GUIDE
					</a>
				</li>
				<li>
					<a href="<?php echo esc_url(home_url('/plan/')); ?>"
					   class="l-header__nav-link<?php echo $is_plan ? ' is-current' : ''; ?>"<?php echo $is_plan ? ' aria-current="page"' : ''; ?>>
						PLAN
					</a>
				</li>
				<li>
					<a href="<?php echo esc_url(home_url('/news/')); ?>"
					   class="l-header__nav-link<?php echo $is_news ? ' is-current' : ''; ?>"<?php echo $is_news ? ' aria-current="page"' : ''; ?>>
						NEWS
					</a>
				</li>
				<li>
					<a href="<?php echo esc_url(home_url('/contact/')); ?>"
					   class="l-header__nav-link<?php echo $is_contact ? ' is-current' : ''; ?>"<?php echo $is_contact ? ' aria-current="page"' : ''; ?>>
						CONTACT
					</a>
				</li>
			</ul>
		</nav>

		<a href="<?php echo esc_url(home_url('/shop/')); ?>" class="l-header__cta">
			ONLINE STORE
		</a>

		<button class="l-header__hamburger" aria-label="メニューを開く" aria-expanded="false" aria-controls="drawer" type="button">
			<span></span><span></span><span></span>
		</button>
	</div>
</header>

<div class="c-demo-banner" role="note" aria-label="自主制作デモについて">
	<strong>自主制作デモ</strong>
	<span>このサイトはポートフォリオ掲載用の架空ブランドです。注文・決済・配送・フォーム送信・SNS連携は動作しません。</span>
</div>

<!-- Drawer (SP) -->
<div class="l-drawer__overlay" id="drawerOverlay" aria-hidden="true"></div>

<nav class="l-drawer" id="drawer" aria-label="モバイルナビゲーション" aria-hidden="true" inert>
	<div class="l-drawer__nav">
		<a href="<?php echo esc_url(home_url('/')); ?>"
		   class="l-drawer__nav-link<?php echo $is_home ? ' is-current' : ''; ?>"<?php echo $is_home ? ' aria-current="page"' : ''; ?>>
			HOME
		</a>
		<a href="<?php echo esc_url(home_url('/about/')); ?>"
		   class="l-drawer__nav-link<?php echo $is_about ? ' is-current' : ''; ?>"<?php echo $is_about ? ' aria-current="page"' : ''; ?>>
			ABOUT
		</a>
		<a href="<?php echo esc_url(home_url('/beans/')); ?>"
		   class="l-drawer__nav-link<?php echo $is_beans ? ' is-current' : ''; ?>"<?php echo $is_beans ? ' aria-current="page"' : ''; ?>>
			BEANS
		</a>
		<a href="<?php echo esc_url(home_url('/guide/')); ?>"
		   class="l-drawer__nav-link<?php echo $is_guide ? ' is-current' : ''; ?>"<?php echo $is_guide ? ' aria-current="page"' : ''; ?>>
			GUIDE
		</a>
		<a href="<?php echo esc_url(home_url('/plan/')); ?>"
		   class="l-drawer__nav-link<?php echo $is_plan ? ' is-current' : ''; ?>"<?php echo $is_plan ? ' aria-current="page"' : ''; ?>>
			PLAN
		</a>
		<a href="<?php echo esc_url(home_url('/news/')); ?>"
		   class="l-drawer__nav-link<?php echo $is_news ? ' is-current' : ''; ?>"<?php echo $is_news ? ' aria-current="page"' : ''; ?>>
			NEWS
		</a>
		<a href="<?php echo esc_url(home_url('/contact/')); ?>"
		   class="l-drawer__nav-link<?php echo $is_contact ? ' is-current' : ''; ?>"<?php echo $is_contact ? ' aria-current="page"' : ''; ?>>
			CONTACT
		</a>
	</div>

	<a href="<?php echo esc_url(home_url('/shop/')); ?>" class="l-drawer__cta">
		ONLINE STORE
	</a>

	<div class="l-drawer__sns">
		<span class="l-drawer__sns-link is-demo-disabled" aria-hidden="true">
			<img src="<?php echo esc_url(get_template_directory_uri() . '/images/Xicon.svg'); ?>" alt="" width="48" height="48">
		</span>
		<span class="l-drawer__sns-link is-demo-disabled" aria-hidden="true">
			<img src="<?php echo esc_url(get_template_directory_uri() . '/images/instagram.svg'); ?>" alt="" width="48" height="48">
		</span>
	</div>
</nav>
