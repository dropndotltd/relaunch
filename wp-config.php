<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'relaunch');

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
define('AUTH_KEY',         '-e}fmeKz9r<~u6=g`f=6olz0;-%Y2p,iU)<7aZ@AbMjC-Jf+>hG0+|:.Qlm@tvO)');
define('SECURE_AUTH_KEY',  '9^/nZoH07[+zw(7R10Fgy*0QQ/+C!FMT>YI!1z/K|gxSL:,- p:8|0gm~~tO|0QF');
define('LOGGED_IN_KEY',    '-oEjaM(_r)9!n1]R]1D%_E5ag0nCTFU1B5U/++z.-vVX[+/aDL2X5cAk;X#J7.Lo');
define('NONCE_KEY',        'F|~eaZ$UZ4Zb[5|6>%4C |S4I(.!{?|x^91<BL__^:j-`Rx+aZ`lI(Gv?f`z6j |');
define('AUTH_SALT',        'V }4E1_i6G^?x#[G?!$XAuj:te?Yl6Iwf(xSS/~n>%Ev,@|Y =<fb}5bONyBs?5W');
define('SECURE_AUTH_SALT', 'vN{p`^{>QPLvS@ubbQu3![@p|T*UhAHp}5+}NOk}a+`|d>9jg0sN$FTrxJG?RTdf');
define('LOGGED_IN_SALT',   'd6W9S>ZYab+g),7E!GxMB~Kw{hItELG15VI#,:Ret0 @+_HQ!YAa-XMCIK `{Leb');
define('NONCE_SALT',       'N~]`+-Y)FZ-IS7VzB-q*o%/~J-w:X4+L]{-4#*UWG]bM_J)0%k(/zqZ8`;2VMU)>');

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
