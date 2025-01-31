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
define('DB_NAME', 'LAA1288180-eg3gvq');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA1288180');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'F2zTfg4e');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql303.phy.lolipop.lan');

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
define('AUTH_KEY', 'GW`uYnpil|`MkQKT:FGV7+%PW=IQ]/^{^Py`G=R0%3{x1a?/VvF*xCN*"}g_`9^B');
define('SECURE_AUTH_KEY', 'CECv3.tv+ykE149{-PC3tMOKo&nd5-EYF^C>kj]OU^Atp:i@!Ukyc]%JvyBVpz~-');
define('LOGGED_IN_KEY', '*Wbo{Pf[qZW)h^T]pY0#-Bz>0dG~eGV^!n*!7NvwW|f#;gqYhMkw;y#f$@.BT{|0');
define('NONCE_KEY', '2b7O|s5,h`sYJD:?qU*L#JP?>)s5(F8}9DKl|Y#J8E%ia+86+)~J1)?@kzT~YoSG');
define('AUTH_SALT', '7N8;dE[M,X-KP_KMI907W?oRZXbpsjl6>bV$>9w{f)3%j`tu7?GT@onlx9^jo}Oc');
define('SECURE_AUTH_SALT', 'sUoVs*l3/?+6acp-+yTa7:vX2{8H|W,j^S,4Gi23edRhpC_9?,Xz9!+eY_m8bW"/');
define('LOGGED_IN_SALT', 'bt?11O}o!-=fvRJ_&2xMdKgPCIeylVvR~fLtG5F%]2s`:DXNi+xnV=sbq5l#yx}8');
define('NONCE_SALT', 'oWq(_(aIngAqwRh*hJF_EL|.2$}*">{2,Zkuv1%LUYf^wh3Z-XY$Fi<?eXO*cE&?');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp20231111011651_';

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
define('WP_DEBUG', true);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
