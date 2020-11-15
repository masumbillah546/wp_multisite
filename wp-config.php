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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_multisite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6Nw3X(,jQ1?39:9F}IZc~hd+$nPS9X/J*JELSk&aaKDv6#aEITF?l=9WB5A7zU~v' );
define( 'SECURE_AUTH_KEY',  '7bQr5>u~4x:sSDp?h;J6?)Y1{*pwX01-)3_dBK/e0NB`q4]A%B&!Wzz %k:`~:a ' );
define( 'LOGGED_IN_KEY',    'fD4.y}ajRVbcgeNE:$3pxl?]o*TlcQ2tszB YV]T=F39LNyG{&Sm=5Lq-qp)McqB' );
define( 'NONCE_KEY',        'N92j39@@6WH~ynUK,X|1*y,&6t&R#l{.$p{o!<d}:4HJ svLD+T9{$q!CQ+{?<.n' );
define( 'AUTH_SALT',        'IKvuwn.Ci8<M}%s0OdDO3cnZcow`kRH@D[u74&ru`^,P>naooz<d LYon&G-{Gu9' );
define( 'SECURE_AUTH_SALT', 'Nv/o<>:DT!1p4/~@4qbo@x.8Xk;6xrqtD:X5,YSpK@V/yd#y]X:1G(?eI,(2(e d' );
define( 'LOGGED_IN_SALT',   '<T)*,dk*~Ck;~2,npaxgm{eg(N[Xv7#()Z&@KQ^p>YAS:/XvUIwr7Cx<hib#a`}x' );
define( 'NONCE_SALT',       '-.2?CY+5 !NC$;?f]1ckff pnPdy6xJ8?F-w@$Sg)leZZVl89W_t*1]eWS7~d^6:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wp_project2/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
