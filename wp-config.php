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
define( 'DB_NAME', 'opengate' );

define('FS_METHOD', 'direct');

/** MySQL database username */
define( 'DB_USER', 'summit' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Chetu@123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('ALLOW_UNFILTERED_UPLOADS', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'K6&;@1hF LdtFh9ehGf.[U#OeZWSQ@I+Fo`@RiY!g%d;}c06f`1w]5Vsd5{%,A<`' );
define( 'SECURE_AUTH_KEY',  'BUbP0H%gCz3YAnLO@O}=*4sEVG0H?=)jf-qK>jMJy7k+w7*w:V4SI{fEVXN45jPy' );
define( 'LOGGED_IN_KEY',    '[hK)K~~O:eH7-ZCq(ql!]UTv^8D;;-m^&>yIaH>LESbEF AZ_69($_;+] ;F?r/u' );
define( 'NONCE_KEY',        'mxm1jc#CHh)N{JPy[YTimFW=ZVUF@?gB%7Tefo~!`o.SKN?<>pHoUi_NA)twAj,~' );
define( 'AUTH_SALT',        'df}Zh%R]d+[T&>N2ZT>5>QPOMiu)bLv?x/C9&nW>9}sMexcO*!fTLZ5/T&]dc{IU' );
define( 'SECURE_AUTH_SALT', 'W[<kYNB0]=a^X77>*c5%@QQ0a$$*g;0o7ikz_N&Qa*nBrynaSzB`SX~vqTf9Ake)' );
define( 'LOGGED_IN_SALT',   '/kW@AprZ 4*>]~f8l*oSj2}PbD *bIunbp2+q6)XKwfB^IhfjX]uO2JLaNZ`g&2s' );
define( 'NONCE_SALT',       'e:#m2O9ePxRK4s]sL8><{KIP}~<w/{ E?|?u1l9V{G>[~54>:9qnZL]&a3  ^A>i' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_fint_';

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
define( 'WP_DEBUG', false);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
