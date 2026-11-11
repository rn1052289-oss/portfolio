<?php get_header(); ?>

<main id="main-content">

  <!-- パンくず（共通） -->
  <nav class="sub-breadcrumb" aria-label="パンくずリスト">
    <div class="sub-breadcrumb-inner">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sub-breadcrumb-link" data-ja="TOP" data-en="TOP">TOP</a>
      <span class="sub-breadcrumb-sep" aria-hidden="true">/</span>
      <span class="sub-breadcrumb-current" data-ja="ABOUT" data-en="ABOUT">ABOUT</span>
    </div>
  </nav>

  <!-- ファーストビュー（About: 哲学・静けさ）-->
  <section class="sub-firstview sub-firstview--about">
    <div class="sub-firstview-overlay" aria-hidden="true"></div>
    <div class="sub-firstview-inner">
      <p class="sub-firstview-eyebrow" aria-hidden="true">YUAKARI &amp; Co.</p>
      <h1 class="sub-firstview-title" data-ja="湯灯商會について" data-en="About YUAKARI &amp; Co.">湯灯商會について</h1>
      <p class="sub-firstview-sub"><em>About YUAKARI &amp; Co.</em></p>
      <span class="sub-firstview-line" aria-hidden="true"></span>
      <p class="sub-firstview-lead"
         data-ja="山間の温泉街に根ざした、地域密着型の観光体験事業者"
         data-en="A community-based tourism operator rooted in the mountain hot spring town">
        山間の温泉街に根ざした、地域密着型の観光体験事業者
      </p>
    </div>
  </section>

  <!-- ========== PHILOSOPHY ========== -->
  <section id="philosophy" class="philosophy-section">
    <div class="philosophy-inner">
      <div class="philosophy-text-area">
        <div class="section-label">
          <span class="section-label-num">01</span>
          <span class="section-label-line" aria-hidden="true"></span>
          <span class="section-label-en">PHILOSOPHY</span>
        </div>
        <h2 class="section-heading-ja" data-ja="私たちの想い" data-en="Our Philosophy">私たちの想い</h2>

        <p class="philosophy-body" data-ja="湯灯商會は、山間の温泉街「湯灯温泉」に根ざし、この街でしか出会えない体験を届ける地域密着型の観光体験事業者です。" data-en="YUAKARI &amp; Co. is rooted in the mountain hot spring town of Yuakari Onsen, delivering unique experiences found nowhere else.">
          湯灯商會は、山間の温泉街「湯灯温泉」に根ざし、<br>
          この街でしか出会えない体験を届ける<br>
          地域密着型の観光体験事業者です。
        </p>
        <p class="philosophy-body" data-ja="大正期に開湯し、昭和中期には湯治場として栄えた湯灯温泉。バブル後の衰退を経て、近年レトロブームとインバウンド需要により再び注目を集めています。" data-en="Founded in the Taisho era and thriving as a healing retreat in mid-Showa, Yuakari Onsen is now experiencing a revival through the retro boom and inbound tourism.">
          大正期に開湯し、昭和中期には湯治場として栄えた湯灯温泉。<br>
          バブル後の衰退を経て、近年レトロブームと<br>
          インバウンド需要により再び注目を集めています。
        </p>
        <p class="philosophy-body" data-ja="私たちは、この街の食・工芸・祭りを横断する複合型ツアーをひとつのブランドとして企画・運営し、訪れるすべての方に「一湯一會」の体験をお届けします。" data-en="We plan and operate combined tours weaving together food, crafts, and festivals — delivering our 'Once in a Bath, Once in a Lifetime' experience to every visitor.">
          私たちは、この街の食・工芸・祭りを横断する<br>
          複合型ツアーをひとつのブランドとして企画・運営し、<br>
          訪れるすべての方に「一湯一會」の体験をお届けします。
        </p>
      </div>
      <div class="philosophy-image-area">
        <div class="philosophy-slider" id="philosophy-slider">
          <div class="philosophy-slide is-active">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about_img/about_philosophy.webp" alt="温泉街の風景" class="philosophy-slide-img" loading="lazy" width="1584" height="672">
            <span class="philosophy-slide-caption" data-ja="湯灯温泉の風景" data-en="Scenery of Yuakari Onsen">湯灯温泉の風景</span>
          </div>
          <div class="philosophy-slide">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about_img/about_slide01.webp" alt="温泉街の全景" class="philosophy-slide-img" loading="lazy" width="1200" height="896">
            <span class="philosophy-slide-caption" data-ja="温泉街の全景" data-en="Panoramic view of the onsen town">温泉街の全景</span>
          </div>
          <div class="philosophy-slide">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about_img/about_slide02.webp" alt="朝霧の石畳" class="philosophy-slide-img" loading="lazy" width="1200" height="896">
            <span class="philosophy-slide-caption" data-ja="朝霧の石畳" data-en="Morning mist over cobblestones">朝霧の石畳</span>
          </div>
          <div class="philosophy-slide">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about_img/about_slide03.webp" alt="夜の提灯通り" class="philosophy-slide-img" loading="lazy" width="1200" height="896">
            <span class="philosophy-slide-caption" data-ja="夜の提灯通り" data-en="Lantern-lit street at night">夜の提灯通り</span>
          </div>
          <div class="philosophy-slide">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about_img/about_slide04.webp" alt="川沿いの足湯" class="philosophy-slide-img" loading="lazy" width="1200" height="896">
            <span class="philosophy-slide-caption" data-ja="川沿いの足湯" data-en="Riverside foot bath">川沿いの足湯</span>
          </div>
          <div class="philosophy-slide">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about_img/about_slide05.webp" alt="共同浴場の入口" class="philosophy-slide-img" loading="lazy" width="1200" height="896">
            <span class="philosophy-slide-caption" data-ja="共同浴場の入口" data-en="Entrance to the public bath">共同浴場の入口</span>
          </div>
        </div>
        <!-- ドットインジケーター -->
        <div class="philosophy-dots" id="philosophy-dots">
          <button type="button" class="philosophy-dot is-active" data-index="0" aria-label="スライド1"></button>
          <button type="button" class="philosophy-dot" data-index="1" aria-label="スライド2"></button>
          <button type="button" class="philosophy-dot" data-index="2" aria-label="スライド3"></button>
          <button type="button" class="philosophy-dot" data-index="3" aria-label="スライド4"></button>
          <button type="button" class="philosophy-dot" data-index="4" aria-label="スライド5"></button>
          <button type="button" class="philosophy-dot" data-index="5" aria-label="スライド6"></button>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== STORY ========== -->
  <section id="story" class="story-section">
    <div class="story-inner">
      <div class="section-label section-label-light">
        <span class="section-label-num">02</span>
        <span class="section-label-line" aria-hidden="true"></span>
        <span class="section-label-en">STORY</span>
      </div>
      <h2 class="section-heading-ja section-heading-light" data-ja="湯灯温泉の物語" data-en="The Story of Yuakari Onsen">湯灯温泉の物語</h2>
      <p class="section-heading-sub section-heading-sub-light" data-ja="The Story of Yuakari Onsen" data-en="Our History">The Story of Yuakari Onsen</p>

      <!-- タイムライン -->
      <div class="timeline">
        <div class="timeline-item">
          <div class="timeline-year">
            <span class="timeline-year-label" data-ja="大正期" data-en="Taisho Era">大正期</span>
          </div>
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <p class="timeline-title" data-ja="開湯。山間に湧く温泉が発見される" data-en="Discovery of the hot spring">開湯。山間に湧く温泉が発見される</p>
            <p class="timeline-en">Discovery of the hot spring</p>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-year">
            <span class="timeline-year-label" data-ja="昭和中期" data-en="Mid-Showa">昭和中期</span>
          </div>
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <p class="timeline-title" data-ja="湯治場として栄え、旅館や外湯が建ち並ぶ" data-en="Golden age as a healing retreat">湯治場として栄え、旅館や外湯が建ち並ぶ</p>
            <p class="timeline-en">Golden age as a healing retreat</p>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-year">
            <span class="timeline-year-label" data-ja="衰退期" data-en="Post-bubble">衰退期</span>
          </div>
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <p class="timeline-title" data-ja="バブル崩壊後、観光客が減少し空き店舗が増える" data-en="Post-bubble decline: visitor numbers fall">バブル崩壊後、観光客が減少し空き店舗が増える</p>
            <p class="timeline-en">Post-bubble decline</p>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-year">
            <span class="timeline-year-label" data-ja="転換" data-en="Revival">転換</span>
          </div>
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <p class="timeline-title" data-ja="レトロブームとインバウンド需要で再注目" data-en="Revival through retro &amp; inbound tourism">レトロブームとインバウンド需要で再注目</p>
            <p class="timeline-en">Revival through retro &amp; inbound tourism</p>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-year">
            <span class="timeline-year-label" data-ja="現在" data-en="Now">現在</span>
          </div>
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <p class="timeline-title" data-ja="湯灯商會が複合型体験ツアーを開始" data-en="YUAKARI &amp; Co. launches experience tours">湯灯商會が複合型体験ツアーを開始</p>
            <p class="timeline-en">YUAKARI &amp; Co. launches experience tours</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== 差別化・私たちが選ばれる理由 ========== -->
  <section id="why" class="why-section" style="padding:4rem 0;background:#f9f5ef;">
    <div style="max-width:1080px;margin:0 auto;padding:0 2rem;">
      <div class="section-label">
        <span class="section-label-num">03</span>
        <span class="section-label-line" aria-hidden="true"></span>
        <span class="section-label-en">WHY CHOOSE US</span>
      </div>
      <h2 class="section-heading-ja" data-ja="湯灯商會が選ばれる4つの理由" data-en="4 Reasons Guests Choose YUAKARI &amp; Co.">湯灯商會が選ばれる4つの理由</h2>
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:2rem;margin-top:2.5rem;">
        <div class="why-item">
          <p class="why-num" style="font-size:2rem;font-family:'Cormorant Garamond',serif;color:#96691c;margin-bottom:.5rem;">01</p>
          <h3 class="why-title" style="font-size:1rem;letter-spacing:.1em;margin-bottom:.5rem;" data-ja="地元密着" data-en="Community-Rooted">地元密着</h3>
          <p class="why-desc" style="font-size:.875rem;line-height:1.8;opacity:.85;" data-ja="地元の職人・食・文化を直接つなぐ。よそ行きでない「本物」の体験を提供します。" data-en="We connect you directly with local artisans, food, and culture — no tourist-only polish, just the real thing.">地元の職人・食・文化を直接つなぐ。よそ行きでない「本物」の体験を提供します。</p>
        </div>
        <div class="why-item">
          <p class="why-num" style="font-size:2rem;font-family:'Cormorant Garamond',serif;color:#96691c;margin-bottom:.5rem;">02</p>
          <h3 class="why-title" style="font-size:1rem;letter-spacing:.1em;margin-bottom:.5rem;" data-ja="体験の統合" data-en="Integrated Experiences">体験の統合</h3>
          <p class="why-desc" style="font-size:.875rem;line-height:1.8;opacity:.85;" data-ja="湯・食・工芸・祭りを「バラバラに楽しむ」のではなく、一つのブランドとして体験できます。" data-en="Hot springs, food, craft &amp; festivals — experienced not separately, but as one cohesive journey.">湯・食・工芸・祭りを「バラバラに楽しむ」のではなく、一つのブランドとして体験できます。</p>
        </div>
        <div class="why-item">
          <p class="why-num" style="font-size:2rem;font-family:'Cormorant Garamond',serif;color:#96691c;margin-bottom:.5rem;">03</p>
          <h3 class="why-title" style="font-size:1rem;letter-spacing:.1em;margin-bottom:.5rem;" data-ja="レトロブランディング" data-en="Retro Branding">レトロブランディング</h3>
          <p class="why-desc" style="font-size:.875rem;line-height:1.8;opacity:.85;" data-ja="大正期からの街並みと昭和のレトロ感を、現代のデザインとともにブランド化しています。" data-en="Taisho-era streetscapes and Showa nostalgia, elevated into a contemporary brand experience.">大正期からの街並みと昭和のレトロ感を、現代のデザインとともにブランド化しています。</p>
        </div>
        <div class="why-item">
          <p class="why-num" style="font-size:2rem;font-family:'Cormorant Garamond',serif;color:#96691c;margin-bottom:.5rem;">04</p>
          <h3 class="why-title" style="font-size:1rem;letter-spacing:.1em;margin-bottom:.5rem;" data-ja="日英対応" data-en="Japanese &amp; English">日英対応</h3>
          <p class="why-desc" style="font-size:.875rem;line-height:1.8;opacity:.85;" data-ja="英語ガイド対応（週末予約制）。海外からのゲストも安心してご参加いただけます。" data-en="English guide available on weekends (advance booking). International guests are warmly welcome.">英語ガイド対応（週末予約制）。海外からのゲストも安心してご参加いただけます。</p>
        </div>
      </div>
      <div style="margin-top:2.5rem;text-align:center;">
        <a href="<?php echo esc_url( home_url( '/tours/' ) ); ?>" class="text-link" data-ja="ツアー一覧を見る →" data-en="See all tours →">ツアー一覧を見る <span aria-hidden="true">→</span></a>
        &nbsp;&nbsp;
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="text-link" data-ja="問い合わせる →" data-en="Get in touch →">問い合わせる <span aria-hidden="true">→</span></a>
      </div>
    </div>
  </section>

  <!-- ========== FEATURES ========== -->
  <section id="features" class="features-section">
    <div class="features-inner">
      <div class="section-label">
        <span class="section-label-num">03</span>
        <span class="section-label-line" aria-hidden="true"></span>
        <span class="section-label-en">FEATURES</span>
      </div>
      <h2 class="section-heading-ja" data-ja="湯灯温泉の魅力" data-en="Charms of Yuakari Onsen">湯灯温泉の魅力</h2>
      <p class="section-heading-sub" data-ja="Charms of Yuakari Onsen" data-en="What Makes Us Special">Charms of Yuakari Onsen</p>

      <div class="features-grid">
        <!-- カード1 -->
        <article class="feature-card" data-modal="feature-modal-01">
          <div class="feature-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about_img/about_feature01.webp" alt="石畳の路地" class="feature-card-img" loading="lazy" width="1408" height="768">
          </div>
          <div class="feature-card-body">
            <h3 class="feature-card-title" data-ja="石畳の路地" data-en="Cobblestone Alleys">石畳の路地</h3>
            <p class="feature-card-en">Cobblestone Alleys</p>
            <p class="feature-card-desc" data-ja="風情ある石畳の小路が温泉街を縫うように続く" data-en="Charming cobblestone paths wind through the onsen town">
              風情ある石畳の小路が<br>温泉街を縫うように続く
            </p>
            <button type="button" class="feature-card-btn" aria-label="石畳の路地の詳細を見る">DETAILS →</button>
          </div>
        </article>

        <!-- カード2 -->
        <article class="feature-card" data-modal="feature-modal-02">
          <div class="feature-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about_img/about_feature02.webp" alt="木造三階建て旅館" class="feature-card-img" loading="lazy" width="1408" height="768">
          </div>
          <div class="feature-card-body">
            <h3 class="feature-card-title" data-ja="木造三階建て旅館" data-en="Wooden Ryokan">木造三階建て旅館</h3>
            <p class="feature-card-en">Wooden Ryokan</p>
            <p class="feature-card-desc" data-ja="大正の面影を残す三階建ての木造旅館群" data-en="Three-story wooden inns preserving Taisho-era charm">
              大正の面影を残す<br>三階建ての木造旅館群
            </p>
            <button type="button" class="feature-card-btn" aria-label="木造三階建て旅館の詳細を見る">DETAILS →</button>
          </div>
        </article>

        <!-- カード3 -->
        <article class="feature-card" data-modal="feature-modal-03">
          <div class="feature-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about_img/about_feature03.webp" alt="タイル装飾の外湯" class="feature-card-img" loading="lazy" width="1408" height="768">
          </div>
          <div class="feature-card-body">
            <h3 class="feature-card-title" data-ja="タイル装飾の外湯" data-en="Tiled Public Baths">タイル装飾の外湯</h3>
            <p class="feature-card-en">Tiled Public Baths</p>
            <p class="feature-card-desc" data-ja="レトロなタイル装飾が美しい共同浴場（外湯）" data-en="Beautifully tiled communal bathhouses open to all">
              レトロなタイル装飾が美しい<br>共同浴場（外湯）
            </p>
            <button type="button" class="feature-card-btn" aria-label="タイル装飾の外湯の詳細を見る">DETAILS →</button>
          </div>
        </article>

        <!-- カード4 -->
        <article class="feature-card" data-modal="feature-modal-04">
          <div class="feature-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about_img/about_feature04.webp" alt="川沿いの温泉街" class="feature-card-img" loading="lazy" width="1408" height="768">
          </div>
          <div class="feature-card-body">
            <h3 class="feature-card-title" data-ja="川沿いの温泉街" data-en="Riverside Onsen Town">川沿いの温泉街</h3>
            <p class="feature-card-en">Riverside Onsen Town</p>
            <p class="feature-card-desc" data-ja="渓流のせせらぎと石垣の風景" data-en="Streams and stone walls create a timeless landscape">
              渓流のせせらぎと<br>石垣の風景
            </p>
            <button type="button" class="feature-card-btn" aria-label="川沿いの温泉街の詳細を見る">DETAILS →</button>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- ========== PAUSE（コンセプト帯） ========== -->
  <section class="about-pause-section" aria-label="コンセプト">
    <div class="about-pause-content">
      <p class="about-pause-title" data-ja="一湯一會" data-en="一湯一會">一湯一會</p>
      <p class="about-pause-sub"><em>Once in a Bath, Once in a Lifetime</em></p>
      <p class="about-pause-text" data-ja="訪れる人それぞれが、自分だけの「一會」を見つける" data-en="Every visitor discovers their own once-in-a-lifetime moment">
        訪れる人それぞれが、自分だけの「一會」を見つける
      </p>
    </div>
  </section>

  <!-- ========== CTA帯（ツアーを見る） ========== -->
  <section class="about-cta-section">
    <div class="about-cta-inner">
      <h2 class="about-cta-heading" data-ja="ツアーを見る" data-en="Explore Our Tours">ツアーを見る</h2>
      <p class="about-cta-sub"><em>Explore Our Tours</em></p>
      <a href="<?php echo esc_url( home_url( '/tours/' ) ); ?>" class="about-cta-btn">VIEW TOURS →</a>
    </div>
  </section>

