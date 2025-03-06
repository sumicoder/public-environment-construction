# 環境こうちくん

WordPress のテーマファイルを一括で作成するツールです

ブラウザでのみ完結するのでサーバーは不要です

## 免責事項

-   他人が作成した zip ファイルを解凍しないでください。
    -   悪質なスクリプトが仕込まれる可能性があります。
-   WordPress を新規作成する前提になっております。
    -   リニューアルの場合に使用すると、カスタム投稿/タクソノミーや、固定ページなどが意図せず作成されて不具合が起きる可能性がございます。
-   このサービス、およびテーマファイルを使用して起きた不具合や損害については一切の責任を負いませんので自己責任でご利用ください。

## 操作方法

1. サイトの名前（任意）を入力

サイトの名前を入力すると`style.css` ファイルの`Theme Name: [サイト名] WPテーマ`として出力されます。

---

2. テーマファイル名（必須）を入力

テーマファイル名を入力すると圧縮された zip ファイルの名前になります。

---

3. ページのタイトル（必須）を入力

ページのタイトルが生成される`.php`ファイルの冒頭に`Template Name: [タイトル]`として出力されます。

_例_

```php
<?php
/*
* Template Name: 会社概要 固定ページ
*/
?>
```

---

4. ページのスラッグを入力（必須）

次のラジオボタンの選択肢によって`page-[$slug].php`のようなファイル名で生成されます

---

5. ラジオボタンでページタイプを選択

_生成されるファイル_

-   固定ページ
    -   `page-[$slug].php`
-   アーカイブページ
    -   `archive-[$slug].php`
    -   `single-[$slug].php`
-   タクソノミーページ

    -   `taxonomy-[$slug].php`

    上記のファイルが生成されます

**※タクソノミーページの場合は、セレクトボックスからタクソノミーを追加したいカスタム投稿名を選択してください。**

6. ファイル内に追記したいテキスト（任意）を入力

```php
// 例）
bcn_display(); // パンくずリストを表示
```

↓↓↓ 上記を入力すると…

```php
<?php
/*
* Template Name: 実績紹介 アーカイブページ
*/
?>

<?php get_header(); ?>

bcn_display(); // パンくずリストを表示
<?php get_footer(); ?>

```

このように生成されます。

**※セキュリティの関係でサニタイズ処理されるので`<?php`など入力しても文字コードに変換されます**

7. scss ファイルを追加（任意）

ページ作成と同時に scss ファイルを作成できるフィールドがページごとに追加されます。

~~- 命名規則は FLOCSS ベースです~~
~~- 命名はキャメルケースです~~
~~- `p-[ページのスラッグ][セクション名].scss`というファイル名で生成されます~~
└ ラジオで選択可能にしました。

-   入力は英数字のみです

8. 追加オプションを選択

欲しい記述をチェックしてください。

9. 外部リンクを追加

変数にしておくと構築が楽になるので必要な場合は

-   外部リンク先の名称　 → 　コメントアウトで分かりやすくなります。
-   短縮版の記述　 → 　`sns_x`と入力すると、全て大文字になり、`_URL`が付いて`SNS_X_URL`という変数名になります。
-   URL 　 → 　そのままリンクになります。

10. 使用するGutenbergブロックを制限する

上記の追加オプションをチェックするとページ切り替えのボタンが出現します。

好きなブロックをクリックして追加してください。

主要ブロックに当てられるスタイルシートを追加することもできます。

## ページ追加

左下の青いボタン「ページを追加」を押下で新たにページを追加することができます。

## zip ファイルを作成

右下の緑色ボタン「.zip でダウンロード」を押下で圧縮されたテーマファイルをダウンロードすることができます。

## 生成されるファイル構成

```
📂 my-wordpress-theme
└── 📂 src
    ├── 📂 images
    │   ├── 📂 00_common （固定で作成されます）
    │   │   └── logo.svg　（ダミー）
    │   ├── 📂 01_[slug]
    │   ├── 📂 02_[slug]
    │   ├── :
    │   └── 📂 xx_[slug]
    └── 📂 scss
        ├── 📂 foundation
        ├── 📂 layout
        └── 📂 object
            ├── 📂 component
            ├── 📂 page
            │   ├── 📂 01_[slug]
            │   │   └── _index.scss
            │   ├── 📂 02_[slug]
            │   │   └── _index.scss
            │   ├── :
            │   ├── 📂 xx_[slug]
            │   │   └── _index.scss
            │   └── _index.scss （上記のディレクトリを`@forword`）
            └── 📂 utility
```

