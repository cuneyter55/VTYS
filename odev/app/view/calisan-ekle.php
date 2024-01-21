<?php require view('sabitler/ust'); ?>

	<div class="container-fluid">
		<h1 class="h3 text-gray-800 mb-1">
			Çalışan Ekle
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
						<label for="adsoyad">
							Ad Soyad
						</label>
						<input type="text" name="adsoyad" class="form-control" id="adsoyad">
					</div>
				</div>
				<div class="col-12">
					<button type="submit" name="ekle" value="1" class="btn btn-primary">
						Çalışan Ekle
					</button>
				</div>
			</div>
		</form>
	</div>

<?php require view('sabitler/alt'); ?>
