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
define( 'DB_NAME', 'organicstore' );

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
define( 'AUTH_KEY',         ')=|9kkCgv;bPR!h93PFp;El0&}=QLp Q[H)8xE>MO.tAqULLI}+_h*1kUWnK*n8#' );
define( 'SECURE_AUTH_KEY',  'n1Vb08v|IeYXCFVd`u^<p(:Pl[o}q>!_glHJZ/S8=>rnB]AU8N1~}E@Q@S=o*5&G' );
define( 'LOGGED_IN_KEY',    '&Cl96fD4w==>8=o4BKENwjtgLF`cz<hK @&j$!xU%KF{EF^G5E*%aL.c# WyGqL2' );
define( 'NONCE_KEY',        'FsWR^c+b)_.Pub)B@O!~F{<74]?}xXw&YB.Pj&6Qf*+@3Nh0@6>gtq#z_g^IkE]C' );
define( 'AUTH_SALT',        '^tY1CGx31Qb??k0BOaoUl19GpHFQYn]9- ]6rj9H|hu!dyxhWDPbUL%[{^9o9sTl' );
define( 'SECURE_AUTH_SALT', '^v?x:$]P(Bn?9C;;PMqh/{a{nJKcM[m+R:o_BTZ9R?)j}0%e>O}C(B<@,W:K&14_' );
define( 'LOGGED_IN_SALT',   '1*, !G`Gj`OiD%u%+C$uDNEO?$TPU.,n%].9ssv+2Hblx+_z9tEEIt-TLT5O ?X=' );
define( 'NONCE_SALT',       '*9{b+PQhBy^Pgu3(=2]>|TxjDYeQn+GwLGI$>1{[WxHy ZCFzK:dUU6hwQ%?2@rS' );

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
