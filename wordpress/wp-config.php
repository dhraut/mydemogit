<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpressdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'dQ/VD&SfvB|C[H=.e-t~rOA{SCbA|}|B]^~yYPO8!~^9b6tO[)7YJB/P3CsnkIvh');
define('SECURE_AUTH_KEY',  'wwhdtJ,  <-WrIL9,rfsn@kn/NjF&PMs2lh42Z^YgEW_s-5fpw<zeD$8XSwo,Mh~');
define('LOGGED_IN_KEY',    'u|H](*{+Mc ,Uy+*fO4$^XBY1~48-c9>|pqEXlt84Xl v5)$PTI>pc]I;t/E~-5b');
define('NONCE_KEY',        'H!~e*- 84N!!|HaUK1nm},,v-vu?{aTT:W8Uwg0FR?5-vnNcHqJB>Air*lkYF<@.');
define('AUTH_SALT',        '#feR:kme.}jX-lG-{^^)l<bz-4lgSR_8n.G[YKnn0O +J**$*4q@*JDN>-C z5:d');
define('SECURE_AUTH_SALT', '[6va%Xb1)JXN?8,ni]-L,7WI>K;F+90ISbD+s9XtyqV,Xaue=5a3fEtALSwlR9zO');
define('LOGGED_IN_SALT',   'D&31rL5` Js( ^T4WY{g-La`iC+QlR @g,>|- Jt;gBSa+~~P,88-_wLVQpL~Wa-');
define('NONCE_SALT',       '=ov*7bsDxo{>^%r^Ij%9chI pHPJub*z-.F#d{B&U4U8-@XUF7_L(:`Dn)vZmU7x');

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
