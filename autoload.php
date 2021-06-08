<?php
/**
 * Directory containing all of the site's files
 *
 * @var string
 */
$root_dir = __DIR__;

/**
 * Config Directory
 *
 * @var string
 */
$config_dir = $root_dir . '/config';

/**
 * Document Root
 *
 * @var string
 */
$web_dir = $root_dir . '/web';

if (file_exists($config_dir . '/env.php')) {
    include $config_dir . '/env.php';
} else {
    die('env.php not found');
}

if (!function_exists('env')) {

    function env($key, $default = null)
    {
        $value = getenv($key);
        $value = json_decode($value, true);

        if ($value === false) {
            return $default;
        }

        return $value;
    }
}
