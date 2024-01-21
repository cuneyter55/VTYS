<?php

	$id = url(1);
	$proje_durum = null;

	if (!$id)
	{
		header('Location:' . site_url('projeler'));
		exit;
	}

	$proje = [];

	$sql = "
		SELECT
			p.isim AS proje_adi,
			p.aciklama AS proje_aciklama,
			g.adam_gun AS adam_gun,
			g.durum AS durum,
			g.tarih_baslangic AS tarih_baslangic,
			g.tarih_bitis AS tarih_bitis,
			k.adsoyad AS proje_olusturan
		FROM projeler p
		LEFT JOIN gorevler g ON g.proje_id = p.id
		INNER JOIN kullanicilar k ON k.id = p.kullanici_id
		WHERE p.id = '{$id}'
	";

	$query = $db->query($sql)->fetch(PDO::FETCH_ASSOC);

	if ($query)
	{
		$proje = $query;

		$adam_gun = $proje['adam_gun'];
		$durum = $proje['durum'];
		$tarih_baslangic = new DateTime($proje['tarih_baslangic']);

		$bugun = new DateTime('now');
		$yeni_proje = $bugun->diff($tarih_baslangic);

		// Yeni Proje
		if (($yeni_proje->days >= 0 && $yeni_proje->days <= 7) && $durum != 3)
		{
			$proje_durum = 'Yeni Proje';
		}

		// Tamamlanan Proje
		if ($durum == 3 && $proje['tarih_bitis'])
		{
			$proje_durum = 'Tamamlanmış Proje';
		}

		// Süresi Dolan Proje
		if ($proje['tarih_bitis'])
		{
			$tarih_bitis = new DateTime($proje['tarih_bitis']);
			$fark = $tarih_bitis->diff($tarih_baslangic);

			if ($fark->days > $adam_gun)
			{
				$proje_durum = 'Süresi Dolan Proje';
			}
		}
	}

	require view('proje-detay');
