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
define('DB_NAME', 'cthulhu_vintage_flights');


/** MySQL database username */
define('DB_USER', 'cthulhu_vf');


/** MySQL database password */
define('DB_PASSWORD', 'Cthulhu420');


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
define('AUTH_KEY',         'y2T706Gq0Mv}NdawY$A+/h%J|i_6GHo4m+G9??IveXW|S};o|U%+r69m.6-eLt#=');

define('SECURE_AUTH_KEY',  '5 GXv9T[gMJsX!mW%!Y>a|&8GvRT2?nXTt.0yV]pAX]JqfY+nAzjRM}-R-r}B0|6');

define('LOGGED_IN_KEY',    '6n|mYJ-Ao`i*L?0?-[;e$zZ2FV5[ovTk~fF=w-=Jm|HjJu$mpqOt{[8dlf1F5?n,');

define('NONCE_KEY',        'g|px>:s8Q@EE[qd8+E;<*,CQ!dRyurGBQ8%lBP3z+Z#lCZ+`#4ifglIr HBs>HwL');

define('AUTH_SALT',        '-n+hns4l5ymCj(y6I 3QUxe<_<~)G*7|rX.;pbUY|kT#&/}*GrzBqB|L@8fG-tRA');

define('SECURE_AUTH_SALT', 'I|-D&J1;@)TC*,]qn8L:2+o|.9-g z_ATurgNL|yQ>IF>}]gBi|A@;* b-dw&RmQ');

define('LOGGED_IN_SALT',   'Qk+gRB(v+s@]fnow-+IrI>|c~TVK~+o8Cgre0G^8-I!-[Nf|a3[X)A;0$)&CVE4;');

define('NONCE_SALT',       'b*81WKXu+,wq|-B10eSqH(|+ei!f3*tGA3j&c.[lwWTHA.%(sx#!c:<gOY]>_mMg');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


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

update_option('siteurl', 'http://client.marksleblanc.com/vintage-flights/' );
update_option('home', 'http://client.marksleblanc.com/vintage-flights/' );