<?php get_header(); ?>

<main id="main-content">

  <!-- パンくず（共通） -->
  <nav class="sub-breadcrumb" aria-label="パンくずリスト">
    <div class="sub-breadcrumb-inner">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sub-breadcrumb-link" data-ja="TOP" data-en="TOP">TOP</a>
      <span class="sub-breadcrumb-sep" aria-hidden="true">/</span>
      <span class="sub-breadcrumb-current" data-ja="FESTIVAL" data-en="FESTIVAL">FESTIVAL</span>
    </div>
  </nav>

  <!-- ファーストビュー（共通） -->
  <section class="sub-firstview sub-firstview--festival">
    <div class="sub-firstview-overlay" aria-hidden="true"></div>
    <div class="sub-firstview-inner">
      <h1 class="sub-firstview-title" data-ja="季節のイベント・祭り" data-en="Seasonal Events &amp; Festivals">季節のイベント・祭り</h1>
      <p class="sub-firstview-sub"><em>Seasonal Events &amp; Festivals</em></p>
      <span class="sub-firstview-line" aria-hidden="true"></span>
      <p class="sub-firstview-lead" data-ja="四季の祭りを体験する —— 湯灯温泉の一年" data-en="Experience the festivals of four seasons — A year at Yuakari Onsen">四季の祭りを体験する —— 湯灯温泉の一年</p>
    </div>
  </section>

  <!-- ========================================
       カードグリッド（季節順：春→夏→秋→冬）
       ======================================== -->
  <section class="festival-grid-section">
    <div class="festival-grid-inner">

      <!-- セクションラベル -->
      <div class="section-label">
        <span class="section-label-num">01</span>
        <span class="section-label-line" aria-hidden="true"></span>
        <span class="section-label-en">FESTIVAL</span>
      </div>

      <!-- 季節リボン（開催月の目安） -->
      <div class="festival-season-ribbon" aria-label="開催時期の目安" style="display:flex;gap:.5rem;flex-wrap:wrap;margin-bottom:2rem;">
        <span class="festival-season-tag"><span class="festival-season-mark festival-season-mark--spring" aria-hidden="true">春</span>4月</span>
        <span class="festival-season-tag"><span class="festival-season-mark festival-season-mark--summer" aria-hidden="true">夏</span>8月</span>
        <span class="festival-season-tag"><span class="festival-season-mark festival-season-mark--autumn" aria-hidden="true">秋</span>10〜11月</span>
        <span class="festival-season-tag"><span class="festival-season-mark festival-season-mark--winter" aria-hidden="true">冬</span>1〜2月</span>
        <span style="font-size:.75rem;opacity:.6;padding:.3em 0;letter-spacing:.08em;">— 開催日程の詳細はお問い合わせください</span>
      </div>

      <!-- 3×2 カードグリッド -->
      <div class="festival-grid">

        <!-- 春：春の湯灯市 -->
        <article class="festival-card" data-modal="modal-spring">
          <div class="festival-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/festival_img/festival_spring.webp" alt="春の湯灯市の様子" class="festival-card-img" loading="lazy" width="1200" height="896">
          </div>
          <div class="festival-card-body">
            <h2 class="festival-card-title" data-ja="春の湯灯市" data-en="Spring Yuakari Market">春の湯灯市</h2>
            <p class="festival-card-en">Spring Yuakari Market</p>
            <p class="festival-card-desc" data-ja="地元の工芸品や食材が並ぶ春の市。毎年4月第2週末に開催" data-en="A spring market featuring local crafts and seasonal ingredients, held every second weekend of April.">
              地元の工芸品や食材が並ぶ春の市。<br>毎年4月第2週末に開催
            </p>
            <button type="button" class="festival-card-btn text-link" aria-label="春の湯灯市の詳細を見る">
              DETAIL <span class="text-link-arrow" aria-hidden="true">→</span>
            </button>
          </div>
        </article>

        <!-- 夏：湯灯灯籠流し -->
        <article class="festival-card" data-modal="modal-lantern">
          <div class="festival-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/festival_img/festival_lantern.webp" alt="湯灯灯籠流しの様子" class="festival-card-img" loading="lazy" width="1200" height="896">
          </div>
          <div class="festival-card-body">
            <h2 class="festival-card-title" data-ja="湯灯灯籠流し" data-en="Yuakari Lantern Festival">湯灯灯籠流し</h2>
            <p class="festival-card-en">Yuakari Lantern Festival</p>
            <p class="festival-card-desc" data-ja="夏の夜、川面に浮かぶ灯籠が幻想的。8月中旬開催" data-en="On summer nights, lanterns floating on the river create a dreamlike scene. Held in mid-August.">
              夏の夜、川面に浮かぶ灯籠が幻想的。<br>8月中旬開催
            </p>
            <button type="button" class="festival-card-btn text-link" aria-label="湯灯灯籠流しの詳細を見る">
              DETAIL <span class="text-link-arrow" aria-hidden="true">→</span>
            </button>
          </div>
        </article>

        <!-- 夏：湯灯夏祭り -->
        <article class="festival-card" data-modal="modal-summer">
          <div class="festival-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/festival_img/festival_summer.webp" alt="湯灯夏祭りの様子" class="festival-card-img" loading="lazy" width="1200" height="896">
          </div>
          <div class="festival-card-body">
            <h2 class="festival-card-title" data-ja="湯灯夏祭り" data-en="Yuakari Summer Festival">湯灯夏祭り</h2>
            <p class="festival-card-en">Yuakari Summer Festival</p>
            <p class="festival-card-desc" data-ja="温泉街が最も賑わう夏の三日間。盆踊り・屋台・花火" data-en="Three lively summer days in the hot spring town. Bon dance, street stalls, and fireworks.">
              温泉街が最も賑わう夏の三日間。<br>盆踊り・屋台・花火
            </p>
            <button type="button" class="festival-card-btn text-link" aria-label="湯灯夏祭りの詳細を見る">
              DETAIL <span class="text-link-arrow" aria-hidden="true">→</span>
            </button>
          </div>
        </article>

        <!-- 秋：湯灯温泉 紅葉祭り -->
        <article class="festival-card" data-modal="modal-autumn">
          <div class="festival-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/festival_img/festival_autumn.webp" alt="湯灯温泉 紅葉祭りの様子" class="festival-card-img" loading="lazy" width="1200" height="896">
          </div>
          <div class="festival-card-body">
            <h2 class="festival-card-title" data-ja="湯灯温泉 紅葉祭り" data-en="Autumn Leaves Festival">湯灯温泉 紅葉祭り</h2>
            <p class="festival-card-en">Autumn Leaves Festival</p>
            <p class="festival-card-desc" data-ja="山間の温泉街が紅葉に染まる秋。ライトアップと特別ツアーを開催" data-en="The mountain hot spring town turns crimson in autumn. Special tours and illumination events.">
              山間の温泉街が紅葉に染まる秋。<br>ライトアップと特別ツアーを開催
            </p>
            <button type="button" class="festival-card-btn text-link" aria-label="紅葉祭りの詳細を見る">
              DETAIL <span class="text-link-arrow" aria-hidden="true">→</span>
            </button>
          </div>
        </article>

        <!-- 冬：月見の湯 -->
        <article class="festival-card" data-modal="modal-moon">
          <div class="festival-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/festival_img/festival_moon.webp" alt="月見の湯の様子" class="festival-card-img" loading="lazy" width="1200" height="896">
          </div>
          <div class="festival-card-body">
            <h2 class="festival-card-title" data-ja="月見の湯" data-en="Tsukimi-no-Yu Moon Viewing">月見の湯</h2>
            <p class="festival-card-en">Tsukimi-no-Yu Moon Viewing</p>
            <p class="festival-card-desc" data-ja="中秋の名月を眺めながらの入浴。月見団子と抹茶のサービス付き" data-en="Bathe while gazing at the harvest moon. Includes moon-viewing dango and matcha.">
              中秋の名月を眺めながらの入浴。<br>月見団子と抹茶のサービス付き
            </p>
            <button type="button" class="festival-card-btn text-link" aria-label="月見の湯の詳細を見る">
              DETAIL <span class="text-link-arrow" aria-hidden="true">→</span>
            </button>
          </div>
        </article>

        <!-- 冬：雪見酒の夕べ -->
        <article class="festival-card" data-modal="modal-snow">
          <div class="festival-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/festival_img/festival_snow.webp" alt="雪見酒の夕べの様子" class="festival-card-img" loading="lazy" width="1200" height="896">
          </div>
          <div class="festival-card-body">
            <h2 class="festival-card-title" data-ja="雪見酒の夕べ" data-en="Yukimi-Zake Evening">雪見酒の夕べ</h2>
            <p class="festival-card-en">Yukimi-Zake Evening</p>
            <p class="festival-card-desc" data-ja="冬の露天風呂で雪見酒。地酒と温泉を楽しむ冬限定イベント" data-en="Enjoy sake while viewing snow from the open-air bath. A winter-only event with local sake and hot springs.">
              冬の露天風呂で雪見酒。<br>地酒と温泉を楽しむ冬限定イベント
            </p>
            <button type="button" class="festival-card-btn text-link" aria-label="雪見酒の夕べの詳細を見る">
              DETAIL <span class="text-link-arrow" aria-hidden="true">→</span>
            </button>
          </div>
        </article>

      </div>
    </div>
  </section>

  <!-- ========================================
       CTA帯（煉瓦色）
       ======================================== -->
  <section class="cta-section">
    <div class="cta-inner">
      <h2 class="cta-heading" data-ja="開催時期に近いツアーを探す" data-en="Find a Tour Near the Festival Date">開催時期に近いツアーを探す</h2>
      <p class="cta-sub"><em data-ja="祭りの時期に合わせたツアー相談も承ります" data-en="We can plan a tour timed with the festival — just ask">祭りの時期に合わせたツアー相談も承ります</em></p>
      <a href="<?php echo esc_url( home_url( '/tours/' ) ); ?>" class="cta-btn" data-ja="ツアー一覧を見る →" data-en="VIEW TOURS →">ツアー一覧を見る →</a>
      <p style="margin-top:1rem;">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="text-link" style="color:inherit;" data-ja="開催時期を問い合わせる →" data-en="Inquire about festival dates →">開催時期を問い合わせる <span aria-hidden="true">→</span></a>
      </p>
    </div>
  </section>

