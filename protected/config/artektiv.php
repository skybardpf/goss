<?php
return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components' => array(
			'db' => array(
				'connectionString' => 'mysql:host=localhost;dbname=testdrive',
                'emulatePrepare' => true,
                'username' => 'testdrive',
                'password' => 'testdrive',
                'charset' => 'utf8',
            ),
		),

		'params' => array(
			'adminEmail' => 'webmaster@artektiv.ru',
		),
	)
);