<?php

	$id = url(1);

	if (!$id)
	{
		header('Location:' . site_url('gorevler'));
		exit;
	}

	$gorev = [];

	$sql = "
		SELECT
			isim,
			icerik,
			adam_gun,
			proje_id,
			calisan_id,
			tarih_baslangic,
			tarih_bitis
		FROM gorevler
		WHERE id = '{$id}'
	";

	$query = $db->query($sql)->fetch(PDO::FETCH_ASSOC);

	if ($query)
	{
		$gorev = $query;
	}

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



	require view('gorev-detay');
