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
define( 'DB_NAME', 'ciwp_test_db' );

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
define( 'AUTH_KEY',         '24}!-3ZQ[o<]qUc2o`1*yP2kL.>.blK0RF}&l-e!0}qJ[<D/eV|e8:kez`Wa]{NK' );
define( 'SECURE_AUTH_KEY',  'FrFJog{d3_Yd$2=W1#6-!]}l:y61RG2(n@N0fv/J7S-s8?A^Sm.s:f[SC@3NI]?+' );
define( 'LOGGED_IN_KEY',    'M}SI);|(gc`sn;1k#.?.!/~J-C5#RMHGV&nFS-]fyOmhmk`7N)36$+TvMq|8PR,Q' );
define( 'NONCE_KEY',        '%AF0zPv=(3_c9 =M+G28Y*a6Nx{$5$kJ=6#)?%$-=`=[2#/kAY5#K>%ke-&CK)EZ' );
define( 'AUTH_SALT',        'TL{V;kR0tdYSjG)u<uAj8{+h +cEhqci,D^:=~}b#D<m5C KJ]K[;G{7N_d|l5q|' );
define( 'SECURE_AUTH_SALT', 'nVgq{p^EJO-xc`A|l`78l-/yUC&xz-iJh.n*t]hX}z[FpB&,n=E[e}N%@UsYf`iU' );
define( 'LOGGED_IN_SALT',   '}1*S4W,j.l@6Fw1}&4^N}QW~E(t|az2inAs$N/FRu_f#H{!yaD8Hnf4Yataw-i/>' );
define( 'NONCE_SALT',       '|*L9<P_O{P:=RHPdp-hrxEA$ed.~U6$>[VM<;gZMM gL<Ue8p%l3Uc~NrahN|^a]' );

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
