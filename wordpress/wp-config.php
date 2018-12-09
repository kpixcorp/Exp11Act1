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
define('DB_NAME', 'ejer_1_exp_11');

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
define('AUTH_KEY',         'OfJNXRyAp0ywG;z,gjB6M(Dwm]-[Ooj`A/L}48_#-_4~(8F@nw9a,><fdO0cHfP;');
define('SECURE_AUTH_KEY',  'w;[1W#=ZF=._+ySzjJu06B*1_9>Qpn4/iuZc.V,~?VN-v@qq pSo_PX2RI1sothk');
define('LOGGED_IN_KEY',    'i&r^CzOmk/?%vPNZO3~c.3,nZ@&x]u.6|#b]fI@?EZ!o9 `pn7cUdBktoy5+@#ur');
define('NONCE_KEY',        'P]+sQXxv<?N>[ziu;o-#F |Q>2SCru$%NUTL%D[o)(+Jk*L{x-e~N,#6DlEgk`iX');
define('AUTH_SALT',        'o4d?S/gF@-$F4)XEA=61bb-27jvd+nt1rZJE3Z3l=9W+Am Zu#jA=/<xgBOIW1E-');
define('SECURE_AUTH_SALT', 'A)<1-ev%WB[<@Z4}E-IOlse|OPe2Y_{XJ8wUj0^@LD9!<o$QmUogDv)WXZFHXWtw');
define('LOGGED_IN_SALT',   ';QES_3&N8jkytpx<%xN~HvbXt+BeOGufx+}2HpQ[Ym$A9UV-EjmDbBM_7GeDJC~^');
define('NONCE_SALT',       'PB7~b,f.7hS/Qm!KZu<Q)bOWz-Dl_$-<7DUvjoTXV)2<*0sn)2RF RaB<gq(J6>?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xl_';

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
