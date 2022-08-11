<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', getenv('WP_DB' ));

/** MySQL database username */
define( 'DB_USER', getenv('MARIADB_USER' ));

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MARIADB_USER_PWD' ) );

/** MySQL hostname */
define( 'DB_HOST', getenv('MARIADB_HOST' ) );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')|A==gfWSzN:#*3`DCB;P3?a;g([--G&~9IfRS1|H7 5#SzOQj^Fq5=b(}>pi.Al');
define('SECURE_AUTH_KEY',  'x(,Pz{&gJM:6j[v] D(CL/@@z[cJeE3di033^uUT.+>?75+>uoNT=%!/|{i]7si>');
define('LOGGED_IN_KEY',    '#Kf5bb6}jy,05K0Jnm3P$3lSj:kTbs!HgW3i)$CBT`.+sQrP+dSB?5cnZ|{-}>M.');
define('NONCE_KEY',        'm5_OI,|CJ:P-/KpG!GG/x:6/N6X(;4a|y1u UW~~ )FbPgZ]{O3J)<3(Ah!jkQ: ');
define('AUTH_SALT',        '9-vNQw<ptIOFcEW~L(R1:&@02:-WRe`UN9-[_/Qso3XWEZT4yR:<Yg.YMw+_W2_o');
define('SECURE_AUTH_SALT', 'Yh^{=Vvx,r6%v!VwVj&#|&,x2Y(J-wU$|lAqh6Gly2h-e-Vjy{=q<F:u/q]J|V;P');
define('LOGGED_IN_SALT',   'uY5f,2u!L{mq,~imY5n#Jj`-:|(q:&_T71&#-/6I{kMQXr0S!ow=qd<=(1H+J]+5');
define('NONCE_SALT',       '7]S+(vP+Aa+h6Pi}uZ3Udt3espY!%9,At4rf~RHb8dY,kC<hg??1XZ+@{G_ZiBMD');

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
