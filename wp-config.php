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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wptest' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '@@$Jrnn21' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8080' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '^z9ELl4OQj`6C#)xT/kx6?3BX<]*nZ*+iW{1n<v3n37A/k8FDoPWa|+zBmqx~hNI');
    define('SECURE_AUTH_KEY',  'WPVw}V`p!O`CzW!ij+2{TtftB)upYY-IIU3[JhQAbk,U19v-O4|bEXgQ)&?6` ,S');
    define('LOGGED_IN_KEY',    ':2IQw+30^Fj-XbEWP[0GVpEJR.T*$U##z*%|||~H]*yyd=kyhyML-/llJ8-:e0j}');
    define('NONCE_KEY',        'VVj~jJ^H``|L@q}dwjO{oK;]x)+&TJj$Qkk<Br47XI6)=p|L]g9f%hL|p{]a]2-+');
    define('AUTH_SALT',        'eRzu_##N|lcX_p@+y?;!|ES@62fc:I31vyCk-YL]VWgbAfY*j3W^`z|zMa=3ek`=');
    define('SECURE_AUTH_SALT', 'Sg>l*g^/Z}k%.K|?-3&d5|2!vJI;7+L?a)99ON!l`#][?N {%(t87kcs,VMAsAAu');
    define('LOGGED_IN_SALT',   'p!6;E+v}N?OIe1&?& |IMblA)-d].M s ho=i6_if|rdFC$8}~W+&a3ug|,T/D{z');
    define('NONCE_SALT',       '3`_j,W>gg|L).*tw%0XUK`h=!J{@mv>U>JlQ02cvC[fPOXP2U&W,b[-Fi81m+paI');

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
define('FS_METHOD','direct');