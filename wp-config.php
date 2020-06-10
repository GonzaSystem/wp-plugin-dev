<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_learn' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '4>Ow=;L|F-OTC_8wQ9&Jv<zsOa=m#HDOU<3ItO`+cQqPmylL=NrI9*HM?Ew^P<5g' );
define( 'SECURE_AUTH_KEY',  ',m{g7xssALzNa/6KyJ1VjH@P}I!d+yv.:WLk?xAnK7S|1G(]E%qe[^)6al5.[Nr8' );
define( 'LOGGED_IN_KEY',    '^Z|`R_4n5P#/az=~k}z]T8-C3:Ogph)TJye7>BL@u0QX>W#XV8RngfU@[Q)Ekz/`' );
define( 'NONCE_KEY',        ';W{2rAePGgwBp/juGXZ;ut#]>!DHU*7G<P270.x.wj6l}a8$)~O@*RKRMTdKx(_)' );
define( 'AUTH_SALT',        'UfR{K;Jb#(hZkX4pl:T8Y4i<:oN|K+ayEU1_4i3IyKeTJpwCNLtl>wlv<E)]kAi1' );
define( 'SECURE_AUTH_SALT', 'J1nn>g9+I3`SYNS=vD$4[o)~&$>KG`=GpZ0:aBfXA59~re&2{oM??$:Q#?o).K>>' );
define( 'LOGGED_IN_SALT',   'snIl3uU5aOT21[wP!`*@>OHKipv<]sm@y-H:T,!dtD%7*e#t~-{+0zAnStEy3P[r' );
define( 'NONCE_SALT',       'cW1Noo</U]IIYd((h.$o)UZ<z/?(QVS{[l{LqBDrKvBvsd!M]j{9ldgw0^?UW%H%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
