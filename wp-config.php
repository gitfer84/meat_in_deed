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
define( 'DB_NAME', 'meatindeed' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ']rQGnA%ER~q=v2X}=0Yw_Ttp/wSWQSeLV[@E ak7{J`D)w.!{3lmJFyFnZomSsUi' );
define( 'SECURE_AUTH_KEY',  'LP>ow,Qs9=n3ZUFaw)^5w/!5fG(<|Dfc{|aTiKGHd11-($ijcjKaM%.[DvI#<xP!' );
define( 'LOGGED_IN_KEY',    '1#G90 J+DB{6r@y/*8fGp#^^)s{]|e}<-YVG)sLB1gmwl8qmNH_gx1TDP5Os5`*d' );
define( 'NONCE_KEY',        'i9u]V*`^;rTpWiUvrY+XakiH~fUPfI{t[ybeqpA>d1 iFzaCP]nx&alA*Whs:7C3' );
define( 'AUTH_SALT',        '%x38/GK`G9p7*uBLWp(pMn%..Kpe;FW4lA2$&hd1qD`g%1kw{a]2uVD>ZA_:/]O ' );
define( 'SECURE_AUTH_SALT', '%bAl1opO]qEJGdRObuARjcO$[0td-@gyQx8|&f2Z8$HpyWU/P%)Y|{~>cn_<wxvu' );
define( 'LOGGED_IN_SALT',   '&N:H$G`};f_YZKp_1sXcfsIG8a$6Gig,0JW}{L7&;8O!?z{p=ZEPksWX~dg)&bDQ' );
define( 'NONCE_SALT',       'u8Wzwp(TLS07CxNsh;;X0.pH`O(}91RZRxA6(bB~ {WezMVv^`b.}p.T]gNfU#f}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mdsd_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
