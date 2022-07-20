<nav class="navbar-dark sticky-top bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-1">
            <a class="navbar-brand" href="#" style="padding-top: 10px; padding-bottom: 10px">
              <img src="/img/logo ciptajayalestari.PNG" alt="" width="100" height="50" />
            </a>
          </div>

          <div class="col-md-11" id="navbarNav">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link active" href="<?= base_url('/'); ?>">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Katalog</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= base_url('/pages/mesin'); ?>">Mesin</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('/pages/oli'); ?>">Oli</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('/pages/aksesoris'); ?>">Aksesoris</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('/pages/jasa'); ?>">Jasa</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/pages/tentangkami'); ?>">Tentang Kami</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>