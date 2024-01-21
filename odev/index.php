<?php

	require 'app/init.php';

	$_url = get('url');
	$_url = array_filter(explode('/', $_url));

	if (!isset($_url[0]))
	{
		$_url[0] = 'index';
	}
	else
	{
		if (!session('id') && $_url[0] != 'kayit')
		{
			header('Location:' . site_url());
			exit;
		}
	}

	if (!file_exists(controller($_url[0])))
	{
		$_url[0] = '404';
	}

	require controller($_url[0]);
