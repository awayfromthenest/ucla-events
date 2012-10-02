<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// Production config
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'uclaevents_production');

/** MySQL database username */
define('DB_USER', 'uclaeven');

/** MySQL database password */
define('DB_PASSWORD', 'Ev3n75J0L+');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


// // Development config
// // ** MySQL settings - You can get this info from your web host ** //
// /** The name of the database for WordPress */
// define('DB_NAME', 'uclaevents_development');
// 
// /** MySQL database username */
// define('DB_USER', 'root');
// 
// /** MySQL database password */
// define('DB_PASSWORD', 'root');
// 
// /** MySQL hostname */
// define('DB_HOST', 'localhost');
// 
// /** Database Charset to use in creating database tables. */
// define('DB_CHARSET', 'utf8');
// 
// /** The Database Collate type. Don't change this if in doubt. */
// define('DB_COLLATE', '');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3w;>27t~5m]kf6-DH!:@c*K+;O={+^g$A2%2.@q2loK%C`2aa%11HRI>MJtz{81m');
define('SECURE_AUTH_KEY',  'xk}9v6V6e[SE4<TJu2UuS!KTHV_/@n>%Qxg}$>2GX]S!ZbI5Ffnuqv^r5bkT;mA,');
define('LOGGED_IN_KEY',    '3<g*(IV8;H`v(]LQF6. h Dli8S&N`VlkQ><<8LcQ<pdw^9~6~=B+?7v]3u-X:{<');
define('NONCE_KEY',        '@JLBmj]@ha-1y-*)YaT5a=e`<KILeo0Y7kOTA+Fd:Yz{&rr4^)Zu,`S}_4+?I+/G');
define('AUTH_SALT',        ']2NWZD*,H#?r>CwkIa|b?2pzsS!)UgMw[Zp`zz?lZFq;lO@`(xBd-A5&w]7J@ q5');
define('SECURE_AUTH_SALT', 'w?HN{DKWj$a@m?pngs7et$VoVthC(l)}1;?#WwdN4W^Ibt+,L-=40Q-VqC$_&5o;');
define('LOGGED_IN_SALT',   'm$`F0QEj<w[hvb2eYt`qS)8OEl9Yn4$RS`QDZ:lrG3x(7Pqko.DNi_fF[C[|%!B<');
define('NONCE_SALT',       '7%cVK*ZhlsZ??s/aT9V#W*+Ri3h,^=uV>m5@,aY YE>|:rU=`Q^DN_uQ|_7Yp~A)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
