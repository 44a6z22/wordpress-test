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
define( 'DB_NAME', 'sss' );

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
define( 'AUTH_KEY',         't9i]*dR)JxpB:S{oJ|tn[_P+Ha0)yI;2=B18|&MTnxgLNXgW&lz%$us>3v7(5Bhk' );
define( 'SECURE_AUTH_KEY',  'GXf(z5MT6/h<#rHIdFchlF({pp<zwqz(D|PD%b*TL7|7@:~p%6X)c}o9SE_W|X,,' );
define( 'LOGGED_IN_KEY',    'H /[B!PcgD6Pors:3v0;-Bq~Hd!^xo^jH6G%Mq-Ty&[T.<3NiuSC|@BSa21cUJjz' );
define( 'NONCE_KEY',        'WTgF~%:n;vNcF1(/B?d6=Sd-R~)2KT#$zJPv>yU&FN[+@wvwr3m{o#39|?U|fp@`' );
define( 'AUTH_SALT',        'l,<>|Of,6n3PQ``@6h^uH={^qq3l!HI.u*3SH]J54ZWfRWg#qb<^kS$Tv_Gyb:7:' );
define( 'SECURE_AUTH_SALT', '~Z)`%gVeKiX5/z&_AF[l{XCV6B+;GA]?CZX$>%uRm-8QT`2siv$8vjh>*b!K8sLb' );
define( 'LOGGED_IN_SALT',   'yAB?wW#c#JIL0q:SfuHyla1s{ETz,@09a8MYel` #wgJ4a1=){tt%9DCH:6_lHW|' );
define( 'NONCE_SALT',       '>ek_/,j{|ikoSiZ4uJ=GJeA6^]Z8n<R_p*]DV0<hP9R]!!/e7Rdhh=7QJ?t8i>Yu' );

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
