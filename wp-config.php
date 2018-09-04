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
define('DB_NAME', 'newsindia');

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
define('AUTH_KEY',         '`k8e}qBb{5:zyJsnx:tQvF|MArXhj9~r`7RaD87yXuq<9}R[A$IPVXv(X}bPj@)c');
define('SECURE_AUTH_KEY',  'E4ncv-VZ>59Ms{R?Ie?lczV4FWpzNNvO/2A]IK!Dcjfv/UoPHxTctX%]w_qtOA5(');
define('LOGGED_IN_KEY',    '2-l&7!aRp_&9hw]O fDwQDX:8^[#^ivgV{xg2wlx]g}/zi-xB UP2-HG9g>j?:aq');
define('NONCE_KEY',        'y&lu9K|T}WR3;O3[x)-*[Y%B$?+E<_Nn:uHjtrax@e{#p@<hBA?As:9#W41gq:<o');
define('AUTH_SALT',        '->JS%MXLkd>m$>9E_!_6r{;^<+#1CFZAz=ObSGv&j$K]CMCW.U`|)AGwEQc#Axtx');
define('SECURE_AUTH_SALT', 'G#1A-/?!i#t`o ;/Wb%(~eog*ot1$;KanrvRdd#~@nIx{HCsHTPA!X~Q2F:c?;>2');
define('LOGGED_IN_SALT',   'okP?KIVC<`hI1gXe.f$(+-f+ZQJ?*2^^5I]q?eu&y.Ms98M},=XDzsA_!8HfbWo3');
define('NONCE_SALT',       'y`8rcJ.KZ->m~Zhyd2]t!:MA_Ue:z6JV$8-+{#y@y<uu9W0z7us|v^DSN 4*&01{');

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
