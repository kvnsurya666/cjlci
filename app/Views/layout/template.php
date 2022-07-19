<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CIPTA JAYA LESTARI</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css" />
    <link href="/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
  </head>
  <body>
    
<?= $this->include('layout/navbar'); ?>
<?= $this->renderSection('content'); ?>

  <div class="footer_agileinfo_w3">
      <div class="footer_inner_info_w3ls_agileits">
        <div class="col-md-3 footer-left">
          <!--<h2><a href="beranda"><span>T</span>Bakul Sepatu</a></h2>-->
          <h2>
            <a href="index.html">
              <img src="/assets/img/logo ciptajayalestari.PNG" style="margin-top: -10px" width="100px" />
            </a>
          </h2>
          <p><b>Metal working and machinery</b></p>
        </div>
        <div class="col-md-9 footer-right">
          <div class="sign-grds">
            <div class="col-md-4 sign-gd">
              <h4>Link <span>Terkait</span></h4>
              <ul>
                <li><a href="index.html" style="color: white">Beranda</a></li>
                <li><a href="/views/katalog/produk.php" style="color: white">Produk</a></li>
                <li><a href="/views/about/tentangkami.php" style="color: white">Tentang Kami</a></li>
              </ul>
            </div>

            <div class="col-md-5 sign-gd-two">
              <h4>Hubungi <span>Kami</span></h4>
              <div class="address">
                <div class="address-grid">
                  <div class="address-left" style="color: white; margin-left: 2px">
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                  </div>
                  <div class="address-right">
                    <h6>Layanan Pelanggan</h6>
                    <p>031 - 389 6920</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="address-grid">
                  <div class="address-left">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                  </div>
                  <div class="address-right">
                    <h6>E-mail</h6>
                    <p><a href="mailto:ciptajayalestari@gmail.com" style="color: white">ciptajayalestari@gmail.com</a></p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </body>
</html>