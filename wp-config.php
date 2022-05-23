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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ndejje_hms' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{bz+UfEO_5[&bbAV<},gl;ekxjK,wK5TBER y,Eo/MkX|0k{e{Z5.lin(:x_z.Q.' );
define( 'SECURE_AUTH_KEY',  'h97g>7Yu,TCF|QQY5DUOpe)_p2aUbQ6Xn{*PF0%immzO6!QF/)#h<)a+H_ajbf9Q' );
define( 'LOGGED_IN_KEY',    '~ N:szS{9h6Lxd`1[p#1>_siPWp*yt+}3v~fA]@,!.v XsnLWK?y7oa]/0[H@.wm' );
define( 'NONCE_KEY',        '6(L}YaTYw{]7b}]`~^];}|@#_ifY-$MoGO}x9BW8co3x,hOnf<NsMP[2!$$C`5&b' );
define( 'AUTH_SALT',        ',O5%fFaZtbz6?H/*F;JHnt1yZDxJqG_?c2UKYz:B:C)Ow;cAUj_7Odj.5};C/1SR' );
define( 'SECURE_AUTH_SALT', 'Q6X)lberogho=^F!fL ?y~~G:RcC~$IFie,Y:Z%YWVT{j:bsW*u@|*2hOSKuFjy`' );
define( 'LOGGED_IN_SALT',   ':+?4YiIzab=!o|AT-C4M,hZ5u?P.m>:!3|tq|dbw)LeF .-/I|0__F]Md=g5 EDn' );
define( 'NONCE_SALT',       'Ro$5*|Ljz>@fCOT|C=yI19UN_r;!kuqON$+%i`Kd+<e46+$<3RBLg^w!ts3&mnrs' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
