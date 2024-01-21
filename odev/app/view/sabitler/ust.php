<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ödev</title>

    <link href="<?=asset_url('vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?=asset_url('css/sb-admin-2.min.css')?>" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a href="<?=site_url('anasayfa')?>" class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">
					Ödev
				</div>
            </a>
			<div class="sidebar-heading">
                Menü
			</div>
            <li class="nav-item <?=url(0) == 'anasayfa' ? 'active' : null?>">
                <a href="<?=site_url('anasayfa')?>" class="nav-link">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Anasayfa</span>
				</a>
            </li>
            <li class="nav-item <?=url(0) == 'projeler' || url(0) == 'proje-ekle' || url(0) == 'proje-detay' || url(0) == 'proje-sil' ? 'active' : null?>">
                <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#projeler" aria-expanded="true" aria-controls="projeler">
                    <i class="fas fa-fw fa-paperclip"></i>
                    <span>Projeler</span>
                </a>
                <div id="projeler" class="collapse <?=url(0) == 'projeler' || url(0) == 'proje-ekle' || url(0) == 'proje-detay' || url(0) == 'proje-sil' ? 'show' : null?>">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a href="<?=site_url('projeler')?>" class="collapse-item <?=url(0) == 'projeler' ? 'active' : null?>">
							Proje Listesi
						</a>
                        <a href="<?=site_url('proje-ekle')?>" class="collapse-item <?=url(0) == 'proje-ekle' ? 'active' : null?>">
							Proje Ekle
						</a>
                    </div>
                </div>
            </li>
			<li class="nav-item <?=url(0) == 'gorevler' || url(0) == 'gorev-ekle' || url(0) == 'gorev-detay' || url(0) == 'gorev-sil' ? 'active' : null?>">
                <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#gorevler" aria-expanded="true" aria-controls="gorevler">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>Görevler</span>
                </a>
                <div id="gorevler" class="collapse <?=url(0) == 'gorevler' || url(0) == 'gorev-ekle' || url(0) == 'gorev-detay' || url(0) == 'gorev-sil' ? 'show' : null?>">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a href="<?=site_url('gorevler')?>" class="collapse-item <?=url(0) == 'gorevler' ? 'active' : null?>">
							Görev Listesi
						</a>
                        <a href="<?=site_url('gorev-ekle')?>" class="collapse-item <?=url(0) == 'gorev-ekle' ? 'active' : null?>">
							Görev Ekle
						</a>
                    </div>
                </div>
            </li>
			<li class="nav-item <?=url(0) == 'calisanlar' || url(0) == 'calisan-ekle' || url(0) == 'calisan-duzenle' || url(0) == 'calisan-sil' ? 'active' : null?>">
                <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#calisanlar" aria-expanded="true" aria-controls="calisanlar">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Çalışanlar</span>
                </a>
                <div id="calisanlar" class="collapse <?=url(0) == 'calisanlar' || url(0) == 'calisan-ekle' || url(0) == 'calisan-duzenle' || url(0) == 'calisan-sil' ? 'show' : null?>">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a href="<?=site_url('calisanlar')?>" class="collapse-item <?=url(0) == 'calisanlar' ? 'active' : null?>">
							Çalışan Listesi
						</a>
                        <a href="<?=site_url('calisan-ekle')?>" class="collapse-item <?=url(0) == 'calisan-ekle' ? 'active' : null?>">
							Çalışan Ekle
						</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-inline text-gray-600 small">
									<?=session('adsoyad')?>
								</span>
                                <img src="<?=asset_url('img/undraw_profile.svg')?>" class="img-profile rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a href="<?=site_url('cikis')?>" class="dropdown-item">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Çıkış Yap
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
