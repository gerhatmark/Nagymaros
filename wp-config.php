<?php
/** 
 * A WordPress fő konfigurációs állománya
 *
 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások
 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.
 * További információ a fájl lehetséges opcióiról angolul itt található:
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} 
 *  A MySQL beállításokat a szolgáltatónktól kell kérni.
 *
 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php
 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni 
 * "wp-config.php" névre, és kitölteni az értékeket.
 *
 * @package WordPress
 */

// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //
/** Adatbázis neve */
define('DB_NAME', 'nagymaros');

/** MySQL felhasználónév */
define('DB_USER', 'm.gerhat');

/** MySQL jelszó. */
define('DB_PASSWORD', 'q1w2e3');

/** MySQL  kiszolgáló neve */
define('DB_HOST', 'localhost');

/** Az adatbázis karakter kódolása */
define('DB_CHARSET', 'utf8mb4');

/** Az adatbázis egybevetése */
define('DB_COLLATE', '');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról. 
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Wf@kfw|0;.?cyiW$1{jpo?o5b0W&v9~B8bz{g^#L^|TVQJ7+tizigNlCvvD~o:yS');
define('SECURE_AUTH_KEY', '~fQd^Rf?tFcKE9Q/H{hf=Pd9d@]s0;LWlet[Tf@-Vimrfc#D<FneOE3?cW[0m4QR');
define('LOGGED_IN_KEY', '0|wpRCZ>8%$,PJhWvIHd,eTk=5tUJ7%uGDz-b8|O|u&yrBS!:jU!(Kia%L%_EA$j');
define('NONCE_KEY', 'bP ,5TBE8C$)xE-ra(L2jIMU*<&Whm%pt}w_Cy_^/-&EDm.Xzs!87AX<VTb)(|GV');
define('AUTH_SALT',        '97Dvuh#GB)J|&0_%{nFl#?oE]Oh8ms,43q3L;N5zv@CTQybl]7rS#$PD5=PmyKUz');
define('SECURE_AUTH_SALT', 'mHU|+P$Q`1n,1zsJ18yWHDR#>@$;}-7=E_6vst,{6u9Z4oe:efNS8~.XkaH2;3^c');
define('LOGGED_IN_SALT',   'kz?{ex;},h_ K$s[`uBh<.lz%`%7RXiE%j,H:,Qns$jaRWpTH8ttEMC#U,^ekWm?');
define('NONCE_SALT',       'BW=<G:NEUG}@g5fO<B_h4-+vhgxkN_j}@U@DSWX.<yI:SDvIBbXMXwe(&SLiX9@#');

/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix  = 'wp_';

/**
 * Fejlesztőknek: WordPress hibakereső mód.
 *
 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során. 
 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG
 * konstansot.
 */
define('WP_DEBUG', false);

/* Ennyi volt, kellemes blogolást! */

/** A WordPress könyvtár abszolút elérési útja. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Betöltjük a WordPress változókat és szükséges fájlokat. */
require_once(ABSPATH . 'wp-settings.php');
