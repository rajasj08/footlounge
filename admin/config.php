<?php
// HTTP

//$siteURL = 'http://localhost/GitHub/footlounge/';
$siteURL = 'http://oc-env.ap-south-1.elasticbeanstalk.com/';
define('HTTP_SERVER', $siteURL. 'admin/');
define('HTTP_CATALOG', $siteURL);

// HTTPS
define('HTTPS_SERVER', $siteURL.'admin/');
define('HTTPS_CATALOG', $siteURL);


$documentRoot = '/var/app/current/';
//$documentRoot = 'E:/wamp64/www/GitHub/footlounge/';


// DIR
define('DIR_APPLICATION', $documentRoot . 'admin/');
define('DIR_SYSTEM', $documentRoot . 'system/');
define('DIR_IMAGE', $documentRoot . 'image/');
define('DIR_LANGUAGE', $documentRoot . 'admin/language/');
define('DIR_TEMPLATE', $documentRoot . 'admin/view/template/');
define('DIR_CONFIG', $documentRoot . 'system/config/');
define('DIR_CACHE', $documentRoot . 'system/storage/cache/');
define('DIR_DOWNLOAD', $documentRoot . 'system/storage/download/');
define('DIR_LOGS', $documentRoot . 'system/storage/logs/');
define('DIR_MODIFICATION', $documentRoot . 'system/storage/modification/');
define('DIR_UPLOAD', $documentRoot . 'system/storage/upload/');
define('DIR_CATALOG', $documentRoot . 'catalog/');


define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'aav1q27cxggoto.cvwrkeif9dtm.ap-south-1.rds.amazonaws.com');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Welcome!23');
define('DB_DATABASE', 'endb');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');


// DB
/*define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'footlounge_oc');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');*/
