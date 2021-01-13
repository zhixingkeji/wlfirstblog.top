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
define( 'DB_NAME', 'blogdb' );

/** MySQL database username */
define( 'DB_USER', 'blogdb' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wangle2018' );

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
define( 'AUTH_KEY',         '+8T{=XtdRw{jM_9:c}/)>e6_(puAH#y#_g6KAjpF)=8tM0T[F)nj3(+c<9X-@i8^' );
define( 'SECURE_AUTH_KEY',  'R`!MbRis7(OAGMPv$lef{IK9?e~I2B(+(06{J~=P^-.:TDY2#LPC%0kn*FeW;HkZ' );
define( 'LOGGED_IN_KEY',    'Bh=:6n>~8`C&sk-RcBg8|OqBh;{,OUS*c<at]8Y8pLFV:Jw-Zh|(veq98oZ@b=qA' );
define( 'NONCE_KEY',        'c?ZMQB7Foco?5T]#9<kpmx:{v2MuRf(|ZF7TJ]yfbc8WcM<sHH&HS`[n_hFHzt:a' );
define( 'AUTH_SALT',        ' #_zrKw)&|*j!qnGY_c3SjQh$(Ww.NZw+Nj,mh?rs[@8VrE&XM!(>w@jPe}gigkR' );
define( 'SECURE_AUTH_SALT', 'IVPwO@:F=E3Mf@)gI![?+/iuVuQN[6 p%7[n_S1RPr}C#F3~;b=^OM?W]{Vbl7AK' );
define( 'LOGGED_IN_SALT',   'APtDLf86Y @oM%XA72^+tWG(6vOJhK5!TXBNi2>CDR>lm;[OF|nB^C(;yN]CR4 1' );
define( 'NONCE_SALT',       '34R3wtt,7(*#QkY!5}[v|ZIuA2*wx9;#(YV[/QF#p9-CPP4K ED7S:#FWwf;:e0J' );

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
