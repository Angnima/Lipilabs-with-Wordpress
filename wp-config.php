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
define('DB_NAME', 'db_software');

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
define('AUTH_KEY',         'M jXk){OHD9p|HUiSZy|6N*hrN~Yi<Gahx6m>QVr!$,R A~6rC_1TX&42~]N!qa|');
define('SECURE_AUTH_KEY',  '7g>o=)=LFUiO$MbyxDzQ0a02_{+f^ Fb`.9Sc^_w7=K#Ihvu&rLhb5Rd!DZ%%|jd');
define('LOGGED_IN_KEY',    'm `=(U;UJI;Oi ![rqF0}V,eJG2))=_!^8 2=>Q6p}gHK+iAgsp|V.rEu8WS?h)G');
define('NONCE_KEY',        'f_>^~#DWw(}sxhT~BMd)doegyN^X5{$%$%FChkzQYiE=&e.XmN5**B;sKpfBT`/B');
define('AUTH_SALT',        '!61btTha],GrEmq?yHI,u:%F)Ku}.;6!$HN/j}A2jh.<-]`nW>iwP3<0]9;XTHfm');
define('SECURE_AUTH_SALT', 'X<Pqr^Nd6FOR<}sh%2M+)x,9xVclD0*1He%6(U$==MC>J|}gS38i`?!PC`[Hitz0');
define('LOGGED_IN_SALT',   'gzn~H8rn-u)_xniFzuh98XJ#^}NY|@&j?pkT.)J=Gl?-ww0TCZ)TStxW)|27XoDg');
define('NONCE_SALT',       'Vvv<^4y?N}5)&tvlvo)(;o$ l]t}!aB#s:2<t @qUsj3R7s04w[.+A@k%%qP^qQ`');

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
