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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'qVGCaT,mpjRdt]P|YmMa8gAKjz.2gFX{ro,/}IAW}>;Se~Dm;h!,hY{OPPdH[fL#' );
define( 'SECURE_AUTH_KEY',   's S*;,xP}_a/jW>DrH_ZO%a2[D@xcgL&QWFuO@&4[(8e-|]w# AaOPR0*x7i769e' );
define( 'LOGGED_IN_KEY',     '$XBq{<!@~o[hq-.g>:r/RX_auR)G]sQM}|rqry[O5r1s=:O~Tv;#Tag=-QD7X4fn' );
define( 'NONCE_KEY',         'EcOUtG4)iDW-jVpL#<p7`v&&eHX0pnUwBVfB +F]f&AzJw~E,{CX3$[GNvP&N42L' );
define( 'AUTH_SALT',         'Qyv@*mduxzQ_Yc0hEtRUpcTzBhha4sic=UIV#<`u-vSUK+Pdw=5ZVD$E-w{R&o9h' );
define( 'SECURE_AUTH_SALT',  'D|l.Z`CH)3sdqU1(#o9*4}S9/NX~~[2M;`ZS/5Em@zCM%Yk`Rd@~9KP2Dg([,X+[' );
define( 'LOGGED_IN_SALT',    'g72ca:a*rR;|.U<<FW!!#nB.Yh)CBtrJ`byg!kGL9)%/cjFK!fsN|AwvpZB>YvY]' );
define( 'NONCE_SALT',        'Qm Qr?q|XTI5?$5kFAEX@xWT^kX-,A~_dHTX<&5*fIO0^1qT:F47%<`K{|ojuRf/' );
define( 'WP_CACHE_KEY_SALT', 'Skd.0$o^pME|{|L%LNV)YmT#WMwXf0!4G;h,>fd@,v0+/N@{qa$h#Zm=Ihg}+ KZ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
