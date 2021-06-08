<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
/**
 * Include autoloader
 */
require_once dirname(__DIR__) . '/autoload.php';

/**
 * Environment
 * Default: production
 */
define('WP_ENV', env('WP_ENV') ?: 'production');

/**
 * Cache
 */
define('WP_CACHE', env('WP_CACHE'));

/**
 * URLs
 */
define('WP_HOME', env('WP_HOME'));
define('WP_SITEURL', env('WP_SITEURL'));

/**
 * MySQL Settings - Local DB
 */
define('DB_NAME', env('DB_NAME'));
define('DB_USER', env('DB_USER'));
define('DB_PASSWORD', env('DB_PASSWORD'));
define('DB_HOST', env('DB_HOST'));
define('DB_CHARSET', env('DB_CHARSET'));
define('DB_COLLATE', '');

/**
 * WordPress Database Table prefix.
 */
$table_prefix = env('DB_PREFIX');

/**
 * Authentication Unique Keys and Salts.
 */
define('AUTH_KEY', env('AUTH_KEY'));
define('SECURE_AUTH_KEY', env('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY', env('LOGGED_IN_KEY'));
define('NONCE_KEY', env('NONCE_KEY'));
define('AUTH_SALT', env('AUTH_SALT'));
define('SECURE_AUTH_SALT', env('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT', env('LOGGED_IN_SALT'));
define('NONCE_SALT', env('NONCE_SALT'));

/**
 * Debugging Settings
 */
if ('production' == WP_ENV) {
    define('WP_DEBUG', env('WP_DEBUG'));
    define('WP_DEBUG_LOG', env('WP_DEBUG_LOG'));
} else {
    define('WP_DEBUG', env('WP_DEBUG'));
    define('WP_DEBUG_LOG', env('WP_DEBUG_LOG'));
    define('WP_DEBUG_DISPLAY', env('WP_DEBUG_DISPLAY'));
}

/**
 * Custom Settings
 */
// Disable All Updates
define('AUTOMATIC_UPDATER_DISABLED', true);
// Disable the plugin and theme file editor in the admin
define('DISALLOW_FILE_EDIT', true);
// Enable dark mode for Query Monitor's interface.
define('QM_DARK_MODE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
