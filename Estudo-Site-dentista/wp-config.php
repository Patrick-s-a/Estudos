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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'adm123' );

/** Database password */
define( 'DB_PASSWORD', 'adm123' );

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
define( 'AUTH_KEY',         'hp]a[>6Emz5#]?[SoE!io0_VxLX5AB2e|S<IsZ36%iRsTPhRRJ:2M}(P}RQF|O-B' );
define( 'SECURE_AUTH_KEY',  's)a]k$KKV!EN 6VBQk6_v~IQ~u]y(+<KO&)b<?ETiyS`0H#U=1I]!QR>%AqPb)?6' );
define( 'LOGGED_IN_KEY',    ':w,O;9a|^34MuX7Ih3E0+ILRHZP3]5~4=Ai,XCQJsJYF<q?#HH8~RenzYD3u>VJf' );
define( 'NONCE_KEY',        'UZA`eZ-e+8,J5&dBqhX2>25X1Ffh(G,S%#_B)(P*MT25|vSQNtZY_z=-V5f~^yG[' );
define( 'AUTH_SALT',        't8FoXg/!, |oF4o*VH/@]{-:>Q.a_.-zh>.M#n+P+y4wtoy+}MIJUup&ePkI,QO|' );
define( 'SECURE_AUTH_SALT', ']i}.E-`NqVOGx@NzvWifng_x7pLT9YsN*.u=X:?4]_:!TMNa7,#,@qwDCYGE(a2H' );
define( 'LOGGED_IN_SALT',   '6.l)C} r51RnYwFUPua-Oy=<)DD[|fr%qTlrZby6:qe@=Y)[=|p0=/JLyt$s9bod' );
define( 'NONCE_SALT',       'sZ05=J:$LG(lx5]zkBR#-wK(dtqDj4ulHeV1o;ul=1DF^*)18syUc z31)H.aeBg' );

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
