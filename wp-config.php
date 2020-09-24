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
define('AUTH_KEY',         'jCpSxl4LUzSt4UBwLegmhlHHAo0iK9F3eeKld2LoeTcDB3+JuMo+hvRzmfRkAC81gG1NiSgqeCNKlHbMfPfFSg==');
define('SECURE_AUTH_KEY',  'vJy7jiXbsJzyv1xeisyJEvcrjevebl/xRUzS/QjbJgnyayuzqm/HHHh5xVtEt+bLpDa/b1KoCqKelAXcqF13yw==');
define('LOGGED_IN_KEY',    'T2eabkXAv19rZtg7ZANvl4PXdkrejgIcfvTzsm/uywjG775MEFFri0SIzMWvXJodhkFY1QnRomPoVkEoHEYUWA==');
define('NONCE_KEY',        'UNCC1jXsirMYm8lev5p9RNVJtdvBmHXdrQUlo+vHOMSFzyyS6c+C6hQ3Lyzrex1hWP/FA5kIj7YpTdFic+Fmnw==');
define('AUTH_SALT',        'kQq6OkO63/yUyOMrnDUFr41f71MZTY1F7iOTvmZNWnoNfeD8ZompyhqEnMtjBg1viwvDBnQ17ar/G77MUPUeMg==');
define('SECURE_AUTH_SALT', 'rfVEPA3qCHJhTeH1iptkt+fpeczATPJMwJDQCHNBp/X5GLunMmIOKBOlnGUZUtFxYDsoXAk7wFk2KEMITs/0hQ==');
define('LOGGED_IN_SALT',   'tnuvlUkpUzWPTZIAmuj7knuFIGDRXE41W5EsCha8Y+iUyaSRS2xVUrPEo+vY0gZzh0x9wym03yC1KrbGbMoglA==');
define('NONCE_SALT',       'ri7wp4rBNHlVgTvp72+ABjBYEaomG1gp7ZZl7m4udfZrJAHF6bCM8nP7CYZVNWPiNlgNZDF769A4pM4k+WNV6g==');

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
