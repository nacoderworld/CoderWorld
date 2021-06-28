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
define( 'AUTH_KEY',         '# bqK+s)?.w8(aeWK&=[%gdS;7in0F<<cMur+=s@I`z&fkroxsi39F@dD>p,|o-g' );
define( 'SECURE_AUTH_KEY',  '^_bR#A%P.tRznuOy<uhU?t8a{FLyjBz+?4odK8|;QoV3CxJG[m-l~,DGnGP$xGbS' );
define( 'LOGGED_IN_KEY',    'Ik/SuX8rl4Sw2y;1=2R|M`F*!6KoR~MoB5Y^[K&4l;7^ak4T@;/5Te>0fC|30;6G' );
define( 'NONCE_KEY',        'bi(h1[2C(JCUKr})bB:c)z~K?Nf=yJ|{Q8^,Zygq^eUbU=r9}{vw=J/+f~;VAt0Q' );
define( 'AUTH_SALT',        '[AV*0 G&e^} q4F$?da_@]h+xOaV!M ]/zamZZYxZ&f|iyZr1c|uy<#Q})uv&-H=' );
define( 'SECURE_AUTH_SALT', '7yE}Ld@xqHfU<sL-23am!1/Z__s)f`dkZ9XS51BNOlw_E#[KJv[|8z0.5fF`[.kK' );
define( 'LOGGED_IN_SALT',   '3ueKLUC Sq3PO6e{U!8oZk1H!16]A(0Jcz:Ej0G$q]= ulnr8UvQEX,|gs}IDMXT' );
define( 'NONCE_SALT',       'ye3m9>`D0$^iB2<XS@7=UORI >t8eP<0HCsvSl<)p5d-XK%Y&Y:x}d{Qt`SOe6Bv' );

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
