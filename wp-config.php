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
define( 'DB_NAME', 'testrepo' );

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
define( 'AUTH_KEY',         '+C`(,%lya:Jc +31#*ck`Eo5WaiSN9=O(G1gY:5(;qcs90x+Kg1(y!Gin7|pY6Sz' );
define( 'SECURE_AUTH_KEY',  '~t],[5p3@I/<(9v@i(b$!9,k=Pc4-*^>3F>#M4@*tp=RE_6d<PG`P6gw%bwA)erf' );
define( 'LOGGED_IN_KEY',    'M*/+p_h]nS+i(Pn4kND&;@i`Nwbts,hI+i_@(3FY %|eGN(y*j%[S+`*~q3J),n!' );
define( 'NONCE_KEY',        'u<.7vXT^@Lp|vw:Gy_dihfr^qm~%P]V1Eg[43}O._53M]L<`&F[m~*;N{(_uvn*5' );
define( 'AUTH_SALT',        'vnHA]X>:;vl_r#6LsynI/agYR/52;pkSjnh_h~zcMiu2VZwBy0us.)fzdHS&n;`0' );
define( 'SECURE_AUTH_SALT', '[3qI*yf!R/I7ZQ<b9a`6hG!|9Id`jBV!i2B&>wqK4fpXcK$=-@-K2t2tl?l&)SSa' );
define( 'LOGGED_IN_SALT',   '9Rs0kx=YF e>Hy4c$&JgcXwtX$oJ5<$C#jW);2YcnX47V9LzG{4tpJ;@J-4o1u>~' );
define( 'NONCE_SALT',       'pGrOnAa,M(}|Mt<T6e`<;Cu4o[#agF6zjz9>n,Z.(~f9Q9?^Vtx8[|Q91jZCGv.[' );

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
