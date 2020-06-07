<?php
// HTTP
define('HTTP_SERVER', 'http://opencart.local/');

// HTTPS
define('HTTPS_SERVER', 'http://opencart.local/');

// DIR
define('DIR_APPLICATION', 'C:/OSPanel/domains/opencart.local/catalog/');
define('DIR_SYSTEM', 'C:/OSPanel/domains/opencart.local/system/');
define('DIR_IMAGE', 'C:/OSPanel/domains/opencart.local/image/');
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