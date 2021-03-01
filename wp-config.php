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
define( 'DB_NAME', 'craftzz' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>lsB/mkwCI$ VP)7;I@/.Hn]~Z&B,u#Hu1Qy$%0@;X9)JG$@`$OUI6dNO#tZpTmu' );
define( 'SECURE_AUTH_KEY',  'VMGisw*T1AGn{Q=CXj&5,>xP~,u^{7QCzk:mNi=~/Y_?o^?7D3;./=13eWj%_49N' );
define( 'LOGGED_IN_KEY',    'Ni0QrWs@ntqBiBP6:(qOEbmjc}/x7;&7|(6eIw@m`E`|>ZzzfZeK5k{Km(+EOF{q' );
define( 'NONCE_KEY',        '>)0[86`=;9[t=$UCKAkA/!(a3c==2:KL0wf&upLcY#D^s)`GrmV-~n,3d=?U%aW3' );
define( 'AUTH_SALT',        '=yjD+kRfL<b<T}f&.GaGjwN* [4CPP^hCDruJK6iR&o2+vj{i6*o7xZB(T;->b8Z' );
define( 'SECURE_AUTH_SALT', ']>U_`|rr$5c|NB6Q@8H%PJW>=M=@~V>HW1T*D(Vj<gS&*&iX $*gM>Z{E|g} !^z' );
define( 'LOGGED_IN_SALT',   '!5eu9R;hB]]*tJQo&C3UNEt)FMg(2:EXYME,em,o2ok+UFERH%6]%6$29<w9tAhW' );
define( 'NONCE_SALT',       'KZq4}!fX+i&H$1.OtX5LLH2Q5(.xYN5`GXGG.~%S?Aex#?,BB@.P8l}n<LqT};0K' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
