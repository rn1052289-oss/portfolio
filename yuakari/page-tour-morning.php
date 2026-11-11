<?php get_header(); ?>

<main id="main-content">

  <!-- パンくず -->
  <nav class="sub-breadcrumb" aria-label="パンくずリスト">
    <div class="sub-breadcrumb-inner">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sub-breadcrumb-link" data-ja="TOP" data-en="TOP">TOP</a>
      <span class="sub-breadcrumb-sep" aria-hidden="true">/</span>
      <a href="<?php echo esc_url( home_url( '/tours/' ) ); ?>" class="sub-breadcrumb-link" data-ja="Tours" data-en="Tours">Tours</a>
      <span class="sub-breadcrumb-sep" aria-hidden="true">/</span>
      <span class="sub-breadcrumb-current" data-ja="朝の食べ歩きツアー" data-en="Morning Food Walk">朝の食べ歩きツアー</span>
    </div>
  </nav>

  <!-- ファーストビュー -->
  <section class="sub-firstview sub-firstview--tour-morning">
    <div class="sub-firstview-overlay" aria-hidden="true"></div>
    <div class="sub-firstview-inner">
      <h1 class="sub-firstview-title" data-ja="朝の食べ歩きツアー" data-en="Morning Food Walk">朝の食べ歩きツアー</h1>
      <p class="sub-firstview-sub"><em>Morning Food Walk</em></p>
      <span class="sub-firstview-line" aria-hidden="true"></span>
      <p class="sub-firstview-lead" data-ja="温泉まんじゅう・地酒・手打ち蕎麦など、朝の湯灯温泉街を食べ歩く人気ツアー" data-en="A popular morning food tour through Yuakari Onsen — steamed buns, local sake, handmade soba &amp; more">温泉まんじゅう・地酒・手打ち蕎麦など、朝の湯灯温泉街を食べ歩く人気ツアー</p>
    </div>
  </section>

  <!-- 情報バー -->
  <div class="td-info-bar">
    <div class="td-info-bar-inner">
      <div class="td-info-item">
        <span class="td-info-label">DURATION</span>
        <span class="td-info-value" data-ja="約3時間" data-en="Approx. 3h">約3時間</span>
      </div>
      <div class="td-info-item">
        <span class="td-info-label">PRICE</span>
        <span class="td-info-value">¥5,500〜</span>
      </div>
      <div class="td-info-item">
        <span class="td-info-label">GROUP</span>
        <span class="td-info-value" data-ja="2〜8名" data-en="2–8 guests">2〜8名</span>
      </div>
      <div class="td-info-item">
        <span class="td-info-label">LANGUAGE</span>
        <span class="td-info-value" data-ja="日本語 / EN" data-en="JP / EN">日本語 / EN</span>
      </div>
    </div>
  </div>

  <!-- SP予約バー -->
  <div class="td-sp-reserve-bar">
    <div class="td-sp-reserve-inner">
      <div class="td-sp-reserve-price-area">
        <span class="td-sp-reserve-label" data-ja="料金（税込）" data-en="Price (incl. tax)">料金（税込）</span>
        <span class="td-sp-reserve-yen">¥5,500</span>
        <span class="td-sp-reserve-per" data-ja="〜 / 1名" data-en="~ / per person">〜 / 1名</span>
      </div>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="td-sp-reserve-btn">FORM DEMO</a>
      <div class="td-sp-reserve-note" data-ja="架空プランの操作見本" data-en="Fictional plan interaction demo">架空プランの操作見本</div>
    </div>
  </div>

  <!-- 2カラム -->
  <div class="td-main-wrap">
    <div class="td-main-inner">

      <!-- 左カラム：コンテンツ -->
      <div class="td-content">

        <!-- OVERVIEW -->
        <section class="td-section td-overview">
          <div class="td-section-label">
            <span class="td-section-label-en">OVERVIEW</span>
            <span class="td-section-label-line"></span>
          </div>
          <h2 class="td-section-heading" data-ja="ツアー概要" data-en="Tour Overview">ツアー概要</h2>
          <p class="td-overview-text" data-ja="朝の清々しい空気の中、湯灯温泉街を食べ歩くショートツアーです。温泉まんじゅう・地元の地酒・手打ち蕎麦など、地元ならではの味を5カ所で楽しみます。地元ガイドが街の歴史や食文化をご案内しながら、温泉街の朝の風景をゆっくりとご堪能いただけます。少人数制なので、個人旅行やカップル旅行にもぴったりです。" data-en="A short food walk tour through Yuakari Onsen in the crisp morning air. Enjoy local flavors at 5 stops — steamed buns, local sake, handmade soba, and more. A local guide will share the town's history and food culture as you take in the morning scenery. Perfect for solo travelers and couples thanks to its small-group format.">朝の清々しい空気の中、湯灯温泉街を食べ歩くショートツアーです。温泉まんじゅう・地元の地酒・手打ち蕎麦など、地元ならではの味を5カ所で楽しみます。地元ガイドが街の歴史や食文化をご案内しながら、温泉街の朝の風景をゆっくりとご堪能いただけます。少人数制なので、個人旅行やカップル旅行にもぴったりです。</p>
        </section>

        <!-- こんな人におすすめ -->
        <section class="td-section td-recommend">
          <div class="td-section-label">
            <span class="td-section-label-en">FOR WHOM</span>
            <span class="td-section-label-line"></span>
          </div>
          <h2 class="td-section-heading" data-ja="こんな方におすすめ" data-en="Who Is This Tour For?">こんな方におすすめ</h2>
          <ul class="td-recommend-list">
            <li class="td-recommend-item" data-ja="✓ 朝の時間を有効に使いたい方" data-en="✓ Those who want to make the most of their morning">✓ 朝の時間を有効に使いたい方</li>
            <li class="td-recommend-item" data-ja="✓ 食文化・地元グルメに興味がある方" data-en="✓ Food lovers &amp; local cuisine enthusiasts">✓ 食文化・地元グルメに興味がある方</li>
            <li class="td-recommend-item" data-ja="✓ カップルや友人との軽い散策にちょうどいい" data-en="✓ Great for couples or friends on a casual stroll">✓ カップルや友人との軽い散策にちょうどいい</li>
            <li class="td-recommend-item" data-ja="✓ 午後に別の予定がある方・短期滞在の方" data-en="✓ Those with afternoon plans or short-stay travelers">✓ 午後に別の予定がある方・短期滞在の方</li>
          </ul>
        </section>

        <!-- ITINERARY -->
        <section class="td-section td-itinerary">
          <div class="td-section-label">
            <span class="td-section-label-en">ITINERARY</span>
            <span class="td-section-label-line"></span>
          </div>
          <h2 class="td-section-heading" data-ja="行程" data-en="Itinerary">行程</h2>
          <div class="td-timeline">

            <div class="td-timeline-item">
              <div class="td-timeline-marker">
                <span class="td-timeline-number">1</span>
                <span class="td-timeline-time">08:00</span>
              </div>
              <div class="td-timeline-body">
                <h3 class="td-timeline-title" data-ja="集合・朝の街歩き" data-en="Meet &amp; Morning Walk">集合・朝の街歩き</h3>
                <p class="td-timeline-en"><em>Meet &amp; Morning Walk</em></p>
                <p class="td-timeline-desc" data-ja="湯灯商會前に集合。朝の静かな温泉街をゆっくり歩きながらスタート" data-en="Meet at YUAKARI &amp; Co. Begin with a quiet walk through the morning hot spring town">湯灯商會前に集合。朝の静かな温泉街をゆっくり歩きながらスタート</p>
              </div>
            </div>

            <div class="td-timeline-item">
              <div class="td-timeline-marker">
                <span class="td-timeline-number">2</span>
                <span class="td-timeline-time">08:20</span>
              </div>
              <div class="td-timeline-body">
                <h3 class="td-timeline-title" data-ja="温泉まんじゅう・甘味" data-en="Steamed Buns &amp; Sweets">温泉まんじゅう・甘味</h3>
                <p class="td-timeline-en"><em>Steamed Buns &amp; Local Sweets</em></p>
                <p class="td-timeline-desc" data-ja="老舗の温泉まんじゅうを湯気の立ちのぼる中で試食。地元の甘酒も" data-en="Sample freshly steamed hot spring buns from a long-established shop. Local amazake too">老舗の温泉まんじゅうを湯気の立ちのぼる中で試食。地元の甘酒も</p>
              </div>
            </div>

            <div class="td-timeline-item">
              <div class="td-timeline-marker">
                <span class="td-timeline-number">3</span>
                <span class="td-timeline-time">08:50</span>
              </div>
              <div class="td-timeline-body">
                <h3 class="td-timeline-title" data-ja="地酒・発酵食品" data-en="Local Sake &amp; Fermented Foods">地酒・発酵食品</h3>
                <p class="td-timeline-en"><em>Local Sake &amp; Fermented Foods</em></p>
                <p class="td-timeline-desc" data-ja="地元の酒蔵で少量の試飲と、味噌・塩糀など発酵食品の試食" data-en="Small tastings at a local brewery, plus miso and salt koji samples">地元の酒蔵で少量の試飲と、味噌・塩糀など発酵食品の試食</p>
              </div>
            </div>

            <div class="td-timeline-item">
              <div class="td-timeline-marker">
                <span class="td-timeline-number">4</span>
                <span class="td-timeline-time">09:30</span>
              </div>
              <div class="td-timeline-body">
                <h3 class="td-timeline-title" data-ja="手打ち蕎麦・焼き鳥" data-en="Handmade Soba &amp; Yakitori">手打ち蕎麦・焼き鳥</h3>
                <p class="td-timeline-en"><em>Handmade Soba &amp; Grilled Chicken</em></p>
                <p class="td-timeline-desc" data-ja="職人が打つ蕎麦を少量で。川沿いの焼き鳥屋台でも朝からにぎわっている" data-en="A small serving of freshly made soba. Also visit a riverside yakitori stall">職人が打つ蕎麦を少量で。川沿いの焼き鳥屋台でも朝からにぎわっている</p>
              </div>
            </div>

            <div class="td-timeline-item td-timeline-end">
              <div class="td-timeline-marker">
                <span class="td-timeline-number td-timeline-number-end"></span>
                <span class="td-timeline-time">11:00</span>
              </div>
              <div class="td-timeline-body">
                <p class="td-timeline-title" data-ja="ツアー終了・解散" data-en="Tour ends / Dismissal">ツアー終了・解散</p>
              </div>
            </div>

          </div>
        </section>

        <!-- INCLUDES -->
        <section class="td-section td-includes">
          <div class="td-section-label">
            <span class="td-section-label-en">INCLUDES</span>
            <span class="td-section-label-line"></span>
          </div>
          <h2 class="td-section-heading" data-ja="含まれるもの" data-en="What's Included">含まれるもの</h2>
          <ul class="td-includes-list">
            <li class="td-includes-item" data-ja="地元ガイドによるご案内（日本語・英語対応）" data-en="Local guide (Japanese &amp; English)">地元ガイドによるご案内（日本語・英語対応）</li>
            <li class="td-includes-item" data-ja="食べ歩き5スポットの試食・試飲" data-en="Food &amp; drink tastings at 5 stops">食べ歩き5スポットの試食・試飲</li>
            <li class="td-includes-item" data-ja="湯灯商會オリジナル食べ歩きマップ" data-en="YUAKARI &amp; Co. original food walk map">湯灯商會オリジナル食べ歩きマップ</li>
          </ul>
        </section>

        <!-- GALLERY -->
        <section class="td-section td-gallery">
          <div class="td-section-label">
            <span class="td-section-label-en">GALLERY</span>
            <span class="td-section-label-line"></span>
          </div>
          <h2 class="td-section-heading" data-ja="ツアーの様子" data-en="Tour Gallery">ツアーの様子</h2>
          <div class="td-gallery-grid">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_manju_01.webp" alt="温泉まんじゅう" class="td-gallery-main" loading="lazy" width="1200" height="800">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_sake_01.webp" alt="地酒試飲" class="td-gallery-sub" loading="lazy" width="800" height="800">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_soba_01.webp" alt="手打ち蕎麦" class="td-gallery-sub" loading="lazy" width="800" height="800">
          </div>
        </section>

        <!-- NOTES -->
        <section class="td-section td-notes">
          <div class="td-section-label">
            <span class="td-section-label-en">NOTES</span>
            <span class="td-section-label-line"></span>
          </div>
          <h2 class="td-section-heading" data-ja="ご注意事項" data-en="Important Notes">ご注意事項</h2>
          <div class="td-notes-box">
            <ul class="td-notes-list">
              <li data-ja="・集合場所：湯灯商會 本店前（湯灯温泉バス停より徒歩3分）" data-en="Meet at: YUAKARI &amp; Co. Main Shop (3 min walk from bus stop)">・集合場所：湯灯商會 本店前（湯灯温泉バス停より徒歩3分）</li>
              <li data-ja="・持ち物：歩きやすい靴、動きやすい服装" data-en="What to bring: Comfortable shoes and clothes">・持ち物：歩きやすい靴、動きやすい服装</li>
              <li data-ja="・予約：前日17:00まで。当日予約はお電話にて" data-en="Reservations: By 5:00 PM the day before. Same-day by phone.">・予約：前日17:00まで。当日予約はお電話にて</li>
              <li data-ja="・キャンセル：前日17:00まで無料。当日キャンセルは50%" data-en="Cancellation: Free until 5:00 PM the day before. 50% fee on the day.">・キャンセル：前日17:00まで無料。当日キャンセルは50%</li>
              <li data-ja="・英語対応：英語ガイド付きは週末限定（要事前予約）" data-en="English guide: Weekends only (advance reservation required)">・英語対応：英語ガイド付きは週末限定（要事前予約）</li>
              <li data-ja="・最少催行人数：2名様より" data-en="Minimum: 2 participants">・最少催行人数：2名様より</li>
            </ul>
          </div>
        </section>

      </div>

      <!-- 右サイドバー -->
      <aside class="td-sidebar">

        <!-- 予約ボックス -->
        <div class="td-reserve-box">
          <div class="td-reserve-top-bar"></div>
          <div class="td-reserve-inner">
            <p class="td-reserve-label" data-ja="料金（税込）" data-en="Price (incl. tax)">料金（税込）</p>
            <div class="td-reserve-price">
              <span class="td-reserve-yen">¥5,500</span>
              <span class="td-reserve-per" data-ja="〜 / 1名" data-en="~ / per person">〜 / 1名</span>
            </div>
            <div class="td-reserve-field">
              <label class="td-reserve-field-label" for="td-date" data-ja="日付を選択" data-en="Select Date">日付を選択</label>
              <div class="td-reserve-input-wrap">
                <input type="text" id="td-date" class="td-reserve-input" placeholder="yyyy / mm / dd" readonly>
              </div>
            </div>
            <div class="td-reserve-field">
              <label class="td-reserve-field-label" for="td-person" data-ja="人数" data-en="Guests">人数</label>
              <div class="td-reserve-select-wrap">
                <select id="td-person" class="td-reserve-select">
                  <option value="2">2名</option>
                  <option value="3">3名</option>
                  <option value="4">4名</option>
                  <option value="5">5名</option>
                  <option value="6">6名</option>
                  <option value="7">7名</option>
                  <option value="8">8名</option>
                </select>
              </div>
            </div>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="td-reserve-btn" data-ja="フォームデモ / TRY FORM" data-en="Form Demo / TRY FORM">フォームデモ / TRY FORM</a>
            <div class="td-reserve-notes">
              <p data-ja="※ 入力内容は送信されません" data-en="※ Entries are not transmitted">※ 入力内容は送信されません</p>
              <p data-ja="※ 雨天決行（荒天時は一部変更あり）" data-en="※ Held rain or shine (may be adjusted in severe weather)">※ 雨天決行（荒天時は一部変更あり）</p>
            </div>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="td-reserve-inquire" data-ja="フォームUIを見る" data-en="View Form UI">フォームUIを見る</a>
          </div>
        </div>

        <!-- 他のツアー -->
        <div class="td-other-tours">
          <div class="td-section-label">
            <span class="td-section-label-en">OTHER TOURS</span>
            <span class="td-section-label-line"></span>
          </div>
          <h3 class="td-other-tours-heading" data-ja="他のツアー" data-en="Other Tours">他のツアー</h3>
          <div class="td-other-tours-list">
            <div class="td-other-card">
              <div class="td-other-card-thumb">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/tourdetail_img/tourdetail_firstview.webp" alt="湯灯まるごと体験ツアー" loading="lazy" width="1024" height="1024">
              </div>
              <div class="td-other-card-body">
                <h4 class="td-other-card-title" data-ja="湯灯まるごと体験ツアー" data-en="The Complete Yuakari Tour">湯灯まるごと体験ツアー</h4>
                <p class="td-other-card-en"><em>The Complete Yuakari Tour</em></p>
                <p class="td-other-card-meta">6h ｜ ¥12,800〜</p>
                <a href="<?php echo esc_url( yuakari_page_url( 'tours/tour-detail' ) ); ?>" class="td-other-card-btn">DETAILS →</a>
              </div>
            </div>
            <div class="td-other-card">
              <div class="td-other-card-thumb">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/tourdetail_img/tourdetail_craft.webp" alt="陶芸・手しごと体験" loading="lazy" width="1024" height="1024">
              </div>
              <div class="td-other-card-body">
                <h4 class="td-other-card-title" data-ja="陶芸・手しごと体験" data-en="Pottery &amp; Craft">陶芸・手しごと体験</h4>
                <p class="td-other-card-en"><em>Pottery &amp; Craft</em></p>
                <p class="td-other-card-meta">2.5h ｜ ¥4,800〜</p>
                <a href="<?php echo esc_url( yuakari_page_url( 'tours/tour-craft' ) ); ?>" class="td-other-card-btn">DETAILS →</a>
              </div>
            </div>
            <div class="td-other-card">
              <div class="td-other-card-thumb">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/tourdetail_img/tourdetail_nightwalk.webp" alt="夕暮れの灯り散歩" loading="lazy" width="1024" height="1024">
              </div>
              <div class="td-other-card-body">
                <h4 class="td-other-card-title" data-ja="夕暮れの灯り散歩" data-en="Twilight Lantern Walk">夕暮れの灯り散歩</h4>
                <p class="td-other-card-en"><em>Twilight Lantern Walk</em></p>
                <p class="td-other-card-meta">1.5h ｜ ¥3,200〜</p>
                <a href="<?php echo esc_url( yuakari_page_url( 'tours/tour-twilight' ) ); ?>" class="td-other-card-btn">DETAILS →</a>
              </div>
            </div>
          </div>
        </div>

      </aside>
    </div>
  </div>

  <!-- CTA帯 -->
  <section class="td-cta-section">
    <div class="td-cta-inner">
      <h2 class="td-cta-heading" data-ja="フォームUIで朝のプランを選ぶ" data-en="Select the Morning Plan in the Form Demo">フォームUIで朝のプランを選ぶ</h2>
      <p class="td-cta-sub"><em>FICTIONAL PROJECT · Entries are not transmitted</em></p>
      <div class="td-cta-buttons">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="td-cta-btn" data-ja="日付・人数の入力を試す" data-en="Try dates &amp; group size">日付・人数の入力を試す</a>
      </div>
      <p class="td-cta-info" data-ja="実際の予約受付はありません" data-en="No real bookings are accepted">実際の予約受付はありません</p>
      <p class="td-cta-note" data-ja="※ 掲載内容・料金・日程はすべて作品内の架空設定です" data-en="※ All details, prices, and schedules are fictional project content">※ 掲載内容・料金・日程はすべて作品内の架空設定です</p>
    </div>
  </section>

</main>

<?php get_footer(); ?>
