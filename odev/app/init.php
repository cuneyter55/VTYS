<?php

	function autoload($className)
	{
		$classFile = realpath('.') . '/app/classes/class.' . strtolower($className) . '.php';

		if (file_exists($classFile))
		{
			require $classFile;
		}
	}

	spl_autoload_register('autoload');

	Helper::Load();

	## Config Dosyası ##
	require 'system/config.php';
