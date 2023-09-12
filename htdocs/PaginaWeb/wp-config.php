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
define( 'AUTH_KEY',         'df9m2f<7U]*,[<brU%3zD9#HFNeg{;(a^Qn.?:PxF @?4?@UbYVP(C4BVj0{V14d' );
define( 'SECURE_AUTH_KEY',  ',KK8ETz*HXEyENtZGrgtxLq7XcYjqZ6-V(!~_0Qy~Rsni#E;K|xQ3*mpO:NOQTHl' );
define( 'LOGGED_IN_KEY',    '}MFO@LYabP^uqy?-@NA`yFh;/7 I.[d!-,GzF{h2WQ[qP>6},FK#BSpyBEKu>q)z' );
define( 'NONCE_KEY',        'EY/./z}%7Ib*RSsQ< =wN>/LilHZ5HLOuh{l*-8~=(U:0;hF`>D(,mC.Q+ZfAXm5' );
define( 'AUTH_SALT',        'K/ t12`wQp=0dfE?EbH0W@)p)0,{be{-i^0:@,z!ucKcvRO4tHo7%]8tc;03l7XZ' );
define( 'SECURE_AUTH_SALT', 'Y[7|Os2~PHT,Ba#qlUsKj8FjoGFgY:hdl5Kz+s5W&!M_R.n,8YfV,YC$NT7_($=Y' );
define( 'LOGGED_IN_SALT',   'xjVc/lxROu<ca?:Sb>4S3qm0@jn27s#hV$,-ouZZL(z/]Ga20(Yha>9qgbD4g^HS' );
define( 'NONCE_SALT',       'T-Os!^H!s-ea8D_$S</px4p+uw8NF]!*uK0-7~}|$:chOxA-Yvm<5`<OOSv-le0$' );

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
