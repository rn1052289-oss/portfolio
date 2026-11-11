<?php get_header(); ?>

<main id="main-content">

  <!--HERO-->
  <section id="hero" class="hero-section" aria-label="メインビジュアル">
    <div class="hero-slider" id="hero-slider" aria-hidden="true">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/top_img/top_firstview01.webp" alt="" class="hero-slide is-active" width="1376" height="768" fetchpriority="high">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/top_img/top_firstview02.webp" alt="" class="hero-slide" width="1376" height="768" loading="lazy">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/top_img/top_firstview03.webp" alt="" class="hero-slide" width="1376" height="768" loading="lazy">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/top_img/top_firstview04.webp" alt="" class="hero-slide" width="1376" height="768" loading="lazy">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/top_img/top_firstview05.webp" alt="" class="hero-slide" width="1376" height="768" loading="lazy">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/top_img/top_firstview06.webp" alt="" class="hero-slide" width="1376" height="768" loading="lazy">
    </div>
    <div class="hero-overlay" aria-hidden="true"></div>
    <div class="hero-content">
      <p class="hero-catch" data-ja="湯灯温泉で出会う、かけがえのない一會" data-en="An irreplaceable encounter at Yuakari Onsen">湯灯温泉で出会う、かけがえのない一會</p>
      <h1 class="hero-title">一湯一會<span class="visually-hidden" data-ja=" — 湯灯温泉の体験ツアー・食べ歩き・工芸・祭り｜湯灯商會" data-en=" — Yuakari Onsen Experience Tours, Food, Crafts &amp; Festivals | YUAKARI &amp; Co."> — 湯灯温泉の体験ツアー・食べ歩き・工芸・祭り｜湯灯商會</span></h1>
      <p class="hero-sub-en"><em>Once in a Bath, Once in a Lifetime</em></p>
      <p class="hero-desc" data-ja="湯・食・手しごと・祭り ── すべてが一度きりの体験" data-en="Hot springs, food, crafts &amp; festivals — every moment, once in a lifetime">湯・食・手しごと・祭り ── すべてが一度きりの体験</p>
      <div class="hero-cta-group">
        <a href="<?php echo esc_url( home_url( '/tours/' ) ); ?>" class="hero-cta-btn" data-ja="体験ツアーを比較する" data-en="Compare All Tours">体験ツアーを比較する</a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="hero-cta-sub" data-ja="フォームUIの操作デモを見る" data-en="Try the Form UI Demo">フォームUIの操作デモを見る</a>
      </div>
    </div>
    <div class="hero-scroll" aria-hidden="true">
      <span class="hero-scroll-text">SCROLL</span>
      <span class="hero-scroll-line"></span>
    </div>
  </section>

  <!-- TOUR QUICK INFO BAR -->
  <div class="tour-quick-bar" aria-label="ツアー概要">
    <div class="tour-quick-inner">
      <div class="tour-quick-item">
        <span class="tour-quick-num">4</span>
        <span class="tour-quick-label" data-ja="つのツアープラン" data-en="Tour Plans">つのツアープラン</span>
      </div>
      <span class="tour-quick-divider" aria-hidden="true"></span>
      <div class="tour-quick-item">
        <span class="tour-quick-num">¥3,200</span>
        <span class="tour-quick-label" data-ja="〜 最安プラン" data-en="〜 Starting Price">〜 最安プラン</span>
      </div>
      <span class="tour-quick-divider" aria-hidden="true"></span>
      <div class="tour-quick-item">
        <span class="tour-quick-num" data-ja="英語" data-en="English">英語</span>
        <span class="tour-quick-label" data-ja="ガイド対応あり" data-en="Guide Available">ガイド対応あり</span>
      </div>
      <span class="tour-quick-divider" aria-hidden="true"></span>
      <div class="tour-quick-item">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="tour-quick-contact" data-ja="フォームデモ →" data-en="FORM DEMO →">フォームデモ →</a>
      </div>
    </div>
  </div>

  <!--ABOUT-->
  <section id="about" class="about-section">
    <div class="about-inner">
      <div class="about-text-area">
        <div class="section-label">
          <span class="section-label-num">01</span>
          <span class="section-label-line" aria-hidden="true"></span>
          <span class="section-label-en">ABOUT</span>
        </div>
        <h2 class="section-heading-ja" data-ja="湯灯商會について" data-en="About YUAKARI &amp; Co.">湯灯商會について</h2>
        <p class="section-heading-sub" data-ja="About YUAKARI &amp; Co." data-en="Our Story">About YUAKARI &amp; Co.</p>
        <p class="about-body" data-ja="山間の温泉街「湯灯温泉」に根ざし、この街でしか出会えない体験を届ける地域密着型の観光体験事業者です。街歩き・食文化・伝統工芸・季節の祭りを横断する複合型ツアーをひとつのブランドとして企画・運営しています。" data-en="Rooted in the mountain hot spring town of Yuakari Onsen, we are a community-based tourism operator delivering experiences found nowhere else. We plan and operate combined tours that weave together street walks, food culture, traditional crafts, and seasonal festivals under one brand.">
          山間の温泉街「湯灯温泉」に根ざし、この街でしか出会えない体験を届ける地域密着型の観光体験事業者です。街歩き・食文化・伝統工芸・季節の祭りを横断する複合型ツアーをひとつのブランドとして企画・運営しています。
        </p>
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="text-link">
          READ MORE <span class="text-link-arrow" aria-hidden="true">→</span>
        </a>
      </div>
      <div class="about-image-area">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/top_img/top_about.webp" alt="温泉街の石畳の路地と木造旅館" class="about-image" width="580" height="500" loading="lazy">
      </div>
    </div>
  </section>

  <!-- セクション区切り -->
  <div class="section-divider" aria-hidden="true">
    <span class="section-divider-gem"></span>
  </div>

  <!--TOURS-->
  <section id="tour" class="tour-section">
    <div class="tour-inner">
      <div class="section-label section-label-light">
        <span class="section-label-num">02</span>
        <span class="section-label-line" aria-hidden="true"></span>
        <span class="section-label-en">TOURS</span>
      </div>
      <h2 class="section-heading-ja section-heading-light" data-ja="体験ツアー" data-en="Experience Tours">体験ツアー</h2>
      <p class="section-heading-sub section-heading-sub-light" data-ja="Experience Tours" data-en="Discover Our Tours">Experience Tours</p>
      <div class="tour-grid">

        <!-- featured（左の大カード） -->
        <article class="tour-featured">
          <div class="tour-featured-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/top_img/tour_main.webp" alt="湯灯まるごと体験ツアー" class="tour-featured-img" loading="lazy" width="1200" height="896">
            <span class="tour-badge">POPULAR</span>
          </div>
          <div class="tour-featured-body">
            <h3 class="tour-featured-title" data-ja="湯灯まるごと体験ツアー" data-en="The Complete Yuakari Tour">湯灯まるごと体験ツアー</h3>
            <p class="tour-featured-en">The Complete Yuakari Experience</p>
            <p class="tour-featured-desc" data-ja="食べ歩き・工芸体験・外湯巡りを一日で" data-en="Food walks, craft workshops &amp; public baths — all in one day">食べ歩き・工芸体験・外湯巡りを一日で</p>
            <div class="tour-featured-meta">
              <span data-ja="所要時間 6h" data-en="Duration 6h">所要時間 6h</span>
              <span class="meta-divider">｜</span>
              <span>¥12,800〜</span>
              <span class="meta-divider">｜</span>
              <span data-ja="2名より催行" data-en="Min. 2 guests">2名より催行</span>
            </div>
            <a href="<?php echo esc_url( yuakari_page_url( 'tours/tour-detail' ) ); ?>" class="tour-featured-btn">DETAILS →</a>
          </div>
        </article>

        <!-- 右上カード A -->
        <article class="tour-card tour-card-a">
          <div class="tour-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/top_img/tour_food.webp" alt="朝の食べ歩きツアーの様子" class="tour-card-img" loading="lazy" width="1200" height="896">
          </div>
          <div class="tour-card-body">
            <h3 class="tour-card-title" data-ja="朝の食べ歩きツアー" data-en="Morning Food Walk">朝の食べ歩きツアー</h3>
            <p class="tour-card-en">Morning Food Walk</p>
            <div class="tour-card-bottom">
              <div class="tour-card-meta">
                <span>3h</span>
                <span class="meta-divider">｜</span>
                <span>¥5,500〜</span>
              </div>
              <a href="<?php echo esc_url( yuakari_page_url( 'tours/tour-morning' ) ); ?>" class="tour-card-btn">DETAILS →</a>
            </div>
          </div>
        </article>

        <!-- 右上カード B -->
        <article class="tour-card tour-card-b">
          <div class="tour-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/top_img/tour_craft.webp" alt="陶芸・手しごと体験の様子" class="tour-card-img" loading="lazy" width="1200" height="896">
          </div>
          <div class="tour-card-body">
            <h3 class="tour-card-title" data-ja="陶芸・手しごと体験" data-en="Pottery &amp; Craft Workshop">陶芸・手しごと体験</h3>
            <p class="tour-card-en">Pottery &amp; Craft Workshop</p>
            <div class="tour-card-bottom">
              <div class="tour-card-meta">
                <span>2.5h</span>
                <span class="meta-divider">｜</span>
                <span>¥4,800〜</span>
              </div>
              <a href="<?php echo esc_url( yuakari_page_url( 'tours/tour-craft' ) ); ?>" class="tour-card-btn">DETAILS →</a>
            </div>
          </div>
        </article>

        <!-- 右下横長カード C -->
        <article class="tour-card tour-card-c">
          <div class="tour-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/top_img/tour_walk.webp" alt="夕暮れの灯り散歩" class="tour-card-img" loading="lazy" width="1200" height="896">
          </div>
          <div class="tour-card-body">
            <h3 class="tour-card-title" data-ja="夕暮れの灯り散歩" data-en="Twilight Lantern Walk">夕暮れの灯り散歩</h3>
            <p class="tour-card-en">Twilight Lantern Walk</p>
            <p class="tour-card-desc" data-ja="行灯の灯る温泉街を地元ガイドと歩く" data-en="Stroll through lantern-lit streets with a local guide">行灯の灯る温泉街を地元ガイドと歩く</p>
            <div class="tour-card-bottom">
              <div class="tour-card-meta">
                <span>1.5h</span>
                <span class="meta-divider">｜</span>
                <span>¥3,200〜</span>
              </div>
              <a href="<?php echo esc_url( yuakari_page_url( 'tours/tour-twilight' ) ); ?>" class="tour-card-btn">DETAILS →</a>
            </div>
          </div>
        </article>

      </div>
      <div class="tour-view-all">
        <a href="<?php echo esc_url( home_url( '/tours/' ) ); ?>" class="text-link text-link-light">
          VIEW ALL TOURS <span class="text-link-arrow" aria-hidden="true">→</span>
        </a>
      </div>
    </div>
  </section>

  <!--DISCOVER-->
  <section id="discover" class="discover-section">
    <div class="discover-inner">
      <div class="section-label">
        <span class="section-label-num">03</span>
        <span class="section-label-line" aria-hidden="true"></span>
        <span class="section-label-en">DISCOVER</span>
      </div>
      <h2 class="section-heading-ja" data-ja="湯灯温泉を味わう" data-en="Savor Yuakari Onsen">湯灯温泉を味わう</h2>
      <p class="section-heading-sub" data-ja="Savor Yuakari Onsen" data-en="Explore the Town">Savor Yuakari Onsen</p>
      <div class="discover-grid">
        <article class="discover-card">
          <div class="discover-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/top_img/discover_food.webp" alt="温泉まんじゅうと地酒" class="discover-card-img" loading="lazy" width="1200" height="896">
          </div>
          <div class="discover-card-body">
            <h3 class="discover-card-title">
              <span class="discover-ja" data-ja="食" data-en="Food">食</span>
              <span class="discover-en">Food</span>
            </h3>
            <p class="discover-card-text" data-ja="温泉まんじゅう、地酒、蕎麦── 湯灯の味を食べ歩く" data-en="Steamed buns, local sake &amp; soba noodles — taste Yuakari on foot">
              温泉まんじゅう、地酒、蕎麦<br>── 湯灯の味を食べ歩く
            </p>
            <a href="<?php echo esc_url( home_url( '/food/' ) ); ?>" class="text-link">
              EXPLORE FOOD <span class="text-link-arrow" aria-hidden="true">→</span>
            </a>
          </div>
        </article>
        <article class="discover-card">
          <div class="discover-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/top_img/discover_craft.webp" alt="陶芸や組紐の工芸品" class="discover-card-img" loading="lazy" width="1200" height="896">
          </div>
          <div class="discover-card-body">
            <h3 class="discover-card-title">
              <span class="discover-ja" data-ja="手しごと" data-en="Craft">手しごと</span>
              <span class="discover-en">Craft</span>
            </h3>
            <p class="discover-card-text" data-ja="陶芸・組紐・藍染め── 職人の技にふれる" data-en="Pottery, braiding &amp; indigo dyeing — experience artisan skills">
              陶芸・組紐・藍染め<br>── 職人の技にふれる
            </p>
            <a href="<?php echo esc_url( home_url( '/craft/' ) ); ?>" class="text-link">
              EXPLORE CRAFT <span class="text-link-arrow" aria-hidden="true">→</span>
            </a>
          </div>
        </article>
        <article class="discover-card">
          <div class="discover-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/top_img/discover_festival.webp" alt="提灯が並ぶ夏祭り" class="discover-card-img" loading="lazy" width="1200" height="896">
          </div>
          <div class="discover-card-body">
            <h3 class="discover-card-title">
              <span class="discover-ja" data-ja="祭り" data-en="Festival">祭り</span>
              <span class="discover-en">Festival</span>
            </h3>
            <p class="discover-card-text" data-ja="灯籠流し・夏祭り・雪見酒── 四季の祭りを体験する" data-en="Lantern floating, summer festivals &amp; snow viewing — celebrate every season">
              灯籠流し・夏祭り・雪見酒<br>── 四季の祭りを体験する
            </p>
            <a href="<?php echo esc_url( home_url( '/festival/' ) ); ?>" class="text-link">
              EXPLORE FESTIVAL <span class="text-link-arrow" aria-hidden="true">→</span>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- セクション区切り -->
  <div class="section-divider" aria-hidden="true">
    <span class="section-divider-gem"></span>
  </div>

  <!-- 旅の体験シーン（架空のモデルケース） -->
  <section id="voice" class="voice-section" aria-label="旅の体験シーン例">
    <div class="voice-inner">
      <div class="section-label">
        <span class="section-label-num">04</span>
        <span class="section-label-line" aria-hidden="true"></span>
        <span class="section-label-en">SCENES</span>
      </div>
      <h2 class="section-heading-ja" data-ja="体験シーン例" data-en="Travel Scenarios">体験シーン例</h2>
      <p class="section-heading-sub" data-ja="Travel Scenarios" data-en="Sample Ways to Enjoy Yuakari">Travel Scenarios</p>
      <p class="voice-disclaimer" data-ja="以下はツアー体験をイメージするために構成した架空のモデルケースです。実在のお客様の声ではありません。" data-en="The following fictional scenarios illustrate possible tour experiences; they are not real customer reviews.">以下はツアー体験をイメージするために構成した架空のモデルケースです。実在のお客様の声ではありません。</p>

      <div class="voice-grid">

        <article class="voice-card">
          <div class="voice-card-icon" aria-hidden="true">A</div>
          <p class="voice-card-text" data-ja="朝の食べ歩きから外湯までを一日で巡る、温泉街の歴史をじっくり味わいたい二人旅のモデルです。" data-en="A sample day for two, moving from a morning food walk to the public baths while exploring the town's history.">
            朝の食べ歩きから外湯までを一日で巡る、温泉街の歴史をじっくり味わいたい二人旅のモデルです。
          </p>
          <footer class="voice-card-author">
            <span class="voice-card-name" data-ja="モデルケース A" data-en="Scenario A">モデルケース A</span>
            <span class="voice-card-attr" data-ja="二人旅・一日周遊" data-en="Couple · Full-day tour">二人旅・一日周遊</span>
          </footer>
        </article>

        <article class="voice-card">
          <div class="voice-card-icon" aria-hidden="true">B</div>
          <p class="voice-card-text" data-ja="陶芸体験を中心に、子どもと一緒に手仕事へ触れる家族旅のモデルです。" data-en="A family scenario centered on pottery and hands-on local craft.">
            陶芸体験を中心に、子どもと一緒に手仕事へ触れる家族旅のモデルです。
          </p>
          <footer class="voice-card-author">
            <span class="voice-card-name" data-ja="モデルケース B" data-en="Scenario B">モデルケース B</span>
            <span class="voice-card-attr" data-ja="家族旅・工芸体験" data-en="Family · Craft workshop">家族旅・工芸体験</span>
          </footer>
        </article>

        <article class="voice-card">
          <div class="voice-card-icon" aria-hidden="true">C</div>
          <p class="voice-card-text" data-ja="英語案内で夕暮れの灯り散歩を楽しむ、海外からの二人旅を想定したモデルです。" data-en="An international couple's sample twilight lantern walk with English guidance.">
            英語案内で夕暮れの灯り散歩を楽しむ、海外からの二人旅を想定したモデルです。
          </p>
          <footer class="voice-card-author">
            <span class="voice-card-name" data-ja="モデルケース C" data-en="Scenario C">モデルケース C</span>
            <span class="voice-card-attr" data-ja="海外旅行・英語案内" data-en="International · English guide">海外旅行・英語案内</span>
          </footer>
        </article>

        <article class="voice-card">
          <div class="voice-card-icon" aria-hidden="true">D</div>
          <p class="voice-card-text" data-ja="一人で祭りの灯りと温泉街をゆっくり巡る、季節のひとり旅モデルです。" data-en="A slow solo itinerary through festival lights and the hot spring streets.">
            一人で祭りの灯りと温泉街をゆっくり巡る、季節のひとり旅モデルです。
          </p>
          <footer class="voice-card-author">
            <span class="voice-card-name" data-ja="モデルケース D" data-en="Scenario D">モデルケース D</span>
            <span class="voice-card-attr" data-ja="ひとり旅・季節の祭り" data-en="Solo · Seasonal festival">ひとり旅・季節の祭り</span>
          </footer>
        </article>

        <article class="voice-card">
          <div class="voice-card-icon" aria-hidden="true">E</div>
          <p class="voice-card-text" data-ja="雪見酒と温泉を組み合わせた、冬の記念日旅行を想定したモデルです。" data-en="A winter anniversary scenario pairing snow-viewing sake with a hot spring stay.">
            雪見酒と温泉を組み合わせた、冬の記念日旅行を想定したモデルです。
          </p>
          <footer class="voice-card-author">
            <span class="voice-card-name" data-ja="モデルケース E" data-en="Scenario E">モデルケース E</span>
            <span class="voice-card-attr" data-ja="二人旅・冬の温泉" data-en="Couple · Winter onsen">二人旅・冬の温泉</span>
          </footer>
        </article>

      </div>
    </div>
  </section>

  <!-- セクション区切り -->
  <div class="section-divider" aria-hidden="true">
    <span class="section-divider-gem"></span>
  </div>

  <!--PAUSE（コンセプト帯）-->
  <section id="pause" class="pause-section" aria-label="コンセプト">
    <div class="pause-content">
      <!-- 湯気モチーフ装飾 -->
      <div class="pause-steam" aria-hidden="true">
        <span class="pause-steam-line"></span>
        <span class="pause-steam-line"></span>
        <span class="pause-steam-line"></span>
      </div>
      <p class="pause-title" data-ja="一湯一會" data-en="一湯一會">一湯一會</p>
      <p class="pause-sub"><em>Once in a Bath, Once in a Lifetime</em></p>
      <div class="pause-ornament" aria-hidden="true">
        <span class="pause-ornament-diamond"></span>
      </div>
      <p class="pause-text" data-ja="「一期一会」の精神を温泉の体験に重ねて。湯灯温泉で出会うすべてが、かけがえのない一度きりの体験です。" data-en="Inspired by the spirit of ichigo-ichie — every encounter at Yuakari Onsen is a once-in-a-lifetime experience.">
        「一期一会」の精神を温泉の体験に重ねて。<br>
        湯灯温泉で出会うすべてが、かけがえのない一度きりの体験です。
      </p>
      <a href="<?php echo esc_url( home_url( '/tours/' ) ); ?>" class="pause-cta"
         data-ja="体験ツアーを見る →" data-en="Explore Tours →">
        体験ツアーを見る →
      </a>
    </div>
  </section>

  <!--ACCESS-->
  <section id="access" class="access-section">
    <div class="access-inner">
      <div class="section-label">
        <span class="section-label-num">05</span>
        <span class="section-label-line" aria-hidden="true"></span>
        <span class="section-label-en">ACCESS</span>
      </div>
      <h2 class="section-heading-ja" data-ja="アクセス" data-en="Access">アクセス</h2>
      <p class="section-heading-sub" data-ja="Getting Here" data-en="Getting Here">Getting Here</p>
      <div class="access-content">
        <div class="access-map">
          <div class="access-map-wrap">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12800!2d138.783!3d36.688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzbCsDQxJzE2LjgiTiAxMzjCsDQ2JzU4LjgiRQ!5e0!3m2!1sja!2sjp!4v1700000000000!5m2!1sja!2sjp"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="湯灯温泉アクセスマップ">
            </iframe>
          </div>
        </div>
        <div class="access-info">
          <dl class="access-info-list">
            <div class="access-info-item">
              <dt data-ja="電車でのアクセス" data-en="By Train">電車でのアクセス</dt>
              <dd data-ja="湯灯駅よりバスで約30分「湯灯温泉」下車" data-en="Approx. 30 min by bus from Yuto Station, get off at &quot;Yuakari Onsen&quot;">湯灯駅よりバスで約30分「湯灯温泉」下車</dd>
            </div>
            <div class="access-info-item">
              <dt data-ja="お車でのアクセス" data-en="By Car">お車でのアクセス</dt>
              <dd data-ja="湯灯ICより約20分・無料駐車場完備" data-en="Approx. 20 min from Yuto IC, free parking available">湯灯ICより約20分・無料駐車場完備</dd>
            </div>
            <div class="access-info-item">
              <dt data-ja="営業時間" data-en="Business Hours">営業時間</dt>
              <dd data-ja="9:00 – 18:00（ツアーにより異なります）" data-en="9:00 – 18:00 (varies by tour)">9:00 – 18:00（ツアーにより異なります）</dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
  </section>

  <!--CONTACT-->
  <section id="contact" class="contact-section">
    <div class="contact-inner">
      <!-- 左: コピーエリア -->
      <div class="contact-copy-area">
        <h2 class="contact-heading" data-ja="フォームデモ" data-en="Form Demo">フォームデモ</h2>
        <p class="contact-sub"
           data-ja="入力・エラー・完了状態を試せます。入力内容は送信されません。"
           data-en="Try the form's input, validation, and completion states. Entries are not transmitted.">
          入力・エラー・完了状態を試せます。入力内容は送信されません。
        </p>
        <p class="contact-assurance"
           data-ja="FICTIONAL PROJECT / 実際の予約受付はありません"
           data-en="FICTIONAL PROJECT / No real bookings">
          FICTIONAL PROJECT / 実際の予約受付はありません
        </p>
      </div>
      <!-- 右: アクションエリア -->
      <div class="contact-cta-area">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="contact-btn"
           data-ja="TRY THE FORM" data-en="TRY THE FORM">TRY THE FORM</a>
        <p class="contact-info-line">
          <span data-ja="制作相談はRikuのポートフォリオへ" data-en="For real project inquiries, contact Riku.">制作相談はRikuのポートフォリオへ</span>
        </p>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
