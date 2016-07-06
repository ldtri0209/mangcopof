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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/man86ebc/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'man86ebc_thanhloi');
//Debug
define('WP_DEBUG',true);

/** MySQL database username */
define('DB_USER', 'man86ebc_tloi');

/** MySQL database password */
define('DB_PASSWORD', 'tp_hZhV}XNV{');

/** MySQL hostname */
define('DB_HOST', 'db06.serverhosting.vn');

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
define('AUTH_KEY',         '=nq<.{b[3L^t6thKu|(tm%e0No+P}~1H;~DSLFu`mH@@DU<IzxK3A gUs0S`L@IA');
define('SECURE_AUTH_KEY',  '!VwsH{QIa3u]dXe~cvE2*aV3dnmox{-59MkQFWHc+LAK~Jj7gANVX*-H]oHA:lN`');
define('LOGGED_IN_KEY',    'S-OU4#>s;lHrKirtmYMpP1L9oX:Bd7 ce$!*,d=?O7$A()f!D6yNXCx8!7|{k)6,');
define('NONCE_KEY',        ';N uQiqldlR,&b`o#1 W;I8|Q6f>8am;`yLItD)Un4Bp]bGiq9+|[<F[T%9M%X@L');
define('AUTH_SALT',        '8y-%eR63O/)XJ)(+nE+O>LPuHx:toI%H6D:,[`F.<#-;BH>9y(e@w>^#HMa.,i/G');
define('SECURE_AUTH_SALT', 'jWh5,a)`$sG#Dj1hk18T3EXGfD5)hlnY=?{>JVK]4a+9uvF~BQ|P!r8Zwr|08UEC');
define('LOGGED_IN_SALT',   'S3G7Lzme}_lN7:M|N] N]Eo;oJ+zO.MZ>xr}F3M7<k9Iy-Ed~#.swm4g=!Puwx~*');
define('NONCE_SALT',       'S|&D9NA][>}^0e%&~lV-=1h^{+A@B.leQg|vlyn5wu%d/tyc]0ZT};W`|Yclf6X4');

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
