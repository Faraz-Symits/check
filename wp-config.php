<?php
/**
 * The base configuration for WordPress.
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
 * @see https://wordpress.org/support/article/editing-wp-config-php/
 */

// ** Database settings - You can get this info from your web host ** //
/* The name of the database for WordPress */
define('DB_NAME', 'check');

/* Database username */
define('DB_USER', 'root');

/* Database password */
define('DB_PASSWORD', '');

/* Database hostname */
define('DB_HOST', 'localhost');

/* Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/* The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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

define('AUTH_KEY', 'T|ckFy+Fv--%iYNu/w>;XQk;|DOk;G$dTH]=hI7.|z<.?I,rsTgX~K^$=<`:c &3');
define('SECURE_AUTH_KEY', 'F^A:d|fF={|svOz?sy9*RQlnF.R01C+3_V]BT|yy(GuqxI_eFs1Fyjs-<yk~A{G:');
define('LOGGED_IN_KEY', 'm_AFs9q8Kq(X.@#2)itRf+Y~s.VReMf6rxR3Jp}zVRId >}s:45?i1pj[/F+yCQG');
define('NONCE_KEY', '=UTG(Z}VU*%7#xl)h*Y-bPKV=ZyMS,3l|=%rsoe;F|u==wPEH*9{WA-`CH_Lx1od');
define('AUTH_SALT', 'Fhx@_MpC|2%-}zDuAkQSVgEiF78N/z+V$Jw}TwuzPBZepm/*fxsQCBHWpF`K`GFL');
define('SECURE_AUTH_SALT', '^=1egix]{YMQ-0?P|+)S^F)Wxd8V|N&M`|r Ie#p HMUiW;|?zH.kLVQ.#&Muz~V');
define('LOGGED_IN_SALT', 'h|T{rts-*|o*VW#aU:v&R[V99!RsISu6xkb5ri_4^? MA-PYTySuEwaGF0@Z~Nt-');
define('NONCE_SALT', '-AFP(b#zE*yTh!j6SHat027?<aDr^;:I.-0~<fnQEe.,J tzPBq|GnT25-DpoO@3');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_check_';

/*
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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */

define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);

/* That's all, stop editing! Happy publishing. */

/* Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__.'/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH.'wp-settings.php';
