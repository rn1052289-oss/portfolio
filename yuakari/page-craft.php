<?php get_header(); ?>

<main id="main-content">

  <!-- パンくず（共通） -->
  <nav class="sub-breadcrumb" aria-label="パンくずリスト">
    <div class="sub-breadcrumb-inner">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sub-breadcrumb-link" data-ja="TOP" data-en="TOP">TOP</a>
      <span class="sub-breadcrumb-sep" aria-hidden="true">/</span>
      <span class="sub-breadcrumb-current" data-ja="CRAFT" data-en="CRAFT">CRAFT</span>
    </div>
  </nav>

  <!-- ================================
       ファーストビュー（共通）
       ================================ -->
  <section class="sub-firstview sub-firstview--craft">
    <div class="sub-firstview-overlay" aria-hidden="true"></div>
    <div class="sub-firstview-inner">
      <h1 class="sub-firstview-title" data-ja="伝統工芸体験" data-en="Traditional Craft">伝統工芸体験</h1>
      <p class="sub-firstview-sub"><em>Traditional Craft</em></p>
      <span class="sub-firstview-line" aria-hidden="true"></span>
      <p class="sub-firstview-lead" data-ja="職人の技にふれる ── 手しごとの温もりを持ち帰る" data-en="Experience artisan skills — take home the warmth of handcraft">職人の技にふれる ── 手しごとの温もりを持ち帰る</p>
    </div>
  </section>

  <!-- ================================
       CRAFTカード一覧
       ================================ -->
  <section class="craft-cards-section">
    <div class="craft-cards-inner">
      <!-- セクションラベル -->
      <div class="section-label">
        <span class="section-label-num">01</span>
        <span class="section-label-line" aria-hidden="true"></span>
        <span class="section-label-en">CRAFT</span>
      </div>

      <!-- 3列カードグリッド -->
      <div class="craft-cards-grid">

        <!-- カードA：陶芸体験 -->
        <article class="craft-card" data-modal="craft-modal-pottery">
          <div class="craft-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/craft_img/craft_pottery.webp" alt="陶芸体験 窯元 土灯の様子" class="craft-card-img" loading="lazy" width="1408" height="768">
            <div class="craft-card-thumb-overlay"></div>
          </div>
          <div class="craft-card-body">
            <h2 class="craft-card-title" data-ja="陶芸体験 窯元 土灯" data-en="Tsuchi-Akari Pottery">陶芸体験 窯元 土灯</h2>
            <p class="craft-card-en"><em>Tsuchi-Akari Pottery</em></p>
            <p class="craft-card-desc" data-ja="湯灯温泉の土を使った陶芸体験。湯呑みや小皿を制作（後日郵送）" data-en="Pottery workshop using local clay. Create cups and plates (shipped after firing)">湯灯温泉の土を使った陶芸体験。<br>
              湯呑みや小皿を制作（後日郵送）</p>
            <button type="button" class="craft-card-link craft-card-btn" aria-haspopup="dialog">DETAIL <span class="craft-card-arrow" aria-hidden="true">→</span></button>
          </div>
        </article>

        <!-- カードB：組紐体験 -->
        <article class="craft-card" data-modal="craft-modal-kumihimo">
          <div class="craft-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/craft_img/craft_kumihimo.webp" alt="組紐体験 結の工房の様子" class="craft-card-img" loading="lazy" width="1200" height="896">
            <div class="craft-card-thumb-overlay"></div>
          </div>
          <div class="craft-card-body">
            <h2 class="craft-card-title" data-ja="組紐体験 結の工房" data-en="Musubi Kumihimo Studio">組紐体験 結の工房</h2>
            <p class="craft-card-en"><em>Musubi Kumihimo Studio</em></p>
            <p class="craft-card-desc" data-ja="色とりどりの糸で編む伝統の組紐。ブレスレットやストラップに" data-en="Braid traditional kumihimo cords with colorful threads. Make bracelets and straps">色とりどりの糸で編む伝統の組紐。<br>
              ブレスレットやストラップに</p>
            <button type="button" class="craft-card-link craft-card-btn" aria-haspopup="dialog">DETAIL <span class="craft-card-arrow" aria-hidden="true">→</span></button>
          </div>
        </article>

        <!-- カードC：藍染め体験 -->
        <article class="craft-card" data-modal="craft-modal-indigo">
          <div class="craft-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/craft_img/craft_indigo.webp" alt="藍染め体験 青の蔵の様子" class="craft-card-img" loading="lazy" width="1200" height="896">
            <div class="craft-card-thumb-overlay"></div>
          </div>
          <div class="craft-card-body">
            <h2 class="craft-card-title" data-ja="藍染め体験 青の蔵" data-en="Ao-no-Kura Indigo Dyeing">藍染め体験 青の蔵</h2>
            <p class="craft-card-en"><em>Ao-no-Kura Indigo Dyeing</em></p>
            <p class="craft-card-desc" data-ja="天然藍を使った本格的な染め体験。手ぬぐいやトートバッグを染める" data-en="Authentic indigo dyeing with natural dye. Dye tenugui towels and tote bags">天然藍を使った本格的な染め体験。<br>
              手ぬぐいやトートバッグを染める</p>
            <button type="button" class="craft-card-link craft-card-btn" aria-haspopup="dialog">DETAIL <span class="craft-card-arrow" aria-hidden="true">→</span></button>
          </div>
        </article>
      </div>
    </div>
  </section>


  <!-- ================================
       CTA帯（煉瓦色）
       ================================ -->
  <section class="craft-cta-section">
    <div class="craft-cta-inner">
      <h2 class="craft-cta-heading" data-ja="フォームUIで体験を選ぶ" data-en="Select This Experience in the Form Demo">フォームUIで体験を選ぶ</h2>
      <p class="craft-cta-sub"><em data-ja="初心者OK · 英語対応あり（週末） · 作品は後日郵送" data-en="Beginners welcome · English guide available (weekends) · Works shipped after firing">初心者OK &nbsp;·&nbsp; 英語対応あり（週末） &nbsp;·&nbsp; 作品は後日郵送</em></p>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="craft-cta-btn" data-ja="フォームデモを見る →" data-en="View Form Demo →">フォームデモを見る →</a>
      <p style="margin-top:1rem;">
        <a href="<?php echo esc_url( yuakari_page_url( 'tours/tour-craft' ) ); ?>" class="text-link" style="color:inherit;" data-ja="陶芸体験ツアーの詳細を見る →" data-en="See Pottery &amp; Craft Tour →">陶芸体験ツアーの詳細を見る <span aria-hidden="true">→</span></a>
      </p>
    </div>
  </section>

