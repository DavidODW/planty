<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'planty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' &>y vSQR0mf9V)tc7h=_@:W1wVQQIr[glwi(o>:M,t|#>F!r:r1ttP-6.46}~qs' );
define( 'SECURE_AUTH_KEY',  'G_TK&K$6f=bO=F{8$xRO{&!xcO(u:IRT}Yd_w-LC-Dy_%nI>6;4Fgw7P1IGK_=Ok' );
define( 'LOGGED_IN_KEY',    '.Ddq,0#;xWl+.1_;7$OT{:xQ#nr[00ht{j34[2/~%UJn&u3![uUS:R9!El$_){DV' );
define( 'NONCE_KEY',        ',W.,xa,^5^X^Gkz1^r^}I:$&G=d4r#*!>KJUt(etstoayGv._)Y>,k..O4)0,tSa' );
define( 'AUTH_SALT',        ',sph!0;-^vl#/5UocJ|H{?Uuy_|HdK?S*2M=2vQfZn8!98Y?l9)vl;Zs@tDy!]4Z' );
define( 'SECURE_AUTH_SALT', 'Bp~c7mC/?0`-~P wF[M+B-}[wvd{H:M]?KZ .4doLAjw/UJ328){DiLZvG&O%J/d' );
define( 'LOGGED_IN_SALT',   '!sH-*JILA^?DfcSd-F,V:Uwn]2H]inCrSG!bMHkI2JW&YTBP!@bl2 uO7=$LGD<P' );
define( 'NONCE_SALT',       'o5jn?L;P;-hv59<>Ap.`qiy2iqM{zV3TP7|eG@DqY*kPl?&j~)O8lv,=7&6gdPms' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true);
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
