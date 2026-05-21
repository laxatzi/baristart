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
define( 'AUTH_KEY',          'A,G&=!}ZAI{pC2r1?gA6#N2}1XIwWgoY^]kc6zvHRCz<,O1H#,/nPW9>E#/HIRA-' );
define( 'SECURE_AUTH_KEY',   'Me~,MNFn$O:[lQV#i,+>3#g3CWu[#d?` I;^=7:@9<{PmHSh|C-J9ig.U%M80/`u' );
define( 'LOGGED_IN_KEY',     'W73kB~y<SJe[xlAt.zEVc>8iJfDR]W=X{h&RXh3G7Z}i!#[2j5U)W5-ubKE86%fI' );
define( 'NONCE_KEY',         '2rql:G-8ww/;7 Z.; f6&ioo-IoK~**sr.V=-%Q?DvNTm!bH^i4w}F*hu5z09aEH' );
define( 'AUTH_SALT',         'X{ SPK{Hl*W{#a_0VX1hh_BjWZHee]A~?n?@P`aZj08KIZSr5pDq=]OC=pj<pdi^' );
define( 'SECURE_AUTH_SALT',  'tm=R|DPC@0)#|Hu*Is/-#dy!T>H(F{ (b(~z.Q5G$F@d*=vmDH>2U!K.R>3 }<dK' );
define( 'LOGGED_IN_SALT',    'wz@?D/-[f/VK-E7@=Uqm[5--%mvtk?tBMX,A7V6@t}hGny8@4-@ziE;A)brGelxV' );
define( 'NONCE_SALT',        'IM6ML/Apak_(s;yZ6Gxm)BZ@NbXUYM7z[$Wd!snFlO~t?k~^kY!yFY,o#W3kt8XY' );
define( 'WP_CACHE_KEY_SALT', '4z(k6jRz``TMYv]Py.s;mZKoNkUAoVKcVf7O@J,V@eNy7LjFIFun~G.ygYk+#ZR#' );


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
