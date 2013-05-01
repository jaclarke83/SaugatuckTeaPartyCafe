<?php

define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/content/72/10495372/html/media/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define( 'DISALLOW_FILE_EDIT', true );

define( 'BWPS_FILECHECK', true );

define( 'WP_CONTENT_DIR', '/home/content/72/10495372/html/media' );
define( 'WP_CONTENT_URL', 'http://saugatuckteapartycafe.com/media' );

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
define('DB_NAME', 'sau1304707383774');

/** MySQL database username */
define('DB_USER', 'sau1304707383774');

/** MySQL database password */
define('DB_PASSWORD', 'PawneeRoad8605!');

/** MySQL hostname */
define('DB_HOST', 'sau1304707383774.db.10495372.hostedresource.com');

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
define('AUTH_KEY',         'Cn==43VNA 0P1!j5(=Xn');
define('SECURE_AUTH_KEY',  '(U*gv1VzAbc5VWLrRghf');
define('LOGGED_IN_KEY',    'nG@Y#nO_&#Xv=QI2a#_2');
define('NONCE_KEY',        'b@k#!4Fb@2@Rb6DT7=sq');
define('AUTH_SALT',        '2 R*pq(2Zf(+&F(w5KxN');
define('SECURE_AUTH_SALT', 'w-7BXKn%g%DW6*r4ERz&');
define('LOGGED_IN_SALT',   'XWFGV#chbI54p@YVBpDT');
define('NONCE_SALT',       'YO kYxf__a9d8dgBVPs@');

/**#@-*/

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each a unique
* prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = 'cec13zo2_';

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
