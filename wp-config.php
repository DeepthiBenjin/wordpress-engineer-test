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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-database' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'fcn==c97iUX_[Nym!mhdk((5G>lPD{xcFg(Mfmc>cP:.a5MV/(9a5XZ9)6_vtA+$' );
define( 'SECURE_AUTH_KEY',  '(_~N^kHE<x C> @bA`+oSM:f74+aJKl;>x^5L-`$ekf7b3[<^bAQGa{->s(os<|/' );
define( 'LOGGED_IN_KEY',    '$BF2ClSX]+8BN(FEj5HDoMcEjskX48G5Iz*5}*|+y%w+i|{B]T(h9+J]XUJ0h~7e' );
define( 'NONCE_KEY',        'XRJA&G&?ARfH;WksVTlD:fzD>JZHv? u}96F84YZBO0Ezk)!MAibyec:06_EWl=e' );
define( 'AUTH_SALT',        'RxYG~^Tww4AnCoI2R7_Cwb Pgw_;*rd8v*p2|/ds}!rzUnT8+teOvT2GgF3GftH2' );
define( 'SECURE_AUTH_SALT', 'Xfn3mTs OW5N,HvX*lz(Q)*b>u,jHL$,G$1Fwk}eIOQpTsairW>f)];_ 8#4/b_}' );
define( 'LOGGED_IN_SALT',   'GFwV+QaZyJy8Sj3wg%gHL@O{]5$S`6]o2e*D+Wo)N58Y*tpb(k$Z7Z,[[cw<8n[%' );
define( 'NONCE_SALT',       'WlSSgxSq7H0|uRv* 3ye3m^rRzc;[EaG C#$M0_@X{$o&nOPN{Y,U9`)]#uG(OVE' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
