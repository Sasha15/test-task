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
define('DB_NAME', 'test_task');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ':&ec;SAjTJX$CJGioO0!2 _bvO 59{62KKSLT$@ClVdc[YOk|!>{xh0h_}f%)wSJ');
define('SECURE_AUTH_KEY',  '=y^^E}9Yno6za<<@twq/Bf}95goc?U27gBBd{5zVsV6o4K](i1bV1Y}:X}#JUJf,');
define('LOGGED_IN_KEY',    '#:pgz6ue+m>~U a][;5L]N96}]*>I(Si}TYT?7n.ht8Z37f&`8AG}j~~6W^uE=!w');
define('NONCE_KEY',        'Vqm8IlC-hb#:/#Xyeq!-:$Lq<I65Cm]946NVkbQA=(6Jph1F>tjT2gFZZU/g=Mrf');
define('AUTH_SALT',        '<3s[Uf:Z=k7K,MN*O<*UhGF.5Rb%VYx5cvixWYjc;fX[U>VLG6`Et`5B}ZZYe~be');
define('SECURE_AUTH_SALT', 'b4>SH-/z:hU3gnp%uVkt:N}lfx!Kk&~.q65dr^%m5F4Pg21jGr8RE,Yhvz#=(fZA');
define('LOGGED_IN_SALT',   'W.%?xbQL4TR>}?<J_ esmh0 Fq+OmBZ*`rO@E+x3x=j_24O;4[;@zI/Rnn%Af;~]');
define('NONCE_SALT',       '~ntso46odEi6oE><J2u7G6lV56GSN{iF:p<3CTKvyq%b^=*@ DUFeppqj#~]bvod');

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
