<?php
// Check if SSL
if ((isset($_SERVER['HTTPS']) && (($_SERVER['HTTPS'] == 'on') || ($_SERVER['HTTPS'] == '1'))) || $_SERVER['SERVER_PORT'] == 443) {
    $protocol = 'https://';
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
    $protocol = 'https://';
} else {
    $protocol = 'http://';
}

// HOST
define('HOST_OPENCART', $_SERVER['HTTP_HOST'] . '/');
define('PROTOCOL_OPENCART', $protocol);

// HTTP
define('HTTP_SERVER', PROTOCOL_OPENCART . HOST_OPENCART);

// HTTPS
define('HTTPS_SERVER', PROTOCOL_OPENCART . HOST_OPENCART);

// DIR
define('DIR_OPENCART', addslashes(str_replace('\\', '/', realpath(dirname(__FILE__)) . '/')));
define('DIR_APPLICATION', DIR_OPENCART . 'catalog/');
define('DIR_SYSTEM', DIR_OPENCART . 'system/');
define('DIR_IMAGE', DIR_OPENCART . 'image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'opencart_db_user');
define('DB_PASSWORD', 'opencart_db_password');
define('DB_DATABASE', 'opencart_db_name');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
