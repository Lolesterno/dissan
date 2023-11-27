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
define( 'DB_NAME', 'dissan' );

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
define( 'AUTH_KEY',         'g#2>>x0dJ!#P`z(CHQa/;Z|eBNhcfY[rn+w!5{D1cy%PNWwv)u71oS3+kuWt5|CW' );
define( 'SECURE_AUTH_KEY',  '*]dfml;>=br+)FtD5x00Ud^Wv.x2`Ru!`HO8bE6c0N[;v{|M]PeDV`pB^88-%:/@' );
define( 'LOGGED_IN_KEY',    'S^71cWqKy,}r?d~6ysDa#14E2~|uG8Q.n%k{f]>Jjwfx.7~fGeTUwZv.-_;E6ena' );
define( 'NONCE_KEY',        '`1`{<A?&T1.lE,7.D Y`LV7AYu9ItU>Ly`+mq/s|FTF:qE[x/WCq?TnBO}ruvUSB' );
define( 'AUTH_SALT',        'SrPV@(TOR1fdOi=&AZT.}Xx~YPuT%xgi5md?)lsnH3spzwNGeR3cvFT`SWc{R3id' );
define( 'SECURE_AUTH_SALT', '%{UV*9f&f3k;3x1%:@MZXD(c/LD9p99km4J%MJI%rW1G[U!2raM/B9?6CQ-pmOfz' );
define( 'LOGGED_IN_SALT',   'DgvUs(*:)L6AM8HH)NOeM W9D%7Pbqz#i=KP.iz~:B6ZDSV(87_E&JnsC8[%@7az' );
define( 'NONCE_SALT',       't9QRqGks7?;:,5gnnJ|3.7v*5Nn<4g0/@1>eugrDD#%{8*Xq,yYrg<gpOtgNAHi3' );

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
