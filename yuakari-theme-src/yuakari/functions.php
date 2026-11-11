<?php
/**
 * functions.php
 * 湯灯商會テーマ 機能設定ファイル
 *
 * 役割：
 * - WordPressのテーマ設定（タイトルタグ自動化など）
 * - Google Fontsの読み込み
 * - CSS（スタイルシート）の読み込み
 * - JavaScript の読み込み
 * - ナビゲーションメニューの登録
 */

/* ============================================================
   1. テーマサポート設定
   ============================================================ */
function yuakari_theme_setup() {
    // <title>タグをWordPressに自動管理させる（header.phpに<title>は不要）
    add_theme_support( 'title-tag' );

    // アイキャッチ画像を有効化
    add_theme_support( 'post-thumbnails' );

    // HTMLマークアップの自動補正
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ) );

    // ナビゲーションメニュー登録
    register_nav_menus( array(
        'global-nav'  => 'グローバルナビゲーション',
        'footer-nav'  => 'フッターナビゲーション',
    ) );
}
add_action( 'after_setup_theme', 'yuakari_theme_setup' );

function yuakari_asset_version( $relative_path ) {
    $asset_path = get_template_directory() . '/' . ltrim( $relative_path, '/' );

    return file_exists( $asset_path ) ? (string) filemtime( $asset_path ) : wp_get_theme()->get( 'Version' );
}


/* ============================================================
   2. CSS・JS の読み込み（wp_enqueue）
   ============================================================ */
function yuakari_enqueue_assets() {

    $theme_uri = get_template_directory_uri();

    /* --- Google Fonts --- */
    wp_enqueue_style(
        'yuakari-google-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400&family=Shippori+Mincho:wght@400;600;700&display=swap',
        array(),
        null
    );

    /* --- 共通CSS --- */
    wp_enqueue_style(
        'yuakari-common',
        $theme_uri . '/css/common.css',
        array( 'yuakari-google-fonts' ),
        yuakari_asset_version( 'css/common.css' )
    );

    /* --- ページ専用CSS（各ページテンプレートに合わせて読み込む） --- */

    // トップページ (front-page.php)
    if ( is_front_page() ) {
        wp_enqueue_style( 'yuakari-style', $theme_uri . '/css/style.css', array( 'yuakari-common' ), yuakari_asset_version( 'css/style.css' ) );
    }

    // ABOUTページ
    if ( is_page( 'about' ) ) {
        wp_enqueue_style( 'yuakari-about', $theme_uri . '/css/about.css', array( 'yuakari-common' ), yuakari_asset_version( 'css/about.css' ) );
        wp_enqueue_script( 'yuakari-about-js', $theme_uri . '/js/about.js', array( 'yuakari-script' ), yuakari_asset_version( 'js/about.js' ), true );
    }

    // TOURSページ
    if ( is_page( 'tours' ) ) {
        wp_enqueue_style( 'yuakari-tours', $theme_uri . '/css/tours.css', array( 'yuakari-common' ), yuakari_asset_version( 'css/tours.css' ) );
    }

    // TOUR詳細ページ（各ツアー詳細）
    if ( is_page( array( 'tour-detail', 'tour-craft', 'tour-morning', 'tour-twilight' ) ) ) {
        wp_enqueue_style( 'yuakari-tour-detail', $theme_uri . '/css/tour-detail.css', array( 'yuakari-common' ), yuakari_asset_version( 'css/tour-detail.css' ) );
    }

    // FOODページ
    if ( is_page( 'food' ) ) {
        wp_enqueue_style( 'yuakari-food', $theme_uri . '/css/food.css', array( 'yuakari-common' ), yuakari_asset_version( 'css/food.css' ) );
        wp_enqueue_script( 'yuakari-food-js', $theme_uri . '/js/food.js', array( 'yuakari-script' ), yuakari_asset_version( 'js/food.js' ), true );
    }

    // CRAFTページ
    if ( is_page( 'craft' ) ) {
        wp_enqueue_style( 'yuakari-craft', $theme_uri . '/css/craft.css', array( 'yuakari-common' ), yuakari_asset_version( 'css/craft.css' ) );
        wp_enqueue_script( 'yuakari-craft-js', $theme_uri . '/js/craft.js', array( 'yuakari-script' ), yuakari_asset_version( 'js/craft.js' ), true );
    }

    // FESTIVALページ
    if ( is_page( 'festival' ) ) {
        wp_enqueue_style( 'yuakari-festival', $theme_uri . '/css/festival.css', array( 'yuakari-common' ), yuakari_asset_version( 'css/festival.css' ) );
        wp_enqueue_script( 'yuakari-festival-js', $theme_uri . '/js/festival.js', array( 'yuakari-script' ), yuakari_asset_version( 'js/festival.js' ), true );
    }

    // ACCESSページ
    if ( is_page( 'access' ) ) {
        wp_enqueue_style( 'yuakari-access', $theme_uri . '/css/access.css', array( 'yuakari-common' ), yuakari_asset_version( 'css/access.css' ) );
    }

    // CONTACTページ
    if ( is_page( 'contact' ) ) {
        wp_enqueue_style( 'yuakari-contact', $theme_uri . '/css/contact.css', array( 'yuakari-common' ), yuakari_asset_version( 'css/contact.css' ) );
        wp_enqueue_script( 'yuakari-contact-js', $theme_uri . '/js/contact.js', array( 'yuakari-script' ), yuakari_asset_version( 'js/contact.js' ), true );
        // contact.js 内で使用するWordPress固有の値をJSに渡す
        wp_localize_script( 'yuakari-contact-js', 'yuakariVars', array(
            'homeUrl' => esc_url( home_url( '/' ) ),
        ) );
    }

    // FAQページ
    if ( is_page( 'faq' ) ) {
        wp_enqueue_style( 'yuakari-faq', $theme_uri . '/css/faq.css', array( 'yuakari-common' ), yuakari_asset_version( 'css/faq.css' ) );
    }

    // プライバシーポリシーページ（faq.cssを流用）
    if ( is_page( 'privacy' ) ) {
        wp_enqueue_style( 'yuakari-privacy', $theme_uri . '/css/faq.css', array( 'yuakari-common' ), yuakari_asset_version( 'css/faq.css' ) );
    }

    /* --- 共通JavaScript --- */
    wp_enqueue_script(
        'yuakari-script',
        $theme_uri . '/js/script.js',
        array(), // jQueryに依存しない
        yuakari_asset_version( 'js/script.js' ),
        true // フッターに出力（defer相当）
    );
}
add_action( 'wp_enqueue_scripts', 'yuakari_enqueue_assets' );


