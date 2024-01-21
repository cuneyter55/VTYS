<?php

	session_start();
	ob_start('ob_gzhandler');

	## Hataları Gizle ##
	//error_reporting(0);

	$config = array();

	## Veritabanı ##
	require 'database.php';
	
	## Zaman Dilimi ##
	date_default_timezone_set('Europe/Istanbul');

	## Sabitler ##
	define('dir', realpath('.'));
	define('controller', dir . '/app/controller');
	define('view', dir . '/app/view');
	define('url', 'http://' . $_SERVER['SERVER_NAME'] . '/projects/odev');