</main>

<!-- ========== FEATURES モーダル ========== -->
<!--
  【配置について】
  モーダルを </main> の外・<?php get_footer(); ?> の直前に置いている理由：
  common.css で main に transform アニメーション（page-fade-in）が当たっており、
  transform が none でない祖先要素は position:fixed の包含ブロックになる CSS 仕様がある。
  main の内側にモーダルを置くと fixed がビューポートではなく main 基準になり、
  スクロール位置によってモーダルがずれてしまう。
  main の外に出すことでビューポート基準の正しい配置になる。
-->

<!-- モーダル1：石畳の路地 -->
<div class="feature-modal-overlay" id="feature-modal-01" aria-hidden="true">
  <div class="feature-modal" role="dialog" aria-modal="true" aria-label="石畳の路地の詳細">
    <button type="button" class="feature-modal-close" aria-label="閉じる">✕</button>
    <div class="feature-modal-image-area">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about_img/about_feature01.webp" alt="石畳の路地" class="feature-modal-img" loading="lazy" width="1408" height="768">
    </div>
    <div class="feature-modal-body">
      <h3 class="feature-modal-title" data-ja="石畳の路地" data-en="Cobblestone Alleys">石畳の路地</h3>
      <p class="feature-modal-en">Cobblestone Alleys</p>
      <div class="feature-modal-text">
        <p data-ja="湯灯温泉の街並みを特徴づけるのが、大正期から変わらない石畳の路地です。手作業で敷き詰められた自然石が、雨に濡れると独特の艶を帯び、提灯の灯りを映して幻想的な表情を見せます。" data-en="The cobblestone alleyways have defined Yuakari Onsen since the Taisho era. When wet with rain, the hand-laid natural stones take on a unique sheen, reflecting the lantern light in a fantastical glow.">
          湯灯温泉の街並みを特徴づけるのが、大正期から変わらない石畳の路地です。
          手作業で敷き詰められた自然石が、雨に濡れると独特の艶を帯び、
          提灯の灯りを映して幻想的な表情を見せます。
        </p>
        <p data-ja="路地の両脇には格子戸の町家や小さな土産物屋が軒を連ね、角を曲がるたびに新しい景色が現れます。朝は打ち水の清々しさ、夕暮れは行灯の温かみ——時間帯によってまったく異なる風情を楽しめるのも、この路地の魅力です。" data-en="Latticed machiya townhouses and small souvenir shops line both sides of the alley, with new scenery appearing around every corner. In the morning, the refreshing splash of water; at dusk, the warmth of lanterns — the atmosphere changes entirely with the hour.">
          路地の両脇には格子戸の町家や小さな土産物屋が軒を連ね、
          角を曲がるたびに新しい景色が現れます。
          朝は打ち水の清々しさ、夕暮れは行灯の温かみ——
          時間帯によってまったく異なる風情を楽しめるのも、この路地の魅力です。
        </p>
        <p data-ja="散策ツアーでは地元ガイドとともに、看板建築の意匠や石垣に残る刻印など、ひとりでは見落としてしまう細部まで味わうことができます。" data-en="On the walking tour, local guides reveal details you might miss on your own — the designs of signboard architecture and the inscriptions carved into the stone walls.">
          散策ツアーでは地元ガイドとともに、
          看板建築の意匠や石垣に残る刻印など、
          ひとりでは見落としてしまう細部まで味わうことができます。
        </p>
      </div>
    </div>
  </div>
