<?php require view('sabitler/ust'); ?>

	<div class="container-fluid">
		<h1 class="h3 text-gray-800 mb-1">
			Görevler
		</h1>
		<div class="row">
			<div class="col-12">
				<a href="<?=site_url('gorev-ekle')?>" class="btn btn-primary btn-icon-split">
					<span class="icon text-white-50">
						<i class="fas fa-plus"></i>
					</span>
					<span class="text">Görev Ekle</span>
				</a>
			</div>
		</div>
		<div class="card mt-4">
			<div class="card-header">
				<h5 class="h5 text-gray-800 mb-1">
					Görev Listesi
				</h5>
			</div>
			<div class="card-body">

				<?php if ($gorevler) : ?>

					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th class="text-center">
										#ID
									</th>
									<th>
										Görev Adı
									</th>
									<th>
										Proje
									</th>
									<th>
										Çalışan
									</th>
									<th>
										Durum
									</th>
									<th>
										Başlangıç Tarihi
									</th>
									<th>
										Bitiş Tarihi
									</th>
									<th class="text-center">
										İşlem
									</th>
								</tr>
							</thead>
							<tbody>

								<?php foreach ($gorevler as $gorev) : ?>

									<tr>
										<td class="text-center">
											<?=$gorev['id']?>
										</td>
										<td>
											<?=$gorev['gorev_isim']?>
										</td>
										<td>
											<?=$gorev['proje_isim']?>
										</td>
										<td>
											<?=$gorev['calisan_adsoyad']?>
										</td>
										<td>
											<div class="badge badge-<?=$gorev['durum_renk']?>">
												<?=$gorev['durum_isim']?>
											</div>
										</td>
										<td>
											<?=$gorev['tarih_baslangic']?>
										</td>
										<td>
											<?=$gorev['tarih_bitis'] ? $gorev['tarih_bitis'] : 'Belirtilmemiş'?>
										</td>
										<td class="text-center">
											<a href="<?=site_url('gorev-detay/' . $gorev['id'])?>" class="mr-3" style="text-decoration: none">
												<span class="icon">
													<i class="fas fa-eye"></i>
												</span>
												<span class="text">
													Detay
												</span>
											</a>
											<a href="<?=site_url('gorev-sil/' . $gorev['id'])?>" class="text-danger" style="text-decoration: none">
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

					<span>Kayıtlı proje bulunamadı.</span>

				<?php endif; ?>

			</div>
		</div>
	</div>

<?php require view('sabitler/alt'); ?>
