<?php get_header(); ?>

<main id="main-content">

  <!-- パンくず（共通） -->
  <nav class="sub-breadcrumb" aria-label="パンくずリスト">
    <div class="sub-breadcrumb-inner">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sub-breadcrumb-link" data-ja="TOP" data-en="TOP">TOP</a>
      <span class="sub-breadcrumb-sep" aria-hidden="true">/</span>
      <span class="sub-breadcrumb-current" data-ja="FOOD" data-en="FOOD">FOOD</span>
    </div>
  </nav>

  <!-- ファーストビュー（共通） -->
  <section class="sub-firstview sub-firstview--food">
    <div class="sub-firstview-overlay" aria-hidden="true"></div>
    <div class="sub-firstview-inner">
      <h1 class="sub-firstview-title" data-ja="食べ歩き・グルメ" data-en="Food &amp; Street Eats">食べ歩き・グルメ</h1>
      <p class="sub-firstview-sub"><em>Food &amp; Street Eats</em></p>
      <span class="sub-firstview-line" aria-hidden="true"></span>
      <p class="sub-firstview-lead" data-ja="湯灯温泉の味を食べ歩く ── 地元の食文化に出会う" data-en="Savor the flavors of Yuakari Onsen — discover local food culture">湯灯温泉の味を食べ歩く ── 地元の食文化に出会う</p>
    </div>
  </section>

  <!-- ========================================
     FOOD カードグリッドセクション
     ======================================== -->
  <section class="food-section">
    <div class="food-inner">

      <!-- セクションラベル 01 ── FOOD -->
      <div class="section-label">
        <span class="section-label-num">01</span>
        <span class="section-label-line" aria-hidden="true"></span>
        <span class="section-label-en">FOOD</span>
      </div>

      <!-- カードグリッド 3列×2行 -->
      <div class="food-grid">

        <!-- カード1：温泉まんじゅう 湯の花堂 -->
        <article class="food-card" data-modal="food-modal-01">
          <div class="food-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_manju_01.webp" alt="温泉まんじゅう 湯の花堂" class="food-card-img" loading="lazy" width="1200" height="896">
          </div>
          <div class="food-card-body">
            <h2 class="food-card-title" data-ja="温泉まんじゅう 湯の花堂" data-en="Yunohana-do Manju">温泉まんじゅう 湯の花堂</h2>
            <p class="food-card-en">Yunohana-do Manju</p>
            <p class="food-card-desc" data-ja="創業大正十二年。蒸したての温泉まんじゅうは湯灯温泉の定番みやげ" data-en="Founded in 1923. Freshly steamed hot spring manju — the classic Yuakari souvenir">創業大正十二年。蒸したての温泉まんじゅうは<br>湯灯温泉の定番みやげ</p>
            <button type="button" class="text-link food-modal-btn">
              DETAIL <span class="text-link-arrow" aria-hidden="true">→</span>
            </button>
          </div>
        </article>

        <!-- カード2：手打ち蕎麦 山水庵 -->
        <article class="food-card" data-modal="food-modal-02">
          <div class="food-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_soba_01.webp" alt="手打ち蕎麦 山水庵" class="food-card-img" loading="lazy" width="1200" height="896">
          </div>
          <div class="food-card-body">
            <h2 class="food-card-title" data-ja="手打ち蕎麦 山水庵" data-en="Sansui-an Soba">手打ち蕎麦 山水庵</h2>
            <p class="food-card-en">Sansui-an Soba</p>
            <p class="food-card-desc" data-ja="地元産のそば粉を石臼で挽いた風味豊かな十割蕎麦" data-en="Stone-milled local buckwheat flour, served as rich 100% soba noodles">地元産のそば粉を石臼で挽いた<br>風味豊かな十割蕎麦</p>
            <button type="button" class="text-link food-modal-btn">
              DETAIL <span class="text-link-arrow" aria-hidden="true">→</span>
            </button>
          </div>
        </article>

        <!-- カード3：地酒 湯灯正宗 -->
        <article class="food-card" data-modal="food-modal-03">
          <div class="food-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_sake_01.webp" alt="地酒 湯灯正宗" class="food-card-img" loading="lazy" width="1200" height="896">
          </div>
          <div class="food-card-body">
            <h2 class="food-card-title" data-ja="地酒 湯灯正宗" data-en="Yuakari Masamune Sake">地酒 湯灯正宗</h2>
            <p class="food-card-en">Yuakari Masamune Sake</p>
            <p class="food-card-desc" data-ja="温泉水で仕込んだ地酒の酒蔵見学と利き酒体験" data-en="Visit the brewery and taste local sake brewed with hot spring water">温泉水で仕込んだ地酒の酒蔵見学と<br>利き酒体験</p>
            <button type="button" class="text-link food-modal-btn">
              DETAIL <span class="text-link-arrow" aria-hidden="true">→</span>
            </button>
          </div>
        </article>

        <!-- カード4：炭火焼き 串の灯 -->
        <article class="food-card" data-modal="food-modal-04">
          <div class="food-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_yakitori_01.webp" alt="炭火焼き 串の灯" class="food-card-img" loading="lazy" width="1200" height="896">
          </div>
          <div class="food-card-body">
            <h2 class="food-card-title" data-ja="炭火焼き 串の灯" data-en="Kushi-no-Akari Yakitori">炭火焼き 串の灯</h2>
            <p class="food-card-en">Kushi-no-Akari Yakitori</p>
            <p class="food-card-desc" data-ja="地鶏と山の幸を炭火で。川沿いのテラス席が人気" data-en="Local chicken and mountain delicacies over charcoal. Riverside terrace seating is popular">地鶏と山の幸を炭火で。<br>川沿いのテラス席が人気</p>
            <button type="button" class="text-link food-modal-btn">
              DETAIL <span class="text-link-arrow" aria-hidden="true">→</span>
            </button>
          </div>
        </article>

        <!-- カード5：湯上りジェラート ゆのまち -->
        <article class="food-card" data-modal="food-modal-05">
          <div class="food-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_gelato_01.webp" alt="湯上りジェラート ゆのまち" class="food-card-img" loading="lazy" width="1200" height="896">
          </div>
          <div class="food-card-body">
            <h2 class="food-card-title" data-ja="湯上りジェラート ゆのまち" data-en="Yunomachi Gelato">湯上りジェラート ゆのまち</h2>
            <p class="food-card-en">Yunomachi Gelato</p>
            <p class="food-card-desc" data-ja="地元の牛乳と季節のフルーツを使った手づくりジェラート" data-en="Handmade gelato with local milk and seasonal fruits">地元の牛乳と季節のフルーツを使った<br>手づくりジェラート</p>
            <button type="button" class="text-link food-modal-btn">
              DETAIL <span class="text-link-arrow" aria-hidden="true">→</span>
            </button>
          </div>
        </article>

        <!-- カード6：茶寮 灯影 -->
        <article class="food-card" data-modal="food-modal-06">
          <div class="food-card-thumb">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_saryo_01.webp" alt="茶寮 灯影" class="food-card-img" loading="lazy" width="1200" height="896">
          </div>
          <div class="food-card-body">
            <h2 class="food-card-title" data-ja="茶寮 灯影" data-en="Saryo Hokage">茶寮 灯影</h2>
            <p class="food-card-en">Saryo Hokage</p>
            <p class="food-card-desc" data-ja="抹茶と季節の和菓子で一服。格子窓から温泉街を望む" data-en="Rest with matcha and seasonal wagashi. Enjoy the onsen town view through lattice windows">抹茶と季節の和菓子で一服。<br>格子窓から温泉街を望む</p>
            <button type="button" class="text-link food-modal-btn">
              DETAIL <span class="text-link-arrow" aria-hidden="true">→</span>
            </button>
          </div>
        </article>

      </div>
      <!-- /food-grid -->

    </div>
  </section>

  <!-- ========================================
     CTA帯（煉瓦色背景）
     ======================================== -->
  <section class="food-cta-section">
    <div class="food-cta-inner">
      <h2 class="food-cta-title" data-ja="この食べ歩きスポットを含むツアーを見る" data-en="Explore Tours That Include These Food Spots">この食べ歩きスポットを含むツアーを見る</h2>
      <p class="food-cta-sub"><em>Morning Food Walk · The Complete Yuakari Experience</em></p>
      <a href="<?php echo esc_url( yuakari_page_url( 'tours/tour-morning' ) ); ?>" class="food-cta-btn" data-ja="朝の食べ歩きツアーを見る →" data-en="See Morning Food Walk →">朝の食べ歩きツアーを見る →</a>
      <p style="margin-top:1rem;">
        <a href="<?php echo esc_url( home_url( '/tours/' ) ); ?>" class="text-link" style="color:inherit;" data-ja="すべてのツアーを比較する →" data-en="Compare all tours →">すべてのツアーを比較する <span aria-hidden="true">→</span></a>
      </p>
    </div>
  </section>

