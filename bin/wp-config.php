<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gregWordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1u,AA@@MVU$iuj_?x_AHw3G @L]z4(0mkL6t/Lq.(=V~/*8T+!9%h,RW%bgL,54y');
define('SECURE_AUTH_KEY',  '0 3pkm5[k*`JVH:V)eK.;-2wSHPO-q*Egn~3<0.CUGEa9mw&H_/a8mB!.}iA!!f8');
define('LOGGED_IN_KEY',    'vxEBinP*kK#Vl$,EwCV?oPQ#U-c-Y[`&F=UHZ[J6rDhg!t>R@a:$X%-ro|i;1,&m');
define('NONCE_KEY',        '(1E/uuMAlA`kW0G|^}6=H:z%KlYgx{X/0ch!GJT,:*n$fWNX,fnD-=1eR[e-+hG_');
define('AUTH_SALT',        '/-GMA^o%3FhK@{gAUvY;1~W@6$q-l,2}})d~cVO!0]q|L.`h8SysV{H]l=%q4+,-');
define('SECURE_AUTH_SALT', 'FR;E^zO$#0ay[Y<AvDX+v|S5AZE-A(2|,g,R%2JM|ySgRMDuRx!i,9*bjNP@+I?R');
define('LOGGED_IN_SALT',   ')t~x)fzVwH>O*ejYg(HxA{Y7rdvrhc-O}f0A3YjkG|rb3|s1G?i:_?@T4gb]7T`i');
define('NONCE_SALT',       ']DhmD_D&Dt?$~=fQ=,CUp+I-L-Jd(1|?03O5G=%LwB(jP!SiXrS+X)lD@g+P9_No');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gregwp';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
