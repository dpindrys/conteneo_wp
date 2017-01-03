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
define('DB_NAME', 'conteneo-db');

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
define('AUTH_KEY',         'Eup?e3e1lZX]W`0-)Hu]arI,ze7K|(5_mVXMbOiR^,h#19|J:V|WHu%LC^L.*uC$');
define('SECURE_AUTH_KEY',  '1xziLC@e8di]<]%9G0o!y}n,JofpEcDI&!0n5p..mf?@$d7(+P[z!XLO#v-VEQh3');
define('LOGGED_IN_KEY',    '~FrjDa+-P^mqQau{w2ClM@{*ZFKia%6PfHG*,Y0,(h64d~G<!6Xjc{sADG&|+9=4');
define('NONCE_KEY',        'UfXv~p.DO7Bd5jadUW[PKR{L]zh>Aq@v(IV?[6V}R5-~4J-tUM%E]:*O2o9P]-QN');
define('AUTH_SALT',        'YSvM*jB_9 u1n1t_SZ<N0oVIqN:9K>a%{]Xo#gUGylS6=tWXEA1y}S0`H6)]+aad');
define('SECURE_AUTH_SALT', '+xXTm>QLU@18Zmgw3h!QtC`&7`~*`NTi_@gB,vgyefl!-Y>V2`p1+RF?pz/6ma|;');
define('LOGGED_IN_SALT',   'sY=& FwX*q&W6=XjKtVG<%?(B:d{EktJw`S][pPNQV#vS%hXt:+/(~3$R?9ZY_ b');
define('NONCE_SALT',       's;|/aZ4[~0@I-PRTULCcUy=H_a dW~kxk;S(/JAhIR(~ury-Qg;lfiRa.&<{_dnL');

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
