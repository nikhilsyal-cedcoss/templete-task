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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'e/ZHFuwnmSCt3mbMcWYMkvOkc6/v6ZHWgJpHiKPY+7EBapFEXafZsJSB+kEseMyKumF/HvI0PHnqPJS7LFMmlg==');
define('SECURE_AUTH_KEY',  'SgP017DV1SPHYPoaWfSw5h3liaRLamsFISKEy7wbX0mL0WPIdTELSRAXl8KqgZfMETTIz0tld0KC+Degt2MdDQ==');
define('LOGGED_IN_KEY',    '1Kbz0W/PKKw1f1AneGS8n3U75Tcb4dRN6+++Wx52UpaZcMzGq3BhJAWFkDeILKfqCrtzXDJU7P9vIMsrU5/IXA==');
define('NONCE_KEY',        '/oPzy0fFGyFz4d8IIKoJq135O4gQjEg6fgBqcvskfNt+Nrz4c2rjR3GbnLEGs9isXlKqq4NcV6lGpiqh/LsUVg==');
define('AUTH_SALT',        '1NGyIxWa6RIxZrVyVlB5T3eP3FNLm7/eN90XYea5izCGuD6hb6vzCziBR2d9xdUpfcP9PguLd3+xZldZRfRooQ==');
define('SECURE_AUTH_SALT', 'OATfc0Q3ftf5cRA1zhWN9EWUwKLuxaM1v6OO8PszRPYrrIvP3g+xQlufimwXsimWWIzT+tWiBakLcCddZukSiw==');
define('LOGGED_IN_SALT',   'vQfSniGuXbyIuHokrdqbRy6uE0EahH0g3VQmofdt7VqQPJiPe62kKroVSoJ8LYwhoS/a0wSXCl8pb/20mRH/7g==');
define('NONCE_SALT',       '1dMjQBR8kFuYRUeH1Tq85u5U2DGLYcP9I8IUip0YVyVr4UH1zCGjz0UXG+ycDXs4KPoNjm6LPwjF1qnixW0xAw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
