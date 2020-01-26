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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'S>;mVhW[F]T},PkQYh5_9xtJGU)V0F7*!DlG m`6FL;k,M<jt<pEZ`6`Ee<g&({2' );
define( 'SECURE_AUTH_KEY',  '>,M.SUvVX]X2#5e0KVCjG=hYLD=H;[lAQ0e](0wt8`8pYOjl^!QeiEA+l@h;oVr*' );
define( 'LOGGED_IN_KEY',    't>pV[IiC3~#JWX= O(0m%v8qk-0-,7~4Kl$C2z9i*}iU<w7^wm0_EW,u?EwlwC*d' );
define( 'NONCE_KEY',        '5KDRnF/U@nuJVW aQ<05`-H+RA-V,[&*a[?,2wUj^d ~g&p-oWgmL#co~?L9e%Sm' );
define( 'AUTH_SALT',        'Tc?hpYl(3R86A$r2^+][EijmY^9.WiY5a#RA-M*qp.N}G**d7h<A.|J<w=^QZbWk' );
define( 'SECURE_AUTH_SALT', '} LJ*tmImk%Z]S$(qy<#y$vbiD%)$LvwO@W(=e|;5zS0!J+7R8@Q=H>l27V9zacl' );
define( 'LOGGED_IN_SALT',   'Bd::05f|iF:r{Dg6%XD<!=F7`$nkDHktOn,T#Rzp_<]B+N3:;+-K.44etYAhD]=?' );
define( 'NONCE_SALT',       '6wOW%sR(%81_@Y|xNY?~r^ke@<%:;>xHl C&VmUJ>$SSK#)&VzF3`Nma2 ixPG }' );
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
