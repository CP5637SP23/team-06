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
define('DB_NAME', 'profileIan');

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
define('AUTH_KEY',         '59k--h7$WE h{3,gdgO+da#rw@rtw)!OcLkos{0gdlr/,{$kTrZ!ag7Q-;4%*,aQ');
define('SECURE_AUTH_KEY',  'Eu@}%:QYHWCFSAB/.6(_YPs|b_n_ O<1|ONQ)(%DZ?Y<>,lLm:Kfz5E,#K?GJzry');
define('LOGGED_IN_KEY',    'SK)zxnuvxe,:[J|cY]]q.Ae~EDN.{rDq70x?R&#]gO<goiZQ0LYr{Rx?8d@<0Cs]');
define('NONCE_KEY',        'I4DQLn{fIFTLz`{p*VkMHFQeaqwW~l&o}4#,~WMM7xAx OBVBqM3(p.oj0s:98>C');
define('AUTH_SALT',        ']</om`w;bJ76uvn1BEA2Ho03vFjPtc*pYB<kj#G?4[U%i[2G;n;3$L&roSeH)5,J');
define('SECURE_AUTH_SALT', 't>%HQNhT2(whe?1-:,_P^ b8hi*;Ds]mRh/wM.{<g)-nW|@4%LgsFIzsZ:BGV&Oy');
define('LOGGED_IN_SALT',   ')qlL;DSfPw+k8#8fWJwfUJ]i/UYknakd.>bpq#EsHg9U|X?A..Yh-nGSTF%WQ%U=');
define('NONCE_SALT',       'f=bkV/}M6okm!0K*iYWa{oZ&wrk2*gp|H@hL8%I!p3YGIujU-lyy$pHe,Iuun yN');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