</main>

<?php /* ========================================
   モーダル（6つ）
   各モーダルは data-modal の ID で紐づく
   ======================================== */ ?>

<!-- モーダル1：温泉まんじゅう 湯の花堂 -->
<div class="food-modal-overlay" id="food-modal-01" aria-hidden="true" role="dialog" aria-label="温泉まんじゅう 湯の花堂の詳細">
  <div class="food-modal">
    <button type="button" class="food-modal-close" aria-label="閉じる">×</button>
    <div class="food-modal-slider">
      <div class="food-modal-slides">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_manju_01.webp" alt="蒸籠から湯気が立つまんじゅう" class="food-modal-slide is-active" loading="lazy" width="1200" height="896">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_manju_02.webp" alt="餡を包む職人の手元" class="food-modal-slide" loading="lazy" width="1200" height="896">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_manju_03.webp" alt="木造の店先と暖簾" class="food-modal-slide" loading="lazy" width="1200" height="896">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_manju_04.webp" alt="まんじゅう断面とお茶" class="food-modal-slide" loading="lazy" width="1200" height="896">
      </div>
      <button type="button" class="food-modal-prev" aria-label="前の画像">‹</button>
      <button type="button" class="food-modal-next" aria-label="次の画像">›</button>
      <div class="food-modal-dots">
        <button type="button" class="food-modal-dot is-active" data-index="0" aria-label="画像1"></button>
        <button type="button" class="food-modal-dot" data-index="1" aria-label="画像2"></button>
        <button type="button" class="food-modal-dot" data-index="2" aria-label="画像3"></button>
        <button type="button" class="food-modal-dot" data-index="3" aria-label="画像4"></button>
      </div>
    </div>
    <div class="food-modal-body">
      <h3 class="food-modal-title" data-ja="温泉まんじゅう 湯の花堂" data-en="Yunohana-do Manju">温泉まんじゅう 湯の花堂</h3>
      <p class="food-modal-en">Yunohana-do Manju</p>
      <p class="food-modal-desc" data-ja="創業大正十二年。三代にわたり受け継がれてきた湯の花堂の温泉まんじゅうは、温泉水を練り込んだ薄皮に、北海道産小豆のこし餡を包んだ一品。蒸籠から立ちのぼる湯気とともに、蒸したてをその場でいただけます。湯灯温泉の定番みやげとしても人気です。" data-en="Founded in 1923, Yunohana-do has passed down its craft for three generations. Their manju features thin dough kneaded with hot spring water, filled with smooth red bean paste from Hokkaido azuki. Enjoy them freshly steamed right at the shop — a beloved Yuakari Onsen souvenir.">創業大正十二年。三代にわたり受け継がれてきた湯の花堂の温泉まんじゅうは、温泉水を練り込んだ薄皮に、北海道産小豆のこし餡を包んだ一品。蒸籠から立ちのぼる湯気とともに、蒸したてをその場でいただけます。湯灯温泉の定番みやげとしても人気です。</p>
      <dl class="food-modal-info">
        <div class="food-modal-info-row"><dt data-ja="営業時間" data-en="Hours">営業時間</dt><dd>8:00 – 17:00</dd></div>
        <div class="food-modal-info-row"><dt data-ja="定休日" data-en="Closed">定休日</dt><dd data-ja="水曜日" data-en="Wednesdays">水曜日</dd></div>
        <div class="food-modal-info-row"><dt data-ja="場所" data-en="Location">場所</dt><dd data-ja="湯灯温泉 本通り沿い" data-en="Yuakari Onsen, Main Street">湯灯温泉 本通り沿い</dd></div>
      </dl>
    </div>
  </div>
