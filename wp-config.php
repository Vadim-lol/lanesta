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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lanesta' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '8OJ3i-Kr7CB9Cp^g<+arDZXXYd_Gd^9,3U)0@/a5bg]k{-Fk3ISUYxLvXoT,;8vC' );
define( 'SECURE_AUTH_KEY',  'WO+c9KY4ZJ=4h&:Z1KM~2ru~!qJmLoj7GXs|(!`etN>cs--lB1S81w<oW!P~q^3D' );
define( 'LOGGED_IN_KEY',    ':D`^3g@0%?a>[j%.Q,z=<f(/!>k~ndt,C,bh2>k%21@BlE KaxoA[s+99YH]i[DB' );
define( 'NONCE_KEY',        'D_z#e28ofPT.e)K}J!..Ml]&GAk-<y6+l%I=K)FqJ<(b9v{]Wh@/Xr7x;_36j5I|' );
define( 'AUTH_SALT',        ',?#q)uK#&lapgBibEK@eN8Pb@V86],lTQ?&AP&1/-ilnSN QF^PjbFANr_n!)+-9' );
define( 'SECURE_AUTH_SALT', '83POmVfb09Y!bd19+_s`?l~k|zM7 -Xfd7I(ELGuN;@7y10r*]w,o_{`_.ey3oN?' );
define( 'LOGGED_IN_SALT',   'fr*_ijbb2p_:up<j/H(MVTzpqJnI~61qEhV%hVbN3-BiW_N8 Q3gg{2U+8UtNed+' );
define( 'NONCE_SALT',       'k,R(g<,4Y$$C{=adA@]sb+yx4,},^]0YM!l^?9>,eF^PBV.8uzoNhk?:zg@|*8>K' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lanesta_';

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
