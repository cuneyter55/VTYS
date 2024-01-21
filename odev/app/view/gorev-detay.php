<?php require view('sabitler/ust'); ?>

	<div class="container-fluid">
		<h1 class="h3 text-gray-800 mb-1">
			Görev Detay
		</h1>
		<div class="row mt-4">
			<div class="col-12">
				<div class="form-group">
					<label for="isim">
						Görev İsmi
					</label>
					<input type="text" name="isim" value="<?=$gorev['isim']?>" disabled class="form-control" id="isim">
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label for="icerik">
						İçerik
					</label>
					<textarea name="icerik" rows="4" disabled class="form-control" id="icerik"><?=$gorev['icerik']?></textarea>
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label for="adam_gun">
						Tahmini Gün
					</label>
					<input type="text" name="adam_gun" value="<?=$gorev['adam_gun']?>" disabled class="form-control" id="adam_gun">
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label for="proje_id">
						Proje Seçimi
					</label>
					<select name="proje_id" disabled id="proje_id" class="form-control">

						<?php foreach ($projeler as $proje) : ?>

							<option value="<?=$proje['id']?>" <?=$gorev['proje_id'] == $proje['id'] ? 'selected' : null?>>
								<?=$proje['isim']?>
							</option>

						<?php endforeach; ?>

					</select>
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label for="calisan_id">
						Çalışan Seçimi
					</label>
					<select name="calisan_id" disabled id="calisan_id" class="form-control">

						<?php foreach ($calisanlar as $calisan) : ?>

							<option value="<?=$calisan['id']?>" <?=$gorev['calisan_id'] == $calisan['id'] ? 'selected' : null?>>
								<?=$calisan['adsoyad']?>
							</option>

						<?php endforeach; ?>

					</select>
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label for="tarih_baslangic">
						Başlangıç Tarihi
					</label>
					<input type="date" name="tarih_baslangic" value="<?=$gorev['tarih_baslangic']?>" disabled class="form-control" id="tarih_baslangic">
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label for="tarih_bitis">
						Bitiş Tarihi
					</label>
					<input type="date" name="tarih_bitis" value="<?=$gorev['tarih_bitis']?>" disabled class="form-control" id="tarih_bitis">
				</div>
			</div>
		</div>
	</div>

<?php require view('sabitler/alt'); ?>
