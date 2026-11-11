<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

function shumatsu_coffee_theme_setup() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
}
add_action( 'after_setup_theme', 'shumatsu_coffee_theme_setup' );

function shumatsu_coffee_asset_version( $relative_path ) {
  $asset_path = get_template_directory() . '/' . ltrim( $relative_path, '/' );

  return file_exists( $asset_path ) ? (string) filemtime( $asset_path ) : null;
}

function shumatsu_coffee_output_social_meta() {
  if ( is_admin() ) {
    return;
  }

  $title       = wp_get_document_title();
  $description = '金曜焙煎・週末届くコーヒー定期便を題材にした、ポートフォリオ掲載用の自主制作デモです。注文・決済・配送は行われません。';
  $url         = is_singular() ? get_permalink() : home_url( '/' );
  $image       = get_template_directory_uri() . '/images/firstview1.webp';

  echo "\n";
  echo '<meta property="og:type" content="website">' . "\n";
  echo '<meta property="og:site_name" content="週末珈琲便（自主制作デモ）">' . "\n";
  echo '<meta property="og:title" content="' . esc_attr( $title ) . '">' . "\n";
  echo '<meta property="og:description" content="' . esc_attr( $description ) . '">' . "\n";
  echo '<meta property="og:url" content="' . esc_url( $url ) . '">' . "\n";
  echo '<meta property="og:image" content="' . esc_url( $image ) . '">' . "\n";
  echo '<meta property="og:image:width" content="1344">' . "\n";
  echo '<meta property="og:image:height" content="768">' . "\n";
  echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
}
add_action( 'wp_head', 'shumatsu_coffee_output_social_meta', 5 );

function shumatsu_coffee_enqueue_assets() {

  $theme_uri = get_template_directory_uri();

  // 1) reset -> common の順で読み込む
  wp_enqueue_style(
    'reset-css',
    $theme_uri . '/css/reset.css',
    array(),
    shumatsu_coffee_asset_version( 'css/reset.css' )
  );

  wp_enqueue_style(
    'common-css',
    $theme_uri . '/css/common.css',
    array('reset-css'),
    shumatsu_coffee_asset_version( 'css/common.css' )
  );

  // 2) テーマ直下 style.css（必要なら“最後”に効かせる）
  wp_enqueue_style(
    'theme-style',
    get_stylesheet_uri(),
    array('common-css'),
    shumatsu_coffee_asset_version( 'style.css' )
  );

  // 3) 共通JS
  wp_enqueue_script(
    'common-js',
    $theme_uri . '/js/common.js',
    array(),
    shumatsu_coffee_asset_version( 'js/common.js' ),
    true
  );

  // 4) トップページだけ slick + top.js
  if ( is_front_page() ) {
    wp_enqueue_style(
      'slick-css',
      'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
      array(),
      '1.8.1'
    );
    wp_enqueue_style(
      'slick-theme-css',
      'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css',
      array('slick-css'),
      '1.8.1'
    );

    wp_enqueue_script('jquery');
    wp_enqueue_script(
      'slick-js',
      'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
      array('jquery'),
      '1.8.1',
      true
    );

    // ★ファイル名を top.js に合わせた
    wp_enqueue_script(
      'top-js',
      $theme_uri . '/js/top.js',
      array('jquery', 'slick-js'),
      shumatsu_coffee_asset_version( 'js/top.js' ),
      true
    );
  }

  // 5) 固定ページ別CSS（style.cssの後に上書きしたいので theme-style 依存）
  if ( is_page('about') ) {
    wp_enqueue_style('about-css', $theme_uri . '/css/about.css', array('theme-style'), shumatsu_coffee_asset_version( 'css/about.css' ));
  }
  if ( is_page('beans') ) {
    wp_enqueue_style('beans-css', $theme_uri . '/css/beans.css', array('theme-style'), shumatsu_coffee_asset_version( 'css/beans.css' ));
  }
  if ( is_page('guide') ) {
    wp_enqueue_style('guide-css', $theme_uri . '/css/guide.css', array('theme-style'), shumatsu_coffee_asset_version( 'css/guide.css' ));

    // ★ファイル名を guide.js に合わせた
    wp_enqueue_script(
      'guide-js',
      $theme_uri . '/js/guide.js',
      array(),
      shumatsu_coffee_asset_version( 'js/guide.js' ),
      true
    );
  }
  if ( is_page('plan') ) {
    wp_enqueue_style('plan-css', $theme_uri . '/css/plan.css', array('theme-style'), shumatsu_coffee_asset_version( 'css/plan.css' ));
  }
  if ( is_page('news') ) {
    wp_enqueue_style('news-css', $theme_uri . '/css/news.css', array('theme-style'), shumatsu_coffee_asset_version( 'css/news.css' ));
  }
  if ( is_page('contact') ) {
    wp_enqueue_style('contact-css', $theme_uri . '/css/contact.css', array('theme-style'), shumatsu_coffee_asset_version( 'css/contact.css' ));
    wp_enqueue_script(
      'contact-js',
      $theme_uri . '/js/contact.js',
      array(),
      shumatsu_coffee_asset_version( 'js/contact.js' ),
      true
    );
  }
  if ( is_page('shop') ) {
    wp_enqueue_style('shop-css', $theme_uri . '/css/online-shop.css', array('theme-style'), shumatsu_coffee_asset_version( 'css/online-shop.css' ));
  }
}
add_action('wp_enqueue_scripts', 'shumatsu_coffee_enqueue_assets');

/**
 * このテーマはポートフォリオの閲覧用デモとして公開する。
 * 検索結果への登録とWordPress標準サイトマップの公開を止める。
 */
function shumatsu_coffee_demo_robots( $robots ) {
  $robots['noindex']   = true;
  $robots['nofollow']  = true;
  $robots['noarchive'] = true;

  return $robots;
}
add_filter( 'wp_robots', 'shumatsu_coffee_demo_robots', 100 );
add_filter( 'wp_sitemaps_enabled', '__return_false' );
