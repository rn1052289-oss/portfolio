<?php get_header(); ?>

<main id="main-content">
		
		<!-- パンくず（共通） -->
		<nav class="sub-breadcrumb" aria-label="パンくずリスト">
    <div class="sub-breadcrumb-inner">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sub-breadcrumb-link" data-ja="TOP" data-en="TOP">TOP</a>
      <span class="sub-breadcrumb-sep" aria-hidden="true">/</span>
      <a href="<?php echo esc_url( home_url( '/tours/' ) ); ?>" class="sub-breadcrumb-link" data-ja="Tours" data-en="Tours">Tours</a>
      <span class="sub-breadcrumb-sep" aria-hidden="true">/</span>
      <span class="sub-breadcrumb-current" data-ja="湯灯まるごと体験ツアー" data-en="The Complete Yuakari Experience">湯灯まるごと体験ツアー</span>
    </div>
  </nav>
		
		<!-- ファーストビュー（共通） -->
		<section class="sub-firstview sub-firstview--tour-detail">
				<div class="sub-firstview-overlay" aria-hidden="true"></div>
				<div class="sub-firstview-inner">
						<span class="td-badge">POPULAR</span>
						<h1 class="sub-firstview-title" data-ja="湯灯まるごと体験ツアー" data-en="The Complete Yuakari Experience">湯灯まるごと体験ツアー</h1>
						<p class="sub-firstview-sub"><em>The Complete Yuakari Experience</em></p>
						<span class="sub-firstview-line" aria-hidden="true"></span>
						<p class="sub-firstview-lead" data-ja="食べ歩き・工芸体験・外湯巡りを一日で楽しむ、湯灯温泉のフラッグシップツアー" data-en="Food walks, craft workshops &amp; public bath hopping in one day — the flagship tour">食べ歩き・工芸体験・外湯巡りを一日で楽しむ、湯灯温泉のフラッグシップツアー</p>
				</div>
		</section>
		
				<!-- 情報バー -->
		<div class="td-info-bar">
				<div class="td-info-bar-inner">
						<div class="td-info-item"> <span class="td-info-label">DURATION</span> <span class="td-info-value" data-ja="約6時間" data-en="Approx. 6h">約6時間</span> </div>
						<div class="td-info-item"> <span class="td-info-label">PRICE</span> <span class="td-info-value">¥12,800〜</span> </div>
						<div class="td-info-item"> <span class="td-info-label">GROUP</span> <span class="td-info-value" data-ja="2〜8名" data-en="2–8 guests">2〜8名</span> </div>
						<div class="td-info-item"> <span class="td-info-label">LANGUAGE</span> <span class="td-info-value" data-ja="日本語 / EN" data-en="JP / EN">日本語 / EN</span> </div>
				</div>
		</div>
		
		<!-- SP専用：予約バー（PCでは非表示） -->
		<div class="td-sp-reserve-bar">
				<div class="td-sp-reserve-inner">
						<div class="td-sp-reserve-price-area"> <span class="td-sp-reserve-label" data-ja="料金（税込）" data-en="Price (incl. tax)">料金（税込）</span> <span class="td-sp-reserve-yen">¥12,800</span> <span class="td-sp-reserve-per" data-ja="〜 / 1名" data-en="~ / per person">〜 / 1名</span> </div>
						<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="td-sp-reserve-btn" data-ja="FORM DEMO" data-en="FORM DEMO">FORM DEMO</a>
						<div class="td-sp-reserve-note" data-ja="架空プランの操作見本" data-en="Fictional plan interaction demo">架空プランの操作見本</div>
				</div>
		</div>
		
		<!-- 2カラム -->
		<div class="td-main-wrap">
				<div class="td-main-inner"> 
						
						<!-- 左カラム -->
						<div class="td-content"> 
								
								<!-- OVERVIEW -->
								<section class="td-section td-overview">
										<div class="td-section-label"> <span class="td-section-label-en">OVERVIEW</span> <span class="td-section-label-line"></span> </div>
										<h2 class="td-section-heading" data-ja="ツアー概要" data-en="Tour Overview">ツアー概要</h2>
										<p class="td-overview-text" data-ja="湯灯温泉の魅力をまるごと一日で体験するフラッグシップツアーです。朝の温泉街散策から始まり、地元の食材を使った食べ歩き、職人の工房での陶芸体験、そして外湯巡りまで。地元ガイドが温泉街の歴史や隠れた名所をご案内します。お二人での旅行にも、少人数グループにもぴったりのプランです。" data-en="Our flagship tour lets you experience all of Yuakari Onsen in a single day. Starting with a morning stroll through the hot spring town, followed by food tastings with local ingredients, a pottery workshop at an artisan's studio, and a visit to the public baths. A local guide will show you the town's history and hidden gems. Perfect for couples and small groups alike.">湯灯温泉の魅力をまるごと一日で体験するフラッグシップツアーです。朝の温泉街散策から始まり、地元の食材を使った食べ歩き、職人の工房での陶芸体験、そして外湯巡りまで。地元ガイドが温泉街の歴史や隠れた名所をご案内します。お二人での旅行にも、少人数グループにもぴったりのプランです。</p>
								</section>
								
								<!-- こんな人におすすめ -->
								<section class="td-section td-recommend">
										<div class="td-section-label"> <span class="td-section-label-en">FOR WHOM</span> <span class="td-section-label-line"></span> </div>
										<h2 class="td-section-heading" data-ja="こんな方におすすめ" data-en="Who Is This Tour For?">こんな方におすすめ</h2>
										<ul class="td-recommend-list">
												<li class="td-recommend-item" data-ja="✓ 初めて湯灯温泉を訪れる方" data-en="✓ First-time visitors to Yuakari Onsen">✓ 初めて湯灯温泉を訪れる方</li>
												<li class="td-recommend-item" data-ja="✓ 一日でたっぷり楽しみたいカップル・ご夫婦" data-en="✓ Couples wanting a full-day experience">✓ 一日でたっぷり楽しみたいカップル・ご夫婦</li>
												<li class="td-recommend-item" data-ja="✓ 食・工芸・温泉をセットで体験したい方" data-en="✓ Those who want food, craft &amp; hot springs all in one">✓ 食・工芸・温泉をセットで体験したい方</li>
												<li class="td-recommend-item" data-ja="✓ 少人数グループ（2〜8名）" data-en="✓ Small groups of 2–8">✓ 少人数グループ（2〜8名）</li>
												<li class="td-recommend-item" data-ja="✓ 英語ガイド希望の方（週末予約制）" data-en="✓ English-speaking guests (weekend slots available)">✓ 英語ガイド希望の方（週末予約制）</li>
										</ul>
								</section>

								<!-- ITINERARY -->
								<section class="td-section td-itinerary">
										<div class="td-section-label"> <span class="td-section-label-en">ITINERARY</span> <span class="td-section-label-line"></span> </div>
										<h2 class="td-section-heading" data-ja="行程" data-en="Itinerary">行程</h2>
										<div class="td-timeline">
												<div class="td-timeline-item">
														<div class="td-timeline-marker"> <span class="td-timeline-number">1</span> <span class="td-timeline-time">09:00</span> </div>
														<div class="td-timeline-body">
																<h3 class="td-timeline-title" data-ja="集合・温泉街散策" data-en="Meeting Point &amp; Town Walk">集合・温泉街散策</h3>
																<p class="td-timeline-en"><em>Meet &amp; Walk the Town</em></p>
																<p class="td-timeline-desc" data-ja="湯灯商會前に集合。石畳の路地を巡りながら温泉街の歴史を紹介" data-en="Meet at YUAKARI &amp; Co. and explore cobblestone streets while learning the town's history">湯灯商會前に集合。石畳の路地を巡りながら温泉街の歴史を紹介</p>
																<div class="td-timeline-photos"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/tourdetail_img/tourdetail_walk.webp" alt="温泉街散策" class="td-timeline-photo" loading="lazy" width="1200" height="896"></div>
														</div>
												</div>
												<div class="td-timeline-item">
														<div class="td-timeline-marker"> <span class="td-timeline-number">2</span> <span class="td-timeline-time">10:30</span> </div>
														<div class="td-timeline-body">
																<h3 class="td-timeline-title" data-ja="食べ歩き体験" data-en="Food Walking Tour">食べ歩き体験</h3>
																<p class="td-timeline-en"><em>Food Walking Tour</em></p>
																<p class="td-timeline-desc" data-ja="温泉まんじゅう・地酒・手打ち蕎麦など5カ所のスポットを巡る" data-en="Visit 5 spots for steamed buns, local sake, handmade soba &amp; more">温泉まんじゅう・地酒・手打ち蕎麦など5カ所のスポットを巡る</p>
														</div>
												</div>
												<div class="td-timeline-item">
														<div class="td-timeline-marker"> <span class="td-timeline-number">3</span> <span class="td-timeline-time">12:30</span> </div>
														<div class="td-timeline-body">
																<h3 class="td-timeline-title" data-ja="陶芸体験ワークショップ" data-en="Pottery Workshop">陶芸体験ワークショップ</h3>
																<p class="td-timeline-en"><em>Pottery Workshop</em></p>
																<p class="td-timeline-desc" data-ja="地元の窯元で湯呑みまたは小皿を制作。作品は後日郵送" data-en="Create a teacup or small plate at a local kiln. Works are shipped after firing">地元の窯元で湯呑みまたは小皿を制作。作品は後日郵送</p>
														</div>
												</div>
												<div class="td-timeline-item">
														<div class="td-timeline-marker"> <span class="td-timeline-number">4</span> <span class="td-timeline-time">14:30</span> </div>
														<div class="td-timeline-body">
																<h3 class="td-timeline-title" data-ja="外湯巡り・自由散策" data-en="Public Bath Hopping &amp; Free Time">外湯巡り・自由散策</h3>
																<p class="td-timeline-en"><em>Public Bath Hopping &amp; Free Time</em></p>
																<p class="td-timeline-desc" data-ja="3カ所の外湯から選んで入浴。タオル・入浴券はツアーに含まれます" data-en="Choose from 3 public baths. Towels and bath tickets are included">3カ所の外湯から選んで入浴。タオル・入浴券はツアーに含まれます</p>
														</div>
												</div>
												<div class="td-timeline-item td-timeline-end">
														<div class="td-timeline-marker"> <span class="td-timeline-number td-timeline-number-end"></span> <span class="td-timeline-time">15:00</span> </div>
														<div class="td-timeline-body">
																<p class="td-timeline-title" data-ja="ツアー終了・解散" data-en="Tour ends / Dismissal">ツアー終了・解散</p>
														</div>
												</div>
										</div>
								</section>
								
								<!-- INCLUDES -->
								<section class="td-section td-includes">
										<div class="td-section-label"> <span class="td-section-label-en">INCLUDES</span> <span class="td-section-label-line"></span> </div>
										<h2 class="td-section-heading" data-ja="含まれるもの" data-en="What's Included">含まれるもの</h2>
										<ul class="td-includes-list">
												<li class="td-includes-item" data-ja="地元ガイドによるご案内（日本語・英語対応）" data-en="Guided tour by a local guide (Japanese &amp; English)">地元ガイドによるご案内（日本語・英語対応）</li>
												<li class="td-includes-item" data-ja="食べ歩き5スポットの試食" data-en="Food tastings at 5 stops">食べ歩き5スポットの試食</li>
												<li class="td-includes-item" data-ja="陶芸体験（材料費・焼成費・郵送費込み）" data-en="Pottery experience (materials, firing &amp; shipping included)">陶芸体験（材料費・焼成費・郵送費込み）</li>
												<li class="td-includes-item" data-ja="外湯入浴券1回分・タオルセット" data-en="One public bath ticket &amp; towel set">外湯入浴券1回分・タオルセット</li>
												<li class="td-includes-item" data-ja="湯灯商會オリジナル手ぬぐい（お土産）" data-en="YUAKARI &amp; Co. original tenugui towel (souvenir)">湯灯商會オリジナル手ぬぐい（お土産）</li>
										</ul>
								</section>
								
								<!-- GALLERY（3枚） -->
								<section class="td-section td-gallery">
										<div class="td-section-label"> <span class="td-section-label-en">GALLERY</span> <span class="td-section-label-line"></span> </div>
										<h2 class="td-section-heading" data-ja="ツアーの様子" data-en="Tour Gallery">ツアーの様子</h2>
										<div class="td-gallery-grid"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/tourdetail_img/tourdetail_maingallery.webp" alt="温泉街の風景" class="td-gallery-main" loading="lazy" width="1376" height="768"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/tourdetail_img/tourdetail_craft.webp" alt="陶芸体験" class="td-gallery-sub" loading="lazy" width="1024" height="1024"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/tourdetail_img/tourdetail_photo3.webp" alt="外湯の風景" class="td-gallery-sub" loading="lazy" width="1200" height="896"></div>
								</section>
								
								<!-- NOTES -->
								<section class="td-section td-notes">
										<div class="td-section-label"> <span class="td-section-label-en">NOTES</span> <span class="td-section-label-line"></span> </div>
										<h2 class="td-section-heading" data-ja="ご注意事項" data-en="Important Notes">ご注意事項</h2>
										<div class="td-notes-box">
												<ul class="td-notes-list">
														<li data-ja="・集合場所：湯灯商會 本店前（湯灯温泉バス停より徒歩3分）" data-en="Meet at: YUAKARI &amp; Co. Main Shop (3 min walk from bus stop)">・集合場所：湯灯商會 本店前（湯灯温泉バス停より徒歩3分）</li>
														<li data-ja="・持ち物：歩きやすい靴、タオル（外湯用のタオルはご用意します）" data-en="What to bring: Comfortable shoes, towel (bath towels provided)">・持ち物：歩きやすい靴、タオル（外湯用のタオルはご用意します）</li>
														<li data-ja="・予約：オンライン予約は前日17:00まで。当日予約はお電話にて" data-en="Reservations: Online by 5:00 PM the day before. Same-day by phone.">・予約：オンライン予約は前日17:00まで。当日予約はお電話にて</li>
														<li data-ja="・キャンセル：前日17:00まで無料。当日キャンセルは50%" data-en="Cancellation: Free until 5:00 PM the day before. 50% fee on the day.">・キャンセル：前日17:00まで無料。当日キャンセルは50%</li>
														<li data-ja="・英語対応：英語ガイド付きツアーは週末限定（要事前予約）" data-en="English guide: Weekends only (advance reservation required)">・英語対応：英語ガイド付きツアーは週末限定（要事前予約）</li>
														<li data-ja="・最少催行人数：2名様より" data-en="Minimum: 2 participants">・最少催行人数：2名様より</li>
												</ul>
										</div>
								</section>
						</div>
						
						<!-- 右サイドバー -->
						<aside class="td-sidebar"> 
								
								<!-- 予約ボックス（PCのみ表示） -->
								<div class="td-reserve-box">
										<div class="td-reserve-top-bar"></div>
										<div class="td-reserve-inner">
												<p class="td-reserve-label" data-ja="料金（税込）" data-en="Price (incl. tax)">料金（税込）</p>
												<div class="td-reserve-price"> <span class="td-reserve-yen">¥12,800</span> <span class="td-reserve-per" data-ja="〜 / 1名" data-en="~ / per person">〜 / 1名</span> </div>
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
												<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="td-reserve-inquire" data-ja="フォームUIを見る" data-en="View Form UI">フォームUIを見る</a> </div>
								</div>
								
								<!-- 他のツアー -->
								<div class="td-other-tours">
										<div class="td-section-label"> <span class="td-section-label-en">OTHER TOURS</span> <span class="td-section-label-line"></span> </div>
										<h3 class="td-other-tours-heading" data-ja="他のツアー" data-en="Other Tours">他のツアー</h3>
										<div class="td-other-tours-list">
												<div class="td-other-card">
														<div class="td-other-card-thumb"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/tourdetail_img/tourdetail_morning.webp" alt="朝の食べ歩きツアー" loading="lazy" width="1024" height="1024"></div>
														<div class="td-other-card-body">
																<h4 class="td-other-card-title" data-ja="朝の食べ歩きツアー" data-en="Morning Food Walk">朝の食べ歩きツアー</h4>
																<p class="td-other-card-en"><em>Morning Food Walk</em></p>
																<p class="td-other-card-meta">3h ｜ ¥5,500〜</p>
																<a href="<?php echo esc_url( yuakari_page_url( 'tours/tour-morning' ) ); ?>" class="td-other-card-btn">DETAILS →</a> </div>
												</div>
												<div class="td-other-card">
														<div class="td-other-card-thumb"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/tourdetail_img/tourdetail_craft.webp" alt="陶芸・手しごと体験" loading="lazy" width="1024" height="1024"></div>
														<div class="td-other-card-body">
																<h4 class="td-other-card-title" data-ja="陶芸・手しごと体験" data-en="Pottery &amp; Craft">陶芸・手しごと体験</h4>
																<p class="td-other-card-en"><em>Pottery &amp; Craft</em></p>
																<p class="td-other-card-meta">2.5h ｜ ¥4,800〜</p>
																<a href="<?php echo esc_url( yuakari_page_url( 'tours/tour-craft' ) ); ?>" class="td-other-card-btn">DETAILS →</a> </div>
												</div>
												<div class="td-other-card">
														<div class="td-other-card-thumb"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/tourdetail_img/tourdetail_nightwalk.webp" alt="夕暮れの灯り散歩" loading="lazy" width="1024" height="1024"></div>
														<div class="td-other-card-body">
																<h4 class="td-other-card-title" data-ja="夕暮れの灯り散歩" data-en="Twilight Lantern Walk">夕暮れの灯り散歩</h4>
																<p class="td-other-card-en"><em>Twilight Lantern Walk</em></p>
																<p class="td-other-card-meta">1.5h ｜ ¥3,200〜</p>
																<a href="<?php echo esc_url( yuakari_page_url( 'tours/tour-twilight' ) ); ?>" class="td-other-card-btn">DETAILS →</a> </div>
												</div>
										</div>
								</div>
						</aside>
				</div>
		</div>
		
		<!-- CTA帯 -->
		<section class="td-cta-section">
				<div class="td-cta-inner">
						<h2 class="td-cta-heading" data-ja="フォームUIでプランを選ぶ" data-en="Select This Plan in the Form Demo">フォームUIでプランを選ぶ</h2>
						<p class="td-cta-sub"><em>FICTIONAL PROJECT · Entries are not transmitted</em></p>
						<div class="td-cta-buttons"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="td-cta-btn" data-ja="日付・人数の入力を試す" data-en="Try dates &amp; group size">日付・人数の入力を試す</a></div>
						<p class="td-cta-info" data-ja="実際の予約受付はありません" data-en="No real bookings are accepted">実際の予約受付はありません</p>
						<p class="td-cta-note" data-ja="※ 掲載内容・料金・日程はすべて作品内の架空設定です" data-en="※ All details, prices, and schedules are fictional project content">※ 掲載内容・料金・日程はすべて作品内の架空設定です</p>
				</div>
		</section>
</main>

<?php get_footer(); ?>
