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
define( 'DB_NAME', 'ccn-ngoc-chauv2' );

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
define( 'AUTH_KEY',         '5,V(,1=B^uUISGX_)4yC#^2%Fy(tE-IM+|a=#CLFm3?0bC.,aafyuwMO[ou]H%.Z' );
define( 'SECURE_AUTH_KEY',  '{Pg0YfNYouUKSeEQ9$HO>xPm5Eb3LE8er~|Khg;JqJt|5Ng=sq|#~87G$y(N=]F0' );
define( 'LOGGED_IN_KEY',    'Nsl:gD!</[R.Z+VsD DzU8^!$h21Ws<z/=^/50Kic3$fXjEMV8BE28?nN!?W+#fV' );
define( 'NONCE_KEY',        'Kz{Ul664}T`,,=)W9~z1q2|J3}$hYAb#w0@0DC}xd0M_v:}f*tOoJVpP:ri3}t?F' );
define( 'AUTH_SALT',        'whukVVVSG]v:y)#Ve8=ZOTgr7j9pn,$I*G$u?@$hT7rF doUp=;HLVZ=m:Z=#a0A' );
define( 'SECURE_AUTH_SALT', '&R`y;M. s0T-9xLS+hnQLA5=dYlvsH6u3[v53r^q~)LQOaH3<EX%UC$cRs;.nXy_' );
define( 'LOGGED_IN_SALT',   'A@WYzSSuk0+|Peo;LU&ZoR3!+:1$~LiZ*vi<XsHjXN{yl4S=nlv&8Rni?uRF@%M^' );
define( 'NONCE_SALT',       'Gh^7>-vwxNzBEXK[b03#/_zj*GJ}!ezzO,#A&eC=T^&(w15q{)/+-xxE(RXPH?)Z' );

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
