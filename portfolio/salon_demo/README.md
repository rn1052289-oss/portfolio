# NAGI HAIR

自主制作の架空サロンLP。2026-11-11に写真・情報構成・配色・レスポンシブ表示を再設計。実店舗、スタッフ、施術実績を紹介するものではありません。実予約・送信・発信・決済・個人情報保存は実装していません。予約導線はメニューを選ぶ操作デモです。

## 写真

2026-11-11に素材ページと[Pexelsライセンス](https://www.pexels.com/license/)・[Unsplashライセンス](https://unsplash.com/license)を確認。両ライセンスは2026-11-12に再確認。無料利用・改変可能な実写素材をWebPに変換。人物・撮影店舗による推薦や当サロンの実績を示す意図はありません。旧AI画像は参照を外し、ファイルは保持しています。

| ファイル | 撮影者・出典 | 用途 |
| --- | --- | --- |
| short-natural.webp | [cottonbro studio / Pexels](https://www.pexels.com/photo/a-woman-with-short-hair-wearing-a-white-shirt-7703309/) | ヒーロー・ショートのイメージ |
| soft-wave.webp | [Angel Rondon / Pexels](https://www.pexels.com/photo/a-woman-with-long-wavy-hair-27604284/) | ロングのイメージ |
| salon-space.webp | [Delbeautybox / Pexels](https://www.pexels.com/photo/white-and-brown-chairs-inside-a-salon-705255/) | サロン空間のイメージ |
| craft.webp | [Emma Ou / Unsplash](https://unsplash.com/photos/a-woman-is-getting-her-hair-cut-in-front-of-a-mirror-nVkIZg_sbLY) | 施術のイメージ |

## デザイン調査

以下25サイトの公式本文から構成・導線を調査。Chromeで視覚確認したのはCote、Am prive、Blue Tit London、Taylor Taylor London、SALTの5件です（SALT動画の読み込みは未確認）。2026-11-11時点。文章や写真は転載せず、大きな髪写真、大小の構図、色面による切替、価格一覧、初回来店の情報を参考にしました。

| 公式サイト | 確認した構成・導線 |
| --- | --- |
| [Harris](https://harris-aoyama.com/) | スタイル・相談・予約 |
| [Cote](https://www.cote-hair.com/) | 髪写真を主役にした構成 |
| [BRiLLiANT](https://www.hairbrilliant.co.jp/) | 営業時間・予約・スタッフ |
| [NATSUYA](https://www.natsuya-hair.com/) | 小規模店・ヘアカタログ |
| [RENJISHI](https://renjishi.com/) | スタイルから店舗へ |
| [STEP BONE CUT](https://www.sbc-tokyo.com/tokyo) | 空間・メニュー・予約 |
| [Lalei](https://www.lalei-tokyo.com/short) | ショート・ボブ写真 |
| [THE BOB&SHORT](https://the-bob-and-short.com/hajimetenokatahe/salons/omotesando/) | 初回案内・メニュー |
| [PEEK-A-BOO](https://www.peek-a-boo.co.jp/salon/omotesando/) | 店舗・スタッフ・料金・予約 |
| [Am prive](https://amprive-hair.com/) | 非対称の写真とコピー、ニュースの罫線 |
| [ABBEY](https://www.abbey2007.com/) | コレクション・人・価格 |
| [kakimoto arms](https://kakimoto-arms.com/) | 専門性・カタログ |
| [HEAVENS](https://www.heavens.co.jp/) | ヘア作品・店舗予約 |
| [apish](https://apish.co.jp/) | パーマ訴求・店舗予約 |
| [OCEAN TOKYO](https://www.oceantokyo.com/) | 価格一覧 |
| [SHACHU](https://shachuhair.com/) | 明確なカラーコンセプト |
| [Un ami](https://un-ami.jp/) | 店舗別予約 |
| [nanuk](https://nanukhair.com/salon/) | 生活と髪・アクセス |
| [OCEAN](https://www.ocean-beauty.co.jp/) | 居心地・店舗・スタッフ |
| [MINX](https://minx-net.co.jp/) | 長さ別スタイル・料金・予約 |
| [Blue Tit London](https://bluetitlondon.com/) | 大小写真・余白・色面 |
| [Taylor Taylor London](https://taylortaylorlondon.com/) | 写真外枠・非対称・節目の金線。広すぎる余白は不採用 |
| [SALT](https://www.saltsalonlondon.com/) | 映像から白面・予約・営業時間 |
| [Hershesons Fitzrovia](https://www.hershesons.com/pages/berners-street) | 空間・メニュー・店舗・オンライン予約 |
| [Sally Hershberger](https://www.sallyhershberger.com/salons) | 店舗別の所在地・予約 |

## 動作

プレーンHTML/CSS/JavaScript。モバイルメニューは開閉・Escape・PCへの切替に対応。FAQはネイティブdetails。ヒーローとスクロール表示のアニメーションはprefers-reduced-motionの動的変更に対応します。JavaScript無効時も本文・FAQ・ページ内リンクは利用可能です。

## 予約デモと検証（2026-11-12）

予約・相談ボタンからネイティブdialogを開き、カット・カラー・パーマ・相談を選ぶと所要時間や料金の目安を表示します。実予約、個人情報の入力・保存、外部送信はありません。

- PASS：Chromeの幅320 / 390 / 768 / 1200 / 1440pxで横はみ出しなし。320pxのロゴ・予約ボタンは1行、メニューは3本線。
- PASS：メニュー開閉・Escape・フォーカス復帰・ページ内移動、FAQ開閉、予約デモのカット・カラー・相談・選び直し・Escape後のフォーカス復帰。
- PASS：JavaScript構文、diffの空白チェック、静的ソースでフォーム・送信・保存処理なし。
- 未確認：reduced-motionのブラウザ実設定による動作。実装とCSSの静的確認は済み。

今回のリデザインはローカル改修済み・未公開です。作品詳細の画像はChrome実画面（1200×780px）です。
