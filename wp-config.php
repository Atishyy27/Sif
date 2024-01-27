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
define( 'AUTH_KEY',         'gMEEx=mn~s%vz6xW{l34ipnkNylFm^jCSBb4o!}o8M4w!@x[}#S8}2H1lG;|9[?]' );
define( 'SECURE_AUTH_KEY',  'Rn#u+np)<zJDt2:k^~cnID0J@ <*UMob961Fex@N,%3O;vnGcb9#}Uaov0DZ[NnA' );
define( 'LOGGED_IN_KEY',    'Kt5Ql!8&wY[X`7&xr@)idc|V}Y,8B~kXY$k5_2E*ud=[y9|0,8r%:BJ|gJ] T&Q[' );
define( 'NONCE_KEY',        'YZix<PepBTTZk<,*^2|hMf&6+B/wlIXf~WSp&*aV),<+|/58y17GGdP^B<%H_|C?' );
define( 'AUTH_SALT',        'NPIWD*!4b83b}@(CO=J>2w8:N?N]-R|{c~e)j*NAF-zyT|+$Nb(bRD@<uqX%VgS^' );
define( 'SECURE_AUTH_SALT', 'ZH}Q[Gtazbs_`(d}uv&Uvyl%Y/{kj6 2uz#zinVxt,fx}$8^BIyIS`v>OS^_R/+R' );
define( 'LOGGED_IN_SALT',   '?LkS!m<`Mhy`BA,#En@Xk0 *D9m?P-`Uiz`>+Zz+yIE[pJ}p6gIkSyk#/oy5*G._' );
define( 'NONCE_SALT',       '|MV8{<0S}k9O)Je _^P9rXU0~O~ec@8C;+|?fXT#>^EV_^P^u3k%P=YX?FG)Kq2&' );

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
