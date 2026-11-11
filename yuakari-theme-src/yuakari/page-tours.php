<?php get_header(); ?>

<main id="main-content">

  <!-- パンくず（共通） -->
  <nav class="sub-breadcrumb" aria-label="パンくずリスト">
    <div class="sub-breadcrumb-inner">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sub-breadcrumb-link" data-ja="TOP" data-en="TOP">TOP</a>
      <span class="sub-breadcrumb-sep" aria-hidden="true">/</span>
      <span class="sub-breadcrumb-current" data-ja="TOURS" data-en="TOURS">TOURS</span>
    </div>
  </nav>

  <!-- ファーストビュー（共通） -->
  <section class="sub-firstview sub-firstview--tours">
    <div class="sub-firstview-overlay" aria-hidden="true"></div>
    <div class="sub-firstview-inner">
      <p class="sub-firstview-eyebrow" aria-hidden="true">Experience Tours</p>
      <h1 class="sub-firstview-title" data-ja="体験ツアー" data-en="Experience Tours">体験ツアー</h1>
      <p class="sub-firstview-sub"><em>Experience Tours</em></p>
      <span class="sub-firstview-line" aria-hidden="true"></span>
      <p class="sub-firstview-lead" data-ja="湯灯温泉の魅力をまるごと楽しむ、4つのツアープラン" data-en="Four tour plans to fully enjoy the charm of Yuakari Onsen">湯灯温泉の魅力をまるごと楽しむ、4つのツアープラン</p>
      <p class="tours-count-badge" data-ja="4 TOURS AVAILABLE" data-en="4 TOURS AVAILABLE" aria-hidden="true">4 TOURS AVAILABLE</p>
    </div>
  </section>

  <!-- ========== FLAGSHIP TOUR ========== -->
  <section class="tours-flagship-section">
    <div class="tours-flagship-inner">
      <article class="tours-flagship">
        <div class="tours-flagship-thumb">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/tours_img/tours-flagship-img.webp" alt="湯灯まるごと体験ツアー" class="tours-flagship-img" loading="lazy" width="1376" height="768">
          <span class="tours-badge">POPULAR</span>
        </div>
        <div class="tours-flagship-body">
          <p class="tours-flagship-label">FLAGSHIP TOUR</p>
          <h2 class="tours-flagship-title" data-ja="湯灯まるごと体験ツアー" data-en="The Complete Yuakari Experience">湯灯まるごと体験ツアー</h2>
          <p class="tours-flagship-en">The Complete Yuakari Experience</p>
          <p class="tours-flagship-desc" data-ja="食べ歩き・工芸体験・外湯巡りを一日で楽しむ
