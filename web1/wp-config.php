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
define( 'DB_NAME', 'web1' );

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
define( 'AUTH_KEY',         '99-597Eel5FAeRb 1{Hy7.R`p$0r0v=TmZ?+^E>LIEpeCQm}&:Oe/-*#7-/ny~7#' );
define( 'SECURE_AUTH_KEY',  'WiS&sUTg2?]W>$[<[kWS@sRCW46c<}[>a[Ms:f7g{+k.0YDruCz7_}WkXE,{ydsS' );
define( 'LOGGED_IN_KEY',    'y n?O{T?Sjq:l&n/S|z*JuYX)kIhp$S|5hK%XZyT&u)baom%<@]g&{2|:|<Ymr%}' );
define( 'NONCE_KEY',        '/w$pgg}5PiS*f~<i}&!}!a{CLR6:5)K6#*aI Io%lYwK3W +xFQy0vuRcn@UwNm|' );
define( 'AUTH_SALT',        '*yA:{$<O8C4E?|}ke3QzrkBf2n,:P#wbMc(5[ l)nWhMM7gT:RJV@y4_M$4R+K*;' );
define( 'SECURE_AUTH_SALT', 'A`hsCn0Q0uP95?&wq|=MtN)::3knT=)3j4E2G(<JY-T>UBDy6]ce);SNjGs!Qk@k' );
define( 'LOGGED_IN_SALT',   '#3`+L79:N%$~X/6K#,O^#=YdaW[zg(0)p_,*eS6u1`P=.0zN*b(OaO`WQ]G*PB,=' );
define( 'NONCE_SALT',       '6*g&g4S@Swhj+Nr:r>,|SZKDn`8J+2!:ykRZ_gl=E~:uxRQpU<-vyVhn *|4h{FN' );

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
