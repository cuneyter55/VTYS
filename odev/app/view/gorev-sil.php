<?php require view('sabitler/ust'); ?>

<div class="container-fluid">
	<h1 class="h3 text-gray-800 mb-1">
		Görev Silme
	</h1>
	<div class="row">
		<div class="col-12 mt-4">
			
			<?php if ($hata) : ?>

				<div class="alert alert-danger">
					Bir hata oluştu ve "<?=$gorev?>" isimli görev silinemedi.
				</div>

			<?php else : ?>

				<div class="alert alert-success">
					"<?=$gorev?>" isimli görev başarıyla silindi.
				</div>

			<?php endif; ?>

		</div>
	</div>
</div>

<?php require view('sabitler/alt'); ?>
