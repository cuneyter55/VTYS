<?php require view('sabitler/ust'); ?>

	<div class="container-fluid">
		<h1 class="h3 text-gray-800 mb-1">
			Proje Ekle
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
							Proje İsmi
						</label>
						<input type="text" name="isim" class="form-control" id="isim">
					</div>
				</div>
				<div class="col-12">
					<div class="form-group">
						<label for="aciklama">
							Proje Açıklama
						</label>
						<textarea name="aciklama" rows="4" class="form-control" id="aciklama"></textarea>
					</div>
				</div>
				<div class="col-12">
					<div class="form-group">
						<label for="olusturan">
							Proje Oluşturan
						</label>
						<input type="text" name="olusturan" value="<?=$olusturan_adsoyad?>" disabled class="form-control" id="olusturan">
					</div>
				</div>
				<div class="col-12">
					<button type="submit" name="ekle" value="1" class="btn btn-primary">
						Proje Ekle
					</button>
				</div>
			</div>
		</form>
	</div>

<?php require view('sabitler/alt'); ?>
