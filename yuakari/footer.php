<!-- ========== FOOTER ========== -->
<footer id="footer" class="site-footer">
  <div class="footer-inner">

    <!-- ブランドロゴエリア -->
    <div class="footer-brand">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="湯灯商會 トップページへ">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/svg/logo.svg" alt="湯灯商會" class="footer-logo-icon" width="80" height="80">
      </a>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo" aria-label="湯灯商會 トップページへ">
        <span class="footer-logo-ja" data-ja="湯灯商會" data-en="湯灯商會">湯灯商會</span>
        <span class="footer-logo-en">YUAKARI &amp; Co.</span>
      </a>
      <p class="footer-tagline">一湯一會 ── Once in a Bath, Once in a Lifetime</p>
    </div>

    <!-- フッターナビゲーション -->
    <nav class="footer-nav" aria-label="フッターナビゲーション">

      <div class="footer-nav-col">
        <h3 class="footer-nav-heading">EXPLORE</h3>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a></li>
          <li><a href="<?php echo esc_url( home_url( '/tours/' ) ); ?>">Tours</a></li>
          <li><a href="<?php echo esc_url( home_url( '/food/' ) ); ?>">Food</a></li>
          <li><a href="<?php echo esc_url( home_url( '/craft/' ) ); ?>">Craft</a></li>
          <li><a href="<?php echo esc_url( home_url( '/festival/' ) ); ?>">Festival</a></li>
        </ul>
      </div>

      <div class="footer-nav-col">
        <h3 class="footer-nav-heading">INFO</h3>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/access/' ) ); ?>">Access</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
          <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">FAQ</a></li>
          <li><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">Privacy Policy</a></li>
        </ul>
      </div>

      <div class="footer-nav-col">
        <h3 class="footer-nav-heading">FOLLOW</h3>
        <ul>
          <li><span class="sns-link-inactive">Instagram <small>準備中</small></span></li>
          <li><span class="sns-link-inactive">YouTube <small>準備中</small></span></li>
          <li><span class="sns-link-inactive">X <small>準備中</small></span></li>
        </ul>
      </div>

      <div class="footer-nav-col">
        <h3 class="footer-nav-heading">LANGUAGE</h3>
        <ul>
          <li><button type="button" class="footer-lang-link" data-lang="ja">日本語</button></li>
          <li><button type="button" class="footer-lang-link" data-lang="en">English</button></li>
        </ul>
      </div>

    </nav>
  </div>

  <div class="footer-bottom">
    <p class="footer-copyright">
      <small>&copy; <?php echo date( 'Y' ); ?> YUAKARI &amp; Co. All Rights Reserved.</small>
    </p>
    <p class="footer-note">
      <small data-ja="※ 湯灯商會は架空の事業者です。卒業制作として制作されたWebサイトです。" data-en="* YUAKARI &amp; Co. is a fictional business. This website was created as a graduation project.">※ 湯灯商會は架空の事業者です。卒業制作として制作されたWebサイトです。</small>
    </p>
  </div>
</footer>

<!-- wp_footer()でJavaScriptが読み込まれる（functions.phpで設定済み） -->
<?php wp_footer(); ?>

</body>
</html>
