<?php require view('sabitler/ust'); ?>

	<div class="container-fluid">
		<h1 class="h3 text-gray-800 mb-1">
			Proje Detay
		</h1>
		<div class="row mt-4">
			<div class="col-12">
				<div class="form-group">
					<label for="isim">
						Proje İsmi
					</label>
					<input type="text" name="isim" value="<?=$proje['proje_adi']?>" disabled class="form-control" id="isim">
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label for="aciklama">
						Proje Açıklama
					</label>
					<textarea name="aciklama" rows="4" disabled class="form-control" id="aciklama"><?=$proje['proje_aciklama']?></textarea>
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label for="durum">
						Proje Durumu
					</label>
					<input type="text" name="durum" value="<?=$proje_durum?>" disabled class="form-control" id="durum">
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label for="olusturan">
						Proje Oluşturan
					</label>
					<input type="text" name="olusturan" value="<?=$proje['proje_olusturan']?>" disabled class="form-control" id="olusturan">
				</div>
			</div>
		</div>
	</div>

<?php require view('sabitler/alt'); ?>