</main>

<?php /* ========================================
   モーダル群（各祭りの詳細）
   ======================================== */ ?>

<!-- 春の湯灯市 モーダル -->
<div class="festival-modal" id="modal-spring" role="dialog" aria-modal="true" aria-labelledby="modal-spring-title" hidden>
  <div class="festival-modal-overlay"></div>
  <div class="festival-modal-content">
    <button type="button" class="festival-modal-close" aria-label="閉じる">✕</button>
    <div class="festival-modal-img">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/festival_img/festival_spring.webp" alt="春の湯灯市" loading="lazy" width="1200" height="896">
    </div>
    <div class="festival-modal-body">
      <span class="festival-modal-season" data-ja="春" data-en="Spring">春</span>
      <h3 class="festival-modal-title" id="modal-spring-title" data-ja="春の湯灯市" data-en="Spring Yuakari Market">春の湯灯市</h3>
      <p class="festival-modal-en">Spring Yuakari Market</p>
      <dl class="festival-modal-info">
        <div class="festival-modal-info-row"><dt data-ja="開催時期" data-en="When">開催時期</dt><dd data-ja="毎年4月第2週末（土・日）" data-en="Second weekend of April every year (Sat &amp; Sun)">毎年4月第2週末（土・日）</dd></div>
        <div class="festival-modal-info-row"><dt data-ja="場所" data-en="Where">場所</dt><dd data-ja="湯灯温泉 中央通り一帯" data-en="Yuakari Onsen Central Street area">湯灯温泉 中央通り一帯</dd></div>
        <div class="festival-modal-info-row"><dt data-ja="時間" data-en="Hours">時間</dt><dd>10:00 – 16:00</dd></div>
      </dl>
      <p class="festival-modal-desc" data-ja="桜が舞い散る湯灯温泉で、地元の職人や農家が手づくりの工芸品や旬の食材を持ち寄る春の市。陶器や組紐などの工芸品のほか、山菜の天ぷらや草餅など春ならではの味覚も楽しめます。温泉街の石畳の路地に並ぶ露店を巡りながら、春の温泉街をゆっくりお楽しみください。" data-en="In cherry blossom season, local artisans and farmers gather to sell handcrafted goods and seasonal ingredients. Browse pottery, braided cords, and spring delicacies like wild vegetable tempura and mugwort mochi along the cobblestone streets.">桜が舞い散る湯灯温泉で、地元の職人や農家が手づくりの工芸品や旬の食材を持ち寄る春の市。陶器や組紐などの工芸品のほか、山菜の天ぷらや草餅など春ならではの味覚も楽しめます。温泉街の石畳の路地に並ぶ露店を巡りながら、春の温泉街をゆっくりお楽しみください。</p>
      <p class="festival-modal-note" data-ja="※ 荒天時は一部内容を変更する場合があります" data-en="* Content may change in case of severe weather">※ 荒天時は一部内容を変更する場合があります</p>
    </div>
  </div>
