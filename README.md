# Riku Portfolio

ポートフォリオ、制作デモ、WordPressテーマのソースを管理するリポジトリです。

公開サイト: https://rnportfolio.xsrv.jp/

## 構成

- `portfolio/`: ポートフォリオ本体、Case Study、HTML・CSS・JavaScriptの制作デモ
- `syumatucoffee/`: 週末珈琲便のWordPressテーマと静的ページ
- `yuakari/`: 夕灯りのWordPressテーマ
- `yuakari-theme-src/yuakari/`: テーマ配布スクリプトが参照する夕灯りのソース
- `scripts/`: 配布パッケージの生成と検証の補助スクリプト

## ローカルプレビュー

リポジトリのルートで次を実行し、`http://127.0.0.1:8791/` を開きます。

```sh
python3 -m http.server 8791 --bind 127.0.0.1 --directory portfolio
```

PHPの処理とWordPressテーマの動作には、それぞれ対応する実行環境が必要です。

## 管理対象

ソースとサイトで使う画像・動画を管理します。生成ZIP、公開前バックアップ、検証結果、一時ファイル、機密情報は含めません。SNSアイコンのライセンスは利用ページのHTMLコメントに保持しています。
