<?php

	$hata = null;
	$mesaj = null;

	$projeler = [];
	$calisanlar = [];

	$sql = "
		SELECT
			id,
			isim
		FROM projeler
		ORDER BY id DESC
	";

	$queryProjeler = $db->query($sql, PDO::FETCH_ASSOC);

	if ($queryProjeler)
	{
		$projeler = $queryProjeler;
	}

	$sql = "
		SELECT
			id,
			adsoyad
		FROM calisanlar
		ORDER BY id DESC
	";

	$queryCalisanlar = $db->query($sql, PDO::FETCH_ASSOC);

	if ($queryCalisanlar)
	{
		$calisanlar = $queryCalisanlar;
	}

	if (post('ekle'))
	{
		$isim = post('isim');
		$icerik = post('icerik');
		$adam_gun = post('adam_gun');
		$proje_id = post('proje_id');
		$calisan_id = post('calisan_id');
		$tarih_baslangic = post('tarih_baslangic');
		$tarih_bitis = post('tarih_bitis');

		if (!$isim || !$icerik || !$adam_gun || !$proje_id || !$calisan_id || !$tarih_baslangic || !$tarih_bitis)
		{
			$hata = 'Lütfen boş alan bırakmayın.';
		}
		else
		{
			$sql = "
				INSERT INTO gorevler SET
				isim = ?,
				icerik = ?,
				adam_gun = ?,
				proje_id = ?,
				calisan_id = ?,
				tarih_baslangic = ?,
				tarih_bitis = ?
			";

			$query = $db->prepare($sql);

			$insert = $query->execute([
				$isim,
				$icerik,
				$adam_gun,
				$proje_id,
				$calisan_id,
				$tarih_baslangic,
				$tarih_bitis
			]);

			if ($insert)
			{
				$mesaj = 'Görev başarılı bir şekilde eklendi.';
			}
			else
			{
				$hata = 'Bir hata oluştu ve görev eklenemedi.';
			}
		}
	}

	require view('gorev-ekle');
