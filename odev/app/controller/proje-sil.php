<?php

	$id = url(1);

	if (!$id)
	{
		header('Location:' . site_url('projeler'));
		exit;
	}

	$proje = null;
	$hata = false;

	$sql = "
		SELECT isim
		FROM projeler
		WHERE id = '{$id}'
	";

	$query = $db->query($sql)->fetch(PDO::FETCH_ASSOC);

	if ($query)
	{
		$proje = $query['isim'];
		
		$sql = "
			DELETE FROM projeler
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
		else
		{
			$sql = "
				DELETE FROM gorevler
				WHERE proje_id = :proje_id
			";

			$query = $db->prepare($sql);

			$delete = $query->execute([
				'proje_id' => $id
			]);

			if (!$delete)
			{
				$hata = true;
			}
		}
	}

	require view('proje-sil');
