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
define('DB_NAME', 'wellpressed');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '>*Sx#2/Td;]4;ChY@r|U&/v+5~5_$=v=L@4G,jk1gBI&5-m{2),kB[+gQc<Sl`f0');
define('SECURE_AUTH_KEY',  'uqmx_bX3gCU;2W:GJvDg|:T~TgJ6Gt!ufP-n+pCLFGCDe~sF a?eea=uqL(m*}(G');
define('LOGGED_IN_KEY',    '-HA#u|-J^|I&DXj8,F$fB]tze|0kO>}?J]61|3.qB*a8UIc_AZ4OxfOoVm1~~L:k');
define('NONCE_KEY',        'X-_%XOVG[A3CMu<J9;_jK`3+5FVvjBZ1P1vw4jJOwqa|mAbr<h]4zEIl~xNz1j_{');
define('AUTH_SALT',        's(G.bva7T68*kmGY=a3tvpDLZ, &Kk|`e/zN|5UWt4]-.X|O0#*G{e!:7Ihp@,>O');
define('SECURE_AUTH_SALT', 'RY}@TpUt@;m|M.IV^+]3mi{Y-r30YNN%E_ o#r1/o<2+[-|>4<F%bT;x^xG[}xRF');
define('LOGGED_IN_SALT',   'X[,L$cVn~)[b[Y;Zjct_NA09+Brgc] -Xu1a-5q<Ybt9mz)X|)rWjXvG|PW]bPff');
define('NONCE_SALT',       '9/L>l$Rh :Y|w!zig~:ld% WRh2188-+Om*5mOY-V~>;vu/Z`xxLCkRaeut5T&Hl');

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
