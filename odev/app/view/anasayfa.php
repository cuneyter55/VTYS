<?php require view('sabitler/ust'); ?>

	<div class="container-fluid">
		<h1 class="h3 text-gray-800 mb-1">
			Projeler
		</h1>
		<p class="text-gray-800">
			Kullanıcılar tarafından oluşturulan projeler.
		</p>
		<div class="row">
			<div class="col-xl-4 col-12 mb-4">
				<div class="card border-left-primary shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
									Yeni Projeler
								</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">
									<?=$projeler['yeni']?>
								</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-star fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-12 mb-4">
				<div class="card border-left-success shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
									Tamamlanan Projeler
								</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">
									<?=$projeler['tamamlanan']?>
								</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-check fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-12 mb-4">
				<div class="card border-left-danger shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
									Süresi Dolan Projeler
								</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">
									<?=$projeler['suresi_dolan']?>
								</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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
					Yeni Projeler
				</h5>
			</div>
			<div class="card-body">

				<?php if ($yeni_projeler) : ?>
			
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
										Açıklama
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

								<?php foreach ($yeni_projeler as $proje) : ?>

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
											<?=$proje['aciklama']?>
										</td>
										<td>
											<?=$proje['tarih_baslangic']?>
										</td>
										<td>
											<?=$proje['tarih_bitis']?>
										</td>
										<td class="text-center">
											<a href="<?=site_url('proje-detay/' . $proje['id'])?>" style="text-decoration: none">
												<span class="icon">
													<i class="fas fa-eye"></i>
												</span>
												<span class="text">
													Detay
												</span>
											</a>
										</td>
									</tr>

								<?php endforeach; ?>

							</tbody>
						</table>
					</div>

				<?php else : ?>

					<span>Yeni proje bulunamadı.</span>

				<?php endif; ?>

			</div>
		</div>
	</div>

<?php require view('sabitler/alt'); ?>
