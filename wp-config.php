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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '#0K|HW>c5:Q) w$;{mkD8x9Oz1s*I,h]A5]:%k>4ir=F8N=4|AA&k~JJ)i(XauG;' );
define( 'SECURE_AUTH_KEY',  '2L#qy~]OYoM+z]72wMnZKtV:#-TZPcjq?.>e*H=h76_i`71m?AXGOkk(8O<hk{Qc' );
define( 'LOGGED_IN_KEY',    'PcB1v-6`<F6~ H[AH)rSgAsMF#Ds;Za^A|@p6l* KHBFJA6UZ&%iEPatn]0v6Ru&' );
define( 'NONCE_KEY',        ';1$]b.7c{*<65U!3+^$5{(tnvscZy:+7,lF-+H|x@V@c<:0`iTtf/5t>]QX[u`^J' );
define( 'AUTH_SALT',        'j`*dwg`F[LrrT,I *XcF>Mc;`u6#oU)@]gXjwFDqBFc^V+2F`${05N^dzisJ%x=G' );
define( 'SECURE_AUTH_SALT', '3;k(u0 >ePjP rBf0oHNV4Y~e %(-s:D#:U5Nd+YmJU6<~&~jsy!ko[UQ~EEA~8a' );
define( 'LOGGED_IN_SALT',   '8 js/zMyMYZ)M4[5$f |u6d^,yTh~=aODe.MdU>]PH2H0HN%UM)OOC=@W8hXK>Yc' );
define( 'NONCE_SALT',       'h/t&S(0??owjqb#%jR!:!t ub|/%T5,HI^V_fNdZHD|D7W2h8mweIFT~6g#Y?08)' );

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
