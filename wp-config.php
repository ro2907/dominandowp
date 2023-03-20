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
define( 'DB_NAME', 'dominandowpdb' );

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
define( 'AUTH_KEY',         'k:8BAm0NV!}SxC0iuY6;f!JjT(im1Z29O$B!y!:@Xl7JspUgQ0s/o1{{K|X9~?A&' );
define( 'SECURE_AUTH_KEY',  'G|7$ab~K*?JjSHM*!M^tPOE4C3~mA:c`O-c/7B1%oApjaDwUlydmG.DBly/ms|/7' );
define( 'LOGGED_IN_KEY',    '6L$RZLQIxf7Bp6Q{>&RXh(0L0d aVMqBn miK-+&R~ J_Ro%>?/Vu4+wRgSuRGSM' );
define( 'NONCE_KEY',        ';oXX1@lMV;d;p7{2E3W53`<K_Bgdz`sNH4q:J)@#DM!;>-iE%kNVcJb_UWc~M+ /' );
define( 'AUTH_SALT',        '5r51o4APz)=q:|wzl`c 1AD5^jE9@(qGWP-/?E+!Mki{sJ)[<#,*F%yaZ^E2k0?[' );
define( 'SECURE_AUTH_SALT', '~-Da!MwT|eQDwKhFvF}4W{;Z6[L^} rJ2Py!N;Gd.^3-v>3Q{zhF98Ah6)-[a {m' );
define( 'LOGGED_IN_SALT',   'zU5lB9RFaB#7Q=pC)W=WeJMdk#Wo.Y]PQ5}.fWbu)xNhK_3I%Hj2aNj6=yMxoGp$' );
define( 'NONCE_SALT',       '+)@!/bPc#x).qgh00$#7*zt)jY#p<<e6>RY<3I<(Yjfz98.6,$FQn}Ah|1T]*}U-' );

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
