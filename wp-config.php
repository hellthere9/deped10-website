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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '0lmax1w)ZEbR`:wlirB,T=9W!,n+i+`P+c]tL}Pgvu&1 9b>*4ji:]/zn)mk@l/D' );
define( 'SECURE_AUTH_KEY',  '%6PUz[@;k>lKBsCX>.TK%,,9t>4rgzpC6TboGqM%r}1(/is!OD0Rb|d{(++bn%u!' );
define( 'LOGGED_IN_KEY',    '[D|Y0#qUi^ZRU~|UQ%V8uoB=ZrWTEi5#M*@R|7jI0a5+xH^8Li=vK6l-)@7*9(QJ' );
define( 'NONCE_KEY',        'x~J[Mv6s=>^UX]o#({$fgLLQAt#K|jnf$zmM;%SdTX+n9s&{$6.FIYf8M$t:@eii' );
define( 'AUTH_SALT',        'HskeX^+KuqCDx6km)7DnTDC4^bPgNxKVCzJ_QV)lEG:,?;Vuu%VKTj8j0Wu~6i[Z' );
define( 'SECURE_AUTH_SALT', ':LL-!gU&>$ZC*/5tT1Momx0qx|Tzyg{$0<Z{Rl]4+`Jn~,6w5/ At5Q:8M:h1;QC' );
define( 'LOGGED_IN_SALT',   '9iY`,-^:4T6QG*Do<s1AxS|jsgHCCa&0He+f3(.AYGas`2#1wE.RBt`/!ru9h1RS' );
define( 'NONCE_SALT',       'uI|J@)F]$B{L54+-!+x.R~FX$b<6_jePhI=du05eiQ?jp:L9IK#?o<QNqJ/4Qz4h' );

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
