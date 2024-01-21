<?php

	$id = url(1);

	if (!$id)
	{
		header('Location:' . site_url('gorevler'));
		exit;
	}

	$gorev = null;
	$hata = false;

	$sql = "
		SELECT isim
		FROM gorevler
		WHERE id = '{$id}'
	";

	$query = $db->query($sql)->fetch(PDO::FETCH_ASSOC);

	if ($query)
	{
		$gorev = $query['isim'];
		
		$sql = "
			DELETE FROM gorevler
			WHERE id = :id
		";

		$query = $db->prepare($sql);

		$delete = $query->execute([
			'id' => $id
		]);

		if (!$delete)
		{
			$hata = true;
		}
	}

	require view('gorev-sil');
