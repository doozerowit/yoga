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
define( 'DB_NAME', 'yoga' );

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
define( 'AUTH_KEY',         'I; <X2d&#2~{$ifoTV 8{g10%+1Gx@Jy:8@%eKG_$GYacm1br4.}:KLAjdS/NMbj' );
define( 'SECURE_AUTH_KEY',  '=y;C(l;sR99Lm@I %`kCZ(Y@RbDX5C8OMcINl)9FzQrAD_[pcYxwG/cuA*$eu>?|' );
define( 'LOGGED_IN_KEY',    'Z6Zx$<P[Uzz>zN*^l&E.n7$mQGbH~Yw>!VH4nBIn>Ges7-gMe@;r)Hc]Y3Q>J Yc' );
define( 'NONCE_KEY',        'a7Mz!.-9;+QRm~)[?p/~0-C1FeqW|zp+LikXsrE(49d1tpBdWi]5&Dm[!t.+=Dc8' );
define( 'AUTH_SALT',        'M?D6lx#x#1[8cL:mP|J7I69Z0([<*bEeYREQ6sjo%wI%lD{oB&F:;r80H{t @dY(' );
define( 'SECURE_AUTH_SALT', '<cv+*8>aw)DX5]tJ46Ke&M933u$afP;`EJ1K)/BYu8xq8mv=+K1B0r5bs0bpr`,u' );
define( 'LOGGED_IN_SALT',   '4fS_:lOh_?UE;q6sCDzhGh,qy[`oGD~C?!rTTeN}i`l (XePzJtZ|{cS!^XC4cQB' );
define( 'NONCE_SALT',       'oi`?O(OqPghz)AvwsYX<*`bMgxvo@|6<`i.1z$D%M}L!NvYd<UES7WTW1|-}+xJw' );

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
