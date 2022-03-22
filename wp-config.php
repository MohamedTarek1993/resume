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
define( 'DB_NAME', 'resume' );

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
define( 'AUTH_KEY',         'y4_}uuVom)Z%P-^xN2L<6F]}K-@(YSz8h/Y9?D%!z3ZO0#TvEh`$UoO1!hO:u]HG' );
define( 'SECURE_AUTH_KEY',  'oYD>W<-M6SQp/zU<.IznWP<Q`&BZ;_Ae+Y5dZEv-l_c)*~M(/z`mDcU}ZO9EHEp3' );
define( 'LOGGED_IN_KEY',    ':K[4+?XTOt#B7.*2iSF2}TUe6.yRPNE~e]zCl_o:yg mMbu,t=|C?X2kpKY:k#2>' );
define( 'NONCE_KEY',        '2G`Zdpx9I!pHcQx{A[IY4G2^$rI-QDvh{.c+Kzx#RUM62kwPe5Cp>eFo2J**Yde#' );
define( 'AUTH_SALT',        ')6i$YQ93Gc*Ah{WRQ<!?x]mC3vfnon_OnFPn25_!7m.oH!:_Q9uk*sVWIiF0(phB' );
define( 'SECURE_AUTH_SALT', 'PG3tA/~lG3M47] &7AE~8pgep(UnF{_@DOe@wNJs{p|EW;p[M9,.qd1q6t/<SQri' );
define( 'LOGGED_IN_SALT',   '|>D:i?Uo};J2vLC-p;,#f?0;WDQDWAmhVLolmru.y[fhNdCK _zNv-H,2.FLP-au' );
define( 'NONCE_SALT',       'nQ4AQr/KR_+-9Hwr9_}X&X+{L$Gy&ismMm5qVc8<|:`JLiq9}C@YQeST ^F/EIr6' );

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
