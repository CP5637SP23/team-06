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
define('DB_NAME', 'cms');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '[^H#%Jy/|1*1oU}?_/=,y/uk55[nKkRE~a@ID+L-~joJ)il%{xvF^a6a`i7Enki*');
define('SECURE_AUTH_KEY',  'xN*LVm<@Mo[f@8.qH]R@!J6u4|iq2PZ&d2!hyb.bu_O!u`KF_g`V_ObxW/~AygC1');
define('LOGGED_IN_KEY',    '*OmdHg=]z61PoP-AR@[;hB*2?gZ,4KIB=P,jNq_qL/Z^&xHsIOE0?xML~B4el#^b');
define('NONCE_KEY',        'xKtX^RP1JN`2XqV-7UmHc4,A1MR!@hXq].D%9*sV>P&MJaUx-FG%JM}pa`*0*EpN');
define('AUTH_SALT',        '};ZQh!;0z]_Z>;n3qQ7EC&KHY1oto7-$@(Uf824~!Ig);fc@nv_k5QPg2G}d^~iG');
define('SECURE_AUTH_SALT', '.tn*BRm!BL8_AGA#)}5B}7 Li!D@_|kKnTUF <H@R:yC##D4(_$cgc%9!On;YV+%');
define('LOGGED_IN_SALT',   '1MOJ-5IYNm#T66*t[8]+-ZWpo9XA:<_o0:WV(Gg(u0C83G>SuuMqH&:w7dQ ,peE');
define('NONCE_SALT',       'wBn95c&ON_TmXiYShty^*;eazlvPR>TH5w?KG^>9M~o=)/-9);:*mdVI!>nB5f]<');

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
