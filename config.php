<?php
// HTTP
define('HTTP_SERVER', 'http://new-env.ap-south-1.elasticbeanstalk.com/');
//define('HTTP_SERVER', 'http://localhost/GitHub/footlounge/');

// HTTPS
define('HTTPS_SERVER', 'http://new-env.ap-south-1.elasticbeanstalk.com/');
//define('HTTPS_SERVER', 'http://localhost/GitHub/footlounge/');


$documentRoot = '/var/app/current/';
//$documentRoot = 'E:/wamp64/www/GitHub/footlounge/';

// DIR
define('DIR_APPLICATION', $documentRoot . 'catalog/');
define('DIR_SYSTEM', $documentRoot . 'system/');
define('DIR_IMAGE', $documentRoot . 'image/');
define('DIR_LANGUAGE', $documentRoot . 'catalog/language/');
define('DIR_TEMPLATE', $documentRoot . 'catalog/view/theme/');
define('DIR_CONFIG', $documentRoot . 'system/config/');
define('DIR_CACHE', $documentRoot . 'system/storage/cache/');
define('DIR_DOWNLOAD', $documentRoot . 'system/storage/download/');
define('DIR_LOGS', $documentRoot . 'system/storage/logs/');
define('DIR_MODIFICATION', $documentRoot . 'system/storage/modification/');
define('DIR_UPLOAD', $documentRoot . 'system/storage/upload/');

// DB

define('DB_DRIVER', 'mysql');
define('DB_HOSTNAME', 'aa7twz1l2thang.cvwrkeif9dtm.ap-south-1.rds.amazonaws.com'); 
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'Welcome!23');
define('DB_DATABASE', 'ebdb');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

/*define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'footlounge_oc');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');*/