</div>

<!-- モーダル2：木造三階建て旅館 -->
<div class="feature-modal-overlay" id="feature-modal-02" aria-hidden="true">
  <div class="feature-modal" role="dialog" aria-modal="true" aria-label="木造三階建て旅館の詳細">
    <button type="button" class="feature-modal-close" aria-label="閉じる">✕</button>
    <div class="feature-modal-image-area">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about_img/about_feature02.webp" alt="木造三階建て旅館" class="feature-modal-img" loading="lazy" width="1408" height="768">
    </div>
    <div class="feature-modal-body">
      <h3 class="feature-modal-title" data-ja="木造三階建て旅館" data-en="Wooden Ryokan">木造三階建て旅館</h3>
      <p class="feature-modal-en">Wooden Ryokan</p>
      <div class="feature-modal-text">
        <p data-ja="湯灯温泉を象徴する建築が、大正〜昭和初期に建てられた木造三階建ての旅館群です。釘を使わない伝統工法で組まれた梁や柱は、百年の歳月を経てなお堅牢さと美しさを併せ持っています。" data-en="The iconic buildings of Yuakari Onsen are the three-story wooden ryokan built in the Taisho to early Showa periods. Beams and pillars joined using traditional nail-free techniques retain their strength and beauty even after a century.">
          湯灯温泉を象徴する建築が、大正〜昭和初期に建てられた木造三階建ての旅館群です。
          釘を使わない伝統工法で組まれた梁や柱は、百年の歳月を経てなお
          堅牢さと美しさを併せ持っています。
        </p>
        <p data-ja="最上階からは温泉街の全景と背後の山並みを一望でき、冬の早朝には湯煙が谷間を埋め尽くす幻想的な光景に出会えます。各旅館は源泉かけ流しの湯を持ち、泉質や温度がそれぞれ異なるため、「湯巡り」を楽しむ宿泊客も少なくありません。" data-en="From the top floor you can survey the whole onsen town and the mountains beyond. On early winter mornings, steam fills the valley in a fantastical scene. Each ryokan has its own source spring with different minerals and temperatures, making 'yu-meguri' (bath hopping) popular among guests.">
          最上階からは温泉街の全景と背後の山並みを一望でき、
          冬の早朝には湯煙が谷間を埋め尽くす幻想的な光景に出会えます。
          各旅館は源泉かけ流しの湯を持ち、泉質や温度がそれぞれ異なるため、
          「湯巡り」を楽しむ宿泊客も少なくありません。
        </p>
        <p data-ja="現在も数軒の旅館が現役で営業を続けており、畳の香り、障子越しの柔らかな光、そして女将の心づくしのもてなしを体験することができます。" data-en="Several ryokan are still in operation today, offering the scent of tatami mats, soft light through shoji screens, and the heartfelt hospitality of the proprietress.">
          現在も数軒の旅館が現役で営業を続けており、
          畳の香り、障子越しの柔らかな光、
          そして女将の心づくしのもてなしを体験することができます。
        </p>
      </div>
    </div>
  </div>