</main>

<?php get_footer(); ?>

<!-- ================================================================
     CRAFTモーダル（3種）
     【注意】<main> の外に置く理由：
     common.css で main に transform アニメーションが適用されており、
     transform を持つ祖先要素は position:fixed の基準になる CSS 仕様があるため、
     <main> 内に置くと position:fixed がビューポート基準にならずズレる。
     ================================================================ -->

<!-- モーダル：陶芸体験 -->
<div id="craft-modal-pottery" class="craft-modal-overlay" aria-modal="true" role="dialog" aria-label="陶芸体験 窯元 土灯" aria-hidden="true">
  <div class="craft-modal">
    <button type="button" class="craft-modal-close" aria-label="閉じる">✕</button>
    <div class="craft-modal-inner">
      <div class="craft-modal-img-wrap">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/craft_img/craft_pottery.webp" alt="陶芸体験 窯元 土灯" class="craft-modal-img" width="800" height="600">
      </div>
      <div class="craft-modal-body">
        <p class="craft-modal-label">POTTERY</p>
        <h2 class="craft-modal-title" data-ja="陶芸体験 窯元 土灯" data-en="Tsuchi-Akari Pottery">陶芸体験 窯元 土灯</h2>
        <p class="craft-modal-en"><em>Tsuchi-Akari Pottery Workshop</em></p>
        <dl class="craft-modal-meta">
          <div class="craft-modal-meta-item">
            <dt data-ja="所要時間" data-en="Duration">所要時間</dt>
            <dd data-ja="約2時間" data-en="Approx. 2 hours">約2時間</dd>
          </div>
          <div class="craft-modal-meta-item">
            <dt data-ja="料金" data-en="Price">料金</dt>
            <dd>¥4,800〜</dd>
          </div>
          <div class="craft-modal-meta-item">
            <dt data-ja="人数" data-en="Group size">人数</dt>
            <dd data-ja="1〜8名" data-en="1–8 guests">1〜8名</dd>
          </div>
        </dl>
        <p class="craft-modal-desc" data-ja="湯灯温泉の土を使った陶芸体験。湯呑みや小皿など、日常で使える器を職人の指導のもとで制作します。作品は焼成後に郵送。初心者の方も安心してご参加いただけます。" data-en="A pottery workshop using local clay from Yuakari Onsen. Create everyday items such as tea cups and small plates under the guidance of a skilled artisan. Works are shipped after firing. Suitable for first-timers.">湯灯温泉の土を使った陶芸体験。湯呑みや小皿など、日常で使える器を職人の指導のもとで制作します。作品は焼成後に郵送。初心者の方も安心してご参加いただけます。</p>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="craft-modal-cta" data-ja="フォームデモ" data-en="Form Demo">フォームデモ</a>
      </div>
    </div>
  </div>
</div>

