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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'RbF;,jSVDx?U:*y>3/|iG-_8wn;C=AcEyXXoXu@QZEn-xie:*?7rYSyLwb^b(C}G');
define('SECURE_AUTH_KEY',  '{EyP-CX| k=}XvEAk1/oC%y30i|GqG*mWv4?wj4Ii^{-JVA+ Lz^n{0F~Rv<+#`]');
define('LOGGED_IN_KEY',    'W#q#zVu FYCtFaWj>y(0JVC[[iEda$lRdsdBuidmJjVHPUU7;8hWQl-v88C$MEkK');
define('NONCE_KEY',        'V]Ra}d=8|5g,p+sSER]~d/#o68A$ji3DomZ64W>_]FqgH&$&]!-{pXhw~jDz4YT=');
define('AUTH_SALT',        'V7VV-?6HGWw1T%}#P1=*ZbE/B?V0Ks<fh!9cIhU2`!1EL68=)DN({x4JLqK7ab_w');
define('SECURE_AUTH_SALT', '&SZLe4NBt&wmm*]pn:A/Q)=BDg1jO=;y:o+Y=RVj9Wj+,jMo^mW>#=8r1O2cEiQH');
define('LOGGED_IN_SALT',   '0VQkcJ[upDB_j?!Vx2*5L]=f,wW<9}ar)NbUbsBk(+/%g1=r2D*-P#9XIlkNJa$$');
define('NONCE_SALT',       '80mA,^Qq=^;2iz F=,2`y]R7v$:H-=YYIl3pOkG]$h72wm?.FS{dw|@P2zlBajm ');

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