追加されたページの上から`01_`から始まります。

## 拡張予定

-   ループのサンプル記述を追加する
-   デフォルトの投稿へのリンク
-   不要な管理画面のメニューを消す
    -   テーマエディタ
    -   コメント
-   header の中身を柔軟性がないと難しい
-   cli コマンドを生成する
-   ページの保存機能
-   マイセット機能
-   リストの順序入れ替え
-   セクションはチェックボックスで

## 更新履歴

### 2025/3/6 ver2.2.1

-   README.md 更新

    #### （追加）

-   images,scss とも`01_top`生成に変更

### 2024/1/8 ver2.1.3

-   README.md 更新

    #### （追加）

-   ブロック選択の実装

### 2024/1/6 ver2.1.2

-   README.md 更新

    #### （修正）

-   スラッグのハイフンに対応
-   define 系の setup をファイル分割
-   ページコンテンツの記述位置微調整
-   記述末尾の「?>」削除

    #### （追加）

-   初期投稿削除追加

### 2024/12/29 ver2.1.1

-   README.md 更新

    #### （追加）

-   プライバシーポリシー生成追加

### 2024/12/28 ver2.0.1

-   README.md 更新

    #### （修正）

-   コンポーネント、外部ファイル化
-   不要なコード削除、リファクタリング

    #### （改善）

-   scripts 読み込みファイルを別ファイルに変更
-   新規追加後に次の input へ自動フォーカス
-   ダウンロード後に初期化処理追加
-   トップページへのリンクを初期で追加
-   CSS 設計手法ラジオボタン実装
-   ライブラリ「Yubinbango」追加
-   scss ファイルに日本語セクション名対応
-   AI 導入

### 2024/12/26 ver1.1.5

-   README.md 更新

    #### （修正）

-   サンクスページの反映修正
-   プレビュー用のディレクトリマップ修正

    #### （改善）

-   外部リンクプレビュー調整

### 2024/12/24 ver1.1.4

-   README.md 更新

    #### （改善）

-   完了ページのリンク不具合修正
-   ヘッダーのリンク不具合修正
-   記事詳細に content 出力追加

    #### （機能追加）

-   追加オプションのプレビュー実装
-   全ディレクトリマップのプレビュー実装
-   style.css のプレビュー実装

### 2024/12/23 ver1.1.3

-   README.md 更新

    #### （改善）

-   ページ分離
-   ボタンをコンポーネント化
-   見出しをコンポーネント化

    #### （機能追加）

-   プレビュー追加
-   ログイン機能追加
-   要望リスト追加

### 2024/12/22 ver1.1.2

-   README.md 更新

    #### （修正）

-   ダミー投稿追加関数を簡略化
-   ページリンクの出力タクソノミー除外
-   ページスタイル調整
-   外部リンクの出力修正
-   JS ライブラリ Splide 追加
-   リファクタリング

### 2024/12/21 ver1.1.1

-   README.md 更新

    #### （機能追加）

-   ヘッダーにリンクを追加

### 2024/12/21 ver1.1.0

-   README.md 更新

    #### （修正）

-   詳細ページ Template Name を削除
-   サニタイズ処理追加
-   ライブラリの include 記述修正

    #### （機能追加）

-   各種追加オプションのチェックボックス追加
-   削除ボタン追加
-   JS ライブラリ追加
-   お問い合わせ完了ページのリダイレクト記述ありのチェックボックス追加
-   セクションの class 名の scss ファイルを生成
-   カスタムタクソノミーを自動で posttype.php に追記
-   カスタム投稿タイプを追加
-   固定ページを functions から生成
-   ダミー投稿を作成する記述を追加
-   各ページの URL 変数の定義を追加
-   各ページのタイトルを出力する記述追加
-   外部リンクの変数化処理追加
