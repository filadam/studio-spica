<?php
$variables = array(
    /**
     * Environment
     * Supported environments:
     * 1. local - developer's desktop/workstation
     * 2. development - development server acting as a sandbox where unit testing may be performed by the developer
     * 3. production - serves end-users/clients
     */
    'WP_ENV' => 'local',

    /**
     * Cache
     */
    'WP_CACHE' => false,

    /**
     * URLs
     */
    'WP_HOME' => 'http://studiospica.local/',
    'WP_SITEURL' => 'http://studiospica.local/',

    /**
     * MySQL Settings - Local DB
     */
    'DB_NAME' => 'wp_spica',
    'DB_USER' => 'root',
    'DB_PASSWORD' => '',
    'DB_HOST' => 'localhost',
    'DB_CHARSET' => 'utf8',
    'DB_PREFIX' => '',

    /**
     * Authentication Unique Keys and Salts.
     * Generate your keys here: https://api.wordpress.org/secret-key/1.1/salt/
     */
    'AUTH_KEY' => '',
    'SECURE_AUTH_KEY' => '',
    'LOGGED_IN_KEY' => '',
    'NONCE_KEY' => '',
    'AUTH_SALT' => '',
    'SECURE_AUTH_SALT' => '',
    'LOGGED_IN_SALT' => '',
    'NONCE_SALT' => '',

    /**
     * WordPress debugging mode
     */
    'WP_DEBUG' => '',
    'WP_DEBUG_LOG' => '',
    'WP_DEBUG_DISPLAY' => '',
);

foreach ($variables as $key => $value) {
    $value = json_encode($value);
    putenv("$key=$value");
}
