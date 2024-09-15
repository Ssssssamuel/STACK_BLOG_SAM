<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Stackinc.12' );

/** Database hostname */
define( 'DB_HOST', 'wordpressinstance.cfmgy6w021vw.us-east-1.rds.amazonaws.com' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
define('AUTH_KEY',         'IcbXg^)p^#1@09$*+I?,GzcT6+tU-WmkRh?|V[M}7&fJb0~1?vLe/-++}c|fuQ8f');
define('SECURE_AUTH_KEY',  'Jx-Z^KL(69qAK[{^?#vzO.{VK)qvtD7gNl@V66dV6HlU9O,$x|yu:T6A1%`vd^D4');
define('LOGGED_IN_KEY',    '^0)k9$6,I^e2@0H%gLexx@e}6}k1^ONWtze5an 9:?0|{VTD4z,}9Qh-*xvB2StJ');
define('NONCE_KEY',        '[86MH>MJqnn,S^(rS|37SuMEUb-++yQ.QG]@R@,X4b[S-7U+*Bv,gPHo2{R@CrFL');
define('AUTH_SALT',        ']+JJ55}Aw!lz&LJZ$7tKX7e}69^SX9%kkz:CEU|-~oI)-7$y{Wi1HM;8wCw22b@F');
define('SECURE_AUTH_SALT', '0Y2+Rh;R)GTOp{?hR:9-u60G9L8b)d+.=Frk^KNfv-vbK!~c(qY+_Y_<?q~We[q|');
define('LOGGED_IN_SALT',   'OJt9K8Jw|hx@mrnp-3.uiiILY}>DwgKBE#d9]S@-C@P+0e|fQiV>xy|_k1eg-2^ ');
define('NONCE_SALT',       ',L|Af8=RN-iUtul8QnC)II+e%h>0OpQT6!LHC~E~*c;xcIgSs}(C@5f9~EE(@ege');
