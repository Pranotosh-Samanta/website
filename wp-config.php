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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         '5$nr[+I72Am8qb83?u9J{&<d2^QR[hf:mlu]H]whr:7Bxk:~uLZp8Wi(:Iv{D;*/' );
define( 'SECURE_AUTH_KEY',  'WiHxCLDM(yp/Zraw@H&YSX@x$sDnCADtq^+@OWH.:d|Vg)Po@cMko)#W0e<+33Wa' );
define( 'LOGGED_IN_KEY',    '{&+H~@G2eC3ExQ:cmh;qk>3qEyGq?o`W(gcy#f$!#@W=Q%&^F,qpMUl|>IKyCuhv' );
define( 'NONCE_KEY',        '9c(V3`WP+ahrm:sAD>c~=@DHg^S{&Yw860;||_EQ;WzF}cE=F1Y$|lfH[&knN<<z' );
define( 'AUTH_SALT',        'Z?@EvFVaPfg@RH(SoK20<!R&0wqAwXRN7:s&JM.,N>5FSR)&1<>6eZ#CN=UdjtQJ' );
define( 'SECURE_AUTH_SALT', 'mc)k=3YFt&Qg(#MfJHYwrleQH=/*|[eJ4r%wf(+jwNMrXw-BGD*k/4?~P$S#2]Ni' );
define( 'LOGGED_IN_SALT',   'AjO}*6OTwHjkNeO~&91QvGeMTblaFB%6N;CM{1d3w(Y:{,jRTw8;^FaxJ*`$##En' );
define( 'NONCE_SALT',       '1@]BB`8;x!p)f)Ot1_ZnhZ%SBj`TM[fGr(>~woY`b-92y{,~e=4U*V=ok(VV@.yN' );

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
