<?php

	function session($par)
	{
		if (isset($_SESSION[$par]))
		{
			return $_SESSION[$par];
		}
		else
		{
			return false;
		}
	}

	function session_olustur($par)
	{
		foreach ($par as $anahtar => $deger)
		{
			$_SESSION[$anahtar] = $deger;
		}
	}