</div>

<!-- 湯灯灯籠流し モーダル -->
<div class="festival-modal" id="modal-lantern" role="dialog" aria-modal="true" aria-labelledby="modal-lantern-title" hidden>
  <div class="festival-modal-overlay"></div>
  <div class="festival-modal-content">
    <button type="button" class="festival-modal-close" aria-label="閉じる">✕</button>
    <div class="festival-modal-img">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/festival_img/festival_lantern.webp" alt="湯灯灯籠流し" loading="lazy" width="1200" height="896">
    </div>
    <div class="festival-modal-body">
      <span class="festival-modal-season" data-ja="夏" data-en="Summer">夏</span>
      <h3 class="festival-modal-title" id="modal-lantern-title" data-ja="湯灯灯籠流し" data-en="Yuakari Lantern Festival">湯灯灯籠流し</h3>
      <p class="festival-modal-en">Yuakari Lantern Festival</p>
      <dl class="festival-modal-info">
        <div class="festival-modal-info-row"><dt data-ja="開催時期" data-en="When">開催時期</dt><dd data-ja="毎年8月14日・15日" data-en="August 14th &amp; 15th every year">毎年8月14日・15日</dd></div>
        <div class="festival-modal-info-row"><dt data-ja="場所" data-en="Where">場所</dt><dd data-ja="湯灯温泉 清流橋〜温泉神社一帯" data-en="Yuakari Onsen, Seiryu Bridge to Onsen Shrine area">湯灯温泉 清流橋〜温泉神社一帯</dd></div>
        <div class="festival-modal-info-row"><dt data-ja="時間" data-en="Hours">時間</dt><dd data-ja="19:00 – 21:00（灯籠流し開始 19:30）" data-en="19:00 – 21:00 (Lantern floating begins at 19:30)">19:00 – 21:00（灯籠流し開始 19:30）</dd></div>
      </dl>
      <p class="festival-modal-desc" data-ja="お盆の夜、温泉街を流れる清流に願いを込めた灯籠を流す幻想的なイベント。参加者は自分で灯籠に絵や文字を書き、川面に静かに放ちます。川沿いの遊歩道から眺める無数の灯籠の光は、温泉街の夏の風物詩として愛されています。灯籠は受付にて1基500円でお求めいただけます。" data-en="On Obon nights, lanterns carrying wishes are released onto the river flowing through the hot spring town. Participants inscribe their own messages and illustrations. The sight of countless lanterns drifting along the river has become a beloved summer tradition. Lanterns available for ¥500 each at the reception.">お盆の夜、温泉街を流れる清流に願いを込めた灯籠を流す幻想的なイベント。参加者は自分で灯籠に絵や文字を書き、川面に静かに放ちます。川沿いの遊歩道から眺める無数の灯籠の光は、温泉街の夏の風物詩として愛されています。灯籠は受付にて1基500円でお求めいただけます。</p>
      <p class="festival-modal-note" data-ja="※ 増水時は中止となる場合があります" data-en="* May be cancelled in case of flooding">※ 増水時は中止となる場合があります</p>
    </div>
  </div>
