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
define( 'DB_NAME', 'geocard' );

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
define( 'AUTH_KEY',         'Rs5W]XQUt2GhDmGj~F!6w__Hz`m5Vy#vfA9x+[s)HC0!2o)3In9IxF2N|Cy|<;9k' );
define( 'SECURE_AUTH_KEY',  '8rN+BO`]1N6Hh%15LPu-CnA `G;CizHL&YEioVHdq3NeTQ~ea_1DE(T~`~-Ajzpt' );
define( 'LOGGED_IN_KEY',    'wv#A`]iPfK7&TMLp)#]C}5vX/8vrhndD&Jc/r&+f$WOgIXx`0o(.a]h^PD3yOx.4' );
define( 'NONCE_KEY',        '+{cD*3&3BeDl/(ivapiCLbj/m ,85EKQ#si;_N?Gph:@],c$ys8tDvpaBN|*od+w' );
define( 'AUTH_SALT',        '_-ugKV{YxF##}mHlt$%],wSl6t3:4}^M!t;lPN8uL=r EQ<D 8r+IbWb>pkP1QcV' );
define( 'SECURE_AUTH_SALT', 'l^U|&!aOFx}nPpZN Mn$@2t?C]70`>v;ggv|et_5q#|[x.GA-Gu0XV6QG|K$80=X' );
define( 'LOGGED_IN_SALT',   'x{_O!>X1r9tWGeuz8Z8LcTmn~T{{.*Xf^&33{nEL6}C[*!q<9U;%)m8cr]P0(s0K' );
define( 'NONCE_SALT',       'OW s<4tVlG ^U+1b(4BC0+~]jPJv6H*V9XCdwhc|3rEyj:g3lN~k)r:010(RTQb#' );

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
