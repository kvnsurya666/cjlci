<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
      <div id="carouselSlide" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/slider1.jpg" class="d-block w-100" alt="Gambar 1" />
          </div>
          <div class="carousel-item">
            <img src="/img/slider2.jpg" class="d-block w-100" alt="Gambar 2" />
          </div>
          <div class="carousel-item">
            <img src="/img/slider3.jpg" class="d-block w-100" alt="Gambar 3" />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlide" data-bs-slide="prev">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselSlide" data-bs-slide="next">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </button>
      </div>
         </div>

<section class="showcase">
      <div class="container-fluid p-0">
        <div class="row g-0">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="<?= base_url('/public/img/machine.jpg'); ?>"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h3>Machinery</h3>
            <p>Ingin cari macam - macam mesin?</p>
            <div class="shop-button">
              <a href="pages/mesin">Lihat Disini</a>
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('public/img/oli.jpg')"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h3>Oil</h3>
            <p>Ingin cari macam - macam oli?</p>
            <div class="shop-button">
              <a href="pages/oli">Lihat Disini</a>
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('public/img/aksesoris.jpg')"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h3>Accesories</h3>
            <p>Ingin cari macam - macam aksesoris?</p>
            <div class="shop-button">
              <a href="pages/aksesoris">Lihat Disini</a>
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('public/img/jasa.jpg')"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h3>Jasa</h3>
            <p>Ingin cari jasa instalasi dan perbaikan mesin bubut?</p>
            <div class="shop-button">
              <a href="pages/jasa">Lihat Disini</a>
            </div>
          </div>
        </div>
      </div>
    </section>
<?= $this->endSection(); ?>