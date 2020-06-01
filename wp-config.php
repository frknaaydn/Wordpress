<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'cleanerdb' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J9cL#&Zh)i^R_#qFzZG/<vv<Tbog_U1]7ZW0a/tM[NCLBg%*%kJu}F7-7]YzBxZ=' );
define( 'SECURE_AUTH_KEY',  'V<>i3tY?;f3>}D>czM*DGN/`_|8N)O:hPXBQ*O1_Hc$}}!J{|_wb%Jg]#uLr8]7I' );
define( 'LOGGED_IN_KEY',    'U6DX%QU@H^9GA3yQ$<8#.cSaBoVXS^3/G~s=z@hQ~5>U}Jb{.&S,aNwPMljrOp;Z' );
define( 'NONCE_KEY',        '2cXBDWRMJ+Q<u ll6{PxeVV[+UoWH^^d<PAR#K3*zp}gmc.`lRjZ@:@luKbNE2`m' );
define( 'AUTH_SALT',        '6jwp[;@CJ[mC%>4`;mJWk0SgS4)94NVM5~sETk(Ru&z`Im{t2(w>L7m|Yxu:nvev' );
define( 'SECURE_AUTH_SALT', 'qE(L$^ncNXzV<I:(TernAqH|9>[}^LAq +-jCejtst,U>bkc[9PG~%El[V!<;wKN' );
define( 'LOGGED_IN_SALT',   ' vn^cUiojw6t:Fhc#dcX=nm])d>RU~grWi.<nm~Jz|f*27mxKEBBGLU$e0j67Jfw' );
define( 'NONCE_SALT',       '6;JS9A@i<94( W{N_AgyUx-r)!Xxt2ekN-_5D%?Bc4PX__{C#V@4Nv5T;%lI+d1V' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
