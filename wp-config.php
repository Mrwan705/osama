<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'osama' );

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
define( 'AUTH_KEY',         'laXt*~|$<p-i$mP~A0S&PbLY1?$YlW|=]!InYM##ef/oP,*wzMV~ =jkx!>z^._=' );
define( 'SECURE_AUTH_KEY',  '0DU:vY/8m=_mQ);t7DJPop@bvn_Trrr0!P*1^(3N#jW597f7q9aHZ$1`fCSsuK2<' );
define( 'LOGGED_IN_KEY',    'u)pFsF!|1u*d[wJ4k|`VHWb66=dG13!@w(B]NKq00eQ#%7;99oP!QuH7Qj;#Qdqz' );
define( 'NONCE_KEY',        'NxGdV+Jy/@~68D&8trwD#=6Sy}Yzfzv0R.>6]Xrlnyc9m~?ZOMDzXHfFFa]7`~ZR' );
define( 'AUTH_SALT',        ')TM4<mYe-r^VHAwf_]<cl.Sirm3,]S?]4;SB[z,@r}[Y:+y4/?[&b}}=>42/;j^W' );
define( 'SECURE_AUTH_SALT', 'z5O;-:AFa)|/6{KNh:5(uWQy2kaxMg@JHKZ;-mAu;<!z_ShS=cVs6c%@]4B;|o~<' );
define( 'LOGGED_IN_SALT',   '#vHXT?-mjtx%ozhS&=0]p-kp0ue1{LRjz,sb .Hcq&Hf8,r~<a![&>njg x4i88m' );
define( 'NONCE_SALT',       '6p&)ccD8kAy0BKF+X8!|_p:5?ed>`t0JGU-j4+z@XjPeU<D|y ,uoWz]8s#vIA$s' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