</div>

<!-- モーダル2：手打ち蕎麦 山水庵 -->
<div class="food-modal-overlay" id="food-modal-02" aria-hidden="true" role="dialog" aria-label="手打ち蕎麦 山水庵の詳細">
  <div class="food-modal">
    <button type="button" class="food-modal-close" aria-label="閉じる">×</button>
    <div class="food-modal-slider">
      <div class="food-modal-slides">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_soba_01.webp" alt="ざるに盛られた十割蕎麦" class="food-modal-slide is-active" loading="lazy" width="1200" height="896">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_soba_02.webp" alt="そば打ちの作業風景" class="food-modal-slide" loading="lazy" width="1200" height="896">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_soba_03.webp" alt="山菜の天ぷらセット" class="food-modal-slide" loading="lazy" width="1200" height="896">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_soba_04.webp" alt="木造の店内と格子窓" class="food-modal-slide" loading="lazy" width="1200" height="896">
      </div>
      <button type="button" class="food-modal-prev" aria-label="前の画像">‹</button>
      <button type="button" class="food-modal-next" aria-label="次の画像">›</button>
      <div class="food-modal-dots">
        <button type="button" class="food-modal-dot is-active" data-index="0" aria-label="画像1"></button>
        <button type="button" class="food-modal-dot" data-index="1" aria-label="画像2"></button>
        <button type="button" class="food-modal-dot" data-index="2" aria-label="画像3"></button>
        <button type="button" class="food-modal-dot" data-index="3" aria-label="画像4"></button>
      </div>
    </div>
    <div class="food-modal-body">
      <h3 class="food-modal-title" data-ja="手打ち蕎麦 山水庵" data-en="Sansui-an Soba">手打ち蕎麦 山水庵</h3>
      <p class="food-modal-en">Sansui-an Soba</p>
      <p class="food-modal-desc" data-ja="地元産のそば粉を石臼で丁寧に挽き、毎朝打ちたての十割蕎麦を提供する山水庵。湧き水で締めた蕎麦は、香り高く喉越しのよい仕上がり。山菜の天ぷらや季節の小鉢と合わせて、温泉街の静かな昼食をお楽しみください。" data-en="At Sansui-an, locally grown buckwheat is carefully stone-milled and hand-cut fresh each morning. The noodles, rinsed in spring water, are aromatic with a smooth finish. Pair them with mountain vegetable tempura and seasonal side dishes for a peaceful lunch in the hot spring town.">地元産のそば粉を石臼で丁寧に挽き、毎朝打ちたての十割蕎麦を提供する山水庵。湧き水で締めた蕎麦は、香り高く喉越しのよい仕上がり。山菜の天ぷらや季節の小鉢と合わせて、温泉街の静かな昼食をお楽しみください。</p>
      <dl class="food-modal-info">
        <div class="food-modal-info-row"><dt data-ja="営業時間" data-en="Hours">営業時間</dt><dd data-ja="11:00 – 14:30（売切次第終了）" data-en="11:00 – 14:30 (until sold out)">11:00 – 14:30（売切次第終了）</dd></div>
        <div class="food-modal-info-row"><dt data-ja="定休日" data-en="Closed">定休日</dt><dd data-ja="木曜日" data-en="Thursdays">木曜日</dd></div>
        <div class="food-modal-info-row"><dt data-ja="場所" data-en="Location">場所</dt><dd data-ja="湯灯温泉 石畳通り" data-en="Yuakari Onsen, Cobblestone Street">湯灯温泉 石畳通り</dd></div>
      </dl>
    </div>
  </div>
