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
define( 'AUTH_KEY',          'g#3$}M;x5:*Ut 7<&S8$]bweZ;5r6zLEKwtT[;1TrBQqt^`8AC < 7%iI6L7 _Jn' );
define( 'SECURE_AUTH_KEY',   ';HsP@y}#U^vH=>Q:}x@2hok/(bxvs9)fkv5KwISigz&U`hbU2iu3$2ib6DX<)m69' );
define( 'LOGGED_IN_KEY',     '_:~Mp~WR,XV!+ m5~q4cFo{G$!I:Q(/xz@_acG?;c&Hta9v>7U:U6[@vV?_}0s<i' );
define( 'NONCE_KEY',         'mxq%de[G[aB6SP~>|h]5WYPBKi_TlZ<E[Ub.}d+U6wn{yW4><Ql(eRDrdsgz3MN7' );
define( 'AUTH_SALT',         'w~[Rqfh++J:IE]EJ`5#gi~f &EG=Ali1tAT~yoU:rPpyWr&]x6A@G9!4FPf#!O_(' );
define( 'SECURE_AUTH_SALT',  'd*IM38lt.qMS-J5h?nw;+),0wot`A9X<~]l~qeFF?r`O}N6~,L1sqe~syHjbN7/+' );
define( 'LOGGED_IN_SALT',    'rz<4d`f1lk-b#!uCKRl}>=/_(n!CW+fwND5WGB`D]jWdl@ZO>V!96D QMbmdG-7E' );
define( 'NONCE_SALT',        'x!vV49CQ5bABV!/}O._WlIw=%yqVvzEa}#b>E8S&1?UlU5Y)K#{m1&p@Z&`5CYO7' );
define( 'WP_CACHE_KEY_SALT', '~h>:?[8}GuU0k6RTN!hg_/x[}&_pGiR2{ZeYmcJlKy3<}%nv[SW%Qd`0QUFo3e|)' );


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
