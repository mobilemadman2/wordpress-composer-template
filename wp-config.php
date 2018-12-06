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
define('DB_NAME', 'wordpress_composer');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'uCw?c.A9CYHRWoAcxaZM5d`j`{Nt#:q##N0MJnA7{Qc4jMaUAW!aSH>ZK(Zn+7yY');
define('SECURE_AUTH_KEY',  'aOK{jo:zq_-}4@gSQ4iQmp+9R3*f38lz$lU.K^q{Z8O-mo%r&:  3kMYJrYJ<?Sx');
define('LOGGED_IN_KEY',    '<6TZ|hTpy bn@yR{#*2tdniJQUWqiiLRx}Hl}Z;W~rFq+I%(Hi8p~<Bz.}|Sr`!-');
define('NONCE_KEY',        'g4LVPQC$@YM$8H%~U/j#g40HR9S^x>cl3d0b1:IBr>`B(c8N=AV l|a]0C@czSz6');
define('AUTH_SALT',        'X9JYZzQu)a9+}M[zD-eTN`ID<q^qH3$[}X+^wIq<Jd%T&Y7$tuog<t@ngU6CP9R8');
define('SECURE_AUTH_SALT', '=ykcqPSfmg@/o$pze4U[hMBPnVgpr}2:~69m~6+<l6z;|n:SqUl+ cr3Rma54o{G');
define('LOGGED_IN_SALT',   'vc>c-x#ec(RCDc[awhn>%+8jMx{+OA{i~esv[%qLt5:G<g~d4x8>=XR`SBrK^nNz');
define('NONCE_SALT',       'yuL=r ^`PrlBdrIe^/bQ 5|}V>y7[^u]j+,js[V3+H@cNvzCE!O{V|dSWX=7*Gt>');

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


// Define site URL
define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST']);

// Define custom wp-content dir
define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
// Define custom wp-content URL
define('WP_CONTENT_URL', SITE_URL . '/wp-content');

// Define Plugin DIR
define('WP_PLUGIN_DIR', dirname(__FILE__) . '/wp-content/plugins');
// Define Plugin URL
define('WP_PLUGIN_URL', SITE_URL . '/wp-content/plugins');
// Define this constant to solve possible compatability issues
define('PLUGINDIR', WP_PLUGIN_URL);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
