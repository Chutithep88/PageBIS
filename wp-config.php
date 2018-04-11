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
define('DB_NAME', 'wp_pos');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '8S3:=#&N8UB{M:,h*1^cXzhzk1[J,4.cxsS$i5Q-SnCp6a|q;6XH_kH4e$k;2,EI');
define('SECURE_AUTH_KEY',  'gpj0)W)-l{vN(tA@YB:vAYvWDk,rbog4qXL>URxg3hlko?[1_PG<PZl*<%vv}r<3');
define('LOGGED_IN_KEY',    'hJE_r6.+]*`:wU1S;,ma;qcVp}Hsx$0C&KE/4*ooGl6ju,<fx{A@TIFUtP9>z]zz');
define('NONCE_KEY',        '%ip.}NV1D]yVR>j8?dOM=}jgB#-bvQ,h6jE,M+mpW-ZmQN4<<QkZ5CG$023tucto');
define('AUTH_SALT',        'nq{)_mKW qpxmX2pRzt+1V.g|t?)Rnz&DAoFUmAyN2%GE}GW)Q)utOd>Kbol_pII');
define('SECURE_AUTH_SALT', 'L|$`CL o .3;[F1?apr/_yKwt#F2J*sSomyo9Uz0p_8Y=B-6=*!ug>xg7jv_eu5N');
define('LOGGED_IN_SALT',   'r:9h&s}(^WR*gQ5ax^d]PX!{5n$n6]r3o*H>Ms7}_/iR%&Ha1(-__{q>hh`<D:JS');
define('NONCE_SALT',       'fQ{+Y+Z,@vk85UgUZ97]rEL4?AquHr]U.*s%mNM/<3@RjO0m^`;Z>J{~j?%vK1Gv');

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
