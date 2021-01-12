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
define( 'DB_NAME', 'blog' );

/** MySQL database username */
define( 'DB_USER', 'blog' );

/** MySQL database password */
define( 'DB_PASSWORD', '123123' );

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
define( 'AUTH_KEY',         'b}NliU/%0K(vjrs)j;Dput/TaBks7dS7u-j-,?@N<2hxfxN*$JDm`SI:oa7XJDw ' );
define( 'SECURE_AUTH_KEY',  'T~a(H@i~zx>H@`pC/[#+#JKA.hL)~5Sq5]YMD|G^5jcbQoTf[!}HX.#4N_r7l=?i' );
define( 'LOGGED_IN_KEY',    '^ZWz&jEST_ql|h$q-*BjT;vn/([r]Ai5VQi9wr34oj(E-:G!1hpypaI(}L ri F;' );
define( 'NONCE_KEY',        '}r;P));/|f;uW(8F(lP&{ m#f+{*I5XhfW1^&tlvq(/G]B71tL~.^j%H1I!&WPgC' );
define( 'AUTH_SALT',        'O@P.*x*O5X+w))9|Fq4LN7RamfO{|)TCty1U~zoW^eimumWqJZ={phCnw+u}Qb<,' );
define( 'SECURE_AUTH_SALT', 'sN7|=Tn}:s]D:kW$@ZRO>hh1k%RK,CF1(9qO6Bx:$CwY/;CtHDXI.`nGxve^3X7_' );
define( 'LOGGED_IN_SALT',   'f<8~/=@>0h}L>M]6Tb#J9:u&<+e9UeFcQZ|Rw^fdsMC/|)1}Q(;70(Xz&7Uim1)m' );
define( 'NONCE_SALT',       'd?I>Ohju?9U(qk61m!!^9~z|x)2O0w%>/_k%a6_V~o.=O%fL}`;rKH*;rwFr+e;O' );

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
