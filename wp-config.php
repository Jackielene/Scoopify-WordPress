<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '|Lo9+ujcU/#! `T~v(+bsC0s~g2r>$`HYNehf ?n%oO<-/_S&H VfvB2z*$w|?G7' );
define( 'SECURE_AUTH_KEY',  '_i_$f.a:K0&%W35U0ff)<!9*Mc,)jAGazh6f!,P6<qbi^,]v.,nF}EO*9UoCb^F{' );
define( 'LOGGED_IN_KEY',    'dPdIq>$d?ow`NRiS;}o4ZbL(5eMg1{JD7Lauw|y|hRw(*zB&zXOou_8.j*|#$`Fh' );
define( 'NONCE_KEY',        '`Zi-iYC2F_OY%Vo2Q^?lO=r`tp-Yt}chV%izd:5*@,ruH?b.$QX/v7.T/|(dK=qW' );
define( 'AUTH_SALT',        'I5J&>*4n{h4*{b*j=7w(!^l@AE.O{s:0*Z]N7]2eu-}|_P`xXG?cL r3nMv+QI8V' );
define( 'SECURE_AUTH_SALT', ';4u1,qHKNJW?c?(ne{cVZiO8KeCJ=.G!fGL0?s&pJ#r%M8#R|2:~> ,A&hC09s6s' );
define( 'LOGGED_IN_SALT',   'T1,E.rQ^wFnMV00G|RBkdBqfh=uJ~J3shGJkex/-*VP:AFN+]j4?4T?lTsA);<#w' );
define( 'NONCE_SALT',       'fKQ87;uY1JI|RMMY)C1$nL;p0}CjA}6#=Z]R2N:.sH2:kG;mpoY=|uo*GBc#zi_(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_MEMORY_LIMIT', '256M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );
set_time_limit(300);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';