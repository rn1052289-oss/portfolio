# 週末珈琲便 WordPressテーマ

このディレクトリは **WordPress本体ではなくテーマ** です。`index.php` や `wp-blog-header.php` と同じ階層へ中身を展開せず、ディレクトリごと `wp-content/themes` の下へ配置してください。

```text
public_html/syumatucoffee/                # WordPress本体
├── wp-load.php
├── wp-admin/
├── wp-includes/
└── wp-content/
    └── themes/
        └── syumatucoffee/                # このディレクトリ
            ├── style.css
            ├── functions.php
            └── ...
```

## Xserverで `wp-load.php` が見つからない場合

画面に `Failed opening required .../syumatucoffee/wp-load.php` と表示される場合は、テーマではなくWordPress本体が欠損しているか、インストール先がずれています。

1. Xserverのファイルとデータベースを先にバックアップします。壊れている状態でも、復旧に必要な `wp-content/uploads` や `wp-config.php` が残っている可能性があります。
2. Xserverの自動バックアップが利用できる場合は、エラー発生前のWeb領域とデータベースから復元する方法を優先します。
3. バックアップがない場合は、サーバーパネルの「WordPress簡単インストール」を使って**空の別ディレクトリ**に同じPHP環境でWordPressを用意し、正常なコア一式を確認します。既存の `/syumatucoffee/` やデータベースへ直接上書きインストールしないでください。
4. `public_html/syumatucoffee/` 直下に `wp-load.php`、`wp-admin/`、`wp-includes/` が揃うようコアを復旧します。この際、既存の `wp-config.php` と `wp-content/` は上書きせず保持します。
5. このテーマを `public_html/syumatucoffee/wp-content/themes/syumatucoffee/` へアップロードします。
6. WordPress管理画面の「外観 > テーマ」で「syumatucoffee」を有効化します。
7. 固定ページのスラッグ（`about`、`beans`、`guide`、`plan`、`news`、`contact`、`shop`）と、表示設定のホームページを確認します。
8. パーマリンク設定を一度保存し、PC・スマートフォン・シークレットウィンドウで全ページを確認します。

WordPress本体を手動で戻す場合、`wp-content` と `wp-config.php` を保持したうえで、利用中バージョンと同じ公式コアファイルを再配置します。コアファイルだけの復旧に自信がない場合は、簡単インストールから再構築する方が安全です。

## 本番画面にPHPエラーを表示しない

本番環境では、サーバーの絶対パスやスタックトレースをブラウザへ表示しないでください。`wp-config.php` の「編集が必要なのはここまでです」の行より前に、重複する定義がないことを確認して次を設定します。

```php
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );
```

あわせてXserverのPHP設定で `display_errors` を `Off` にします。調査中にログが必要な場合も、画面表示は無効のままログへ記録し、調査後にデバッグ設定を戻します。

## お問い合わせフォーム

お問い合わせページは、入力・必須チェック・完了表示を確認する非送信デモです。入力要素から `name` 属性を外しているため、JavaScriptが無効でも入力値は送信されません。実際の制作相談はRikuのポートフォリオ本体へ誘導します。

- JavaScript有効時はページ内にデモ完了結果を表示します。
- 公開後は、必須入力とデモ完了表示を実機で確認してください。

## テーマZIPを作る

ZIPの直下に `style.css` を置くのではなく、`syumatucoffee/style.css` となるようテーマディレクトリごと圧縮します。WordPress本体、`wp-config.php`、データベース、既存の `syumatucoffee.zip` は含めません。

旧制作物の `index.html`、`about/`、`beans/`、`contact/`、`guide/`、`news/`、`online-shop/`、`plan/` は静的HTML確認用であり、WordPressテーマには不要です。ビルドスクリプトはテーマルートのPHPと、必要なCSS・JavaScript・画像・動画だけを収集します。

リポジトリのルートでビルドスクリプトを実行します。

```sh
bash scripts/build-syumatucoffee-theme.sh
```

出力先を省略すると `syumatucoffee.zip` が再生成されます。検証だけ行う場合は、既存の配布ZIPを変更しないよう別の出力先を指定できます。

```sh
bash scripts/build-syumatucoffee-theme.sh /tmp/syumatucoffee-theme-test.zip
```

スクリプトはZIP整合性、必須ファイル、旧静的HTMLの混入を検査します。アップロード前に、展開後の `syumatucoffee/style.css`、`syumatucoffee/functions.php`、`syumatucoffee/front-page.php`、各 `page-*.php` が存在することを確認してください。新しいアセットディレクトリを追加した場合は、ビルドスクリプトの許可リストも更新します。
