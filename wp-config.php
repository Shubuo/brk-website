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
define( 'DB_NAME', 'brk' );

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
define( 'AUTH_KEY',         ',4r,T&14ad3q>3Z^$W4= j?2#o@ao9Pi5Iq(_x3mgQRUHRNsjxR 5x7o=9eN+Cpa' );
define( 'SECURE_AUTH_KEY',  '{c5jf%>|pc<>S]LO%_5y%j*^(n;wy8ZW7y/[R,J^s5s]kM,I!SX,zJ[k_<admfa%' );
define( 'LOGGED_IN_KEY',    ' Gk&A2U{|JU-Mxsu!^D5S=Bip9!<zf=mL{nO]Ku7o#olb-E+_!gLC1+qU?kB7SPy' );
define( 'NONCE_KEY',        'tHy{`QjZ|H@k=KFG*}uZCCQpHAV@jB6rANUb@Rt:H4c;q: z}7?qS@r--fVP`xq@' );
define( 'AUTH_SALT',        '~YbS7H.d}%0zKAo6Jk2U;,pOS:^Vo&~YCR|pNwUi;/RCnMR.g*8K^(%}(upoc80U' );
define( 'SECURE_AUTH_SALT', 'GMdHb9aB[$*O{aE?I A@Nn WOCVY6AVes~-f4|.C)%~v-w7Q T( 9KnBG[%?U?)y' );
define( 'LOGGED_IN_SALT',   'm7Tf210r@G#KFYe$4%faT6Aaif74Gx3#IR.uM_gTHzi5|~AH%v:(h&h#Kb3f=2qd' );
define( 'NONCE_SALT',       'ZG<$vWFGeF BC^:y)yXvlEg}P<@Me&`WifN>a,oo8QFjaGC*kTF)^43aeHc2DW<1' );

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
