<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php
  // ページごとのdescriptionを出力。投稿のexcerptがあれば使用、なければデフォルト
  if ( is_singular() && has_excerpt() ) {
    echo esc_attr( get_the_excerpt() );
  } else {
    echo esc_attr( get_bloginfo( 'description' ) );
  }
?>">

<!-- OGP -->
<meta property="og:type" content="website">
<meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?>">
<meta property="og:url" content="<?php echo esc_url( get_permalink() ); ?>">
<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
<meta property="og:locale" content="ja_JP">

<!-- wp_head()でfavicon、CSS、JSなどが出力される -->
<?php wp_head(); ?>
</head>

<?php
/* ===================================================
   現在ページのスラッグを取得してナビアクティブ判定に使用
   =================================================== */
// 現在ページのスラッグ（例："about", "tours", "food" など）
$current_slug = '';
if ( is_front_page() ) {
    $current_slug = 'home';
} elseif ( is_page() ) {
    $current_slug = get_post_field( 'post_name', get_the_ID() );
}

// ツアー詳細ページ群（これらのとき TOURSをアクティブに）
$tour_sub_pages = array( 'tour-detail', 'tour-craft', 'tour-morning', 'tour-twilight' );
?>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main-content">本文へ移動</a>

<!-- ========== HEADER ========== -->
<header id="header" class="site-header">
  <div class="header-inner">

    <!-- ロゴ -->
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo" aria-label="湯灯商會 トップページへ">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/svg/logo.svg" alt="湯灯商會" class="header-logo-icon" width="40" height="40">
    </a>

    <!-- グローバルナビゲーション -->
    <nav class="global-nav" id="global-nav" aria-label="メインナビゲーション">
      <ul class="global-nav-list">

        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"
          <?php if ( $current_slug === 'about' ) echo 'aria-current="page"'; ?>>ABOUT</a></li>

        <li><a href="<?php echo esc_url( home_url( '/tours/' ) ); ?>"
          <?php if ( $current_slug === 'tours' || in_array( $current_slug, $tour_sub_pages ) ) echo 'aria-current="page"'; ?>>TOURS</a></li>

        <li><a href="<?php echo esc_url( home_url( '/food/' ) ); ?>"
          <?php if ( $current_slug === 'food' ) echo 'aria-current="page"'; ?>>FOOD</a></li>

        <li><a href="<?php echo esc_url( home_url( '/craft/' ) ); ?>"
          <?php if ( $current_slug === 'craft' ) echo 'aria-current="page"'; ?>>CRAFT</a></li>

        <li><a href="<?php echo esc_url( home_url( '/festival/' ) ); ?>"
          <?php if ( $current_slug === 'festival' ) echo 'aria-current="page"'; ?>>FESTIVAL</a></li>

        <li><a href="<?php echo esc_url( home_url( '/access/' ) ); ?>"
          <?php if ( $current_slug === 'access' ) echo 'aria-current="page"'; ?>>ACCESS</a></li>

      </ul>

      <div class="header-actions">
        <!-- 言語切り替えボタン -->
        <button class="lang-switch" id="lang-switch-btn" type="button" aria-label="言語を切り替える">
          <span class="lang-current">JP</span>
          <span class="lang-divider" aria-hidden="true">/</span>
          <span class="lang-other">EN</span>
        </button>
        <!-- CONTACTボタン -->
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="header-contact-btn">CONTACT</a>
      </div>
    </nav>

    <!-- ハンバーガーボタン（SP用） -->
    <button class="hamburger-btn" id="hamburger-btn" type="button"
      aria-label="メニューを開く" aria-expanded="false" aria-controls="global-nav">
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
    </button>

  </div>
</header>
