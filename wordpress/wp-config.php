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
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'DKwz*H0}c[}KtQ=1.(Gc%{/GusDAKp$CEE$zPyBd}wlqaT&9kX_YZ=lq*U:02NFd');
define('SECURE_AUTH_KEY',  '=?r/9!WLp]CkbD~%Rc?;B/^TK:wK>_]u!N7?4=x@ (BX+N*pF3-AA@&?rO/8O/*}');
define('LOGGED_IN_KEY',    '{CLCLwV#<d@1kzDljJ@q%gTXY0yC2jCx>2dMFg@9yZ/+`={^c~Dq&Ov`bq=->zJM');
define('NONCE_KEY',        'sxi/ $Gb#o,^)-p+RF_**`=H=B&5y4L+eM^*p1/nSn(.zt>,n*n1oe5!fkD1O>2z');
define('AUTH_SALT',        'B.X,@&4?JgP:-n:%}#lZgVy0d5;}]w>yk83vPjv:Cj^u (Q5PiM;sJ^z7L5oxLZ>');
define('SECURE_AUTH_SALT', 'Uye|nuZxfN&kt=|.zs4V-M]sK)oCEXA`_(EaJ6HiuvrW W3N{)7c=Y4?8M7bl1Wc');
define('LOGGED_IN_SALT',   '/]Dv^*aXah:{l g}KI>g[@TTMbB9ou&d|Q(C$eMhy3@_C0.YBhWQT,I[x f;1)Qd');
define('NONCE_SALT',       '5zpS|ZC}7X_TRGTXTw0!0>GAu*shKt;>i1cb`[s1$ljTn_|P<qT&*o$VI{?&Xlkd');

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
