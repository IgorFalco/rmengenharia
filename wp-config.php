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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'TKaf)=Hl) b?[oZ[%RS)uh3Kx@#[k[^B#bm!J#?zKuojUCBF_wK9+[}Desw6*,n}' );
define( 'SECURE_AUTH_KEY',  'WQSCD2tPKNufPZLyW#%]Lu2%=a;OA6<3e8-<9R{ X{ O>AxFOHyxykO]cNA4.[9$' );
define( 'LOGGED_IN_KEY',    '3RadOQFX&5t*:,Z:wv`{g<*&~30&mkr7@.hY/Wx([jt2Rg!}$kN6+&NL2fT{$1X2' );
define( 'NONCE_KEY',        'uWhHzmo(CJta^uf}bSn6j4D9]aD4Cv}.n5JrZ(qPQ`^|7Xk(fjY(G=<A[K&7[kZB' );
define( 'AUTH_SALT',        '}tl3lLKcE)>:zgAb??:s%0J7ZuUWj./N6MMB2SYr*C8a[(lY3Pze>.fv muO2R-=' );
define( 'SECURE_AUTH_SALT', '_MuokWq%Io]eNP#$<l{SA $2q}cFRqo<|2tz:@/v3F9hG&%(#UwV 7OSP$L80@u:' );
define( 'LOGGED_IN_SALT',   '=EAO.N[`{lFPoCtR<^ut1dE[der .Y*=]GyH9q6 Vpsg.mOX2B9%#Hx+[`h9!l;F' );
define( 'NONCE_SALT',       'SYTAR0{(g|+H,JYt{I[MMM Zz(k#Al6#GqFAF-zoDw@Qgpw3ve-q<aLKO z`31t=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

define('WP_HOME',    'http://localhost:8080/wordpress');
define('WP_SITEURL', 'http://localhost:8080/wordpress');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
