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
define( 'DB_NAME', 'skydatanexus_db' );

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
define( 'AUTH_KEY',         'zYG lSRGb@dAMNAufyZ7fulsQjx+.#.p[]}Y><WcX)I5!s_;u~;8vd=F]M>ZB lJ' );
define( 'SECURE_AUTH_KEY',  'e!&tv.]s_QTn7G2)=~{|ID t~1Rs(L2lb_2/,$[`^{1,GPadYUVGRjm[dujV^J:k' );
define( 'LOGGED_IN_KEY',    '(SF!QcIz?}{t@!%T1:N,kUUs^N|O0f52{uHm|#KCeN3$LOtiuOHkq5YmstZg^A>+' );
define( 'NONCE_KEY',        'Wz8%e,^[UeABMUXr^k# EFjcK MDlJ<iA^P+naYhHz )s.0n+=,`sP@&x{2PXilw' );
define( 'AUTH_SALT',        '|)Q(,Z5&bn6o1,R>s>&/:$A(o$JA@6TZH0&!19Xx ld-tN=6q<IfD4@ #1U/BwVK' );
define( 'SECURE_AUTH_SALT', 'JIIuY!.&K+KLl-1&Gt6 `1cH9#`WodGZ=]Y}qL#!ndd.*4+l>ke0.N|Q=<VRqU6W' );
define( 'LOGGED_IN_SALT',   '!Fq)WWT5#u/|<=:W/a(j[5~Tq?6~Y=^NcntJNxkBAJ4aDwn.:gIKPbkMxicB,Cc9' );
define( 'NONCE_SALT',       '<z*XvCZVW/UwfssO>]-bc)^PL$7!aZm_@Pa#sN#u bjA2Cj0$Y|u_/3i!Bf|/ q<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
