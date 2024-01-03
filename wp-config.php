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
define( 'DB_NAME', 'selling' );

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
define( 'AUTH_KEY',         'NL[9$Af50CoPM*0,k#$@qk0`JJ(WJmw gyr}O|vS|%g}KX;LZ4+KIk$`0=c&pglB' );
define( 'SECURE_AUTH_KEY',  'K6Ibd6?s4(lHaP1!]3EumAGn8lBZaFc/,CX6ci{WL?;NZr*sQjnu2Pw=r(a)!HT`' );
define( 'LOGGED_IN_KEY',    '+`Rw w_kYQ-a3}x]7m##jrS0k86Lo_)TpQ=!@j(CDj~m vKO~+zy8F^v2o@dgoo-' );
define( 'NONCE_KEY',        '&-LN6nQpWJ1+_d_h^Htzxp>XNk X6.}&9`s5{T9G?gFeq[@`Wuj/G#j*D{>nE{<C' );
define( 'AUTH_SALT',        '[i_<TQvEqM.Q^s.m3|hNjq>du}3@N?qy3XS8s1qHnS+-Zh=diP3e$hEvW/0^sQYo' );
define( 'SECURE_AUTH_SALT', 'CA{1z+/UF@3!hwJ!`Z9@m,3>{x9M>[a>DS$_~qI(=yF1vxu}Uh[uI]~sdFSrK4sC' );
define( 'LOGGED_IN_SALT',   'w[`f.E2$~)w-QU%nY=EH+O?NXgOp<Y0<6^&&#%RT5-WwlCq~VJOa5^m]Ou!)*4Fe' );
define( 'NONCE_SALT',       '{swS>28pU7/U!%V|XD@WKeUxYHmsoIey~A~? !HCn4Hn-;s[j}7Kz&pk<=[@cQ2D' );

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
