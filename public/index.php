<?php
$config=dirname(__FILE__).'/../protected/config/main.php';

if ($_SERVER['SERVER_NAME'] == 'devel') {
    $config = dirname(__FILE__) . '/../protected/config/devel.php';
    $yii='/usr/share/php/libs/yii/1.1.13/yii.php';
    defined('YII_DEBUG') or define('YII_DEBUG', true);
}
else if ($_SERVER['SERVER_NAME'] == 'sptd.artektiv.ru') {
    $config = dirname(__FILE__) . '/../protected/config/artektiv.php';
    $yii='/usr/share/php/libs/yii/1.1.13/yii.php';
}

defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();