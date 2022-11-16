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
define( 'DB_NAME', 'gadoupas' );

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
define( 'AUTH_KEY',         'f2$#S>;G*W>p,2ij^N!3n^l*:s(JzLEsUD>|qnLrHi)p7C`+I,!i#y3@vO-Hq9_;' );
define( 'SECURE_AUTH_KEY',  ' KaA5$$U.()`gG&-]|<^S/[/dvrB7/DW&ldkEBRfe]$(lUM AKfQT:*2k<gTCjGd' );
define( 'LOGGED_IN_KEY',    'W,DOM@pA1.?<8jgHz-Ub2_Q cbTxX2l0Yeg7^Eq15ImH*WTLs*p|du@%`U8vjNgF' );
define( 'NONCE_KEY',        'HVT@NF:uZCtwt*2-hbbDBlb`gYOxq}*PU&JP[p)o} 6,2$i10ZwBgsu}d41+6npG' );
define( 'AUTH_SALT',        ';&eOF^!43|Y-XmQsyjc&B[3em{T$+Q(9(BBj ZLMgp8#G+Nu6,}yLr0|N12*1wyN' );
define( 'SECURE_AUTH_SALT', '}OL h[:|?*C{81Ma6TBKB+f{D_%<$8}e<ixaTiI@T?O7#z-r#w87ja C_g7]wbE;' );
define( 'LOGGED_IN_SALT',   '8=2o7DCu]kRh 9ueSCm!&GX/4{#-&x]Z:~}lR+MU/0;.3}<s]R.fTAe]l;wA%55}' );
define( 'NONCE_SALT',       '*$CJKAcg5[JJ/6tj&Y&};C.qB?we )W.,L:i(Nt?&q|7>,E`!53 VSpOx,z[,k2m' );

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