/* ============================================================
   3. faviconの出力（<head>内）
   ============================================================ */
function yuakari_add_favicon() {
    echo '<link rel="icon" href="' . get_template_directory_uri() . '/svg/logo.svg" type="image/svg+xml">' . "\n";
}
add_action( 'wp_head', 'yuakari_add_favicon' );


/* ============================================================
   5. ページ固有 body クラスの追加
   ============================================================
   各ページテンプレート（about, festival, food, craft, tours）に
   専用 CSS のセレクター（.about-page 等）を効かせるため、
   WordPress の body_class フィルターでクラスを付与する。

   例: about ページなら <body class="... about-page"> になる。
   ============================================================ */
function yuakari_add_page_body_class( $classes ) {
    if ( is_page() ) {
        $slug = get_post_field( 'post_name', get_the_ID() );

        $page_class_map = array(
            'about'    => 'about-page',
            'festival' => 'festival-page',
            'food'     => 'food-page',
            'craft'    => 'craft-page',
            'tours'    => 'tours-page',
        );

        if ( isset( $page_class_map[ $slug ] ) ) {
            $classes[] = $page_class_map[ $slug ];
        }
    }
    return $classes;
}
add_filter( 'body_class', 'yuakari_add_page_body_class' );


/* ============================================================
   6. ページURLを安全に取得する共通ヘルパー関数
   ============================================================
   使い方: yuakari_page_url( 'tours/tour-detail' )
   → get_page_by_path() で /tours/ 配下の子ページも正確に解決する。
   見つからない場合は home_url() でフォールバックするため
   リンク切れにならない。
   ============================================================ */
if ( ! function_exists( 'yuakari_page_url' ) ) {
    function yuakari_page_url( $path ) {
        $page = get_page_by_path( $path );
        if ( $page ) {
            return get_permalink( $page->ID );
        }
        // フォールバック: home_url にパスを付けて返す
        return esc_url( home_url( '/' . trim( $path, '/' ) . '/' ) );
    }
}


/* ============================================================
   7. ポートフォリオデモの検索除外
   ============================================================ */
function yuakari_demo_robots( $robots ) {
    $robots['noindex']   = true;
    $robots['nofollow']  = true;
    $robots['noarchive'] = true;

    return $robots;
}
add_filter( 'wp_robots', 'yuakari_demo_robots', 100 );
add_filter( 'wp_sitemaps_enabled', '__return_false' );

function yuakari_demo_document_title_parts( $parts ) {
    $parts['site'] = '湯灯商會（自主制作デモ）';

    return $parts;
}
add_filter( 'document_title_parts', 'yuakari_demo_document_title_parts' );
