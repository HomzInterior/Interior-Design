<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'interior-design' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b2Q$mnsJl5/zx.t|hSpj_ n?/kqE=?b7fMrx9e.$Mj2l^,1Kz<ElwMjVtp%97c$S' );
define( 'SECURE_AUTH_KEY',  's;5WY?d~,v)C6sF]0;fh%km]9l^:m}~{|I%`3eRuo$t0Gj@.6g6R]XzyVL9`9mAE' );
define( 'LOGGED_IN_KEY',    '[F0*33{,fpy$UB*PpWDxdH`-4S  OpG>hpPJ@L/?rwND?+Vi-*uQ.aGb,$Y!wruK' );
define( 'NONCE_KEY',        'y%3+},uK;]dD?2/?.lT%Af8h$DZa7ZVyBDLvR4o;0gh?)T}K1%5<2a|m/bAQZ@~/' );
define( 'AUTH_SALT',        '2~DCZz3*~f^wcO`C0=C2U(d8d%Mbw8^b[=I#4U$[E8-HuDVj%V`oa/s2()B:@-eS' );
define( 'SECURE_AUTH_SALT', 'HEtIg!Cc(??^$]W8$50.${2jNkU>xkJT4_;[V,^L3PC}SH{R;y&d*j`3*=2f9fXE' );
define( 'LOGGED_IN_SALT',   'ET7*S`sa(62b-*/1~8Rj;8(f,wwBs`A0c1fIyJtRR@yE2c#EejVGN|b)I=VE3HJX' );
define( 'NONCE_SALT',       'oyvc[CF.C,O`B9]DU|,BPxMxIQm2TTk7Bsy.=2ssn cbiQ[w(LXmHggr@F`J?!><' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
