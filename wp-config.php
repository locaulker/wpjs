<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpjscourse');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');
//define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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

 define('AUTH_KEY',         'Pq+@o>nR;awC5i;=E1l?1QCaG1 |,qKu-D9iy8zdTBV=F!}yl-<s>vbN2?)3TqxI');
 define('SECURE_AUTH_KEY',  'iIsq(Y:lgiv`JKbt+)9-tI@(hp+C)ga^jHPSe*qQIUN+0R8Rv+|%TrCKBW536&.r');
 define('LOGGED_IN_KEY',    'F{N.{cR:KjB#k[S]]vVg|t[+ZIqn_>pM+k}z4QhQ~kZ4l5ws3s,T]sMh;-f:IA_A');
 define('NONCE_KEY',        'o^f 4#wH$uc.sTt9t};p#st%o/%HcbnHalM4%B*BONhfw[AOkA#JxpL)7}2&N,|>');
 define('AUTH_SALT',        '+Z21XN7BCvv-^bF<J>!m|FW|umBif|V[R]%*c@U-7jEMzS5_o+^tE9pAe%J%&l{4');
 define('SECURE_AUTH_SALT', 'XwFK%Cx9;HbAl-k-koa{#@8e<(+0W`GS^,8-A],%wxIfr#3.9zlIz^z=cK<B/LsH');
 define('LOGGED_IN_SALT',   'mq|sfhNd0||abdR^kD($++jSM]A+4AWPoA!+mUv0m(W~m!!deSo!W!:|ciA(3?&d');
 define('NONCE_SALT',       '-vPeQsrS[nwy:NGvQzKwp7)s gR^.O=z[-`;~wW/VV(kj9^>=!g5Ob<e#P6Yn5d#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://wpjs.dev/wp-content' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
