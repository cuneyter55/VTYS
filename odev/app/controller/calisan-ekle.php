<?php

	$hata = null;
	$mesaj = null;

	if (post('ekle'))
	{
		$adsoyad = post('adsoyad');

		if (!$adsoyad)
		{
			$hata = 'Lütfen boş alan bırakmayın.';
		}
		else
		{
			$sql = "
				INSERT INTO calisanlar SET
				adsoyad = ?
			";

			$query = $db->prepare($sql);

			$insert = $query->execute([
				$adsoyad
			]);

			if ($insert)
			{
				$mesaj = 'Çalışan başarılı bir şekilde eklendi.';
			}
			else
			{
				$hata = 'Bir hata oluştu ve çalışan eklenemedi.';
			}
		}
	}

	require view('calisan-ekle');