</div>

<!-- モーダル3：地酒 湯灯正宗 -->
<div class="food-modal-overlay" id="food-modal-03" aria-hidden="true" role="dialog" aria-label="地酒 湯灯正宗の詳細">
  <div class="food-modal">
    <button type="button" class="food-modal-close" aria-label="閉じる">×</button>
    <div class="food-modal-slider">
      <div class="food-modal-slides">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_sake_01.webp" alt="一升瓶とお猪口" class="food-modal-slide is-active" loading="lazy" width="1200" height="896">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_sake_02.webp" alt="酒蔵内部と木樽" class="food-modal-slide" loading="lazy" width="1200" height="896">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_sake_03.webp" alt="利き酒体験" class="food-modal-slide" loading="lazy" width="1200" height="896">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_sake_04.webp" alt="杜氏の仕込み作業" class="food-modal-slide" loading="lazy" width="1200" height="896">
      </div>
      <button type="button" class="food-modal-prev" aria-label="前の画像">‹</button>
      <button type="button" class="food-modal-next" aria-label="次の画像">›</button>
      <div class="food-modal-dots">
        <button type="button" class="food-modal-dot is-active" data-index="0" aria-label="画像1"></button>
        <button type="button" class="food-modal-dot" data-index="1" aria-label="画像2"></button>
        <button type="button" class="food-modal-dot" data-index="2" aria-label="画像3"></button>
        <button type="button" class="food-modal-dot" data-index="3" aria-label="画像4"></button>
      </div>
    </div>
    <div class="food-modal-body">
      <h3 class="food-modal-title" data-ja="地酒 湯灯正宗" data-en="Yuakari Masamune Sake">地酒 湯灯正宗</h3>
      <p class="food-modal-en">Yuakari Masamune Sake</p>
      <p class="food-modal-desc" data-ja="明治三十年創業の蔵元が、温泉の湧き水で仕込む純米酒「湯灯正宗」。酒蔵見学では、杜氏のこだわりを聞きながら仕込みの工程を間近で見学できます。見学後は利き酒体験で、季節限定の生酒や熟成酒を含む5種の飲み比べをお楽しみいただけます。" data-en="Founded in 1897, this brewery crafts junmai sake using natural hot spring water. During the tour, hear the toji master brewer explain the fermentation process up close. Afterwards, enjoy a tasting of five varieties including seasonal namazake and aged sake.">明治三十年創業の蔵元が、温泉の湧き水で仕込む純米酒「湯灯正宗」。酒蔵見学では、杜氏のこだわりを聞きながら仕込みの工程を間近で見学できます。見学後は利き酒体験で、季節限定の生酒や熟成酒を含む5種の飲み比べをお楽しみいただけます。</p>
      <dl class="food-modal-info">
        <div class="food-modal-info-row"><dt data-ja="見学時間" data-en="Tour Times">見学時間</dt><dd data-ja="10:00 / 14:00（各回約45分）" data-en="10:00 / 14:00 (approx. 45 min each)">10:00 / 14:00（各回約45分）</dd></div>
        <div class="food-modal-info-row"><dt data-ja="定休日" data-en="Closed">定休日</dt><dd data-ja="日曜日・祝日" data-en="Sundays &amp; Holidays">日曜日・祝日</dd></div>
        <div class="food-modal-info-row"><dt data-ja="場所" data-en="Location">場所</dt><dd data-ja="湯灯温泉 蔵元通り" data-en="Yuakari Onsen, Kuramoto Street">湯灯温泉 蔵元通り</dd></div>
      </dl>
    </div>
  </div>
