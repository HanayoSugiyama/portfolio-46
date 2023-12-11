<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'LAA1134238-bmzbt1');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA1134238');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'FasVZVUy');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql143.phy.lolipop.lan');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'WX8,n)"Ges@F8/}}@cIOVL]G]L.c[=x#d!=t79T(!kLG@[]T&]Gv0#wACE/iNgi&');
define('SECURE_AUTH_KEY', '!6Nrf.~.7zGr[Af#->oT]~5F(E?]nB=tC@S.f{Yrn!"eHo`XjIHgv755HN?KzNWk');
define('LOGGED_IN_KEY', 'Su,RG!>2I=&g8|Sz+SZ31X0a3{H)}(0c]="}@vN?ycXaqC?pQ$bjR>fV9uE`kI:y');
define('NONCE_KEY', '))Qbk@BZaIGR6?MNJ,$3({!9gDF:S5-z`H.D1xwsYV@@DtrV|JRix*83svj9IFAB');
define('AUTH_SALT', 'f9h9my}TGjNEjBDQo&},cv+O14j%AEF-d?9>!~b8tbk#Wvx{>Sp;Y2Z:68#~"j_{');
define('SECURE_AUTH_SALT', '2;o4qqt:t&QMKGcGh&VZpLh4C[_P`T^<}AZY9g&1lY,H;dDAy]?Zne`=Q2Bl~LoV');
define('LOGGED_IN_SALT', 'g"a^UQI-I`PwSP|DMee,[5~2?rT(@FwR_`2Baa[*jxuqtrjwJ(:<MD:]m(*wc&-H');
define('NONCE_SALT', ',G.Z4k$%Xhm;AB7x_E{PFzzs#0U30m@5Ww?I{8lo0"wsM^]Kwg50,H)7=u_?0+TP');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp20200910152442_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
