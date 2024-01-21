<?php

	$hata = null;
	$mesaj = null;

	$olusturan_id = session('id');
	$olusturan_adsoyad = session('adsoyad');

	if (post('ekle'))
	{
		$isim = post('isim');
		$aciklama = post('aciklama');

		if (!$isim || !$aciklama)
		{
			$hata = 'Lütfen boş alan bırakmayın.';
		}
		else
		{
			$sql = "
				INSERT INTO projeler SET
				isim = ?,
				aciklama = ?,
				kullanici_id = ?
			";

			$query = $db->prepare($sql);

			$insert = $query->execute([
				$isim,
				$aciklama,
				$olusturan_id
			]);

			if ($insert)
			{
				$mesaj = 'Proje başarılı bir şekilde eklendi.';
			}
			else
			{
				$hata = 'Bir hata oluştu ve proje eklenemedi.';
			}
		}
	}

	require view('proje-ekle');
