<?php

	$gorevler = [];

	$sql = "
		SELECT
			g.id AS id,
			g.isim AS gorev_isim,
			g.tarih_baslangic AS tarih_baslangic,
			g.tarih_bitis AS tarih_bitis,
			p.isim AS proje_isim,
			c.adsoyad AS calisan_adsoyad,
			d.isim AS durum_isim,
			d.renk AS durum_renk
		FROM gorevler g
		LEFT JOIN projeler p ON p.id = g.proje_id
		INNER JOIN calisanlar c ON c.id = g.calisan_id
		INNER JOIN durumlar d ON d.id = g.durum
		ORDER BY
			g.id DESC
	";

	$query = $db->query($sql, PDO::FETCH_ASSOC);

	if ($query->rowCount())
	{
		$gorevler = $query;
	}

	require view('gorevler');
