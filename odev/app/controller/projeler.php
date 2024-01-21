<?php

	$projeler = [];

	$sql = "
		SELECT
			p.id AS id,
			p.isim AS proje_adi,
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
			$proje_durum = null;
			$gecikme = null;

			$adam_gun = $row['adam_gun'];
			$durum = $row['durum'];
			$tarih_baslangic = new DateTime($row['tarih_baslangic']);

			$bugun = new DateTime('now');
			$yeni_proje = $bugun->diff($tarih_baslangic);
 
			// Yeni Proje
			if (($yeni_proje->days >= 0 && $yeni_proje->days <= 7) && $durum != 3)
			{
				$proje_durum = [
					'sinif' => 'primary',
					'icerik' => 'Yeni Proje'
				];
			}

			// Tamamlanan Proje
			if ($durum == 3 && $row['tarih_bitis'])
			{
				$proje_durum = [
					'sinif' => 'success',
					'icerik' => 'Tamamlanmış Proje'
				];
			}

			// Süresi Dolan Proje
			if ($row['tarih_bitis'])
			{
				$tarih_bitis = new DateTime($row['tarih_bitis']);
				$fark = $tarih_bitis->diff($tarih_baslangic);

				if ($fark->days > $adam_gun)
				{
					$proje_durum = [
						'sinif' => 'danger',
						'icerik' => 'Süresi Dolan Proje'
					];

					$gecikme = $fark->days - $adam_gun;
				}
			}

			$projeler[] = [
				'id' => $row['id'],
				'proje_olusturan' => $row['proje_olusturan'],
				'proje_adi' => $row['proje_adi'],
				'proje_durum' => $proje_durum,
				'gecikme' => $gecikme,
				'tarih_baslangic' => $row['tarih_baslangic'] ? date('d/m/Y', strtotime($row['tarih_baslangic'])) : 'Belirtilmemiş',
				'tarih_bitis' => $row['tarih_bitis'] ? date('d/m/Y', strtotime($row['tarih_bitis'])) : 'Belirtilmemiş'
			];
		}
	}

	require view('projeler');
