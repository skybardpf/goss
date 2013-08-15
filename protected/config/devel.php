<?php
return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components' => array(
			'db' => array(
				'connectionString' => 'mysql:host=192.168.0.205;dbname=gos_services',
                'emulatePrepare' => true,
                'username' => 'artektiv',
                'password' => 'qazwsxedc',
                'charset' => 'utf8',
            ),
		),

		'params' => array(
			'adminEmail' => 'webmaster@artektiv.ru',
		),
	)
);