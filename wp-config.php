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
define('DB_NAME', 'db_wp_cukor');

/** MySQL database username */
define('DB_USER', 'u_wp_cukor');

/** MySQL database password */
define('DB_PASSWORD', 'p_12345qwe');

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
define('AUTH_KEY',         '+8|l:)j;|_x9j{S|^kVhKMK3:[$H[$L ;]5bVGNN[c@]aCE;z ;W3-.#8bfvZ(+u');
define('SECURE_AUTH_KEY',  'M^uU)&#5LwRXKw#D&tQ+gvLCZ Y5CVcGpL4^O!JvUPmxjt^B&o<CotGaDS^eD5^6');
define('LOGGED_IN_KEY',    '](X~d!J~=g0wqo+Y!z&wc]H( %s2>NC+nGc9W^:B dwfY#}ka/7Qd)yVs~9t|^H:');
define('NONCE_KEY',        '&.wpud}C8tK|jL5W9{X}#rG||0c&(;$[pa_y/_d8{tej.1YuBv_;d(|qn$XlMcxw');
define('AUTH_SALT',        'oK>25b,8:jSE9ljH+Tqwm5R):e;;xHz2a6$|tp0-aV&s|s+|vL^TmfTZJtqf3(i:');
define('SECURE_AUTH_SALT', 'F&gNA4trQdr?[p_&rwLoHt%=Nx2|0Ir?OF!eC~cg6rO}K$h3H17R(@]+GI,u1zVe');
define('LOGGED_IN_SALT',   '1YQsY_NClH%ccdkq^(3KaFi^+=dCOWP^j|T7mFP~$C}FHnMvJ?&W`H :zy+o2,Zm');
define('NONCE_SALT',       '!1W?}$Wt+1-,|&J(+;;05bH70om`)*C*JDQc|A>m<8]1iKd/m`c$Y-(JW^:6k_uI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cukor_';

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
