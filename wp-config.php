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
define( 'DB_NAME', 'coderworld_db' );

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
define( 'AUTH_KEY',         '~pmoZKrkg`fc+#*[~|8M({c`2%tT.#v-LHuS7BqpsQyr06O3d^9@zdT[^RLJsF1a' );
define( 'SECURE_AUTH_KEY',  '~X6lt1]q6=LEiiIHjU~nR~SWS7iSa;>Ef!iQM+^*Cr7=zujj55RT4Bcp8|hc[3[E' );
define( 'LOGGED_IN_KEY',    'o@#:iP^iZf<GXbtvB}5o W36-sz]i/,_e!7rwbS69p,[r&BhlaSteOkH21*fDoo!' );
define( 'NONCE_KEY',        'ske@wQv/P,(&$mee_O`6HB/7^am@IT`Q4EgqlR>k1Z>&^D0$e9.oqK#n;95.VaLM' );
define( 'AUTH_SALT',        'RfJF0z?/ng%tMGE+}0nJtj=Uu^6tTp*iLxXE{j_ EW~7%3gA :{#.WJ!AFv8n7!f' );
define( 'SECURE_AUTH_SALT', ']i:4PW;,iW2m:0n)MIFg6}y3fG<&hBr4?[fGBrdZn(_#lyU T&);wnFyH6YQ92Fb' );
define( 'LOGGED_IN_SALT',   ',[Ano kXcjxrp;Lv5xZG8gxy^w^!vLW.}L|.|Zbgp(7XVq_~ Rt@/XKEiu5`pVUx' );
define( 'NONCE_SALT',       'm[?Ecj:3!_<h|V^I2Rt/hFR?QlWSv|ZB1{VP%ZcAaJo.G9D{D%56_so>qqEKaCow' );

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
