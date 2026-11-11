<?php get_header(); ?>

<main id="main-content">

  <!-- パンくず（共通） -->
  <nav class="sub-breadcrumb" aria-label="パンくずリスト">
    <div class="sub-breadcrumb-inner">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sub-breadcrumb-link" data-ja="TOP" data-en="TOP">TOP</a>
      <span class="sub-breadcrumb-sep" aria-hidden="true">/</span>
      <span class="sub-breadcrumb-current" data-ja="ACCESS" data-en="ACCESS">ACCESS</span>
    </div>
  </nav>

  <!-- ファーストビュー（共通） -->
  <section class="sub-firstview sub-firstview--access">
    <div class="sub-firstview-overlay" aria-hidden="true"></div>
    <div class="sub-firstview-inner">
      <h1 class="sub-firstview-title" data-ja="アクセス" data-en="Access">アクセス</h1>
      <p class="sub-firstview-sub"><em>Getting Here</em></p>
      <span class="sub-firstview-line" aria-hidden="true"></span>
    </div>
  </section>

  <!-- 架空世界のマップ表現（実在の地図サービスは使用しない） -->
  <section class="access-map-section" aria-label="架空のアクセスマップ表示例">
    <div class="access-map-wrap">
      <div class="access-map-demo" role="img" aria-label="山と川に囲まれた架空の湯灯温泉街の概念図">
        <span class="access-map-river" aria-hidden="true"></span>
        <span class="access-map-road access-map-road--one" aria-hidden="true"></span>
        <span class="access-map-road access-map-road--two" aria-hidden="true"></span>
        <span class="access-map-pin" aria-hidden="true"><span></span></span>
        <p class="access-map-label">YUAKARI<br><small>FICTIONAL MAP</small></p>
      </div>
      <p class="access-map-note" data-ja="この地図と交通情報は作品の世界観を表現する架空のUIです。実在の場所・路線・施設ではありません。" data-en="This map and transport information are fictional UI elements created for this portfolio project.">この地図と交通情報は作品の世界観を表現する架空のUIです。実在の場所・路線・施設ではありません。</p>
    </div>
  </section>

  <!-- ACCESS INFO（3カラム） -->
  <section class="access-info-section">
    <div class="access-info-inner">

      <p class="access-fiction-note" data-ja="以下はすべて作品内の設定です。実際の移動には利用できません。" data-en="All details below are fictional and cannot be used for real travel.">以下はすべて作品内の設定です。実際の移動には利用できません。</p>

      <!-- 電車・バス -->
      <div class="access-info-card">
        <p class="access-info-label" data-ja="TRAIN / BUS" data-en="TRAIN / BUS">TRAIN / BUS</p>
        <h2 class="access-info-heading" data-ja="電車・バス" data-en="Train &amp; Bus">電車・バス</h2>
        <div class="access-info-body">
          <p data-ja="湯灯本線「湯灯駅」下車" data-en="Get off at Yuto Station on the Yuto Line">湯灯本線「湯灯駅」下車</p>
          <p data-ja="→ 路線バス「湯灯温泉行き」約30分" data-en="→ Local bus to Yuakari Onsen, approx. 30 min">→ 路線バス「湯灯温泉行き」約30分</p>
          <p data-ja="→「湯灯温泉」バス停下車 徒歩3分" data-en="→ 3-min walk from Yuakari Onsen bus stop">→「湯灯温泉」バス停下車 徒歩3分</p>
          <br>
          <p data-ja="東京から：新幹線＋在来線で約3時間" data-en="From Tokyo: approx. 3 hours by shinkansen + local train">東京から：新幹線＋在来線で約3時間</p>
          <p data-ja="大阪から：新幹線＋在来線で約4時間" data-en="From Osaka: approx. 4 hours by shinkansen + local train">大阪から：新幹線＋在来線で約4時間</p>
        </div>
      </div>

      <!-- お車 -->
      <div class="access-info-card">
        <p class="access-info-label" data-ja="CAR" data-en="CAR">CAR</p>
        <h2 class="access-info-heading" data-ja="お車" data-en="By Car">お車</h2>
        <div class="access-info-body">
          <p data-ja="湯灯自動車道「湯灯IC」より" data-en="From Yuto IC on the Yuto Expressway">湯灯自動車道「湯灯IC」より</p>
          <p data-ja="国道350号線経由 約20分" data-en="Approx. 20 min via National Route 350">国道350号線経由 約20分</p>
          <br>
          <p data-ja="無料駐車場完備（50台）" data-en="Free parking available (50 spaces)">無料駐車場完備（50台）</p>
          <p data-ja="第2駐車場：温泉街入口（30台）" data-en="2nd parking lot: Hot spring town entrance (30 spaces)">第2駐車場：温泉街入口（30台）</p>
        </div>
      </div>

      <!-- 営業情報 -->
      <div class="access-info-card">
        <p class="access-info-label" data-ja="HOURS / INFO" data-en="HOURS / INFO">HOURS / INFO</p>
        <h2 class="access-info-heading" data-ja="営業情報" data-en="Business Info">営業情報</h2>
        <div class="access-info-body">
          <p data-ja="営業時間：9:00 – 18:00" data-en="Hours: 9:00 – 18:00">営業時間：9:00 – 18:00</p>
          <p data-ja="定休日：火曜日（祝日の場合は翌日）" data-en="Closed: Tuesdays (next day if holiday)">定休日：火曜日（祝日の場合は翌日）</p>
          <br>
          <p data-ja="住所：湯灯県湯灯市湯灯温泉1-2-3" data-en="Address: 1-2-3 Yuakari Onsen, Yuto City, Yuto Prefecture">住所：湯灯県湯灯市湯灯温泉1-2-3</p>
          <p><span data-ja="TEL表示例：" data-en="Phone sample: ">TEL表示例：</span>0120-000-000</p>
          <p><span data-ja="Email表示例：" data-en="Email sample: ">Email表示例：</span>info@example.jp</p>
        </div>
      </div>

    </div>
  </section>

  <!-- CTA（お問い合わせ） -->
  <section class="contact-section" aria-label="フォームUIデモ">
    <div class="contact-inner">
      <h2 class="contact-heading" data-ja="フォームUIを試してみる" data-en="Try the Form UI">フォームUIを試してみる</h2>
      <p class="contact-sub" data-ja="入力内容は送信されない操作デモです。" data-en="This interaction demo does not transmit your entries.">入力内容は送信されない操作デモです。</p>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="contact-btn" data-ja="フォームデモを見る" data-en="View Form Demo">フォームデモを見る</a>
      <p class="contact-info-line">
        <span data-ja="※ 湯灯商會は架空の事業者です" data-en="* YUAKARI &amp; Co. is a fictional business.">※ 湯灯商會は架空の事業者です</span>
      </p>
    </div>
  </section>

</main>

<?php get_footer(); ?>
