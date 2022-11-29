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
define( 'DB_NAME', 'test_portofolio' );

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
define( 'AUTH_KEY',         'X)TU#/RP liFi7Gl?e]H&]ybW^x8U]{}zWICZ,j$+!hMz6f;zk/4-r%s{cJ}KrL8' );
define( 'SECURE_AUTH_KEY',  '8Vv!);2r+JI=bBUN~r tv/T9JnYO*M<4c& SVv~luq%lk}9!66xOwrGG-8tzQ6cw' );
define( 'LOGGED_IN_KEY',    '$[;)-;n>V<4JEQ__e8zGU2f0V/TJ2NV<VS_r!LKVq;1Hs$!w2dGG:@E[zYVRiVZo' );
define( 'NONCE_KEY',        '~h`86CbB}iRHaK*l?H<bnvxqDF=;R`/%Tv~ILBxsV)g`jZY7}Q-?qW*$1I>JL0PE' );
define( 'AUTH_SALT',        '!CI_we/.8rCWkSw?P48])-ZD-NMbJdr_=B}9{o^ueH}]]1AwTJ3kvDHq68Qg &}!' );
define( 'SECURE_AUTH_SALT', 'y&|8/Zj<+]puvyNb0c;.^+U;-TtqLUlELo#Ma[z;Q {9f}_VbHd,y KVgmbU,_O$' );
define( 'LOGGED_IN_SALT',   'r<bYS1aapB0#dS!xxCZC_p_-8N(H.~BqAr3U>b$S3yrc<v3t3{3#3a-]&bq_Q1<4' );
define( 'NONCE_SALT',       ',F{$l4u%+U0>2G$0ievKr%d?[A.g%`u3R+?2Op~!<FJ|KOJWi-|:odOm}}ziKP8Q' );

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