</div>

<!-- 湯灯夏祭り モーダル -->
<div class="festival-modal" id="modal-summer" role="dialog" aria-modal="true" aria-labelledby="modal-summer-title" hidden>
  <div class="festival-modal-overlay"></div>
  <div class="festival-modal-content">
    <button type="button" class="festival-modal-close" aria-label="閉じる">✕</button>
    <div class="festival-modal-img">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/festival_img/festival_summer.webp" alt="湯灯夏祭り" loading="lazy" width="1200" height="896">
    </div>
    <div class="festival-modal-body">
      <span class="festival-modal-season" data-ja="夏" data-en="Summer">夏</span>
      <h3 class="festival-modal-title" id="modal-summer-title" data-ja="湯灯夏祭り" data-en="Yuakari Summer Festival">湯灯夏祭り</h3>
      <p class="festival-modal-en">Yuakari Summer Festival</p>
      <dl class="festival-modal-info">
        <div class="festival-modal-info-row"><dt data-ja="開催時期" data-en="When">開催時期</dt><dd data-ja="毎年8月第1金〜日曜日（3日間）" data-en="First Friday to Sunday of August (3 days)">毎年8月第1金〜日曜日（3日間）</dd></div>
        <div class="festival-modal-info-row"><dt data-ja="場所" data-en="Where">場所</dt><dd data-ja="湯灯温泉 温泉街全域" data-en="Throughout Yuakari Onsen town">湯灯温泉 温泉街全域</dd></div>
        <div class="festival-modal-info-row"><dt data-ja="時間" data-en="Hours">時間</dt><dd data-ja="16:00 – 22:00（花火 最終日 20:30〜）" data-en="16:00 – 22:00 (Fireworks on final day from 20:30)">16:00 – 22:00（花火 最終日 20:30〜）</dd></div>
      </dl>
      <p class="festival-modal-desc" data-ja="湯灯温泉が一年で最も活気づく三日間。温泉街の通りには屋台が立ち並び、盆踊りの太鼓が響きます。最終日には温泉街の対岸から打ち上がる花火が夜空を彩ります。浴衣での参加がおすすめ。旅館での浴衣レンタルも承っております。" data-en="The most vibrant three days of the year in Yuakari Onsen. Street stalls line the town, taiko drums echo for Bon dance, and the final night features fireworks launched across the river. Yukata rental available at local ryokan.">湯灯温泉が一年で最も活気づく三日間。温泉街の通りには屋台が立ち並び、盆踊りの太鼓が響きます。最終日には温泉街の対岸から打ち上がる花火が夜空を彩ります。浴衣での参加がおすすめ。旅館での浴衣レンタルも承っております。</p>
      <p class="festival-modal-note" data-ja="※ 荒天時は一部内容を変更する場合があります" data-en="* Content may change in case of severe weather">※ 荒天時は一部内容を変更する場合があります</p>
    </div>
  </div>
