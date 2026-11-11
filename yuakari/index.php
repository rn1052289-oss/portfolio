<?php
/**
 * index.php
 * WordPressに必須のフォールバックテンプレート
 * 通常はfront-page.phpやpage-xxx.phpが優先されるため、このファイルは使われない
 */
get_header();
?>

<main id="main-content">
  <div style="text-align:center; padding: 120px 20px;">
    <p style="font-family: 'Cormorant Garamond', serif; font-size: 24px; color: #2d2d2d;">
      ページが見つかりませんでした。
    </p>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: #bf8a24;">トップページへ戻る</a>
  </div>
</main>

<?php get_footer(); ?>
