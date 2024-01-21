<?php

	$hata = null;
	$mesaj = null;

	$id = url(1);

	if (!$id)
	{
		header('Location:' . site_url('calisanlar'));
		exit;
	}

	$calisan = [];

	$sql = "
		SELECT
			adsoyad,
			tarih
		FROM calisanlar
		WHERE id = '{$id}'
	";

	$query = $db->query($sql)->fetch(PDO::FETCH_ASSOC);

	if ($query)
	{
		$calisan = $query;

		$calisan['tarih'] = date('d/m/Y H:i:s', strtotime($calisan['tarih']));
	}

	if (post('duzenle'))
	{
		$adsoyad = post('adsoyad');

		if (!$adsoyad)
		{
			$hata = 'Lütfen boş alan bırakmayın.';
		}
		else
		{
			$sql = "
				UPDATE calisanlar SET
				adsoyad = :adsoyad
				WHERE id = :id
			";

			$query = $db->prepare($sql);

			$update = $query->execute([
				'adsoyad' => $adsoyad,
				'id' => $id
			]);

			if ($update)
			{
				$mesaj = 'Çalışan başarılı bir şekilde düzenlendi.';
			}
			else
			{
				$hata = 'Bir hata oluştu ve çalışan düzenlenemedi.';
			}
		}
	}

	require view('calisan-duzenle');
