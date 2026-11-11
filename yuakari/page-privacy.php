<?php get_header(); ?>

<main id="main-content">

  <!-- パンくず -->
  <nav class="sub-breadcrumb" aria-label="パンくずリスト">
    <div class="sub-breadcrumb-inner">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sub-breadcrumb-link" data-ja="TOP" data-en="TOP">TOP</a>
      <span class="sub-breadcrumb-sep" aria-hidden="true">/</span>
      <span class="sub-breadcrumb-link sub-breadcrumb-nolink" data-ja="INFO" data-en="INFO">INFO</span>
      <span class="sub-breadcrumb-sep" aria-hidden="true">/</span>
      <span class="sub-breadcrumb-current" data-ja="Privacy Policy" data-en="Privacy Policy">Privacy Policy</span>
    </div>
  </nav>

  <!-- PAGE HEADER -->
  <section class="faq-hero">
    <div class="faq-hero-inner">
      <p class="faq-hero-label">PRIVACY</p>
      <h1 class="faq-hero-title" data-ja="プライバシーポリシー" data-en="Privacy Policy">プライバシーポリシー</h1>
      <span class="faq-hero-line" aria-hidden="true"></span>
    </div>
  </section>

  <!-- PRIVACY BODY -->
  <section class="faq-section">
    <div class="faq-inner privacy-body">

      <p class="privacy-lead" data-ja="このページは、架空の観光サービスにおけるプライバシー情報の見せ方を検討したUI・文章設計のサンプルです。" data-en="This page is a UI and content-design sample showing how privacy information could be presented for a fictional tourism service.">このページは、架空の観光サービスにおけるプライバシー情報の見せ方を検討したUI・文章設計のサンプルです。</p>
      <p class="privacy-note" data-ja="本サイトのフォームは入力内容を送信・保存しません。氏名・連絡先などの実情報は入力しないでください。" data-en="The form on this project does not transmit or store entries. Please do not enter real names, contact details, or sensitive information.">本サイトのフォームは入力内容を送信・保存しません。氏名・連絡先などの実情報は入力しないでください。</p>

      <div class="privacy-section">
        <h2 class="privacy-heading" data-ja="1. デモフォームの扱い" data-en="1. Demo Form">1. デモフォームの扱い</h2>
        <p data-ja="Contactページの送信ボタンは画面上の完了状態を表示するだけで、入力内容を外部サーバーへ送信しません。" data-en="The submit button on the Contact page only displays a completion state; it does not transmit entries to an external server.">Contactページの送信ボタンは画面上の完了状態を表示するだけで、入力内容を外部サーバーへ送信しません。</p>
      </div>

      <div class="privacy-section">
        <h2 class="privacy-heading" data-ja="2. ブラウザ内の設定保存" data-en="2. Browser Preferences">2. ブラウザ内の設定保存</h2>
        <p data-ja="日本語・英語の表示設定は、お使いのブラウザのlocalStorageに保存されます。入力フォームの内容は保存しません。" data-en="The Japanese / English display preference is stored in your browser's localStorage. Form entries are not stored.">日本語・英語の表示設定は、お使いのブラウザのlocalStorageに保存されます。入力フォームの内容は保存しません。</p>
        <ul class="privacy-list">
          <li data-ja="保存する項目：表示言語（日本語／英語）" data-en="Stored item: display language (Japanese / English)">保存する項目：表示言語（日本語／英語）</li>
          <li data-ja="保存場所：利用者のブラウザ内" data-en="Storage location: the visitor's browser">保存場所：利用者のブラウザ内</li>
          <li data-ja="フォーム入力：保存・送信なし" data-en="Form entries: neither stored nor transmitted">フォーム入力：保存・送信なし</li>
        </ul>
      </div>

      <div class="privacy-section">
        <h2 class="privacy-heading" data-ja="3. 外部リソース" data-en="3. External Resources">3. 外部リソース</h2>
        <p data-ja="書体表示のためGoogle Fontsを読み込みます。その際の通信情報は、提供元の方針に基づいて扱われます。" data-en="Google Fonts is loaded for typography. Related connection data is handled under the provider's policies.">書体表示のためGoogle Fontsを読み込みます。その際の通信情報は、提供元の方針に基づいて扱われます。</p>
      </div>

      <div class="privacy-section">
        <h2 class="privacy-heading" data-ja="4. サーバーログ" data-en="4. Server Logs">4. サーバーログ</h2>
        <p data-ja="一般的なWeb配信と同様に、ホスティング環境でアクセス日時やIPアドレスなどのログが記録される場合があります。" data-en="As with typical web hosting, access time, IP address, and similar data may be recorded in server logs.">一般的なWeb配信と同様に、ホスティング環境でアクセス日時やIPアドレスなどのログが記録される場合があります。</p>
      </div>

      <div class="privacy-section">
        <h2 class="privacy-heading" data-ja="5. 作品についてのお問い合わせ" data-en="5. Project Contact">5. 作品についてのお問い合わせ</h2>
        <p data-ja="この作品やWeb制作についてのご相談は、制作者Rikuのポートフォリオからお送りください。" data-en="For questions about this project or web production, use Riku's portfolio contact page.">この作品やWeb制作についてのご相談は、制作者Rikuのポートフォリオからお送りください。</p>
        <p class="privacy-contact">
          <a href="https://rnportfolio.xsrv.jp/contact.html?source=yuakari-privacy" data-ja="RikuのContactへ" data-en="Go to Riku's Contact">RikuのContactへ</a>
        </p>
      </div>

      <p class="privacy-date" data-ja="最終更新：2026年7月19日" data-en="Last updated: July 19, 2026">最終更新：2026年7月19日</p>

    </div>
  </section>

</main>

<?php get_footer(); ?>
