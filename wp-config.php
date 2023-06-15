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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ankita' );

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
define( 'AUTH_KEY',         'n +e#Y_LT{qac}|f4E^W=2%=?+_2K<-,XIr>Pf0pP@m;B1#),A=)2<tpV03}GK&{' );
define( 'SECURE_AUTH_KEY',  ';>09/IxkuOzYGHHMQ#LuEALUFY33KJ$,)m0SJZEu^%CFg-iXJx3ElL?wrLV_9~qh' );
define( 'LOGGED_IN_KEY',    '=IB),R,TrsoEi#gQWZAY{ZN4]UT./i^Ol;I1B1,$_|d:JeRB!sW_hNW|B@!vDO3J' );
define( 'NONCE_KEY',        '$r7:nn/m/z_YuvLIsu(I3w/?CO/8`ZGXLw/%#0rbnOncG-{yLZ<xZ<R3mvs DxzA' );
define( 'AUTH_SALT',        'l` IdsercdHM,Wn0MH~ryNw1=dq8K<hr*9X<NB5OQjdbs#G#<K?spMsL#L.XNBA*' );
define( 'SECURE_AUTH_SALT', 'KyAEZ!>H|<)-NpS g,+?wrs1nKc#G`m^5/q5[D@mv0mYL8R6;pMqfhtyoiTf Vte' );
define( 'LOGGED_IN_SALT',   'vTL8SReg7)>YUHwB:cjXer2hid6pax3PO)6K^O)Ff0(y;JUb}r;sat`O.Yn+=)Z#' );
define( 'NONCE_SALT',       'i+;<nP8d .x1>|4uXz`hj A5tRE-o]/=PfVFC<@l18 RSp3pKHpqJ^R>SC)2 F@s' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