</div>

<!-- モーダル4：炭火焼き 串の灯 -->
<div class="food-modal-overlay" id="food-modal-04" aria-hidden="true" role="dialog" aria-label="炭火焼き 串の灯の詳細">
  <div class="food-modal">
    <button type="button" class="food-modal-close" aria-label="閉じる">×</button>
    <div class="food-modal-slider">
      <div class="food-modal-slides">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_yakitori_01.webp" alt="炭火の上の串" class="food-modal-slide is-active" loading="lazy" width="1200" height="896">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_yakitori_02.webp" alt="川沿いテラス席の全景" class="food-modal-slide" loading="lazy" width="1200" height="896">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_yakitori_03.webp" alt="山椒つくねと地酒" class="food-modal-slide" loading="lazy" width="1200" height="896">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_yakitori_04.webp" alt="備長炭を扇ぐ手元" class="food-modal-slide" loading="lazy" width="1200" height="896">
      </div>
      <button type="button" class="food-modal-prev" aria-label="前の画像">‹</button>
      <button type="button" class="food-modal-next" aria-label="次の画像">›</button>
      <div class="food-modal-dots">
        <button type="button" class="food-modal-dot is-active" data-index="0" aria-label="画像1"></button>
        <button type="button" class="food-modal-dot" data-index="1" aria-label="画像2"></button>
        <button type="button" class="food-modal-dot" data-index="2" aria-label="画像3"></button>
        <button type="button" class="food-modal-dot" data-index="3" aria-label="画像4"></button>
      </div>
    </div>
    <div class="food-modal-body">
      <h3 class="food-modal-title" data-ja="炭火焼き 串の灯" data-en="Kushi-no-Akari Yakitori">炭火焼き 串の灯</h3>
      <p class="food-modal-en">Kushi-no-Akari Yakitori</p>
      <p class="food-modal-desc" data-ja="地鶏と山の幸を備長炭でじっくり焼き上げる串の灯。川沿いのテラス席では、せせらぎの音を聴きながら焼きたての串を楽しめます。名物の「山椒つくね」と地酒の組み合わせは、夕暮れどきの温泉街にぴったりの一杯です。" data-en="At Kushi-no-Akari, local chicken and mountain delicacies are slowly grilled over binchotan charcoal. The riverside terrace lets you enjoy freshly grilled skewers to the sound of flowing water. Their signature sansho tsukune paired with local sake is the perfect evening treat.">地鶏と山の幸を備長炭でじっくり焼き上げる串の灯。川沿いのテラス席では、せせらぎの音を聴きながら焼きたての串を楽しめます。名物の「山椒つくね」と地酒の組み合わせは、夕暮れどきの温泉街にぴったりの一杯です。</p>
      <dl class="food-modal-info">
        <div class="food-modal-info-row"><dt data-ja="営業時間" data-en="Hours">営業時間</dt><dd>16:00 – 22:00</dd></div>
        <div class="food-modal-info-row"><dt data-ja="定休日" data-en="Closed">定休日</dt><dd data-ja="月曜日" data-en="Mondays">月曜日</dd></div>
        <div class="food-modal-info-row"><dt data-ja="場所" data-en="Location">場所</dt><dd data-ja="湯灯温泉 川沿い遊歩道" data-en="Yuakari Onsen, Riverside Promenade">湯灯温泉 川沿い遊歩道</dd></div>
      </dl>
    </div>
  </div>
