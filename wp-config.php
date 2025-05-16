<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'O}A|x-::)#FOblE]no!w`-GktnK3DMg=%]~p`&[G]5W%=MLQx-bTk%1hbQ)xIiwD' );
define( 'SECURE_AUTH_KEY',  'ts_sC0_)D?i;GLF{FQGy]M1Jb)6#Y:@s!{g{u_y7&qQYAH[h|f$te|d&>QpuZRwd' );
define( 'LOGGED_IN_KEY',    'tS$bomr&=V}#U9,e$e1;!4rV`pck{dtWXYj.*$*vJfLk8w7OY_8.st]v_4_Hz2P ' );
define( 'NONCE_KEY',        '>^dtWuMP:I]x@anM3r.7w>>m[j@LSY?_BeDdS2)x]HFV#ef%D:*6Zj3?qHu[m:cR' );
define( 'AUTH_SALT',        '+wY~Hrt=:&9e0/73rVj_*M?LP^+vIZkG@{@UassQRMqIeK-ObH_hIa2ePS`++&Ll' );
define( 'SECURE_AUTH_SALT', '6Zy5.Bq+j5-*KXZU faZD(+{V<sdeR-NlwM?rlY%W,l1_A78/;x^ }25nsjm`Y:G' );
define( 'LOGGED_IN_SALT',   'V6|,Dge][65A*~vE09Ejk|=^>t%20lrfU-97hG^rVAyV->)y?n|N]@|kO,qV_C#/' );
define( 'NONCE_SALT',       '.{v)[7b{sbxk!C)ZRRy*5Ga]<GU7n8W>NlU:`aB:m*-Y*T`c*vBiKl3pO.#_+z&T' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dl_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