</div>

<!-- モーダル3：タイル装飾の外湯 -->
<div class="feature-modal-overlay" id="feature-modal-03" aria-hidden="true">
  <div class="feature-modal" role="dialog" aria-modal="true" aria-label="タイル装飾の外湯の詳細">
    <button type="button" class="feature-modal-close" aria-label="閉じる">✕</button>
    <div class="feature-modal-image-area">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about_img/about_feature03.webp" alt="タイル装飾の外湯" class="feature-modal-img" loading="lazy" width="1408" height="768">
    </div>
    <div class="feature-modal-body">
      <h3 class="feature-modal-title" data-ja="タイル装飾の外湯" data-en="Tiled Public Baths">タイル装飾の外湯</h3>
      <p class="feature-modal-en">Tiled Public Baths</p>
      <div class="feature-modal-text">
        <p data-ja="湯灯温泉には、地元の人々が日常的に通う共同浴場「外湯」が3か所あります。いずれも昭和初期に建てられ、壁面や浴槽に施されたレトロなタイル装飾が当時の職人技を今に伝えています。" data-en="Yuakari Onsen has three communal bathhouses ('soto-yu') frequented daily by locals. All were built in the early Showa period, and their retro tile decorations on walls and bathtubs preserve the craftsmanship of the era.">
          湯灯温泉には、地元の人々が日常的に通う共同浴場「外湯」が3か所あります。
          いずれも昭和初期に建てられ、壁面や浴槽に施されたレトロなタイル装飾が
          当時の職人技を今に伝えています。
        </p>
        <p data-ja="なかでも「湯灯の湯」は、深い藍色と乳白色のモザイクタイルが美しく、SNSでの注目をきっかけに若い世代の来訪が増えています。源泉は弱アルカリ性のナトリウム泉で、肌あたりが柔らかく、「美人の湯」として古くから親しまれてきました。" data-en="The 'Yuakari-no-yu' in particular, with its beautiful deep indigo and milky white mosaic tiles, has attracted younger visitors following its rise on social media. The mildly alkaline sodium spring is gentle on the skin and has long been known as 'bijin-no-yu' (beauty spring).">
          なかでも「湯灯の湯」は、深い藍色と乳白色のモザイクタイルが美しく、
          SNSでの注目をきっかけに若い世代の来訪が増えています。
          源泉は弱アルカリ性のナトリウム泉で、肌あたりが柔らかく、
          「美人の湯」として古くから親しまれてきました。
        </p>
        <p data-ja="湯灯商會のツアーでは、外湯の入り方や地元のマナーをガイドが丁寧にご案内するため、初めての方や海外からのお客様にも安心してお楽しみいただけます。タオルと入浴券はツアー料金に含まれています。" data-en="On YUAKARI &amp; Co. tours, guides carefully explain bathhouse etiquette and local customs, so first-time visitors and guests from overseas can enjoy the experience with confidence. Towels and admission tickets are included in the tour fee.">
          湯灯商會のツアーでは、外湯の入り方や地元のマナーを
          ガイドが丁寧にご案内するため、
          初めての方や海外からのお客様にも安心してお楽しみいただけます。
          タオルと入浴券はツアー料金に含まれています。
        </p>
      </div>
    </div>
  </div>
