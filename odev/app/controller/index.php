<?php

	if (session('id'))
	{
		header('Location: ' . site_url('anasayfa'));
		exit;
	}

	$hata = null;

	if (post('giris'))
	{
		$eposta = post('eposta');
		$sifre = post('sifre');

		if (!$eposta || !$sifre)
		{
			$hata = 'Lütfen boş alan bırakmayın.';
		}
		else
		{
			$sifre = md5($sifre);

			$sql = "
				SELECT
					id,
					adsoyad
				FROM kullanicilar
				WHERE
					eposta = '{$eposta}'
					AND
					sifre = '{$sifre}'
			";

			$sorgu = $db->query($sql)->fetch(PDO::FETCH_ASSOC);

			if ($sorgu)
			{
				session_olustur([
					'id' => $sorgu['id'],
					'adsoyad' => $sorgu['adsoyad']
				]);

				header('Location:' . site_url('anasayfa'));
				exit;
			}
			else
			{
				$hata = 'E-posta adresi veya şifre yanlış.';
			}
		}
	}

	require view('index');
