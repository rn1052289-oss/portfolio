<?php get_header(); ?>

<main id="main-content">

  <!-- パンくず -->
  <nav class="sub-breadcrumb" aria-label="パンくずリスト">
    <div class="sub-breadcrumb-inner">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sub-breadcrumb-link" data-ja="TOP" data-en="TOP">TOP</a>
      <span class="sub-breadcrumb-sep" aria-hidden="true">/</span>
      <span class="sub-breadcrumb-current" data-ja="CONTACT" data-en="CONTACT">CONTACT</span>
    </div>
  </nav>

  <!-- ファーストビュー（inline style廃止 → CSSクラスで管理） -->
  <section class="sub-firstview sub-firstview--contact">
    <div class="sub-firstview-overlay" aria-hidden="true"></div>
    <div class="sub-firstview-inner">
      <h1 class="sub-firstview-title" data-ja="お問い合わせ" data-en="Contact Us">お問い合わせ</h1>
      <p class="sub-firstview-sub"><em>Contact Us</em></p>
      <span class="sub-firstview-line" aria-hidden="true"></span>
    </div>
  </section>

  <!-- CONTACT MAIN -->
  <section class="contact-main-section">
    <div class="contact-main-inner">

      <!-- LEFT: FORM -->
      <div class="contact-form-area">

        <!-- フォームラベル -->
        <div class="contact-form-header">
          <div class="contact-form-label-row">
            <span class="contact-form-label-en">FORM</span>
            <span class="contact-form-label-line" aria-hidden="true"></span>
          </div>
          <h2 class="contact-form-title" data-ja="&lt;span class=&quot;u-keep&quot;&gt;フォームからの&lt;/span&gt;&lt;span class=&quot;u-keep&quot;&gt;お問い合わせ&lt;/span&gt;" data-en="Send Us a Message"><span class="u-keep">フォームからの</span><span class="u-keep">お問い合わせ</span></h2>
          <p class="contact-form-desc" data-ja="このフォームは作品内の操作見本です。入力内容は外部へ送信されません。" data-en="This form is an interaction demo. Your entries are not transmitted.">このフォームは作品内の操作見本です。入力内容は外部へ送信されません。</p>
          <p class="contact-demo-notice" role="note">
            <strong data-ja="DEMO FORM" data-en="DEMO FORM">DEMO FORM</strong>
            <span data-ja="実際の制作相談はRikuのContactから承ります。" data-en="For real project inquiries, please use Riku's contact page.">実際の制作相談はRikuのContactから承ります。</span>
            <a href="https://rnportfolio.xsrv.jp/contact.html?source=yuakari-demo" data-ja="制作について相談する" data-en="Contact Riku about a project">制作について相談する</a>
          </p>
          <ul class="contact-assurance-list">
            <li data-ja="入力UIの操作見本" data-en="Form interaction sample">入力UIの操作見本</li>
            <li data-ja="入力内容は送信されません" data-en="No data is transmitted">入力内容は送信されません</li>
            <li data-ja="日本語・英語表示見本" data-en="Japanese / English sample">日本語・英語表示見本</li>
          </ul>
        </div>

        <!-- 架空サイトのUI見本。送信処理は行わない。 -->
        <form id="contact-form" class="contact-form" action="#contact-form" method="post" data-demo-form="true" novalidate>

          <!-- 1行目：お名前 + 電話番号 -->
          <div class="contact-form-row contact-form-row-2col">
            <div class="contact-field">
              <label class="contact-field-label" for="contact-name">
                <span data-ja="お名前" data-en="Name">お名前</span> <span class="contact-required" data-ja="*必須" data-en="*Required">*必須</span>
              </label>
              <input
                class="contact-field-input"
                type="text"
                id="contact-name"
                name="name"
                data-placeholder-ja="お名前" data-placeholder-en="Your Name"
                placeholder="お名前"
                required
                aria-required="true"
                aria-invalid="false"
                aria-describedby="error-name"
                autocomplete="name"
              >
              <p class="contact-field-error" id="error-name" role="alert"></p>
            </div>
            <div class="contact-field">
              <label class="contact-field-label" for="contact-tel">
                <span data-ja="電話番号" data-en="Phone Number">電話番号</span>
              </label>
              <input
                class="contact-field-input"
                type="tel"
                id="contact-tel"
                name="tel"
                data-placeholder-ja="電話番号（任意）" data-placeholder-en="Phone Number (optional)"
                placeholder="電話番号（任意）"
                autocomplete="tel"
              >
            </div>
          </div>

          <!-- 2行目：メールアドレス + お問い合わせ種別 -->
          <div class="contact-form-row contact-form-row-2col">
            <div class="contact-field">
              <label class="contact-field-label" for="contact-email">
                <span data-ja="メールアドレス" data-en="Email Address">メールアドレス</span> <span class="contact-required" data-ja="*必須" data-en="*Required">*必須</span>
              </label>
              <input
                class="contact-field-input"
                type="email"
                id="contact-email"
                name="email"
                data-placeholder-ja="メールアドレス" data-placeholder-en="Email Address"
                placeholder="メールアドレス"
                required
                aria-required="true"
                aria-invalid="false"
                aria-describedby="error-email"
                autocomplete="email"
              >
              <p class="contact-field-error" id="error-email" role="alert"></p>
            </div>
            <div class="contact-field">
              <label class="contact-field-label" for="contact-category">
                <span data-ja="お問い合わせ種別" data-en="Inquiry Type">お問い合わせ種別</span> <span class="contact-required" data-ja="*必須" data-en="*Required">*必須</span>
              </label>
              <div class="contact-select-wrap">
                <select
                  class="contact-field-input contact-field-select"
                  id="contact-category"
                  name="category"
                  required
                  aria-required="true"
                  aria-invalid="false"
                  aria-describedby="error-category"
                >
                  <option value="" disabled selected>お問い合わせ種別を選択</option>
                  <option value="tour">ツアー予約について</option>
                  <option value="access">アクセス・交通について</option>
                  <option value="food">食べ歩き・グルメについて</option>
                  <option value="craft">工芸体験について</option>
                  <option value="festival">祭り・イベントについて</option>
                  <option value="other">その他</option>
                </select>
                <span class="contact-select-arrow" aria-hidden="true">&#8964;</span>
              </div>
              <p class="contact-field-error" id="error-category" role="alert"></p>
            </div>
          </div>

          <!-- 3行目：ご希望のツアー -->
          <div class="contact-form-row">
            <div class="contact-field">
              <label class="contact-field-label" for="contact-tour">
                <span data-ja="ご希望のツアー" data-en="Preferred Tour">ご希望のツアー</span>
              </label>
              <div class="contact-select-wrap">
                <select
                  class="contact-field-input contact-field-select"
                  id="contact-tour"
                  name="tour"
                >
                  <option value="" selected>ツアーを選択（任意）</option>
                  <option value="complete">湯灯まるごと体験ツアー</option>
                  <option value="morning">朝の食べ歩きツアー</option>
                  <option value="craft">陶芸・手しごと体験</option>
                  <option value="twilight">夕暮れの灯り散歩</option>
                </select>
                <span class="contact-select-arrow" aria-hidden="true">&#8964;</span>
              </div>
            </div>
          </div>

          <!-- 4行目：ご希望日 + 人数 -->
          <div class="contact-form-row contact-form-row-2col">
            <div class="contact-field">
              <label class="contact-field-label" for="contact-date">
                <span data-ja="ご希望日" data-en="Preferred Date">ご希望日</span>
              </label>
              <input
                class="contact-field-input"
                type="date"
                id="contact-date"
                name="date"
              >
            </div>
            <div class="contact-field">
              <label class="contact-field-label" for="contact-guests">
                <span data-ja="人数" data-en="Number of Guests">人数</span>
              </label>
              <input
                class="contact-field-input"
                type="number"
                id="contact-guests"
                name="guests"
                data-placeholder-ja="人数" data-placeholder-en="Number of Guests"
                placeholder="人数"
                min="1"
              >
            </div>
          </div>

          <!-- 5行目：お問い合わせ内容 -->
          <div class="contact-form-row">
            <div class="contact-field">
              <label class="contact-field-label" for="contact-message">
                <span data-ja="お問い合わせ内容" data-en="Message">お問い合わせ内容</span> <span class="contact-required" data-ja="*必須" data-en="*Required">*必須</span>
              </label>
              <textarea
                class="contact-field-input contact-field-textarea"
                id="contact-message"
                name="message"
                data-placeholder-ja="お問い合わせ内容をご記入ください" data-placeholder-en="Please describe your inquiry"
                placeholder="お問い合わせ内容をご記入ください"
                required
                aria-required="true"
                aria-invalid="false"
                aria-describedby="error-message"
                rows="8"
              ></textarea>
              <p class="contact-field-error" id="error-message" role="alert"></p>
            </div>
          </div>

          <!-- プライバシーポリシー同意（B-3: privacy.htmlへのリンクを追加） -->
          <div class="contact-form-row contact-privacy-row">
            <label class="contact-privacy-label">
              <input
                class="contact-privacy-check"
                type="checkbox"
                name="privacy"
                required
                aria-required="true"
                aria-invalid="false"
                aria-describedby="error-privacy"
              >
              <span class="contact-privacy-text">
                <a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>" target="_blank" rel="noopener noreferrer" style="color:#96691c;text-decoration:underline;" data-ja="プライバシーポリシー" data-en="Privacy Policy">プライバシーポリシー</a><span data-ja="に同意する" data-en="I agree to the">に同意する</span> <span class="contact-required" data-ja="*必須" data-en="*Required">*必須</span>
              </span>
            </label>
            <p class="contact-field-error" id="error-privacy" role="alert"></p>
          </div>

          <!-- 送信ボタン -->
          <div class="contact-submit-row">
            <button class="contact-submit-btn" type="submit" data-ja="送信する / SEND" data-en="Submit / SEND">
              送信する / SEND
            </button>
          </div>

        </form>
      </div>

      <!-- RIGHT: DIRECT CONTACT + FOLLOW -->
      <aside class="contact-sidebar">

        <!-- DIRECT CONTACT -->
        <div class="contact-direct">
          <div class="contact-direct-header">
            <h2 class="contact-direct-title-en">DEMO PROFILE</h2>
            <p class="contact-direct-title-ja" data-ja="架空事業者の表示見本" data-en="Fictional business details">架空事業者の表示見本</p>
            <span class="contact-direct-border" aria-hidden="true"></span>
          </div>
          <div class="contact-direct-box">
            <dl class="contact-direct-list">
              <div class="contact-direct-item">
                <dt class="contact-direct-item-label">PHONE</dt>
                <dd class="contact-direct-item-value">
                  <span>0120-000-000</span><br>
                  <span class="contact-direct-note" data-ja="表示例（発信できません）" data-en="Display sample — calls are unavailable">表示例（発信できません）</span>
                </dd>
              </div>
              <div class="contact-direct-item">
                <dt class="contact-direct-item-label">EMAIL</dt>
                <dd class="contact-direct-item-value">
                  <span>info@example.jp</span>
                </dd>
              </div>
              <div class="contact-direct-item">
                <dt class="contact-direct-item-label">ADDRESS</dt>
                <dd class="contact-direct-item-value">
                  <span data-ja="架空の所在地（作品内設定）" data-en="Fictional location for this project">架空の所在地（作品内設定）</span>
                </dd>
              </div>
            </dl>
          </div>
        </div>

        <!-- FOLLOW US（A-4: SNS実URL未設定のため非活性表示） -->
        <div class="contact-follow">
          <div class="contact-follow-box">
            <p class="contact-follow-label">FOLLOW US</p>
            <p class="contact-follow-links" aria-label="SNSリンクは準備中です">
              <span class="contact-follow-chip">Instagram</span>
              <span class="contact-follow-divider" aria-hidden="true">｜</span>
              <span class="contact-follow-chip">YouTube</span>
              <span class="contact-follow-divider" aria-hidden="true">｜</span>
              <span class="contact-follow-chip">X</span>
            </p>
          </div>
        </div>

        <!-- デモ注記 -->
        <p class="contact-reply-note">
          <span data-ja="※ このサイトはポートフォリオ作品です" data-en="* This is a portfolio project.">※ このサイトはポートフォリオ作品です</span><br>
          <strong data-ja="予約・問い合わせは受け付けていません" data-en="Bookings and inquiries are not accepted.">予約・問い合わせは受け付けていません</strong>
        </p>

      </aside>

    </div>
  </section>

  <!-- CTA BAND -->
  <section class="contact-cta-section" aria-label="ツアー一覧への導線">
    <div class="contact-cta-inner">
      <h2 class="contact-cta-heading" data-ja="&lt;span class=&quot;u-keep&quot;&gt;まずはツアーを&lt;/span&gt;&lt;span class=&quot;u-keep&quot;&gt;比較してみる&lt;/span&gt;" data-en="Start by Comparing Our Tours"><span class="u-keep">まずはツアーを</span><span class="u-keep">比較してみる</span></h2>
      <p class="contact-cta-sub"><em>Explore four fictional tour concepts</em></p>
      <a href="<?php echo esc_url( home_url( '/tours/' ) ); ?>" class="contact-cta-btn" data-ja="ツアー一覧・比較表を見る" data-en="See All Tours &amp; Compare">ツアー一覧・比較表を見る</a>
      <p class="contact-cta-info">
        <span data-ja="※ 掲載内容はすべて作品内の架空設定です" data-en="* All details shown are fictional project content.">※ 掲載内容はすべて作品内の架空設定です</span>
      </p>
    </div>
  </section>

</main>

<?php get_footer(); ?>
