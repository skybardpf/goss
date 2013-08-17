<?php
$yii='yii.php';

$config=dirname(__FILE__).'/../protected/config/main.php';
if ($_SERVER['SERVER_NAME'] == 'devel') {
    $config = dirname(__FILE__) . '/../protected/config/devel.php';
    defined('YII_DEBUG') or define('YII_DEBUG', true);
}
else if ($_SERVER['SERVER_NAME'] == 'gs.artektiv.ru') {
    $config = dirname(__FILE__) . '/../protected/config/artektiv.php';
    $yii='yii.php';
} else {
    $config=dirname(__FILE__).'/../protected/config/main.php';
}

defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();