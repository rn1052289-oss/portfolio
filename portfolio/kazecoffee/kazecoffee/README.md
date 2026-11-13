# KAZE COFFEE

自主制作の架空カフェサイト（1ページ）。2026-11-13 に、写真・情報構成・配色・コードを一から作り直した。実在の店舗ではなく、住所・電話番号（03-0000-0000）・メニューはすべて架空。予約・送信・決済・SNS 連携は実装していない。

作り直しの理由（2026-11-13 のレビュー）：外部直リンクの写真が 404 になっていた、セクション見出しが `div` だった、`aria-disabled` のダミーリンクが多く「行く・連絡する」導線がなかった、ヒーローの白文字が写真の明るい部分で 2.89:1 だった。

## 構成

| セクション | 内容 |
| --- | --- |
| h1 ヒーロー | 縦書きの見出し・写真・店先の札（今日の営業状況・場所・席・今月の豆）・メニューと行き方への導線 |
| h2 お店について | 焙煎と抽出の説明 |
| h2 メニュー | 印刷した品書きのような1枚の価格表。h3 ハンドドリップ／エスプレッソ・ミルク／季節のドリンク／焼き菓子 |
| h2 店内とすごし方 | 写真3枚と、席・テイクアウト・電源・支払いの一覧 |
| h2 行き方・営業時間 | 曜日別の営業時間（今日の行を強調）・電話（架空、リンクにしない）・住所・簡易地図（SVG）・道順 |

- 文字を写真の上に置かない（コントラストを画像に左右させない）
- 色は生成り（地）・墨（文字）・深緑（差し色：営業中の印、今日の行、地図の経路）だけ
- 電話番号は `tel:` リンクにしない。共通の `js/demo-notice.js` が `tel:` リンクを無効化し、ダミーリンクに戻ってしまうため
- 今日の営業状況は `Asia/Tokyo` の時刻で JavaScript が計算する。JavaScript が無効でも、固定の営業時間が表示される

## 写真

2026-11-13 に Unsplash で検索し、写真ページで「Free」と Unsplash License の表示を確認した（Unsplash+ の写真は使っていない）。2000px 幅で取得し、4:5 に切り出して `cwebp` で WebP に変換。幅 480／960／1440px（メニュー用は 480／960px）を用意し、`srcset` で出し分ける。人物や撮影場所による推薦や、当店（架空）の写真であることを示す意図はない。

