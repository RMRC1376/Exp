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
define('DB_NAME', 'BaseDados');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'RMRC1376+');

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
define('AUTH_KEY',         '-r,x{U[g/2x9ylu$~{21`RBgu.|FgvS8xT8nQ42hY@Ct-H>]f%F0j`/hzk/c#3}u');
define('SECURE_AUTH_KEY',  'm_G!d:#(mj7_mKBY}jsK+t{%}.;LW]t}.Wx9U.!]kR3d` c8F/HoFO>:z$D[O:/Y');
define('LOGGED_IN_KEY',    'WpdB/StT>&THc8yppID/3,:Il=vGtWewm@!<X2%ZYBqF?Ng)cgh%PYEDw$yW}c{`');
define('NONCE_KEY',        'pMZ;>)HA/)FXu-6we_)~iG9+F0iEZ!8p>;9CHmOL<O%|s:QE9hy3$+D~@c^%HVNl');
define('AUTH_SALT',        's~`fS#56$?oYsIiy|YE,]`iBTu=_]7fK=?,}U.1Z*2avzYbG<_EefnP[fV{Um=J:');
define('SECURE_AUTH_SALT', 'hG}Wh1^)u4,&k:BaXTXXXK(^4uiIa#9ZVHhR%FBz ~t-:@TeR2zzXmp4%%5x&rb1');
define('LOGGED_IN_SALT',   '`cF5&7Y+K379~wUQ}Tj.^Xb/f?lb#^3F3v>U~Cm?(nO?vLa%}Oza,};s6|I?g%A/');
define('NONCE_SALT',       'Q:+/ n(Z-.fGaFuuay1jRUaEg]41^isuA7{n:S1/CX&.E[j**b[`xq.AWE)#96}>');

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
require_once(ABSPATH . 'http://ruicarvalho.dyndns.org/var/www/html/wp-settings.php');
