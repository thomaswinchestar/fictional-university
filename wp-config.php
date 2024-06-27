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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'D<Q!Df8UX:VE=Y2~1O0B)i#OX}|p-q^xRAIYsb<>sIH7a3U_8^3-:d2Ab-LYtsyp' );
define( 'SECURE_AUTH_KEY',   'G4fo,z.~A:Uu1+=Xx~&J<f%T=q<x.{#IZW3ym6hG[j3V+lC^1`aI0C7w_UC qE{y' );
define( 'LOGGED_IN_KEY',     'oSl1Ijq>gdtv+!2Q@}w.w{u<((83wt8*BA}mPD}erP@4`rk`JHTpIe+MSz&RA8d#' );
define( 'NONCE_KEY',         'HlBtqyO~^ErWFHhNEN+dQoBs=-r`@^xk5A>q`r7T$BHU=md|EO)-F[6UZk<`#m)C' );
define( 'AUTH_SALT',         'ZY|pw^p9l?CIAS^8pq>BVTSHmQmwD.?Ol|:{.0_MJ[b[z~L>*E~>eeypBf@-#xs~' );
define( 'SECURE_AUTH_SALT',  'Cy5Hd>V :[f$U(X+@r+lZCY}O^n&LT$GPimkl?1-5ML$[Ru>{Zen&mi$aq-=XEE^' );
define( 'LOGGED_IN_SALT',    '[luLgHHc[7lB_2[h^hq Z?&_Ydg8=ErT18VmRI^(&Wg&Tg2:xZ0[`m@CCZ{hpX#S' );
define( 'NONCE_SALT',        '4ms{A4?p8e1ztUEEUY(O3#MA0|yLtGIR^(J/fQUgM_xz9N(2gdYJ(+t9P}9HC}{:' );
define( 'WP_CACHE_KEY_SALT', '#[gUvhGl,O0d9)$?2B&F8aKEMSyO-M@)^OhQGi+Sv%;tJh4?iwZKwKug3FM6c7!_' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
