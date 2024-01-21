<?php

	$calisanlar = [];

	$sql = "
		SELECT
			id,
			adsoyad,
			tarih
		FROM calisanlar
		ORDER BY
			id DESC
	";

	$query = $db->query($sql, PDO::FETCH_ASSOC);

	if ($query->rowCount())
	{
		$calisanlar = $query;
	}

	require view('calisanlar');
