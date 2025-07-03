<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'AUTH_KEY',          'Dl$E3>aNi/mPH]Xc$g:H ? ]!iUyX7$$%--qZ $}{|v/,GGB9IaHP7l$C?Hu8eCm' );
define( 'SECURE_AUTH_KEY',   '>VW9~C9IA?|G,A~Y6,Nc^%N?Xkoj;OYK!1GeM&`Y!.+&f;S`=eN#O?Vys{srbc7D' );
define( 'LOGGED_IN_KEY',     'GrZlLsYs,]-u>Hx2*=0H(|bJ89,xc~C;mp]9/g6@$gm10mi[;~WU)rbp*iZ 4-81' );
define( 'NONCE_KEY',         'w[0}0BQ%#mKT!#T|@>V{?y&1lbXaV4T)-(+v8u rl9zV!n>)V-pc@;*kWG;R~%cc' );
define( 'AUTH_SALT',         '$A8;k(q8:`oAl-Q:Ww=Z-aryO@X[`n.[nM:| N;,tR).rahasFrebGOy?Tt0Jvo)' );
define( 'SECURE_AUTH_SALT',  'JKOF4rxsV61~m8>brSr;D,BJ<$93Qz+/6Z2GoS-VK2__W ?+]xZ5d/ddD|<P/-Y!' );
define( 'LOGGED_IN_SALT',    '2zyd4qs@i^o!?;T93l=,dFmLJ5p^L6;< 6e_4!Nmf>FQ,><g8[e66T##9y3ZQyr0' );
define( 'NONCE_SALT',        '^(wLBR2dTZ[#7Ump4%e/Mn;uNoOz7_%EeS]s&)~JgX``,/.Y>CR_&=+q)I&%qM3D' );
define( 'WP_CACHE_KEY_SALT', 'eeIQ)}!6LbCkSA%a5.fB?6GV^9igP*nQoL<T*IZv}J1rhyv cB6Lgf;SLVc#j1+}' );


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