</div>

<!-- モーダル4：川沿いの温泉街 -->
<div class="feature-modal-overlay" id="feature-modal-04" aria-hidden="true">
  <div class="feature-modal" role="dialog" aria-modal="true" aria-label="川沿いの温泉街の詳細">
    <button type="button" class="feature-modal-close" aria-label="閉じる">✕</button>
    <div class="feature-modal-image-area">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about_img/about_feature04.webp" alt="川沿いの温泉街" class="feature-modal-img" loading="lazy" width="1408" height="768">
    </div>
    <div class="feature-modal-body">
      <h3 class="feature-modal-title" data-ja="川沿いの温泉街" data-en="Riverside Onsen Town">川沿いの温泉街</h3>
      <p class="feature-modal-en">Riverside Onsen Town</p>
      <div class="feature-modal-text">
        <p data-ja="湯灯温泉は、山あいを流れる清流「灯川（あかりがわ）」の両岸に旅館や商店が建ち並ぶ、川沿いの温泉街です。渓谷に架かる石橋からは、苔むした石垣と木造建築が水面に映る風景を眺めることができます。" data-en="Yuakari Onsen lines both banks of the Akari River, a clear mountain stream flowing through the valley. From the stone bridge spanning the gorge, you can gaze upon mossy stone walls and wooden buildings reflected in the water.">
          湯灯温泉は、山あいを流れる清流「灯川（あかりがわ）」の両岸に
          旅館や商店が建ち並ぶ、川沿いの温泉街です。
          渓谷に架かる石橋からは、苔むした石垣と木造建築が
          水面に映る風景を眺めることができます。
        </p>
        <p data-ja="春は桜と新緑、夏は蛍、秋は紅葉、冬は雪見——四季折々の表情を見せる渓流沿いの散歩道は、地元の人々にとっても日々の暮らしの一部であり、観光客にとっては何度訪れても飽きることのない景観です。" data-en="Cherry blossoms and fresh greenery in spring, fireflies in summer, autumn foliage, and snow-viewing in winter — the riverside promenade changes with the seasons and never loses its charm.">
          春は桜と新緑、夏は蛍、秋は紅葉、冬は雪見——
          四季折々の表情を見せる渓流沿いの散歩道は、
          地元の人々にとっても日々の暮らしの一部であり、
          観光客にとっては何度訪れても飽きることのない景観です。
        </p>
        <p data-ja="川のせせらぎをBGMに、欄干に腰掛けてだんごを頬張ったり、足湯に浸かりながら渓谷を見下ろしたり。湯灯温泉ならではの、ゆったりとした時間の過ごし方がここにあります。" data-en="With the sound of the river as your soundtrack, you can sit on a railing to enjoy dango sweets, or soak your feet in a foot bath while gazing over the gorge. Here is the unhurried pace of time that only Yuakari Onsen can offer.">
          川のせせらぎをBGMに、
          欄干に腰掛けてだんごを頬張ったり、
          足湯に浸かりながら渓谷を見下ろしたり。
          湯灯温泉ならではの、ゆったりとした時間の過ごし方がここにあります。
        </p>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