</div>

<!-- モーダル5：湯上りジェラート ゆのまち -->
<div class="food-modal-overlay" id="food-modal-05" aria-hidden="true" role="dialog" aria-label="湯上りジェラート ゆのまちの詳細">
  <div class="food-modal">
    <button type="button" class="food-modal-close" aria-label="閉じる">×</button>
    <div class="food-modal-slider">
      <div class="food-modal-slides">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_gelato_01.webp" alt="ジェラートコーン" class="food-modal-slide is-active" loading="lazy" width="1200" height="896">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_gelato_02.webp" alt="ショーケースのジェラート" class="food-modal-slide" loading="lazy" width="1200" height="896">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_gelato_03.webp" alt="食べ歩く2人の後ろ姿" class="food-modal-slide" loading="lazy" width="1200" height="896">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_gelato_04.webp" alt="小さな店先の外観" class="food-modal-slide" loading="lazy" width="1200" height="896">
      </div>
      <button type="button" class="food-modal-prev" aria-label="前の画像">‹</button>
      <button type="button" class="food-modal-next" aria-label="次の画像">›</button>
      <div class="food-modal-dots">
        <button type="button" class="food-modal-dot is-active" data-index="0" aria-label="画像1"></button>
        <button type="button" class="food-modal-dot" data-index="1" aria-label="画像2"></button>
        <button type="button" class="food-modal-dot" data-index="2" aria-label="画像3"></button>
        <button type="button" class="food-modal-dot" data-index="3" aria-label="画像4"></button>
      </div>
    </div>
    <div class="food-modal-body">
      <h3 class="food-modal-title" data-ja="湯上りジェラート ゆのまち" data-en="Yunomachi Gelato">湯上りジェラート ゆのまち</h3>
      <p class="food-modal-en">Yunomachi Gelato</p>
      <p class="food-modal-desc" data-ja="地元牧場の新鮮な牛乳と、季節ごとに変わる旬のフルーツで手づくりするジェラート。湯上がりのほてった体に、ひんやり滑らかな口どけが心地よい一品です。定番の温泉たまごミルク味や、夏限定の桃、秋の栗など、訪れるたびに新しい味に出会えます。" data-en="Handmade gelato crafted from fresh local farm milk and seasonal fruits. The cool, smooth treat is perfect after a hot spring bath. Try the signature onsen egg milk flavor, or seasonal specials like summer peach and autumn chestnut — a new taste every visit.">地元牧場の新鮮な牛乳と、季節ごとに変わる旬のフルーツで手づくりするジェラート。湯上がりのほてった体に、ひんやり滑らかな口どけが心地よい一品です。定番の温泉たまごミルク味や、夏限定の桃、秋の栗など、訪れるたびに新しい味に出会えます。</p>
      <dl class="food-modal-info">
        <div class="food-modal-info-row"><dt data-ja="営業時間" data-en="Hours">営業時間</dt><dd>10:00 – 18:00</dd></div>
        <div class="food-modal-info-row"><dt data-ja="定休日" data-en="Closed">定休日</dt><dd data-ja="不定休" data-en="Irregular holidays">不定休</dd></div>
        <div class="food-modal-info-row"><dt data-ja="場所" data-en="Location">場所</dt><dd data-ja="湯灯温泉 外湯めぐり通り" data-en="Yuakari Onsen, Public Bath Street">湯灯温泉 外湯めぐり通り</dd></div>
      </dl>
    </div>
  </div>
