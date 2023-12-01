<?php
/**
 * The base configuration for WordPress
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );
/** Database username */
define( 'DB_USER', 'root' );
/** Database password */
define( 'DB_PASSWORD', 'root' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
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
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/* Add any custom values between this line and the "stop editing" line. */
/**
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}
define('AUTH_KEY',         'V3IssDzSB0+QU8SxcbgUuwap88GSr3IeXkuMb4OgDSGkz0JOVyZjUK1YUd8aYy4b/Oq+Uert8hC/8SvPbHns2g==');
define('SECURE_AUTH_KEY',  'W8qMICsOq4bsqZDTRRkwC7qC8L0V0W8MabNROraA/bt+wWtTHlMCLFc++UwqnQ7yFAuRCDFEQpkIAWji0LRDSQ==');
define('LOGGED_IN_KEY',    'XzaCOx2U9TVTKssL6DSau6myoHKcdgg4+7w9dDQpDzA/PVpaUEUsuWQp2C4jVmxRG6fjV2PgrFuXP6YnLowCjw==');
define('NONCE_KEY',        'p08dRMjMn7b4trM5F7pWVTreP+gQjagWDV22E+9DHSYlNeARVer7VCcqbYJ1lMjzgp7UfXYFD8x/kx9i7l8p8g==');
define('AUTH_SALT',        'nt2d3NBdP0cgNpcuHfoj0dY5V6MahIkc4yPEW5EbGIAjEyiWR4Xx/1PvDakas/d+BODcxGlwGoqOEorh3dt/4A==');
define('SECURE_AUTH_SALT', '21QUeaakuOGMwrhwva0WAsUJXgfZ4KOw06Uodq6M9fnH4rWvhxdhNy+4oMFuP0PGK6nKnsEx6WWabOy4Ard4oQ==');
define('LOGGED_IN_SALT',   'cgBGXvshz/gSbw2FEEC+A3zb4LegY2ROH8hmkiCgyhtfws7ZB5jESiFqmmHUIyHzS0sWio20NXzqoR9x7TrZsA==');
define('NONCE_SALT',       'tMDdAg0ottFm2OkM9ADmhJAF2ZvQ3FIX+ElSxL/UVmyonRnxZ0TmycEgpUPHQZpn7bks2Xq62yil4S8KeuRCKw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
