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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpresstest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:8889');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'e)p4cm:MveQ ;_L9(54|y.{t-blZVk4~fji/_]5D@2)s5qd@4FbqI~M,jrq,gnpZ');
define('SECURE_AUTH_KEY',  'In-,Jr# mR Jn;]zc@0nku]S>HF-3|8!rGFs&li3`m-[x|e_)clF?ADo7HQ%~qW[');
define('LOGGED_IN_KEY',    'iznZx+~<2V,!x/qSZJAf9&Zfz2r%z<^^G #BEa[Lq[m}A<-(<:|6;6^S}_s[nmO7');
define('NONCE_KEY',        'M)IrNu^&ZLSBE_9Qh-*)g3J1D*Uf$:dGnP9~=Yt[ljj:Fcv`5[$1^::K&$Wc1D=t');
define('AUTH_SALT',        'h*$jh9/n@L?I1K21Rd;cVfl;+dThB=8siF;@OKS#jwEz)Op}Ta~7e=e@qe=u#@.G');
define('SECURE_AUTH_SALT', 'P3KC;8{h#Xy9xWd^`w3{8emF9qU9Y#$Czt<H^FC3q!Mms~_XX %E[JTRg&JtaR(~');
define('LOGGED_IN_SALT',   'P2:oo70ju[{cLNv%}lgNT[XCL[Y,VzQ1WCf@DGKI<i@2?Ku=2oGRsi1+T*hMt_h!');
define('NONCE_SALT',       '_*_@eiW~|m+A2_O4bzF89gzN,,fT@+y1)|x-Lg;z(rxs$1{%k5Z>5XfQLM^#btU]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