</div>

<!-- 紅葉祭り モーダル -->
<div class="festival-modal" id="modal-autumn" role="dialog" aria-modal="true" aria-labelledby="modal-autumn-title" hidden>
  <div class="festival-modal-overlay"></div>
  <div class="festival-modal-content">
    <button type="button" class="festival-modal-close" aria-label="閉じる">✕</button>
    <div class="festival-modal-img">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/festival_img/festival_autumn.webp" alt="紅葉祭り" loading="lazy" width="1200" height="896">
    </div>
    <div class="festival-modal-body">
      <span class="festival-modal-season" data-ja="秋" data-en="Autumn">秋</span>
      <h3 class="festival-modal-title" id="modal-autumn-title" data-ja="湯灯温泉 紅葉祭り" data-en="Autumn Leaves Festival">湯灯温泉 紅葉祭り</h3>
      <p class="festival-modal-en">Autumn Leaves Festival</p>
      <dl class="festival-modal-info">
        <div class="festival-modal-info-row"><dt data-ja="開催時期" data-en="When">開催時期</dt><dd data-ja="10月下旬〜11月中旬" data-en="Late October to mid-November">10月下旬〜11月中旬</dd></div>
        <div class="festival-modal-info-row"><dt data-ja="場所" data-en="Where">場所</dt><dd data-ja="湯灯温泉 温泉神社〜紅葉谷遊歩道" data-en="Yuakari Onsen Shrine to Momijidani Trail">湯灯温泉 温泉神社〜紅葉谷遊歩道</dd></div>
        <div class="festival-modal-info-row"><dt data-ja="ライトアップ" data-en="Illumination">ライトアップ</dt><dd data-ja="17:00 – 21:00（期間中毎日）" data-en="17:00 – 21:00 (daily during the period)">17:00 – 21:00（期間中毎日）</dd></div>
      </dl>
      <p class="festival-modal-desc" data-ja="山間の温泉街が赤や黄色に染まる紅葉シーズン。温泉神社から紅葉谷遊歩道にかけてのライトアップは、昼間とは異なる幻想的な美しさです。期間中は紅葉茶会や特別ガイドツアーも開催。外湯に浸かりながら眺める紅葉は格別の風情があります。" data-en="During autumn, the mountain hot spring town turns red and gold. Evening illumination along the trail from Onsen Shrine to Momijidani creates an enchanting atmosphere. Special tea ceremonies and guided tours are also offered during this period.">山間の温泉街が赤や黄色に染まる紅葉シーズン。温泉神社から紅葉谷遊歩道にかけてのライトアップは、昼間とは異なる幻想的な美しさです。期間中は紅葉茶会や特別ガイドツアーも開催。外湯に浸かりながら眺める紅葉は格別の風情があります。</p>
      <p class="festival-modal-note" data-ja="※ 紅葉の見頃は気候により前後します" data-en="* Peak foliage timing varies by climate">※ 紅葉の見頃は気候により前後します</p>
    </div>
  </div>
