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
define( 'DB_NAME', 'plain_old_wordpress' );

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
define( 'AUTH_KEY',         '%!znuzS}o)9DwcTill;b0<voJ+RmlRt3878^2fA&ccdP(tmzS0,Jc}#;o >2r4_k' );
define( 'SECURE_AUTH_KEY',  'Gz<i6Yz)}K!pO@4#>1<nk@7UH;?aaX1F-r^Nq|K]RAE;APgfVJiY9({m9WuL5cdp' );
define( 'LOGGED_IN_KEY',    'xIF(~flj#rDaU8=X5S$^pioxP~mgmT2WFIz3X!>aYG~7o[5;#>$@J]Qz/ oG%2!k' );
define( 'NONCE_KEY',        'r4Lw<9E~uJcOYwxSC+G|oljPU4K8,Y,_]iDEvtgc9q>FZiM`sP6#NI@$u=mw<}Kh' );
define( 'AUTH_SALT',        '`Le~OBv@!P.tkveS0EW_tgYvbrnHe-%rpC:b:=/ZhC{w_Iq.kRm:5:+y~SCY2o|W' );
define( 'SECURE_AUTH_SALT', 'VcA_3IO6WAjB20C+^%.S|<R;#69V^D(BL&Doy}Gr|C,j]R6Q!X7ZSSuKwgTBt<3l' );
define( 'LOGGED_IN_SALT',   'Iu-lJp9gOWMg+emlr6l#RjJBKkqo?K8A2C=sH2C]P)WH%X/adD%R;Kt}L[&t|Sob' );
define( 'NONCE_SALT',       'X9!xhN<<hatWXSpP%wH4=onhTwxN[4{:cf[Oic&dC)9g~ok${!VVFKkcOo2k2@%/' );

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
