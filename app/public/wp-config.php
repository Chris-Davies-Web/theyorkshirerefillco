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
define('AUTH_KEY',         'b+wkoZtCGEacOXTas8gUOO+ZJ8AnV0xpM2JKfBmtlu0PlNouYJuqV7i1GGxkQoefYUfIla/aaw1aHHGP2A3PtQ==');
define('SECURE_AUTH_KEY',  'W69BQCYsIsyD8ZO1RMvTKnD6kDfUZQUjnF3UtqILYUeUDIvHlPwxXDaVKt7PMPJD0zSvMQaAve6rCioVzMpFhg==');
define('LOGGED_IN_KEY',    'bjXyUdxWacOBHC/3Lu+GH7HVJCJEe3bdC1lsNTm4lTC3cBUJb+cZE2XnxXCnQQxFnMNJtZGZEczzthOIIIiKNA==');
define('NONCE_KEY',        'WFyhDsQHCgFTaU01fy2aiw4H5yG2pGHf12YlRtfbtCrYN4Q8QVOMZnb9oesuMUzREO5uYT+i3R2mVJQeIkdZwQ==');
define('AUTH_SALT',        'qqBfuWBBa+rdFrFlg6zado0WJUqSaRqpq/D3/S2u6xOjTJcZVVSLhsMpom3zZH27+xaHDRpntklvaE4UxulOZQ==');
define('SECURE_AUTH_SALT', 'i/FZIwx8afvGlXC+erZEkyiEvAnithfMPhxIAFCMjEXNUas/C+foJdpsZHgzeRkU2YEmb71DO9Ld/qadOYvEnQ==');
define('LOGGED_IN_SALT',   'xBsU5wjD5aXmx/jRWJ1qWKgMgevpPaXRQC6n7VdXhNqg8ap5BJ7Golzhqi1TURz1IGKLG+qLdx0rS9DRwtCBlw==');
define('NONCE_SALT',       'o/Na1/zeLm+au/4MVxTaWQfF5knHSKWHZ5MawjZxzR347mjHx3wdMsvGaZFa4tR1Z+cbdA/bhCo80QqSGWExhA==');

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
