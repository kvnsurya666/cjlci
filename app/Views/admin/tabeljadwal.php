<html lang="en">
<?php
include "koneksi.php";
?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  

  <title>Museum Teknoform</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        
        <div class="sidebar-brand-text mx-3">Museum Teknoform</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="tabeladmin.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Daftar Admin</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="tabeljadwal.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Penjadwalan</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="tabelpengunjung.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Daftar Pengunjung</span></a>
      </li>

      
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="periode.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Laporan Pengunjung</span></a>
      </li>
      
      


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-gradient-primary topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            

            <!-- Nav Item - Alerts -->
            

            <!-- Nav Item - Messages -->
            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white-600 medium">Galih</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Jadwal Kunjungan</h1>
          <div class="card shadow mb-12">
            <div class="card-header py-12">
            <a href="form_jadwal.php" class="w3-button w3-teal">Tambah Data</a>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kode Jadwal</th>
                      <th>Tanggal</th>
                      <th>Nama Pengunjung</th>
                      <th>Instansi</th>
                      <th>E-mail Pengunjung</th>
                      <th>Jumlah Pengunjung</th>
                      <th>Nomor Telp Pengunjung</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Kode Jadwal</th>
                      <th>Tanggal</th>
                      <th>Nama Pengunjung</th>
                      <th>Instansi</th>
                      <th>E-mail Pengunjung</th>
                      <th>Jumlah Pengunjung</th>
                      <th>Nomor Telp Pengunjung</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
                  $sql = "SELECT * FROM jadwal";
                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0) {
                   // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                    $kode = $row["kd_jadwal"];
                    $tanggal = $row["tanggal"];
                    $nama = $row["namapengunjung"];
                    $instansi = $row["instansi"];
                    $email = $row["emailpengunjung"];
                    $jumlah = $row["jumlahpengunjung"];
                    $nomortelp = $row["nomortelp_pengunjung"];
                    
                    
                    echo "<tr>";
                    echo "<td>". $row["kd_jadwal"]."</td>";
                    echo "<td>". $row["tanggal"]."</td>";
                    echo "<td>". $row["namapengunjung"]."</td>";
                    echo "<td>". $row["instansi"]."</td>";
                    echo "<td>". $row["emailpengunjung"]."</td>";
                    echo "<td>". $row["jumlahpengunjung"]."</td>";
                    echo "<td>". $row["nomortelp_pengunjung"]."</td>";
                   
                    
                    echo "<td> <a href=\"form_jadwal.php?kd_jadwal=$kode&tanggal=$tanggal&namapengunjung=$nama&instansi=$instansi&emailpengunjung=$email&jumlahpengunjung=$jumlah&nomortelp_pengunjung=$nomortelp\" class=\"w3-button w3-teal w3-tiny w3-card-3\"><i class='far fa-edit' style='font-size:24px'></i></a>";
                    echo "<a href=\"input_jadwal.php?kd_jadwal=$kode\" class=\"w3-button w3-red w3-tiny w3-card-3\"><i class='fas fa-trash' style='font-size:24px;color:white'></i></a></td>";
                    echo "</tr>";
                  }
                  } else {
                  echo "0 results";
                  }

                  mysqli_close($conn);
                  ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          

          
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin Logout?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Klik "Logout" jika anda benar - benar ingin keluar.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="js/demo/chart-pie-demo1.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>

</body>

</html>