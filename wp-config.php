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
define('DB_NAME', "u53721_integrator");

/** MySQL database username */
define('DB_USER', "u53721_integrator");

/** MySQL database password */
define('DB_PASSWORD', "Integrator2015");

/** MySQL hostname */
define('DB_HOST', "localhost");

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
define('AUTH_KEY',         'YU6934SRqbgO3WEJ)1PMwv(snZWaqOb%B7SMg11mv&x8NGun&Lr89r!z0wJJem1C');
define('SECURE_AUTH_KEY',  'uiM1YTmPx5#LBD)sgX@sx5HvfZLQ6)nSgKZ3j9eiZe*iB*x7vNZjqDs2TiWVuDbt');
define('LOGGED_IN_KEY',    'cBPj!gxSMuqTuIH#bxa1cwofnOoXoM9JI&tCrh47RqVyupHECGwaMiF9rnLLh2th');
define('NONCE_KEY',        'K39QiM2W2&ad6iuWHwj6UMQ^xCiNU^N69G^mkE^(vjWxm2R2M1oYOPuMkyDhAmoF');
define('AUTH_SALT',        'LriWMfmZ4VAtV%iB2GcrhFtLwEU7mfJ%e*v9ZHP2Jr%yVI3j^H*alhQlxF*64SnB');
define('SECURE_AUTH_SALT', '24vKuiZ)c^Qv8QCVP4*WdHuO4dYw#dJxiwSL0(ta!vm8ZLH85REAp@oCcCjI%ciF');
define('LOGGED_IN_SALT',   ')K1WcEUOPOlkyD@xbDgOsxeSh*0GwOzzYzJ50cCs8k1!fBuhO4UwK1uW(ZAH&XoT');
define('NONCE_SALT',       'SA(UagsJQtwMl)yBB!j2hJYIUxolxVyGAN1MHQS9UCz%)K(*^hGp4h6vH8UHNgIP');
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
define( 'WP_DEBUG', false );

define( 'WP_SITEURL', 'http://integrator.onhh.ru/' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define ('FS_METHOD', 'direct');
