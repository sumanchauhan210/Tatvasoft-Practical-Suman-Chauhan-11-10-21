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
define( 'DB_NAME', 'Tatvasoft-Practical-Suman-Chauhan-11-10-21' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'C)1q~~wjrgb3|PN,HY: B}DyO=B;4CE)X-Np6WNgS&VXLE}aGj46fSv]_r{N,4=r' );
define( 'SECURE_AUTH_KEY',  '$XtK4{[U )n{wO6D $[m! 829I6U*u7MnHaGaQwEJC4}~5v_|ht88,-v9z D7v+{' );
define( 'LOGGED_IN_KEY',    'jyQBb4w>1bs1wum*+>ih{U(at?J &QmGoD5pKxlFg+CR0>SPbB1_|Vk@/b=6V/K-' );
define( 'NONCE_KEY',        'q?d#q4!09GB<c.FB9LK/F;ahS52wJ$? 0Wbs(#KNGT}2T}0;ro;A$?kCc$*t7`t[' );
define( 'AUTH_SALT',        't9E4(hbPc!4:h6$]G2U{N&wGSZQf*f%%wPd7kom:n1>2pO;exC/Khi~Yxkdak~o>' );
define( 'SECURE_AUTH_SALT', '0>ljMEQFcw(4u1y.1b@fX#*p1,.$x0pLG8A]|k?A_?-j(m=[qO?A~nS1o`3E5$Rk' );
define( 'LOGGED_IN_SALT',   '[g1[M}xGHX0BA?rf&#UpORD!GWl<k;l ai2u%ClTY3^6NW4slH^X-Ape| v_PKS1' );
define( 'NONCE_SALT',       '<]=!l4Waq:i0n@NWHI{(p.rT$<$zvGE>7ey~Ixibd``lYxn*DI0[RH`9)B`mlb&l' );

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
