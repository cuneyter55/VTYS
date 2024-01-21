<?php

	## Bağlantı Değişkenleri ##
	$config['db'] = [
		'host' => 'localhost',
		'name' => 'odev',
		'user' => 'root',
		'pass' => ''
	];

	## MySQL Bağlantısı ##
	global $db;

	try
	{
		$db = new PDO('mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'], $config['db']['user'], $config['db']['pass']);
	}
	catch (PDOException $e)
	{
		print $e->getMessage();
	}

	$db->query('SET CHARACTER SET utf8');