</div>

<!-- 月見の湯 モーダル -->
<div class="festival-modal" id="modal-moon" role="dialog" aria-modal="true" aria-labelledby="modal-moon-title" hidden>
  <div class="festival-modal-overlay"></div>
  <div class="festival-modal-content">
    <button type="button" class="festival-modal-close" aria-label="閉じる">✕</button>
    <div class="festival-modal-img">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/festival_img/festival_moon.webp" alt="月見の湯" loading="lazy" width="1200" height="896">
    </div>
    <div class="festival-modal-body">
      <span class="festival-modal-season" data-ja="秋" data-en="Autumn">秋</span>
      <h3 class="festival-modal-title" id="modal-moon-title" data-ja="月見の湯" data-en="Tsukimi-no-Yu Moon Viewing">月見の湯</h3>
      <p class="festival-modal-en">Tsukimi-no-Yu Moon Viewing</p>
      <dl class="festival-modal-info">
        <div class="festival-modal-info-row"><dt data-ja="開催時期" data-en="When">開催時期</dt><dd data-ja="中秋の名月の前後3日間" data-en="3 days around the harvest moon">中秋の名月の前後3日間</dd></div>
        <div class="festival-modal-info-row"><dt data-ja="場所" data-en="Where">場所</dt><dd data-ja="湯灯温泉 各外湯・提携旅館" data-en="Yuakari Onsen public baths &amp; partner ryokan">湯灯温泉 各外湯・提携旅館</dd></div>
        <div class="festival-modal-info-row"><dt data-ja="時間" data-en="Hours">時間</dt><dd>18:00 – 21:00</dd></div>
      </dl>
      <p class="festival-modal-desc" data-ja="中秋の名月に合わせた特別な入浴体験。露天風呂から眺める月明かりの温泉街は、まさに一湯一會の絶景。月見団子と抹茶のサービスを湯上がりにご用意しています。静かな秋の夜、月と湯に包まれるひとときをお過ごしください。" data-en="A special bathing experience for the harvest moon. The moonlit hot spring town viewed from the open-air bath is a once-in-a-lifetime sight. Moon-viewing dango and matcha are served after bathing. Spend a quiet autumn evening embraced by moonlight and warm springs.">中秋の名月に合わせた特別な入浴体験。露天風呂から眺める月明かりの温泉街は、まさに一湯一會の絶景。月見団子と抹茶のサービスを湯上がりにご用意しています。静かな秋の夜、月と湯に包まれるひとときをお過ごしください。</p>
      <p class="festival-modal-note" data-ja="※ 曇天時も開催いたします" data-en="* Event will be held even on cloudy nights">※ 曇天時も開催いたします</p>
    </div>
  </div>
