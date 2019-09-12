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
define('WP_MEMORY_LIMIT', '64M');
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\wamp64\www\WebsiteMaster\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'websitemaster');

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
define('AUTH_KEY',         'r~!=U%h(tsNQQ!`$JxC$ppN1+GYPvSIpJp,aaEB:lD}6U}5ptVA*Ms+dz@w^ibTG');
define('SECURE_AUTH_KEY',  'paPQ/_{tSI1U0O<5[Q@:?FMAhaw<(U<v%7?R!Ju0l%s*[<:p1Pd/@[BVe9jBWP=Q');
define('LOGGED_IN_KEY',    'vYTzR-(M_P,)wT_=#N577O(=_1Wxy(?KOLtrB%x^Alj%+~;yc-lZ{7%N{H!ZADoL');
define('NONCE_KEY',        ';{M=_Xn6JbLVPusDX3HN&yoOMmVXV@.2J1 ymRFWP*C}`<AWk0)tmYkI.9V%1ZOW');
define('AUTH_SALT',        '&r+TRQpAXKl}UTi?Gi#,|v>q:$2G[s)kd.+.$@CbinWw6c`z#RvL1[A[rVaPO&_p');
define('SECURE_AUTH_SALT', '##M|q0R>[F./%J>4yxZLmUv}SW}4L<HtT>C^IFA=}ys2byl!,~![T9~f qIygSxX');
define('LOGGED_IN_SALT',   '=i@6Q5P= 7ngog8!1{GoDTvIJ$GS8iV3~2D<5Mk5WEp+u+Y#|v^3)Z_|x|PNH<zo');
define('NONCE_SALT',       '&,mjstcR!3vlboAxE|0mI8w&B**Vn58r;j=`)Y{Bh${jkqCpIs*{lPc(<tS;sBu)');

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
