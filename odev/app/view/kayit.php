<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Kayıt - Ödev</title>

    <link href="<?=asset_url('vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?=asset_url('css/sb-admin-2.min.css')?>" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-12">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">
											Kayıt Ol
										</h1>
										<p>
											Lütfen gerekli bilgilerinizi girin.
										</p>
                                    </div>

									<?php if ($hata) : ?>

										<div class="alert alert-danger">
											<?=$hata?>
										</div>

									<?php endif; ?>

                                    <form action="" method="post" class="user">
										<div class="form-group">
											<input type="text" name="adsoyad" value="<?=post('adsoyad')?>" placeholder="Ad Soyad" class="form-control form-control-user">
										</div>
                                        <div class="form-group">
                                            <input type="email" name="eposta" value="<?=post('eposta')?>" placeholder="E-posta Adresi" class="form-control form-control-user">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="sifre" placeholder="Şifre" class="form-control form-control-user">
                                        </div>
                                        <button type="submit" name="kayit" value="1" class="btn btn-primary btn-user btn-block">
                                            Kayıt Ol
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a href="<?=site_url()?>" class="small">
											Zaten hesabınız var mı? Giriş Yap!
										</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?=asset_url('vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?=asset_url('vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?=asset_url('vendor/jquery-easing/jquery.easing.min.js')?>"></script>
    <script src="<?=asset_url('js/sb-admin-2.min.js')?>"></script>
</body>
</html>
