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
define( 'DB_NAME', 'tonotedb' );

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
define( 'AUTH_KEY',         '([COUJ$s{dc[QR9?u/Hz>;GT<VPuFSxAiL{c^q[?B:1PX`>Hm-Ny~Dj`-VneLDQR' );
define( 'SECURE_AUTH_KEY',  ';$63@V*W=+C2vM%j5o~30h9KK{glW^~lD 8Gk)jJ:X%OQ&#NfclPZ$;_fUvi*K~]' );
define( 'LOGGED_IN_KEY',    'X&y&G!nQ2m-m<Hh<aOMVg%c@2ybRd;NWBlCVc@8@/+;emepCMD%-D*VtlB@~YvLw' );
define( 'NONCE_KEY',        'Hg8kj9(R$fx XIJ{IUm<`T]+V ~W;Fl;iq:1)i9*v5NYzH=|7dUvD6k2k<bxtrS<' );
define( 'AUTH_SALT',        'KHoWm5*od0}TZ2RCx+R:6 vfn2|fXD==Vdr n4Ey%UTPtLVMJdi>E}([dWzp,#Ae' );
define( 'SECURE_AUTH_SALT', ')@:~/M<v^.?CCtB(i<_L_)p|R@IDZ^XY`9I7?&JopMTDI/0rKs!rC%~4t:39ISO:' );
define( 'LOGGED_IN_SALT',   'H}Qf|M?L&zz>E0PJv3mKpxIe4^MptdPi84cmsG?SF-Jj|^@B9T&HH)RFm@BA8`:i' );
define( 'NONCE_SALT',       'jIeOsVP?=?R,XePf{`(q@7T0$OkjGh&8~~^0<I_KsfL_#b4gcRfO0H6TQ?O^4Kw2' );

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
