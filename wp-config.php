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
define( 'DB_NAME', 'cac' );

/** MySQL database username */
define( 'DB_USER', 'cac' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Leppro90' );

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
define( 'AUTH_KEY',         '|0WRedv <YE<vaFW2<T{c&?ce%hhTgkTQo=wcYxE7? 2C?||}7+EuH(%j[d!]C}9' );
define( 'SECURE_AUTH_KEY',  '2%pd!=,,i-wo,r]CTS=UVjT}Y[Qe{Z1B:AVT]k!jH)8{NQ{/>QKgL>UwmMMU?j,Z' );
define( 'LOGGED_IN_KEY',    '^7nX2j/q=W:z3{NU7om>a|F#ocpP)Sg5Us5@~r?3T8rJvak%L0=C,b&w_8^e~mdL' );
define( 'NONCE_KEY',        '>,P-wj4LHFY^hx`0QaiT4o7tUcA8^DD]Fxp#0_9=T})UJZ]Jn0:vsw!,k19@e;>=' );
define( 'AUTH_SALT',        '2)>|]+LLx{,9R&4c#a&UYxvID0[ra@7;$D!1QvMLfAZ>Hw,&p[([3IpjA^*{m8EW' );
define( 'SECURE_AUTH_SALT', '&b<e8AG(4L81f$<ex9j_{=H?po`97U0vN_;CIU3RtF+xex(4qlW@gM!V9r-Nj!L~' );
define( 'LOGGED_IN_SALT',   'vJ&AkVnhJ[>3Bq?Q:;Umtz!tLb&a(a7pvy>JENd M<~Vcv):B5lSPxgoKf]S3==5' );
define( 'NONCE_SALT',       'R9jS`i+ctF|!=vPxDDm2p-&~95yxEXMFA$d7.ORa7rdB1:d>fzpwP~_@Rl%Sb6y.' );

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
