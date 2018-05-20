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
define('DB_NAME', 'mira');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'muzjk2nn');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'WdGn[32^n4Z=-#=&x5OmD^Eg$q~uK^7.4APjH(Y+;=F2Y^L$N3@I6y>l}DZE.MT,');
define('SECURE_AUTH_KEY',  'a@}!mSx7NIAan^ac>Mxf;2aw@.+n[[*2k[&cldIh&4b1MrjW?{eh|T&rZwj)i>M?');
define('LOGGED_IN_KEY',    'twK7scOYUa%-<E8IEd].8C][&0cJMK!Tj3cQzoNy{.%U&=j_Gf+4i)KX~`hB%S=j');
define('NONCE_KEY',        'qYa<s%}P$T^Jc8w(>W_&GIKB,%@<LAD~/fmP|feSjns8,{htRx5KCH>Xa:8C,zm6');
define('AUTH_SALT',        'd?hn98[0JwDJr>+AQm[?GV@-;6S<#JQGp`lqblsR,V J>!8o0F@hDJqk)b]5#Ri ');
define('SECURE_AUTH_SALT', 'Ir?j.EOSuCz:nO[HtJ+iNs7pT&jXm7^f8sQ t20J,~W_5p,}BD3Vt1A(D#4UcQ+h');
define('LOGGED_IN_SALT',   'c9{?c9^*W-?+kyYDVpovkF{9(.ypUV&flBrz+Czo!OHg3MQ2vl9#12[i%7[-R::}');
define('NONCE_SALT',       'PTavmqx1M{>huQ8,|)]Za:vZ;@mf`$wBE+Xflpe?g_IRY#F>>I[lzV{E:j]%<T:/');

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
