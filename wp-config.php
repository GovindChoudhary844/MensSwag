<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'mensswag_db' );

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
define( 'AUTH_KEY',         'vk<Z#Gb9xi~Y5Us4l^B|.VdLcySMBhT1NTZPg<sP)1VQ?Hwswnb8)U7vj.1&iE>+' );
define( 'SECURE_AUTH_KEY',  'u!?zM=$6Z5W;}fvg+ {3|W*ikk,; UNT_87YX+F,QRsxajK@{ObD=ghj1m!q~L1p' );
define( 'LOGGED_IN_KEY',    'G{(_^sUJ4dh<j?s-Syfacv-2(!,@N*&)/vlc0ZGb^13;2C^3koAg;&%gs.VJ~FAi' );
define( 'NONCE_KEY',        '?j|(^U1vWx *8sBLM<9z{/!v&X`&~$C^w&oeq+2m8xuG@4W,?fG[+Ty]i}q_5nc#' );
define( 'AUTH_SALT',        'qFYrSo_>6T.VW{i rqtxc74{3VE)kD(VYR0PLhaYn:Dy8-=arD[X!H#4Vu],ng/I' );
define( 'SECURE_AUTH_SALT', 'XWqekp/zyq|:p+9}i5CD$,.bm#TmrME,p~kep;W*okQyIgq5q2+gDv!d-h&7A`{!' );
define( 'LOGGED_IN_SALT',   '3qk)D]Ut7zUP4v,]@/wzC`Nmj(N?)NH9Ai4y@=>=m|Ly6]]$B#j<7Ii~_fg*lv_+' );
define( 'NONCE_SALT',       'I$vzvS+?YhE/y}[^/3KEid/[)cuRmb@c&Ds^4bc)MD9YS%%e<)Q*>CrzgTeiKJ:w' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