</div>

<!-- 雪見酒の夕べ モーダル -->
<div class="festival-modal" id="modal-snow" role="dialog" aria-modal="true" aria-labelledby="modal-snow-title" hidden>
  <div class="festival-modal-overlay"></div>
  <div class="festival-modal-content">
    <button type="button" class="festival-modal-close" aria-label="閉じる">✕</button>
    <div class="festival-modal-img">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/festival_img/festival_snow.webp" alt="雪見酒の夕べ" loading="lazy" width="1200" height="896">
    </div>
    <div class="festival-modal-body">
      <span class="festival-modal-season" data-ja="冬" data-en="Winter">冬</span>
      <h3 class="festival-modal-title" id="modal-snow-title" data-ja="雪見酒の夕べ" data-en="Yukimi-Zake Evening">雪見酒の夕べ</h3>
      <p class="festival-modal-en">Yukimi-Zake Evening</p>
      <dl class="festival-modal-info">
        <div class="festival-modal-info-row"><dt data-ja="開催時期" data-en="When">開催時期</dt><dd data-ja="1月中旬〜2月末の金・土曜日" data-en="Friday &amp; Saturday, mid-January to late February">1月中旬〜2月末の金・土曜日</dd></div>
        <div class="festival-modal-info-row"><dt data-ja="場所" data-en="Where">場所</dt><dd data-ja="湯灯温泉 雪見の湯（露天風呂）" data-en="Yuakari Onsen Yukimi-no-Yu (open-air bath)">湯灯温泉 雪見の湯（露天風呂）</dd></div>
        <div class="festival-modal-info-row"><dt data-ja="時間" data-en="Hours">時間</dt><dd data-ja="17:00 – 20:00（要予約）" data-en="17:00 – 20:00 (Reservation required)">17:00 – 20:00（要予約）</dd></div>
      </dl>
      <p class="festival-modal-desc" data-ja="雪化粧の温泉街を眺めながら、露天風呂で地酒を味わう冬限定の特別体験。地元の酒蔵から取り寄せた3種の地酒を、湯煙の中でゆっくりとお楽しみいただけます。おつまみには温泉街の豆腐店による湯豆腐を。冬の温泉街ならではの贅沢なひとときです。" data-en="A winter-only experience: enjoy local sake in the open-air bath while viewing the snow-covered hot spring town. Three selections from local breweries are served amid the rising steam. Accompanied by yudofu (hot tofu) from the town's tofu maker. A luxurious winter indulgence.">雪化粧の温泉街を眺めながら、露天風呂で地酒を味わう冬限定の特別体験。地元の酒蔵から取り寄せた3種の地酒を、湯煙の中でゆっくりとお楽しみいただけます。おつまみには温泉街の豆腐店による湯豆腐を。冬の温泉街ならではの贅沢なひとときです。</p>
      <p class="festival-modal-note" data-ja="※ 20歳未満の方はソフトドリンクをご用意しています" data-en="* Non-alcoholic beverages available for guests under 20">※ 20歳未満の方はソフトドリンクをご用意しています</p>
    </div>
  </div>
</div>

<?php get_footer(); ?>
