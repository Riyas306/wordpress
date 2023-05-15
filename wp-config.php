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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp4' );

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
define( 'AUTH_KEY',         '13aA;<Q`.qL)6@!iB.T)]GM~Y,xZFzO6h3:?iTo5wZT|[H ?.|#,U|JAV(r+4sJm' );
define( 'SECURE_AUTH_KEY',  'rM.rA)S8nh_T:9FKYR&R V:8PXF+Z!petl,10,3vFq7a]JR0rBsZe;1%yXQn{fxD' );
define( 'LOGGED_IN_KEY',    '2q&yE0ecmoUYW.4X45coDV`R;1_}|GIudMZz&I/pZtZo#?R^^_sx[SvxnEDxbBD1' );
define( 'NONCE_KEY',        's9{+8}YoR},<Y#S&]Q6b`C)quaXf7a22PE,mA47}/1=AVM[d|5$>]bbBB5nys^r`' );
define( 'AUTH_SALT',        'DIMu#j,mCuk>77ZVH~:)4d;nZfaa6r}To!C3tP8HfqyG8=Rur>*H[(4)1{V{n^1V' );
define( 'SECURE_AUTH_SALT', 'W##jty%No~+;G+x.}l`6!*IXMPEI)`BA}dZQ)tQr#?fu(V8>0+-[NjN`mRd(`:`r' );
define( 'LOGGED_IN_SALT',   'K{t]W{;N>wk)gH*Qn~N[4GJVbJ[Z*7.7%)2^V+DX[JyA =D|2!O!xs+Bu70@];z_' );
define( 'NONCE_SALT',       '))BNQ(_;rjD(U l=UfK, lyf4!jVw`D[}ZhyI/LLnrMI)u MzGP$3N]G+VI[|8dK' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