湯灯温泉のフラッグシップツアー" data-en="Enjoy food walks, craft workshops &amp; public bath hopping all in one day — our flagship tour of Yuakari Onsen">食べ歩き・工芸体験・外湯巡りを一日で楽しむ<br>湯灯温泉のフラッグシップツアー</p>
          <div class="tours-flagship-meta">
            <span data-ja="所要時間 6h" data-en="Duration 6h">所要時間 6h</span>
            <span class="meta-divider">｜</span>
            <span>¥12,800〜</span>
            <span class="meta-divider">｜</span>
            <span data-ja="2〜8名" data-en="2–8 guests">2〜8名</span>
            <span class="meta-divider">｜</span>
            <span data-ja="日英対応" data-en="JP / EN">日英対応</span>
          </div>
          <div class="tours-flagship-actions">
            <a href="<?php echo esc_url( yuakari_page_url( 'tours/tour-detail' ) ); ?>" class="tours-flagship-btn-primary">DETAILS →</a>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="tours-flagship-btn-secondary" data-ja="FORM DEMO" data-en="FORM DEMO">FORM DEMO</a>
          </div>
        </div>
      </article>
    </div>
  </section>

  <!-- ========== TOUR CARDS（3列） ========== -->
  <section class="tours-cards-section">
    <div class="tours-cards-inner">
      <div class="tours-cards-grid">

        <!-- カード1：朝の食べ歩きツアー -->
        <article class="tours-card">
          <div class="tours-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/tours_img/tours_food.webp" alt="朝の食べ歩きツアー" class="tours-card-img" loading="lazy" width="1408" height="768">
          </div>
          <div class="tours-card-body">
            <h3 class="tours-card-title" data-ja="朝の食べ歩きツアー" data-en="Morning Food Walk">朝の食べ歩きツアー</h3>
            <p class="tours-card-en"><em>Morning Food Walk</em></p>
            <p class="tours-card-tags"><span class="tours-card-tag" data-ja="食中心" data-en="Food Focus">食中心</span><span class="tours-card-tag" data-ja="初めて向け" data-en="Beginner Friendly">初めて向け</span></p>
            <p class="tours-card-desc" data-ja="温泉まんじゅう・地酒・蕎麦を巡る" data-en="Explore steamed buns, local sake &amp; soba">温泉まんじゅう・地酒・蕎麦を巡る</p>
            <div class="tours-card-meta">
              <span>3h</span>
              <span class="meta-divider">｜</span>
              <span>¥5,500〜</span>
              <span class="meta-divider">｜</span>
              <span data-ja="2名〜" data-en="2+">2名〜</span>
            </div>
            <a href="<?php echo esc_url( yuakari_page_url( 'tours/tour-morning' ) ); ?>" class="tours-card-btn">DETAILS →</a>
          </div>
        </article>

        <!-- カード2：陶芸・手しごと体験 -->
        <article class="tours-card">
          <div class="tours-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/tours_img/tours_craft.webp" alt="陶芸・手しごと体験" class="tours-card-img" loading="lazy" width="1408" height="768">
          </div>
          <div class="tours-card-body">
            <h3 class="tours-card-title" data-ja="陶芸・手しごと体験" data-en="Pottery &amp; Craft Workshop">陶芸・手しごと体験</h3>
            <p class="tours-card-en"><em>Pottery &amp; Craft Workshop</em></p>
            <p class="tours-card-tags"><span class="tours-card-tag" data-ja="ものづくり" data-en="Hands-On Craft">ものづくり</span><span class="tours-card-tag" data-ja="英語安心" data-en="English OK">英語安心</span></p>
            <p class="tours-card-desc" data-ja="地元の窯元で湯呑みを制作" data-en="Create a tea cup at a local kiln">地元の窯元で湯呑みを制作</p>
            <div class="tours-card-meta">
              <span>2.5h</span>
              <span class="meta-divider">｜</span>
              <span>¥4,800〜</span>
              <span class="meta-divider">｜</span>
              <span data-ja="1名〜" data-en="1+">1名〜</span>
            </div>
            <a href="<?php echo esc_url( yuakari_page_url( 'tours/tour-craft' ) ); ?>" class="tours-card-btn">DETAILS →</a>
          </div>
        </article>

        <!-- カード3：夕暮れの灯り散歩 -->
        <article class="tours-card">
          <div class="tours-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/tours_img/tours_walk.webp" alt="夕暮れの灯り散歩" class="tours-card-img" loading="lazy" width="1408" height="768">
          </div>
          <div class="tours-card-body">
            <h3 class="tours-card-title" data-ja="夕暮れの灯り散歩" data-en="Twilight Lantern Walk">夕暮れの灯り散歩</h3>
            <p class="tours-card-en"><em>Twilight Lantern Walk</em></p>
            <p class="tours-card-tags"><span class="tours-card-tag" data-ja="写真映え" data-en="Photogenic">写真映え</span><span class="tours-card-tag" data-ja="夕方スタート" data-en="Evening Start">夕方スタート</span></p>
            <p class="tours-card-desc" data-ja="行灯の灯る温泉街を地元ガイドと" data-en="Walk lantern-lit streets with a local guide">行灯の灯る温泉街を地元ガイドと</p>
            <div class="tours-card-meta">
              <span>1.5h</span>
              <span class="meta-divider">｜</span>
              <span>¥3,200〜</span>
              <span class="meta-divider">｜</span>
              <span data-ja="2名〜" data-en="2+">2名〜</span>
            </div>
            <a href="<?php echo esc_url( yuakari_page_url( 'tours/tour-twilight' ) ); ?>" class="tours-card-btn">DETAILS →</a>
          </div>
        </article>

      </div>
    </div>
  </section>

  <!-- ========== COMPARE TABLE ========== -->
  <section class="tours-compare-section">
    <div class="tours-compare-inner">
      <div class="section-label">
        <span class="section-label-en" style="font-size: 16px;">COMPARE</span>
        <span class="section-label-line" aria-hidden="true"></span>
      </div>
      <h2 class="tours-compare-heading" data-ja="ツアー比較" data-en="Tour Comparison">ツアー比較</h2>

      <div class="tours-compare-table-wrap">
        <table class="tours-compare-table">
          <thead>
            <tr>
              <th data-ja="TOUR NAME" data-en="TOUR NAME">TOUR NAME</th>
              <th data-ja="DURATION" data-en="DURATION">DURATION</th>
              <th data-ja="PRICE" data-en="PRICE">PRICE</th>
              <th data-ja="GROUP" data-en="GROUP">GROUP</th>
              <th data-ja="ENGLISH" data-en="ENGLISH">ENGLISH</th>
              <th data-ja="DEMO" data-en="DEMO">DEMO</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label=""><a href="<?php echo esc_url( yuakari_page_url( 'tours/tour-detail' ) ); ?>" class="tours-compare-name-link" data-ja="湯灯まるごと体験ツアー" data-en="The Complete Yuakari Experience">湯灯まるごと体験ツアー</a></td>
              <td data-label="DURATION">6h</td>
              <td data-label="PRICE">¥12,800〜</td>
              <td data-label="GROUP" data-ja="2〜8名" data-en="2–8">2〜8名</td>
              <td data-label="ENGLISH" class="tours-compare-en-yes" data-ja="● 対応（週末）" data-en="● Available (weekends)">● 対応（週末）</td>
              <td data-label="DEMO"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="tours-compare-book" data-ja="フォームを見る →" data-en="FORM →">フォームを見る →</a></td>
            </tr>
            <tr>
              <td data-label=""><a href="<?php echo esc_url( yuakari_page_url( 'tours/tour-morning' ) ); ?>" class="tours-compare-name-link" data-ja="朝の食べ歩きツアー" data-en="Morning Food Walk">朝の食べ歩きツアー</a></td>
              <td data-label="DURATION">3h</td>
              <td data-label="PRICE">¥5,500〜</td>
              <td data-label="GROUP" data-ja="2〜6名" data-en="2–6">2〜6名</td>
              <td data-label="ENGLISH" class="tours-compare-en-no" data-ja="— 日本語のみ" data-en="— Japanese only">— 日本語のみ</td>
              <td data-label="DEMO"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="tours-compare-book" data-ja="フォームを見る →" data-en="FORM →">フォームを見る →</a></td>
            </tr>
            <tr>
              <td data-label=""><a href="<?php echo esc_url( yuakari_page_url( 'tours/tour-craft' ) ); ?>" class="tours-compare-name-link" data-ja="陶芸・手しごと体験" data-en="Pottery &amp; Craft Workshop">陶芸・手しごと体験</a></td>
              <td data-label="DURATION">2.5h</td>
              <td data-label="PRICE">¥4,800〜</td>
              <td data-label="GROUP" data-ja="1〜4名" data-en="1–4">1〜4名</td>
              <td data-label="ENGLISH" class="tours-compare-en-yes" data-ja="● 対応（週末）" data-en="● Available (weekends)">● 対応（週末）</td>
              <td data-label="DEMO"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="tours-compare-book" data-ja="フォームを見る →" data-en="FORM →">フォームを見る →</a></td>
            </tr>
            <tr>
              <td data-label=""><a href="<?php echo esc_url( yuakari_page_url( 'tours/tour-twilight' ) ); ?>" class="tours-compare-name-link" data-ja="夕暮れの灯り散歩" data-en="Twilight Lantern Walk">夕暮れの灯り散歩</a></td>
              <td data-label="DURATION">1.5h</td>
              <td data-label="PRICE">¥3,200〜</td>
              <td data-label="GROUP" data-ja="2〜10名" data-en="2–10">2〜10名</td>
              <td data-label="ENGLISH" class="tours-compare-en-no" data-ja="— 日本語のみ" data-en="— Japanese only">— 日本語のみ</td>
              <td data-label="DEMO"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="tours-compare-book" data-ja="フォームを見る →" data-en="FORM →">フォームを見る →</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- ========== CONTACT CTA ========== -->
  <section class="contact-section">
    <div class="contact-inner">
      <h2 class="contact-heading" data-ja="フォームUIを試してみる" data-en="Try the Form UI">フォームUIを試してみる</h2>
      <p class="contact-sub" data-ja="希望ツアーを選ぶ操作デモです。入力内容は送信されません。" data-en="Try selecting a preferred tour. Entries are not transmitted.">希望ツアーを選ぶ操作デモです。入力内容は送信されません。</p>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="contact-btn">FORM DEMO</a>
      <p class="tours-cta-note" data-ja="FICTIONAL PROJECT · No real bookings" data-en="FICTIONAL PROJECT · No real bookings" style="margin-top:1rem;font-size:.85rem;letter-spacing:.08em;opacity:.9;">FICTIONAL PROJECT &nbsp;·&nbsp; No real bookings</p>
    </div>
  </section>

</main>

<?php get_footer(); ?>
