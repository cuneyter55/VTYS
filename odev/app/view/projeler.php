<?php require view('sabitler/ust'); ?>

	<div class="container-fluid">
		<h1 class="h3 text-gray-800 mb-1">
			Projeler
		</h1>
		<div class="row">
			<div class="col-12">
				<a href="<?=site_url('proje-ekle')?>" class="btn btn-primary btn-icon-split">
					<span class="icon text-white-50">
						<i class="fas fa-plus"></i>
					</span>
					<span class="text">Proje Ekle</span>
				</a>
			</div>
		</div>
		<div class="card mt-4">
			<div class="card-header">
				<h5 class="h5 text-gray-800 mb-1">
					Proje Listesi
				</h5>
			</div>
			<div class="card-body">

				<?php if ($projeler) : ?>
			
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th class="text-center">
										#ID
									</th>
									<th>
										Projeyi Oluşturan
									</th>
									<th>
										Proje Adı
									</th>
									<th>
										Durum
									</th>
									<th>
										Gecikme
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

								<?php foreach ($projeler as $proje) : ?>

									<tr>
										<td class="text-center">
											<?=$proje['id']?>
										</td>
										<td>
											<?=$proje['proje_olusturan']?>
										</td>
										<td>
											<?=$proje['proje_adi']?>
										</td>
										<td>
											<div class="badge badge-<?=$proje['proje_durum']['sinif']?>">
												<?=$proje['proje_durum']['icerik']?>
											</div>
										</td>
										<td>
											<?=$proje['gecikme'] ? $proje['gecikme'] : 'Yok'?>
										</td>
										<td>
											<?=$proje['tarih_baslangic']?>
										</td>
										<td>
											<?=$proje['tarih_bitis']?>
										</td>
										<td class="text-center">
											<a href="<?=site_url('proje-detay/' . $proje['id'])?>" class="mr-3" style="text-decoration: none">
												<span class="icon">
													<i class="fas fa-eye"></i>
												</span>
												<span class="text">
													Detay
												</span>
											</a>
											<a href="<?=site_url('proje-sil/' . $proje['id'])?>" class="text-danger" style="text-decoration: none">
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
