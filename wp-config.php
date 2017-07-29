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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bright_creations_task');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'YF%Z#>%$v&Y?qLy~l^J&4`hvgiYT.=~K1)70HCLW#/PxV!CZ*dVYW.&>@*|VX|oA');
define('SECURE_AUTH_KEY',  '_M*f#cre5Wpw`bBx:_8My=@hpw`<g&#o7P2,(Dyw*1{.()oU(oYyJV=U$DY#X+6(');
define('LOGGED_IN_KEY',    'N8*aY-g/B2A0eBr6|Z$Mx^HrurY&p+6s/m90{R:qJ8$6OP*_r gdW~=%Ds[&vSF1');
define('NONCE_KEY',        'I3YEQ5JSYnUGAcgU7_rD=32b82rYgGl,Pg!cTTB?kV43_+pNW?(=1f8gdZX%oH/o');
define('AUTH_SALT',        'tZ*?:qu]I%zjxx>[F&vsM3{_u2h`zcqscx*jy,-f_*~A)Pu6d/hWYDk&6xY<WG9K');
define('SECURE_AUTH_SALT', 'dJX74{NOnsPF1Fj2bO4SA!blK5]L)A7AlDL(EJR4sS@B$y|[TmG5#{6qvr?{<J[$');
define('LOGGED_IN_SALT',   'Mj1*@lrOLOjpv i$i1TL>)+D=}QlUG=j9f4Uh0V6V|nNQ3oa{5!Yno>NEx%iQl7d');
define('NONCE_SALT',       '7>mMRm?VA)(lqJYm2l1GHe]S7Q5oLh#w[@I0(a]g&)=S0O_wI1-Q@O5Hm;tGu#x2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
