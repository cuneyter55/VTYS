<?php require view('sabitler/ust'); ?>

	<div class="container-fluid">
		<h1 class="h3 text-gray-800 mb-1">
			Çalışanlar
		</h1>
		<div class="row">
			<div class="col-12">
				<a href="<?=site_url('calisan-ekle')?>" class="btn btn-primary btn-icon-split">
					<span class="icon text-white-50">
						<i class="fas fa-plus"></i>
					</span>
					<span class="text">Çalışan Ekle</span>
				</a>
			</div>
		</div>
		<div class="card mt-4">
			<div class="card-header">
				<h5 class="h5 text-gray-800 mb-1">
					Çalışan Listesi
				</h5>
			</div>
			<div class="card-body">

				<?php if ($calisanlar) : ?>

					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th class="text-center">
										#ID
									</th>
									<th>
										Ad Soyad
									</th>
									<th>
										Oluşturulma Tarihi
									</th>
									<th class="text-center">
										İşlem
									</th>
								</tr>
							</thead>
							<tbody>

								<?php foreach ($calisanlar as $calisan) : ?>

									<tr>
										<td class="text-center">
											<?=$calisan['id']?>
										</td>
										<td>
											<?=$calisan['adsoyad']?>
										</td>
										<td>
											<?=date('d/m/Y H:i:s', strtotime($calisan['tarih']))?>
										</td>
										<td class="text-center">
											<a href="<?=site_url('calisan-duzenle/' . $calisan['id'])?>" class="mr-3" style="text-decoration: none">
												<span class="icon">
													<i class="fas fa-edit"></i>
												</span>
												<span class="text">
													Düzenle
												</span>
											</a>
											<a href="<?=site_url('calisan-sil/' . $calisan['id'])?>" class="text-danger" style="text-decoration: none">
												<span class="icon">
													<i class="fas fa-trash"></i>
												</span>
												<span class="text">
													Sil
												</span>
											</a>
										</td>
									</tr>

								<?php endforeach; ?>

							</tbody>
						</table>
					</div>

				<?php else : ?>

					<span>Kayıtlı çalışan bulunamadı.</span>

				<?php endif; ?>

			</div>
		</div>
	</div>

<?php require view('sabitler/alt'); ?>
