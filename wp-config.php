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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'XdEIhnMn81FAJm5WuN5mH+rt4VYmF29a/L2b2OxLCFP4llIJLlGnfZ6E/zTZUAwmrceAN56pVoJpnXFbhUjMzA==');
define('SECURE_AUTH_KEY',  'oSTUCMW3g40bLSDfXgcicznhqNw6tj0ZGmFCCdSa3HzqQJyJAMxWUiMrxfPYxAEgo+Ku1z+Fau0rpXL72UjW8Q==');
define('LOGGED_IN_KEY',    '72p7NF1WcTFq4CvVm9uoSvBSC1UOwYq+JteriL3C3MyvjXCQb352ArW4e1KlGTKjZ6yx/FMaqm65wCHOsVS+Sg==');
define('NONCE_KEY',        'O4NlcZwH4xVZBFBwKL2K3cqyRi8MAnGtRxevXGY2Nc4goLU3rnOnJsR5nZtxTonjQCZ4xZeLaGOnFHiumT5XAw==');
define('AUTH_SALT',        'WKVZTPRc1JAdObV3nu2jtPu1Nx/yZa/vX3Wlc6phkp+QqQrkNoZPn85gQuknId5PmFueo9FrDKOl3BqSXyfavw==');
define('SECURE_AUTH_SALT', 'z+Tg5IfrVj3/9vf3t3tN/zO1C52cExMFvHgXQ+Zds4UZR2/VFdKeHvbIihV3MOJzX1bV2sVjXtHLGLBOHUXvwQ==');
define('LOGGED_IN_SALT',   'Vk22WzfqgOdgO6/dDwvv6nD1o8VocT1HzeH9OWkcLp6VQA1FDbnJgOa+hr4XTzrNPGoYi8hZ2dld11GHFXr+TA==');
define('NONCE_SALT',       'R0hD6RseQdKnuFPlygCk3YqLBIL44eDoMus7I6qEjSlN5LCHtFToQAO0+F+7TUjxmluY+PNiZH/nKIuxc5KJeA==');

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
