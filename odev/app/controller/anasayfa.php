<?php

	$projeler = [
		'yeni' => 0,
		'tamamlanan' => 0,
		'suresi_dolan' => 0
	];

	$yeni_projeler = [];

	$sql = "
		SELECT
			p.id AS id,
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
		ORDER BY
			p.id DESC,
			g.id DESC
	";

	$query = $db->query($sql, PDO::FETCH_ASSOC);

	if ($query->rowCount())
	{
		foreach ($query as $row)
		{
			$id = $row['id'];

			$adam_gun = $row['adam_gun'];
			$durum = $row['durum'];
			$tarih_baslangic = new DateTime($row['tarih_baslangic']);

			$bugun = new DateTime('now');
			$yeni_proje = $bugun->diff($tarih_baslangic);
 
			// Yeni Proje
			if (($yeni_proje->days >= 0 && $yeni_proje->days <= 7) && $durum != 3)
			{
				$projeler['yeni'] += 1;

				$yeni_projeler[] = [
					'id' => $row['id'],
					'proje_olusturan' => $row['proje_olusturan'],
					'proje_adi' => $row['proje_adi'],
					'aciklama' => $row['proje_aciklama'],
					'tarih_baslangic' => date('d/m/Y', strtotime($row['tarih_baslangic'])),
					'tarih_bitis' => $row['tarih_bitis'] ? date('d/m/Y', strtotime($row['tarih_bitis'])) : 'Belirtilmemiş'
				];
			}

			// Tamamlanan Proje
			if ($durum == 3 && $row['tarih_bitis'])
			{
				$projeler['tamamlanan'] += 1;
			}

			// Süresi Dolan Proje
			if ($row['tarih_bitis'])
			{
				$tarih_bitis = new DateTime($row['tarih_bitis']);
				$fark = $tarih_bitis->diff($tarih_baslangic);

				if ($fark->days > $adam_gun)
				{
					$projeler['suresi_dolan'] += 1;
				}
			}
		}
	}

	require view('anasayfa');
