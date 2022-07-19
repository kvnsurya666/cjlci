<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title; ?></title>
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
    <link rel="stylesheet" href="/assets/font-awesome/font-awesome.css" />
    <link rel="stylesheet" href="/assets/font-awesome/font-awesome.min.css" />
  </head>
  <body>

<?= $this->include('layout/navbar'); ?>

<?= $this->renderSection('content'); ?>

  <div class="footer_agileinfo_w3">
      <div class="footer_inner_info_w3ls_agileits">
        <div class="row">
          <div class="col-md-3 footer-left">
            <h2>
              <a href="index.html">
                <img src="/assets/img/logo ciptajayalestari.PNG" style="margin-top: -10px" width="100px" />
              </a>
            </h2>
            <p><b>Metal working and machinery</b></p>
          </div>
          <div class="col-md-9 footer-right">
            <div class="sign-grds">
              <div class="col-md-5 sign-gd-one">
                <h4>Hubungi <span>Kami</span></h4>
                <div class="address">
                  <div class="address-grid">
                    <div class="address-left" style="color: black; margin-left: 2px">
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
              <!-- <div class="col-md-7 sign-gd-two">
                <h4>Sales <span>Kami</span></h4>
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
              </div> -->
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script>
      // Can also be used with $(document).ready()
      $(document).ready(function () {
        $(".flexslider").flexslider({
          animation: "slide",
          controlNav: "thumbnails",
        });
      });
    </script>
  </body>
</html>
