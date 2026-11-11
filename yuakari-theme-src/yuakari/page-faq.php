<?php get_header(); ?>

<main id="main-content">

  <!-- パンくず -->
  <nav class="sub-breadcrumb" aria-label="パンくずリスト">
    <div class="sub-breadcrumb-inner">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sub-breadcrumb-link" data-ja="TOP" data-en="TOP">TOP</a>
      <span class="sub-breadcrumb-sep" aria-hidden="true">/</span>
      <span class="sub-breadcrumb-link sub-breadcrumb-nolink" data-ja="INFO" data-en="INFO">INFO</span>
      <span class="sub-breadcrumb-sep" aria-hidden="true">/</span>
      <span class="sub-breadcrumb-current" data-ja="FAQ" data-en="FAQ">FAQ</span>
    </div>
  </nav>

  <!-- PAGE HEADER -->
  <section class="faq-hero">
    <div class="faq-hero-inner">
      <p class="faq-hero-label">FAQ</p>
      <h1 class="faq-hero-title" data-ja="よくあるご質問" data-en="Frequently Asked Questions">よくあるご質問</h1>
      <span class="faq-hero-line" aria-hidden="true"></span>
    </div>
  </section>

  <!-- FAQ BODY -->
  <section class="faq-section">
    <div class="faq-inner">

      <p class="faq-demo-note" role="note" data-ja="このFAQは架空サービスの情報設計・アコーディオンUIを示す作品です。実際の予約、決済、キャンセル受付は行っていません。" data-en="This FAQ demonstrates content structure and accordion UI for a fictional service. No real bookings, payments, or cancellations are accepted.">このFAQは架空サービスの情報設計・アコーディオンUIを示す作品です。実際の予約、決済、キャンセル受付は行っていません。</p>

      <!-- カテゴリ：ツアー予約 -->
      <div class="faq-category">
        <h2 class="faq-category-title" data-ja="ツアー予約について" data-en="About Tour Reservations">ツアー予約について</h2>

        <div class="faq-item">
          <dt class="faq-question" data-ja="予約はどのように行えますか？" data-en="How can I make a reservation?">Q. 予約はどのように行えますか？</dt>
          <dd class="faq-answer" data-ja="実際の予約はできません。作品内のフォームでは、ツアー名・日程・人数を入力する操作デモを体験できます。" data-en="Real reservations are unavailable. The project form lets you try entering a tour, date, and party size without transmitting data.">実際の予約はできません。作品内のフォームでは、ツアー名・日程・人数を入力する操作デモを体験できます。</dd>
        </div>

        <div class="faq-item">
          <dt class="faq-question" data-ja="何日前までに予約が必要ですか？" data-en="How far in advance do I need to book?">Q. 何日前までに予約が必要ですか？</dt>
          <dd class="faq-answer" data-ja="作品内の運用設定では「3日前まで」を想定しています。これは情報設計のサンプルであり、実際の受付期限ではありません。" data-en="The fictional operating scenario uses a three-day deadline. This is sample content, not a real booking cutoff.">作品内の運用設定では「3日前まで」を想定しています。これは情報設計のサンプルであり、実際の受付期限ではありません。</dd>
        </div>

        <div class="faq-item">
          <dt class="faq-question" data-ja="最少催行人数はありますか？" data-en="Is there a minimum group size?">Q. 最少催行人数はありますか？</dt>
          <dd class="faq-answer" data-ja="作品内の設定では2名を基本とし、ひとり旅や8名以上の団体に別導線を用意する想定です。" data-en="In this fictional scenario, two guests are standard, with separate paths for solo travelers and groups of eight or more.">作品内の設定では2名を基本とし、ひとり旅や8名以上の団体に別導線を用意する想定です。</dd>
        </div>
      </div>

      <!-- カテゴリ：キャンセル -->
      <div class="faq-category">
        <h2 class="faq-category-title" data-ja="キャンセル・変更について" data-en="Cancellations &amp; Changes">キャンセル・変更について</h2>

        <div class="faq-item">
          <dt class="faq-question" data-ja="キャンセルの場合、料金はかかりますか？" data-en="Is there a cancellation fee?">Q. キャンセルの場合、料金はかかりますか？</dt>
          <dd class="faq-answer" data-ja="前日・当日・無断キャンセルの3段階を想定した規約表示サンプルです。実際の料金請求はありません。" data-en="This is a sample three-tier cancellation policy. No actual fees are charged.">前日・当日・無断キャンセルの3段階を想定した規約表示サンプルです。実際の料金請求はありません。</dd>
        </div>

        <div class="faq-item">
          <dt class="faq-question" data-ja="雨天の場合はどうなりますか？" data-en="What happens in case of rain?">Q. 雨天の場合はどうなりますか？</dt>
          <dd class="faq-answer" data-ja="作品内では、小雨は催行、荒天は中止または内容変更という判断フローを想定しています。" data-en="The fictional flow assumes operation in light rain and cancellation or changes in severe weather.">作品内では、小雨は催行、荒天は中止または内容変更という判断フローを想定しています。</dd>
        </div>
      </div>

      <!-- カテゴリ：ツアー内容 -->
      <div class="faq-category">
        <h2 class="faq-category-title" data-ja="ツアー内容について" data-en="About Tour Contents">ツアー内容について</h2>

        <div class="faq-item">
          <dt class="faq-question" data-ja="英語でのガイドは可能ですか？" data-en="Are English-speaking guides available?">Q. 英語でのガイドは可能ですか？</dt>
          <dd class="faq-answer" data-ja="作品内では英語案内に対応する想定で、日本語・英語の表示切り替えUIを実装しています。" data-en="The fictional service assumes English guidance, and the interface includes Japanese / English switching.">作品内では英語案内に対応する想定で、日本語・英語の表示切り替えUIを実装しています。</dd>
        </div>

        <div class="faq-item">
          <dt class="faq-question" data-ja="子どもも参加できますか？" data-en="Can children participate?">Q. 子どもも参加できますか？</dt>
          <dd class="faq-answer" data-ja="家族利用の情報設計例として、陶芸体験は小学生以上という作品内条件を設定しています。" data-en="As a family-use content example, the fictional pottery workshop is set for elementary school age and above.">家族利用の情報設計例として、陶芸体験は小学生以上という作品内条件を設定しています。</dd>
        </div>
      </div>

      <!-- お問い合わせ誘導 -->
      <div class="faq-contact-note">
        <p data-ja="フォームの入力・エラー・完了状態を操作デモで確認できます。" data-en="Try the input, validation, and completion states in the form demo.">フォームの入力・エラー・完了状態を操作デモで確認できます。</p>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="faq-contact-btn" data-ja="フォームデモを見る" data-en="View Form Demo">フォームデモを見る</a>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>
