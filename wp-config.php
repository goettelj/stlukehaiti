<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'stlukehaiti_org');

/** MySQL database username */
define('DB_USER', 'stlukehaiti');

/** MySQL database password */
define('DB_PASSWORD', 'haiti2012');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2nyB+36bW*CXdyiSUMr+sPPQCa`u8;;f@`Hufuizei%f3SK"R/JVc5w7zVW|#F"l');
define('SECURE_AUTH_KEY',  'Hb*U@&BTfn3hT+xxn4D5M#E(CiJhtWKCr!(Nb5XKhx%Q#J"fx?(d%tjX*1Ps@a8J');
define('LOGGED_IN_KEY',    'Oh0?#4a~TbA@3dVkgejPK`S(3N?d8T:GdJAmh1(p7#H&/r/;W4(9YaBdQG0T$ip2');
define('NONCE_KEY',        'GXOu)Dv7h"tJoUDq*(T$cM0ZNQr%&Wo(;*eQ;d"!0E~i8$S1*c26Z&~;/??an`RV');
define('AUTH_SALT',        'OH$?7s@1pTYR2j(|XiODQ6uZNN%pe$^G|dUe3L;pZhC+$Olmqd9zpxjo#^68TX9g');
define('SECURE_AUTH_SALT', 'k7MWC2|UToTI~ojfoBmqbxcgfmf;QBc0:jrv$Mo*t)M(Q!ZtWDgFc!m9J"3c;:|j');
define('LOGGED_IN_SALT',   '@B;tr/usCugDcw)GA7n;sE2i_yYUUcCF8PntXA#BKzA&3U"%H5jO*sHOv+hHZp/|');
define('NONCE_SALT',       '9e2zDLzaC5eDSa#j#*R(DW^+q3osD%;NKFgAFU4w&~#;(*Lws@z%^o6"G0Z#w9m?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_2f5umd_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

