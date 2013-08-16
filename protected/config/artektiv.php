<?php
return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components' => array(
			'db' => array(
                'connectionString' => 'mysql:host=10.10.10.26;dbname=gos_services;',
                'username'=>'artektiv',
                'password'=>'7SBNYFUS4w',

                'charset' => 'utf8',
                'schemaCachingDuration' => 3600,
                'enableParamLogging' => false,
                'enableProfiling' => false,
            ),
		),

		'params' => array(
			'adminEmail' => 'webmaster@artektiv.ru',
		),
	)
);