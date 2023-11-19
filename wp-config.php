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
define( 'DB_NAME', 'Example2' );

/** Database username */
define( 'DB_USER', 'Admin2' );

/** Database password */
define( 'DB_PASSWORD', 'Ms4565Ms' );

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
define( 'AUTH_KEY',         '-Y6}bwi)u4OJhAK5EuJd:|9:]uJj*p^88{ m7*kMXG#aDP6!,JXG*3tYP.<-SmN^' );
define( 'SECURE_AUTH_KEY',  'oO6PKbvY~,s`#h<9QD+1. -)r1P2DPUnLCd:szrS%yS!_{P7$ZywWA<L//RtPv5M' );
define( 'LOGGED_IN_KEY',    '9-LG&5e6|Vyy?(,(OY}:nlRbUB]SgD(tEZ*d*e^m0b}Y(,eZzG24[:>%hC03E}1!' );
define( 'NONCE_KEY',        '1I=|iBX`s*F!,=*ZBhvDvl)^F51WxZ6~Al5W6 eO31&q>R3b3ugMeP%e0*%tQ;!:' );
define( 'AUTH_SALT',        'CY/qcIONB2F}s^7d@BWfd m-tdGgaz*DW;KfCLo/@+X@O3{v7dovw13@b9!#NE4K' );
define( 'SECURE_AUTH_SALT', '-yQoG.?aNCu3Htp%Bex&;8gP*;qGVyvdu8(l._iVbCIm_V?-|W3j$YbX] ;Q%Hx)' );
define( 'LOGGED_IN_SALT',   'w;7K~[Ll-6QPn~6PzA6a@>UvOY4x&U(*obp[cU|khDao,o`/6Z]K#NFtnkAd4|&G' );
define( 'NONCE_SALT',       'qkeQ8%`FIFHWQeW}v ]L1ajJ>/NZ xTHBHHu|f)S4}WiZ.?J#g19H{e/EJ}9[[Q?' );

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
