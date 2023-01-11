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
define( 'DB_NAME', 'ecomsite' );

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
define( 'AUTH_KEY',         't&z |ZZis%,+e*R@j*n_B#8-zm%i;CZCCVWAiUzSKiaS3UAAOh;!*wos0ORVZVGP' );
define( 'SECURE_AUTH_KEY',  ',IC40Dh{9_KiuB(_{EC{j{DKe$/oC+/!W?GO>yVds{2]km}Nr=87JH[I_7NKt4w`' );
define( 'LOGGED_IN_KEY',    'XI%aIU2 Z%g16q =Qa[LQHqC!xP4pVs3%f&[g~w^)q;9^%?%SQw&]nt@<q9G S|D' );
define( 'NONCE_KEY',        'b@fYb2;KPk/&:YlV0oArkk+cIU`ham/sbnX|mhDe?cgrcZ@sK2gi6?e8H)m(C~Cm' );
define( 'AUTH_SALT',        ')V/)k6fE1t]=rdp*0a~p|T>F:Y]43og!B#y:zPQ3r9am6]3B]YlCAk1%3WUmTEQ9' );
define( 'SECURE_AUTH_SALT', ']Py0U`.lYQ<kk@:Mcu<?Uo;L+:&5|8yF1Kgp&c*i*#@)X9]dh>(aQ I8c]qtK^t5' );
define( 'LOGGED_IN_SALT',   '*8U>4tNi^1He02Ycg2<I[WKqZ[qk` E<,=Z1</=94@K `W(:GjvOIiU{^JUun1Kt' );
define( 'NONCE_SALT',       '50pnDigl+_j/,v_H/[;1q+rq9!|U_t9^r4al73m!Y4-,aspSF< <?Gp&`n%/H,yq' );

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
