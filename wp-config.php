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
define( 'DB_NAME', 'wordpressdcadb' );

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
define( 'AUTH_KEY',         'v>KtSedyDawYJnTR]_hK4?Hs6cGD2Sw0,vkb@;#gr:6F)ub`c?/sA9#a8=/[X(bf' );
define( 'SECURE_AUTH_KEY',  'YSIe.eQ5h3Z)[sHrLybq.[)E,k&qg>K$5J-$Lk-k$5-Ie]B{Ms4NZ1sv45e8$bqZ' );
define( 'LOGGED_IN_KEY',    'b~a51^aW{Y)0]^3~R7*y~(znhE@ uNnT2@lDk:%zXa^uPxbeIMiYWs?|?oPEDs D' );
define( 'NONCE_KEY',        '{/t`#]AP$pbZ#>xfpAAlU=!p2ULy&%l$_zy1_H@=ioxaNE=[q_X|P`kr;2:iQIn9' );
define( 'AUTH_SALT',        'Mb5N[>z2Mn3ez-=3MV6iw>T|uh<v.4,?5w0)@oe_?8[ aM3Ku2xYLLNw_PM8i+`D' );
define( 'SECURE_AUTH_SALT', '@f0KB*1xJ$S|y.,pkCVwRoiHDe37FkRD~4va?{DbUmw-jFUOJTK([^+T/VP$}Qjl' );
define( 'LOGGED_IN_SALT',   '14c4H!qmjiM@K_xGK3C9!dxK2~8g.a{c/8<Jo*Nm[Cv|#Gca%-] @34-e*?5Ws,(' );
define( 'NONCE_SALT',       'V&#$O$uc=M9|,<AIuc <MqmUhVTFGUrY,vS_F1)v@)]nsj2c~844Qp[v(-xA!~I3' );

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


