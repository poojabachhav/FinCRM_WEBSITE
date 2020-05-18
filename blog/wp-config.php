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
define( 'DB_NAME', 'db_fincrm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'F;|kL( 2[F/mN__L,8Q2I :Q_$S|Or~en62=cOo+x[Rv865kQbKKREqnp9m;cC2X' );
define( 'SECURE_AUTH_KEY',  'gvBV%+^G;u`GIS:Oc2-Tqj$5:_$d;6F)v;iX!1vc3moDG{!##Nr/uZ5j)/qHe>RW' );
define( 'LOGGED_IN_KEY',    'P@1erXmoM)i`<;S&z@j8(pA!~B,VqPOOuO[?T5N^xib#]bmGZrTGI?,J&o,JI>n(' );
define( 'NONCE_KEY',        '[Fg{%:(!x?,?U lk7(!iA)J~L=NX^_#TDSVEV9sye)dY2LVj^UlK#ec@c_Sw>1r,' );
define( 'AUTH_SALT',        'E1Wi7WeIHtyHBBy<%};QuD;raazxA?0n>, 0P)D?SF0x9u2hh!BS19tyt`>d!0f,' );
define( 'SECURE_AUTH_SALT', '9TziE=}dAZZ-^VtUL_`y7#t!2dN3mV!)QZ& )fp+QX1!Fwrr>Wi?0*UGp723nI@6' );
define( 'LOGGED_IN_SALT',   ']htx#ZugkbyUQCGP:sm5^dia R`[dt7;Dr9vP0ifh3ALlLj/J|#FB52ujX46TcF2' );
define( 'NONCE_SALT',       'oY2h6GFu?U:AB3OAZ@jp!hW+Gpxi*HFFTWFcVUB~xU:Sp>aeZQdlA#Rxd3)exGkt' );

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