| ファイル | 撮影者・出典 | 用途 |
| --- | --- | --- |
| hero-pourover-*.webp | [Najib Kalil / Unsplash](https://unsplash.com/photos/x-8DF-Ry0Zo) | ヒーロー |
| story-pour-*.webp | [Gerson Cifuentes / Unsplash](https://unsplash.com/photos/irQsqR3vm8c) | お店について |
| menu-drip-*.webp | [Luke Porter / Unsplash](https://unsplash.com/photos/2UF6Jloc8Qc) | メニュー（ハンドドリップ） |
| menu-latte-*.webp | [Sepehr Moazed / Unsplash](https://unsplash.com/photos/7zow7-ZranQ) | メニュー（エスプレッソ・ミルク） |
| space-counter-*.webp | [Skyler Smith / Unsplash](https://unsplash.com/photos/DOLym82QuQk) | 店内（カウンター） |
| space-plants-*.webp | [Dragnar / Unsplash](https://unsplash.com/photos/TNfgr9yDOiI) | 店内 |
| space-window-*.webp | [Ezgi Deliklitas / Unsplash](https://unsplash.com/photos/JlkyB9VH-hU) | 窓辺の席 |

旧版の `images/firstview.jpg`・`firstview.webp`（出典の記録なし）は使わなくなったため削除した。

## デザイン調査（海外のカフェ・ロースター 12サイト）

2026-11-13 に公式サイトのトップページを表示して確認した。文章や写真は転載していない。Fuglen（証明書エラー）と Rosslyn（読み込み不可）は表示できず、除外した。

| 公式サイト | 確認したこと | 採用 |
| --- | --- | --- |
| [Kaffeine](https://kaffeine.co.uk/)（ロンドン） | トップに店ごとの住所と曜日別の営業時間を出している | 採用：最初の画面に「今日の営業」と場所を出す |
| [Monmouth Coffee](https://www.monmouthcoffee.co.uk/)（ロンドン） | 豆ごとに産地・味の言葉3〜4語・焙煎度・価格を並べる | 採用：豆の説明の型 |
| [Workshop Coffee](https://workshopcoffee.com/)（ロンドン） | 味わい・産地・生産者の短い項目の一覧 | 採用：品名と短い説明の組み合わせ |
| [Ritual Coffee](https://ritualcoffee.com/)（サンフランシスコ） | 「NOTES OF:」で味を3語にまとめる | 採用：味の言葉を3つに絞る |
| [Market Lane Coffee](https://marketlane.com.au/)（メルボルン） | 文字を白地に置き、写真は横に分ける | 採用：文字と写真を重ねない |
| [Prufrock Coffee](https://prufrockcoffee.com/)（ロンドン） | 各ブロックの導線を1つに絞っている | 採用：ボタンは1つ、もう一方は文字リンク |
| [Tim Wendelboe](https://timwendelboe.no/)（オスロ） | 余白が多く、装飾を抑えた構成 | 参考：装飾を足さない |
| [Sightglass](https://sightglasscoffee.com/)（サンフランシスコ） | 写真の上に白文字の見出し | 不採用：明るい部分で読めなくなる |
| [Coffee Collective](https://coffeecollective.dk/)（コペンハーゲン） | 写真の上に白文字の見出し | 不採用：同上 |
| [Coutume Café](https://coutumecafe.com/)（パリ） | 最初にクーポンのポップアップ | 不採用：来店情報が隠れる |
| [La Cabra](https://lacabra.com/)（オーフス） | 最初に Cookie の同意画面が全面に出る | 不採用 |
| [Proud Mary](https://www.proudmarycoffee.com.au/)（メルボルン） | トップが通販の商品一覧 | 不採用：1店舗のスタンドには合わない |

調査したサイトの多くは通販が中心で、来店の情報はトップに出ていない。このサイトは1店舗のスタンドを想定しているため、Kaffeine のように「いつ開いていて、どこにあるか」を最初に出す方針を取った。

## 動作

プレーンな HTML／CSS／JavaScript（`js/main.js`）。

- モバイルメニュー：開くと閉じるボタンへフォーカスし、ヘッダー・本文・フッターを `inert` にする。Tab／Shift+Tab はメニュー内で循環、Esc で閉じて開いたボタンへフォーカスを戻す。メニュー内のリンクでは、移動先のセクションへフォーカスを移す。PC 幅になったら自動で閉じる
- `prefers-reduced-motion`：CSS ではトランジション・スムーズスクロールを止める。JS では写真のフェード表示を最初から表示済みにし、途中で設定が変わっても追従する

## 検証（2026-11-13）

- PASS：ブラウザペインの 375×812・1280×800 で横はみ出しなし（`scrollWidth` が画面幅と一致）
- PASS：コントラスト。ページ内の全テキストを、計算した文字色と背景色で WCAG 2.1 の比率に換算（375px：138 ノード、1280px：142 ノード）。最小は注記の #524c44 on #f4efe6 = 7.41:1。フッターは #cdc5b8 on #26231f = 9.14:1。写真の上に載る文字は 0 件。地図の SVG の文字は最小 6.19:1（#57514a on #ebe4d6）。ホバー時（ボタン #f4efe6 on #3f5a44、文字リンク #3f5a44 on #f4efe6）は 6.65:1
- PASS：見出しは h1 → h2 → h3 の順。`aria-disabled`／`data-demo-disabled` の要素は 0 件、外部の画像は 0 件、読み込めない画像は 0 件
- PASS：モバイルメニューの開閉、フォーカストラップ、Esc、フォーカスの戻し、`inert`（スクリプトでキー操作を発生させて確認）。`node --check js/main.js`
- 未確認：OS の「視差効果を減らす」を実際にオンにした状態での表示（CSS と JS を読んで確認したのみ）、実機（iOS Safari・Android Chrome）、スクリーンリーダー
