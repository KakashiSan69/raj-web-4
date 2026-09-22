<?php
define( 'WP_CACHE', true );



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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u757258567_7HhmR' );

/** Database username */
define( 'DB_USER', 'u757258567_SEvlu' );

/** Database password */
define( 'DB_PASSWORD', 'ArqELeokUL' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '~@~g~4p})hbEXwCWoLj-srX8:jfmp=dO/xK,wIo!(E>8v5ey?k{za$Ijn!yC+4B@' );
define( 'SECURE_AUTH_KEY',   'I$9DzMay|[R<<g!n*30#R`aIQl:65C+`hK25 OUG7%ni6W_;Z.m+kj]O/s-LPS~K' );
define( 'LOGGED_IN_KEY',     'qps}jLl3NCM-6csD2r>RG[&:B2]54by@BZ^P9o?8Yr[T8QMc@j(G%>R&7+H/nL1W' );
define( 'NONCE_KEY',         'ol[Y7C++>sQakjoi:edZ~&iTC5X)/X!w#paHSBFM%A*d~AlI;Yr[0;[WtsaB6I.$' );
define( 'AUTH_SALT',         '7XnE|aLJvG~%bvq[xYeQ*Y7Ype4{T$dFWE1,w/x:zEu7iN*2xz^iz=wbq:JMoIPL' );
define( 'SECURE_AUTH_SALT',  'T0RZGugp)`hhP=K%Tq!YTatg+/PZQ7SyexJ3rb76gaJg&Ae_;O>b.tOn:2z<:R`)' );
define( 'LOGGED_IN_SALT',    'T0:!(S!{G-R!cT>}z`@Zg UcK8n$=J;Ul?v/je`~zl~W4pHGA{1GJoK}TpsQ.BNi' );
define( 'NONCE_SALT',        'K1xExc9;zR0WV,;o!@y$kMM0*MVijDX02r3R1CN@ArsH:@GsG(Y6!bO(h|2?^XDR' );
define( 'WP_CACHE_KEY_SALT', 'X4CT*2{{::z5Q{@e*I/JHiv>}%~8p>atiLt.E@GDaUf@?v4s}K83T3XxfVL>Cmt#' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'd68650655ee4a4df2724428f60098ac8' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
