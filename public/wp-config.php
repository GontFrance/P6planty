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
define( 'AUTH_KEY',          'WH,Vg-O7J-{n5]8*3gE&d*!IB>gDM]C.wvUs$.o||8snm}ctJoH<=-lB[Z%yl?^C' );
define( 'SECURE_AUTH_KEY',   'C$#6?%^x.I~WFb L`4$mRNU_CK}$>QxFUnkUP?w-U}IB*)a6gT/TZb8yk;I,XRjd' );
define( 'LOGGED_IN_KEY',     'z;rv#c7~c8AQ gJ>DGWkTWGP;1.tfH#{+W.cLa z2iE6JHTk-<uq[Ml9jZvnq;pF' );
define( 'NONCE_KEY',         't[i^(` NYo2;j{j0_@lp`=}dV-4*x=r@>,&H^UYn93(HN>=DI`)8MRZ1VZyc`kO#' );
define( 'AUTH_SALT',         'TR}z2j}R-v@m:>fvbz+{j+uq&e*N<TdR(s#6.&tw_/Vi3?iLq:${w&}U7O<fPz#$' );
define( 'SECURE_AUTH_SALT',  'YO)fnnbZ4CU0BRYQ*,+p9&oV,HPR<0r14[iFtsYa#M/%+AgG4QeY6/L]n`8]3}zu' );
define( 'LOGGED_IN_SALT',    'j9GM==7%PDPr]uBvZS=0 9(SQ~/7mQ^I?tCW>20TO[N:KzS1&_RyC7wwpJ(C}2s7' );
define( 'NONCE_SALT',        '>mjwbSVo>!v^^{gvWg%wb4 *^cwNbM_~W4E*; !C<}$kOFky v2rTkA278b+yL0U' );
define( 'WP_CACHE_KEY_SALT', '/-[xY+i(!:G8?(Zf]r5u#1S]syR`o[t]1o,l]+89j _7T]NKP~#K|,BTR`8z2b=v' );


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
