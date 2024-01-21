<?php require view('sabitler/ust'); ?>

	<div class="container-fluid">
		<h1 class="h3 text-gray-800 mb-1">
			Görev Ekle
		</h1>

		<?php if ($hata) : ?>

			<div class="row mt-4">
				<div class="col-12">
					<div class="alert alert-danger">
						<?=$hata?>
					</div>
				</div>
			</div>

		<?php else: ?>

			<?php if ($mesaj) : ?>

				<div class="row mt-4">
					<div class="col-12">
						<div class="alert alert-success">
							<?=$mesaj?>
						</div>
					</div>
				</div>

			<?php endif; ?>

		<?php endif; ?>

		<form action="" method="post">
			<div class="row mt-4">
				<div class="col-12">
					<div class="form-group">
						<label for="isim">
							Görev İsmi
						</label>
						<input type="text" name="isim" class="form-control" id="isim">
					</div>
				</div>
				<div class="col-12">
					<div class="form-group">
						<label for="icerik">
							İçerik
						</label>
						<textarea name="icerik" rows="4" class="form-control" id="icerik"></textarea>
					</div>
				</div>
				<div class="col-12">
					<div class="form-group">
						<label for="adam_gun">
							Tahmini Gün
						</label>
						<input type="text" name="adam_gun" class="form-control" id="adam_gun">
					</div>
				</div>
				<div class="col-12">
					<div class="form-group">
						<label for="proje_id">
							Proje Seçimi
						</label>
						<select name="proje_id" id="proje_id" class="form-control">

							<?php foreach ($projeler as $proje) : ?>

								<option value="<?=$proje['id']?>">
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
						<select name="calisan_id" id="calisan_id" class="form-control">

							<?php foreach ($calisanlar as $calisan) : ?>

								<option value="<?=$calisan['id']?>">
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
						<input type="date" name="tarih_baslangic" class="form-control" id="tarih_baslangic">
					</div>
				</div>
				<div class="col-12">
					<div class="form-group">
						<label for="tarih_bitis">
							Bitiş Tarihi
						</label>
						<input type="date" name="tarih_bitis" class="form-control" id="tarih_bitis">
					</div>
				</div>
				<div class="col-12">
					<button type="submit" name="ekle" value="1" class="btn btn-primary">
						Görev Ekle
					</button>
				</div>
			</div>
		</form>
	</div>

<?php require view('sabitler/alt'); ?>
