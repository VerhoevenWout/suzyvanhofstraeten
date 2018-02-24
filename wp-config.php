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
define('DB_NAME', 'suzyvanhofstraeten_be');

/** MySQL database username */
define('DB_USER', 'suzyvanhofstraeten_be');

/** MySQL database password */
define('DB_PASSWORD', 'Feelgood1963');

/** MySQL hostname */
define('DB_HOST', 'suzyvanhofstraeten.be.mysql');

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
define('AUTH_KEY',         '1ZyrB>imXgp$gJK&6_isuMb$/2&M[NkAKA9zg[(;U_5OwSF*]|y&NJqu]4VShZkD');
define('SECURE_AUTH_KEY',  '.)oA0.KjOo#p{$e/;q3gli@(j|d3K3.,Js9-a]O$%{TKvVV$/ezNe)#obg7%GX]e');
define('LOGGED_IN_KEY',    '6xP]^m^,=:,3rp_^4Bt?j @P=zhz0E&P|,-^)Z~oyQSPqu0-ygnv4+w$6)t`z;@?');
define('NONCE_KEY',        'Jj:e-Gm~U $N.mbx*;#=4TEbt;4pg%{3Hzy)Y}6U(ti=da;b-zuVfK.vW&8}&JEv');
define('AUTH_SALT',        'Szb-I|?st*7W3>$:)-KyAwx-yzowXsE4r1u;%Vt)1Q[)Fhpz`;diJgvp+]2Qpts/');
define('SECURE_AUTH_SALT', 'A_v%MD3dBe.GY;HAq{(^duIP12ZB^/IX.`PAkxOzsv#&E4b}FXh%bNU{!k?FUz+B');
define('LOGGED_IN_SALT',   'TN:VLW?15koqT}-pf;$5n}C/wg9@C2}%r;vY%0dE%S[>..`l5fT%M}[mC{WPG.V}');
define('NONCE_SALT',       'OM)KI/mra6cubrCCtAt.rkBK.TOJi;(6@GlHri>eqg0w|1+s}2mIM:G%<luFD;r[');

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
