<?php

	$id = url(1);

	if (!$id)
	{
		header('Location:' . site_url('calisanlar'));
		exit;
	}

	$calisan = null;
	$hata = false;

	$sql = "
		SELECT adsoyad
		FROM calisanlar
		WHERE id = '{$id}'
	";

	$query = $db->query($sql)->fetch(PDO::FETCH_ASSOC);

	if ($query)
	{
		$calisan = $query['adsoyad'];
		
		$sql = "
			DELETE FROM calisanlar
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
				WHERE calisan_id = :calisan_id
			";

			$query = $db->prepare($sql);

			$delete = $query->execute([
				'calisan_id' => $id
			]);

			if (!$delete)
			{
				$hata = true;
			}
		}
	}

	require view('calisan-sil');