</div>

<!-- モーダル6：茶寮 灯影 -->
<div class="food-modal-overlay" id="food-modal-06" aria-hidden="true" role="dialog" aria-label="茶寮 灯影の詳細">
  <div class="food-modal">
    <button type="button" class="food-modal-close" aria-label="閉じる">×</button>
    <div class="food-modal-slider">
      <div class="food-modal-slides">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_saryo_01.webp" alt="抹茶と和菓子" class="food-modal-slide is-active" loading="lazy" width="1200" height="896">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_saryo_02.webp" alt="座敷から温泉街を見下ろす" class="food-modal-slide" loading="lazy" width="1200" height="896">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_saryo_03.webp" alt="季節の上生菓子" class="food-modal-slide" loading="lazy" width="1200" height="896">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/food_img/food_saryo_04.webp" alt="築八十年の外観" class="food-modal-slide" loading="lazy" width="1200" height="896">
      </div>
      <button type="button" class="food-modal-prev" aria-label="前の画像">‹</button>
      <button type="button" class="food-modal-next" aria-label="次の画像">›</button>
      <div class="food-modal-dots">
        <button type="button" class="food-modal-dot is-active" data-index="0" aria-label="画像1"></button>
        <button type="button" class="food-modal-dot" data-index="1" aria-label="画像2"></button>
        <button type="button" class="food-modal-dot" data-index="2" aria-label="画像3"></button>
        <button type="button" class="food-modal-dot" data-index="3" aria-label="画像4"></button>
      </div>
    </div>
    <div class="food-modal-body">
      <h3 class="food-modal-title" data-ja="茶寮 灯影" data-en="Saryo Hokage">茶寮 灯影</h3>
      <p class="food-modal-en">Saryo Hokage</p>
      <p class="food-modal-desc" data-ja="築八十年の旅館を改装した茶寮。格子窓から温泉街の街並みを一望できる二階の座敷席が人気です。地元の和菓子職人がつくる季節の上生菓子と、石臼挽きの抹茶を合わせた一服で、ゆったりとした時間をお過ごしください。" data-en="This tea house was renovated from an 80-year-old ryokan. The popular second-floor tatami seating offers panoramic views of the hot spring town through lattice windows. Enjoy seasonal nerikiri wagashi by local artisans paired with stone-milled matcha for a peaceful moment.">築八十年の旅館を改装した茶寮。格子窓から温泉街の街並みを一望できる二階の座敷席が人気です。地元の和菓子職人がつくる季節の上生菓子と、石臼挽きの抹茶を合わせた一服で、ゆったりとした時間をお過ごしください。</p>
      <dl class="food-modal-info">
        <div class="food-modal-info-row"><dt data-ja="営業時間" data-en="Hours">営業時間</dt><dd>10:00 – 17:00（L.O. 16:30）</dd></div>
        <div class="food-modal-info-row"><dt data-ja="定休日" data-en="Closed">定休日</dt><dd data-ja="火曜日" data-en="Tuesdays">火曜日</dd></div>
        <div class="food-modal-info-row"><dt data-ja="場所" data-en="Location">場所</dt><dd data-ja="湯灯温泉 高台通り" data-en="Yuakari Onsen, Hilltop Street">湯灯温泉 高台通り</dd></div>
      </dl>
    </div>
  </div>
</div>

<?php get_footer(); ?>
