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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'check' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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

define('AUTH_KEY',         'RP/4jR}QoX/H([}.R7iSGcYmmvdT|/9X>f0ty.=#G/:g|uRT I=>fL)`e=mL0X7}');
define('SECURE_AUTH_KEY',  '/UK0pGfFPz_2UpmGy;D1<=]Ln*5qcZ+slHp!/lBtvG6AT.PqeA-:j#]X_}-aEGr]');
define('LOGGED_IN_KEY',    '6H%7`HCe# 1YQBO`#LuKgutG}+Iy-y>)9/6|E-xgKdBo75.@K7,KPi3Y}tG:|]_w');
define('NONCE_KEY',        '0NSSPT-c0;,$[TV.i$Xn-+D4!DcpS^=+;~ozbj~M+P<qD0] PoEs&ony#+m2G,;E');
define('AUTH_SALT',        '2q}hO|S/Z]MH#;KH)+p>,Nx2I0AJu9Ox?f+LwRj@Vt-os (yQ5iDN9jIX|-qNf~w');
define('SECURE_AUTH_SALT', 'Kqnms <fqVo80n2e0U8[w=,s2+BV$+}Y{iU^j&FrMLpJcZ+7i.aplJ;,0l;=iawU');
define('LOGGED_IN_SALT',   'vq=X%RxB]vIEY<D|WntCDA_Eejo+kv>;84$`z,9|7r|1;]m|alwsyCp8w6n|Z|PD');
define('NONCE_SALT',       'k@vhgr<0LR*JlafDKvj0Mj5K:8AkLC`KW6x!&q?3$.Fc_MWd!ZG+vW|i0Cc^}NXV');

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
