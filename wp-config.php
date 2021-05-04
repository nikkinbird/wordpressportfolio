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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'T]H0Z}H^jNDlQ!TCT#$/(6v/3SxZHLnOASm@44QqFFpI3T@y1anY6]RlZlQtdog&' );
define( 'SECURE_AUTH_KEY',  'd,Mm+qMA %0&FZ}WU:<h_!g<X+!7m9C}!84mU[.ES!t?:Q-4BhX[DkY~l2kn(4t4' );
define( 'LOGGED_IN_KEY',    'B1N<~f|1,]y->;-&=dSsNfgwg+W^yGrT!kH-F0 m94`(p<3x5n! KM2 mG2Nlee*' );
define( 'NONCE_KEY',        'qBY Xk}]Prfs4r;M>fYtPxc*kP4;g[c yiUNmV;Rz4lUIn(BxrRs8%$ZuhofP0nQ' );
define( 'AUTH_SALT',        '#jbH^JR=Odb1uHb2-rus%KI(7#u SQ4V..0^TDF~!JnO=0]mnJ5izo4G?4bI[>+[' );
define( 'SECURE_AUTH_SALT', '@M3&zz!Ur0O+1Oa_1dW#Q&$8PgyF@Vj4=(7O<]#GdG8rdY4vXt[?WF)QE5XvDk*,' );
define( 'LOGGED_IN_SALT',   'iR .T%cxtsuSci@:B<T`1|{GTXh79b+8_16^4?BUA=#] 70#Vj vTUZqG_-PrlWB' );
define( 'NONCE_SALT',       'QmxLl`f)J|4cNFTB*dF3<O :1:W372_f7DskT-USuVQ=5UKZ9LXGAibp`Q?vA2xr' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
