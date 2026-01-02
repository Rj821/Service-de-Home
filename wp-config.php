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
define( 'DB_NAME', 'homeservice' );

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
define( 'AUTH_KEY',         '?L>N2PadsfZa-^f}:Mo?%{J&6Z62-[.Bj_K:%Z/RGTq<<P&_1Y#/2H95e3Bo[].6' );
define( 'SECURE_AUTH_KEY',  '~*bL*r$Y!,j?ATHNZ&g%%gpn},_6z,`,]PXj#I76kg}oaSO8t!8B+?YOS4O-)ray' );
define( 'LOGGED_IN_KEY',    'BB!~*pDsoKbQ=$2[_[ECfdmA,eoE~Y$,vxoOAk1B|;Kn(7T9vH%6(J}O&0:SKn&-' );
define( 'NONCE_KEY',        'U;y^BOl(B8n?^h}R6lTp[Zb}bDP%&YW-j/,&ck7B4z)?qTt2f^8YA&+d$18|8Bh8' );
define( 'AUTH_SALT',        'm2Z&KQdI{_%3>?Ug%~o{?0_GgLQk>|XNlkf!.8H2gj~EBnGB$mL6TM(3wdecXN,a' );
define( 'SECURE_AUTH_SALT', 'ce]f{h*X.q9QkjyLZ_D1!,Bpw$kcNl%b>d!AeLvZ:?`)Rm]o}]JOqz)g=k>,}mU[' );
define( 'LOGGED_IN_SALT',   'RU;uN(k@Sf=`A9uvxr7:j%R.`PJZe:T4ei.e6%Mx~]CfS2H/|_D6OG)4dbi6ZPUJ' );
define( 'NONCE_SALT',       ' tdqJ>t2yimrLUiDQN1H wJ%y(>bh(LuP:D=>2G=cv(hJGU[z:7<^J=reovx)./e' );

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