<!-- モーダル：組紐体験 -->
<div id="craft-modal-kumihimo" class="craft-modal-overlay" aria-modal="true" role="dialog" aria-label="組紐体験 結の工房" aria-hidden="true">
  <div class="craft-modal">
    <button type="button" class="craft-modal-close" aria-label="閉じる">✕</button>
    <div class="craft-modal-inner">
      <div class="craft-modal-img-wrap">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/craft_img/craft_kumihimo.webp" alt="組紐体験 結の工房" class="craft-modal-img" width="800" height="600">
      </div>
      <div class="craft-modal-body">
        <p class="craft-modal-label">KUMIHIMO</p>
        <h2 class="craft-modal-title" data-ja="組紐体験 結の工房" data-en="Musubi Kumihimo Studio">組紐体験 結の工房</h2>
        <p class="craft-modal-en"><em>Musubi Kumihimo Workshop</em></p>
        <dl class="craft-modal-meta">
          <div class="craft-modal-meta-item">
            <dt data-ja="所要時間" data-en="Duration">所要時間</dt>
            <dd data-ja="約1.5時間" data-en="Approx. 1.5 hours">約1.5時間</dd>
          </div>
          <div class="craft-modal-meta-item">
            <dt data-ja="料金" data-en="Price">料金</dt>
            <dd>¥2,800〜</dd>
          </div>
          <div class="craft-modal-meta-item">
            <dt data-ja="人数" data-en="Group size">人数</dt>
            <dd data-ja="1〜10名" data-en="1–10 guests">1〜10名</dd>
          </div>
        </dl>
        <p class="craft-modal-desc" data-ja="色とりどりの絹糸を使って伝統の組紐を編む体験。ブレスレットやストラップなど、持ち帰れる作品を制作します。組台を使った本格的な技法を、わかりやすく丁寧に指導します。" data-en="Experience the traditional craft of braiding kumihimo cords with colorful silk threads. Create bracelets, straps, and other keepsakes. Our instructors will guide you through the authentic technique using a kumihimo disk.">色とりどりの絹糸を使って伝統の組紐を編む体験。ブレスレットやストラップなど、持ち帰れる作品を制作します。組台を使った本格的な技法を、わかりやすく丁寧に指導します。</p>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="craft-modal-cta" data-ja="フォームデモ" data-en="Form Demo">フォームデモ</a>
      </div>
    </div>
  </div>
</div>

<!-- モーダル：藍染め体験 -->
<div id="craft-modal-indigo" class="craft-modal-overlay" aria-modal="true" role="dialog" aria-label="藍染め体験 青の蔵" aria-hidden="true">
  <div class="craft-modal">
    <button type="button" class="craft-modal-close" aria-label="閉じる">✕</button>
    <div class="craft-modal-inner">
      <div class="craft-modal-img-wrap">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/craft_img/craft_indigo.webp" alt="藍染め体験 青の蔵" class="craft-modal-img" width="800" height="600">
      </div>
      <div class="craft-modal-body">
        <p class="craft-modal-label">INDIGO</p>
        <h2 class="craft-modal-title" data-ja="藍染め体験 青の蔵" data-en="Ao-no-Kura Indigo Dyeing">藍染め体験 青の蔵</h2>
        <p class="craft-modal-en"><em>Ao-no-Kura Indigo Dyeing</em></p>
        <dl class="craft-modal-meta">
          <div class="craft-modal-meta-item">
            <dt data-ja="所要時間" data-en="Duration">所要時間</dt>
            <dd data-ja="約2時間" data-en="Approx. 2 hours">約2時間</dd>
          </div>
          <div class="craft-modal-meta-item">
            <dt data-ja="料金" data-en="Price">料金</dt>
            <dd>¥3,500〜</dd>
          </div>
          <div class="craft-modal-meta-item">
            <dt data-ja="人数" data-en="Group size">人数</dt>
            <dd data-ja="1〜8名" data-en="1–8 guests">1〜8名</dd>
          </div>
        </dl>
        <p class="craft-modal-desc" data-ja="天然の藍を使った本格的な染め体験。手ぬぐいやトートバッグを、絞り染めや板締め染めなどの伝統技法で仕上げます。世界にひとつだけのオリジナル作品をお持ち帰りいただけます。" data-en="An authentic indigo dyeing experience using natural dye. Dye tenugui towels and tote bags using traditional techniques such as shibori and itajime. Take home a one-of-a-kind creation.">天然の藍を使った本格的な染め体験。手ぬぐいやトートバッグを、絞り染めや板締め染めなどの伝統技法で仕上げます。世界にひとつだけのオリジナル作品をお持ち帰りいただけます。</p>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="craft-modal-cta" data-ja="フォームデモ" data-en="Form Demo">フォームデモ</a>
      </div>
    </div>
  </div>
</div>
