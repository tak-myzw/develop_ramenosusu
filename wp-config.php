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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          's lKNvc/,ZvFQ0xww_?AV!>yGn<ZUiBM`p-J*RBvY8)^G]sg?|O<558C98.sLs4 ' );
define( 'SECURE_AUTH_KEY',   'Rm?3)tl!km{S?]O&zfNNo9(6!JS>;VtIz`ai`ZY|h,:a3y9;a;`g^RN?&J&x,O,I' );
define( 'LOGGED_IN_KEY',     'RNK(pUJu!Z/#58Dlkx:7(]>Waey TvDuq*dR64BEX7r;*6Bu4$V*AqoqsJ9D{|c4' );
define( 'NONCE_KEY',         'g1)1~Kz [>&Vw~42 -*8:[.@l>D1j,ZQ5-0YJR!+ 21_}>VPiLVbBh`q8Y;Xi=?]' );
define( 'AUTH_SALT',         ':}9RRt03QeM1[m%)Z#~8_pDXg9T8B6m=~,iD[4/X.M4B82SjHTs%_CZ*$_?%m>DW' );
define( 'SECURE_AUTH_SALT',  'qQfw&afo-Q_vN4~)O9w<!=2/z%xt./mPm}22G2!Dg[saM~[GV|_U.vDz G8>9XwO' );
define( 'LOGGED_IN_SALT',    'zt~HASh+KN(WggaYPfpk>,sGGn.VMOq`D<n%<urbiF[7%o&g*r|3W<C/^u0JsnGf' );
define( 'NONCE_SALT',        'svh{-x~#]7Q6x.h2q8amnSCk5H_(cY:A}+z6mpQmF}+q85$Fc]N@+xvz8/[cGy-i' );
define( 'WP_CACHE_KEY_SALT', '_VY;%(OVC=C?F*(Z2 8_d/.My(CA4M]~y^@^q.g70@SpY(Jspa5)}`rqR=UL]Ir-' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
