<?php

	if (session('id'))
	{
		header('Location: ' . site_url('anasayfa'));
		exit;
	}

	$hata = null;

	if (post('kayit'))
	{
		$eposta = post('eposta');
		$sifre = post('sifre');
		$adsoyad = post('adsoyad');

		if (!$eposta || !$sifre || !$adsoyad)
		{
			$hata = 'Lütfen boş alan bırakmayın.';
		}
		else
		{
			$sifre = md5($sifre);

			$sql = "
				SELECT
					id
				FROM kullanicilar
				WHERE
					eposta = '{$eposta}'
			";

			$sorgu = $db->query($sql)->fetch(PDO::FETCH_ASSOC);

			if ($sorgu)
			{
				$hata = 'E-posta adresi daha önce kullanılmış olamaz.';
			}
			else
			{
				$sql = "
					INSERT INTO kullanicilar SET
					eposta = ?,
					sifre = ?,
					adsoyad = ?
				";

				$query = $db->prepare($sql);

				$insert = $query->execute([
					$eposta,
					$sifre,
					$adsoyad
				]);

				if ($insert)
				{
					session_olustur([
						'id' => $db->lastInsertId(),
						'adsoyad' => $adsoyad
					]);
	
					header('Location:' . site_url('anasayfa'));
					exit;
				}
				else
				{
					$hata = 'Kullanıcı sisteme kayıt edilemedi.';
				}
			}
		}
	}

	require view('kayit');
