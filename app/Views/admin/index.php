<!DOCTYPE html>
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

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">


<?php

  $sqlSwasta = "select count(*) AS Jumlah from kunjungan where pekerjaan = 'Swasta'";
  $resultCari = mysqli_query($conn, $sqlSwasta);
  $rowCari = mysqli_fetch_assoc($resultCari); 
            $pekerjaan = $rowCari["Jumlah"];
  
  
  $sqlPNS = "select count(*) AS Jumlah from kunjungan where pekerjaan = 'PNS'";
  $resultCari2 = mysqli_query($conn, $sqlPNS);
  $rowCari2 = mysqli_fetch_assoc($resultCari2); 
            $pekerjaan2 = $rowCari2["Jumlah"];

  $sqlWiraswasta = "select count(*) AS Jumlah from kunjungan where pekerjaan = 'Wiraswasta'";
  $resultCari3 = mysqli_query($conn, $sqlWiraswasta);
  $rowCari3 = mysqli_fetch_assoc($resultCari3); 
            $pekerjaan3 = $rowCari3["Jumlah"];

  $sqlMahasiswa = "select count(*) AS Jumlah from kunjungan where pekerjaan = 'Mahasiswa'";
  $resultCari4 = mysqli_query($conn, $sqlMahasiswa);
  $rowCari4 = mysqli_fetch_assoc($resultCari4); 
            $pekerjaan4 = $rowCari4["Jumlah"];

  $sqlPelajar = "select count(*) AS Jumlah from kunjungan where pekerjaan = 'Pelajar'";
  $resultCari5 = mysqli_query($conn, $sqlPelajar);
  $rowCari5 = mysqli_fetch_assoc($resultCari5); 
            $pekerjaan5 = $rowCari5["Jumlah"];

  $total = $pekerjaan + $pekerjaan2 + $pekerjaan3 + $pekerjaan4 + $pekerjaan5;
  $p1 = round(($pekerjaan/$total)*100);
  $p2 = round(($pekerjaan2/$total)*100);
  $p3 = round(($pekerjaan3/$total)*100);
  $p4 = round(($pekerjaan4/$total)*100);
  $p5 = round(($pekerjaan5/$total)*100);

  $sqlAnak = "select count(*) AS Jumlah from kunjungan where umur between 1 AND 10";
  $resultCari6 = mysqli_query($conn, $sqlAnak);
  $rowCari6 = mysqli_fetch_assoc($resultCari6); 
  $umur = $rowCari6["Jumlah"];

  $sqlRemaja = "select count(*) AS Jumlah from kunjungan where umur between 11 AND 20";
  $resultCari7 = mysqli_query($conn, $sqlRemaja);
  $rowCari7 = mysqli_fetch_assoc($resultCari7); 
  $umur2 = $rowCari7["Jumlah"];

  $sqlDewasa = "select count(*) AS Jumlah from kunjungan where umur between 21 AND 49";
  $resultCari8 = mysqli_query($conn, $sqlDewasa);
  $rowCari8 = mysqli_fetch_assoc($resultCari8); 
  $umur3 = $rowCari8["Jumlah"];

  $sqlOrtu = "select count(*) AS Jumlah from kunjungan where umur between 50 AND 100";
  $resultCari9 = mysqli_query($conn, $sqlOrtu);
  $rowCari9 = mysqli_fetch_assoc($resultCari9); 
  $umur4 = $rowCari9["Jumlah"];

  $total2 = $umur + $umur2 + $umur3 + $umur4;
  $u1 = round(($umur/$total2)*100);
  $u2 = round(($umur2/$total2)*100);
  $u3 = round(($umur3/$total2)*100);
  $u4 = round(($umur4/$total2)*100);
  
   
  $sqlJan = "select count(*) AS Jumlah from kunjungan where MONTH(tanggal) = 1";
  $resultCari10 = mysqli_query($conn, $sqlJan);
  $rowCari10 = mysqli_fetch_assoc($resultCari10); 
  $januari = $rowCari10["Jumlah"];
  
  $sqlFeb = "select count(*) AS Jumlah from kunjungan where MONTH(tanggal) = 2";
  $resultCari11 = mysqli_query($conn, $sqlFeb);
  $rowCari11 = mysqli_fetch_assoc($resultCari11); 
  $februari = $rowCari11["Jumlah"];

  $sqlMar = "select count(*) AS Jumlah from kunjungan where MONTH(tanggal) = 3";
  $resultCari12 = mysqli_query($conn, $sqlMar);
  $rowCari12 = mysqli_fetch_assoc($resultCari12); 
  $maret = $rowCari12["Jumlah"];

  $sqlApr = "select count(*) AS Jumlah from kunjungan where MONTH(tanggal) = 4";
  $resultCari13 = mysqli_query($conn, $sqlApr);
  $rowCari13 = mysqli_fetch_assoc($resultCari13); 
  $april = $rowCari13["Jumlah"];

  $sqlMei = "select count(*) AS Jumlah from kunjungan where MONTH(tanggal) = 5";
  $resultCari14 = mysqli_query($conn, $sqlMei);
  $rowCari14 = mysqli_fetch_assoc($resultCari14); 
  $mei = $rowCari14["Jumlah"];

  $sqlJuni = "select count(*) AS Jumlah from kunjungan where MONTH(tanggal) = 6";
  $resultCari15 = mysqli_query($conn, $sqlJuni);
  $rowCari15 = mysqli_fetch_assoc($resultCari15); 
  $juni = $rowCari15["Jumlah"];

  $sqlJuli = "select count(*) AS Jumlah from kunjungan where MONTH(tanggal) = 7";
  $resultCari16 = mysqli_query($conn, $sqlJuli);
  $rowCari16 = mysqli_fetch_assoc($resultCari16); 
  $juli = $rowCari16["Jumlah"];

  $sqlAgu = "select count(*) AS Jumlah from kunjungan where MONTH(tanggal) = 8";
  $resultCari17 = mysqli_query($conn, $sqlAgu);
  $rowCari17 = mysqli_fetch_assoc($resultCari17); 
  $agustus = $rowCari17["Jumlah"];

  $sqlSep = "select count(*) AS Jumlah from kunjungan where MONTH(tanggal) = 9";
  $resultCari18 = mysqli_query($conn, $sqlSep);
  $rowCari18 = mysqli_fetch_assoc($resultCari18); 
  $september = $rowCari18["Jumlah"];

  $sqlOkt = "select count(*) AS Jumlah from kunjungan where MONTH(tanggal) = 10";
  $resultCari19 = mysqli_query($conn, $sqlOkt);
  $rowCari19 = mysqli_fetch_assoc($resultCari19); 
  $oktober = $rowCari19["Jumlah"];

  $sqlNov = "select count(*) AS Jumlah from kunjungan where MONTH(tanggal) = 11";
  $resultCari20 = mysqli_query($conn, $sqlNov);
  $rowCari20 = mysqli_fetch_assoc($resultCari20); 
  $november = $rowCari20["Jumlah"];

  $sqlDes = "select count(*) AS Jumlah from kunjungan where MONTH(tanggal) = 12";
  $resultCari21 = mysqli_query($conn, $sqlDes);
  $rowCari21 = mysqli_fetch_assoc($resultCari21); 
  $desember = $rowCari21["Jumlah"];

  $sqlJawa = "select COUNT(*) AS Jumlah from kunjungan where (provinsi = 'Banten' OR provinsi = 'DKI Jakarta' OR provinsi = 'DI Yogyakarta' OR provinsi = 'Jawa Barat' OR provinsi = 'Jawa Tengah' OR provinsi = 'Jawa Timur') AND MONTH(tanggal) = 1";
  $resultCari22 = mysqli_query($conn, $sqlJawa);
  $rowCari22 = mysqli_fetch_assoc($resultCari22); 
  $jawa = $rowCari22["Jumlah"];
  
  $sqlJawa2 = "select COUNT(*) AS Jumlah from kunjungan where (provinsi = 'Banten' OR provinsi = 'DKI Jakarta' OR provinsi = 'DI Yogyakarta' OR provinsi = 'Jawa Barat' OR provinsi = 'Jawa Tengah' OR provinsi = 'Jawa Timur') AND MONTH(tanggal) = 2";
  $resultCari23 = mysqli_query($conn, $sqlJawa2);
  $rowCari23 = mysqli_fetch_assoc($resultCari23); 
  $jawa2 = $rowCari23["Jumlah"];

  $sqlJawa3 = "select COUNT(*) AS Jumlah from kunjungan where (provinsi = 'Banten' OR provinsi = 'DKI Jakarta' OR provinsi = 'DI Yogyakarta' OR provinsi = 'Jawa Barat' OR provinsi = 'Jawa Tengah' OR provinsi = 'Jawa Timur') AND MONTH(tanggal) = 3";
  $resultCari24 = mysqli_query($conn, $sqlJawa3);
  $rowCari24 = mysqli_fetch_assoc($resultCari24); 
  $jawa3 = $rowCari24["Jumlah"];

  $sqlJawa4 = "select COUNT(*) AS Jumlah from kunjungan where (provinsi = 'Banten' OR provinsi = 'DKI Jakarta' OR provinsi = 'DI Yogyakarta' OR provinsi = 'Jawa Barat' OR provinsi = 'Jawa Tengah' OR provinsi = 'Jawa Timur') AND MONTH(tanggal) = 4";
  $resultCari25 = mysqli_query($conn, $sqlJawa4);
  $rowCari25 = mysqli_fetch_assoc($resultCari25); 
  $jawa4 = $rowCari25["Jumlah"];

  $sqlJawa5 = "select COUNT(*) AS Jumlah from kunjungan where (provinsi = 'Banten' OR provinsi = 'DKI Jakarta' OR provinsi = 'DI Yogyakarta' OR provinsi = 'Jawa Barat' OR provinsi = 'Jawa Tengah' OR provinsi = 'Jawa Timur') AND MONTH(tanggal) = 5";
  $resultCari26 = mysqli_query($conn, $sqlJawa5);
  $rowCari26 = mysqli_fetch_assoc($resultCari26); 
  $jawa5 = $rowCari26["Jumlah"];

  $sqlJawa6 = "select COUNT(*) AS Jumlah from kunjungan where (provinsi = 'Banten' OR provinsi = 'DKI Jakarta' OR provinsi = 'DI Yogyakarta' OR provinsi = 'Jawa Barat' OR provinsi = 'Jawa Tengah' OR provinsi = 'Jawa Timur') AND MONTH(tanggal) = 6";
  $resultCari27 = mysqli_query($conn, $sqlJawa6);
  $rowCari27 = mysqli_fetch_assoc($resultCari27); 
  $jawa6 = $rowCari27["Jumlah"];

  $sqlJawa7 = "select COUNT(*) AS Jumlah from kunjungan where (provinsi = 'Banten' OR provinsi = 'DKI Jakarta' OR provinsi = 'DI Yogyakarta' OR provinsi = 'Jawa Barat' OR provinsi = 'Jawa Tengah' OR provinsi = 'Jawa Timur') AND MONTH(tanggal) = 7";
  $resultCari28 = mysqli_query($conn, $sqlJawa7);
  $rowCari28 = mysqli_fetch_assoc($resultCari28); 
  $jawa7 = $rowCari28["Jumlah"];

  $sqlJawa8 = "select COUNT(*) AS Jumlah from kunjungan where (provinsi = 'Banten' OR provinsi = 'DKI Jakarta' OR provinsi = 'DI Yogyakarta' OR provinsi = 'Jawa Barat' OR provinsi = 'Jawa Tengah' OR provinsi = 'Jawa Timur') AND MONTH(tanggal) = 8";
  $resultCari29 = mysqli_query($conn, $sqlJawa8);
  $rowCari29 = mysqli_fetch_assoc($resultCari29); 
  $jawa8 = $rowCari29["Jumlah"];

  $sqlJawa9 = "select COUNT(*) AS Jumlah from kunjungan where (provinsi = 'Banten' OR provinsi = 'DKI Jakarta' OR provinsi = 'DI Yogyakarta' OR provinsi = 'Jawa Barat' OR provinsi = 'Jawa Tengah' OR provinsi = 'Jawa Timur') AND MONTH(tanggal) = 9";
  $resultCari30 = mysqli_query($conn, $sqlJawa9);
  $rowCari30 = mysqli_fetch_assoc($resultCari30); 
  $jawa9 = $rowCari30["Jumlah"];

  $sqlJawa10 = "select COUNT(*) AS Jumlah from kunjungan where (provinsi = 'Banten' OR provinsi = 'DKI Jakarta' OR provinsi = 'DI Yogyakarta' OR provinsi = 'Jawa Barat' OR provinsi = 'Jawa Tengah' OR provinsi = 'Jawa Timur') AND MONTH(tanggal) = 10";
  $resultCari31 = mysqli_query($conn, $sqlJawa10);
  $rowCari31 = mysqli_fetch_assoc($resultCari31); 
  $jawa10 = $rowCari31["Jumlah"];

  $sqlJawa11 = "select COUNT(*) AS Jumlah from kunjungan where (provinsi = 'Banten' OR provinsi = 'DKI Jakarta' OR provinsi = 'DI Yogyakarta' OR provinsi = 'Jawa Barat' OR provinsi = 'Jawa Tengah' OR provinsi = 'Jawa Timur') AND MONTH(tanggal) = 11";
  $resultCari32 = mysqli_query($conn, $sqlJawa11);
  $rowCari32 = mysqli_fetch_assoc($resultCari32); 
  $jawa11 = $rowCari32["Jumlah"];

  $sqlJawa12 = "select COUNT(*) AS Jumlah from kunjungan where (provinsi = 'Banten' OR provinsi = 'DKI Jakarta' OR provinsi = 'DI Yogyakarta' OR provinsi = 'Jawa Barat' OR provinsi = 'Jawa Tengah' OR provinsi = 'Jawa Timur') AND MONTH(tanggal) = 12";
  $resultCari33 = mysqli_query($conn, $sqlJawa12);
  $rowCari33 = mysqli_fetch_assoc($resultCari33); 
  $jawa12 = $rowCari33["Jumlah"];

  $luarjawaJan = $januari - $jawa;
  $luarjawaFeb = $februari - $jawa2;
  $luarjawaMar = $maret - $jawa3;
  $luarjawaApr= $april - $jawa4;
  $luarjawaMei = $mei - $jawa5;
  $luarjawaJuni = $juni - $jawa6;
  $luarjawaJuli = $juli - $jawa7;
  $luarjawaAgu = $agustus - $jawa8;
  $luarjawaSep = $september - $jawa9;
  $luarjawaOkt = $oktober - $jawa10;
  $luarjawaNov = $november - $jawa11;
  $luarjawaDes = $desember - $jawa12;
  
?>
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        
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
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

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
          <h1 class="h3 mb-2 text-gray-800">Dashboard Pengunjung</h1>
          <p class="mb-4">Dashboard ini merupakan dashboard pengunjung</a>.</p>

          <!-- Content Row -->
          <div class="row">

           <!-- Donut Chart -->
           <div class="col-xl-4 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Chart Persentase Pengunjung kategori pekerjaan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <div class="chart-area">
                  <div class="chart-pie pt-4">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  </div>
                  
                </div>
              </div>

              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Chart Persentase Pengunjung kategori umur</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <div class="chart-area">
                  <div class="chart-pie pt-4">
                    <canvas id="myPieChart1"></canvas>
                  </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-8 col-lg-7">

           
              <!-- Area Chart -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Chart Jumlah Pengunjung per periode</h6>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                 
                </div>
              </div>

              <!-- Bar Chart -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Chart Jumlah Pengunjung dari dalam dan luar Pulau Jawa</h6>
                </div>
                <div class="card-body">
                  <div class="chart-bar">
                    <canvas id="myBarChart"></canvas>
                  </div>
                  
                </div>
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
  <script>// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
    datasets: [{
      label: "Jumlah Pengunjung",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: [<?php echo "$januari, $februari, $maret, $april, $mei, $juni, $juli, $agustus, $september, $oktober, $november, $desember";?>],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 30,
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
         
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: true
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + " " + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});
</script>

  <script>// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Swasta", "PNS", "Wiraswasta", "Mahasiswa", "Pelajar"],
    datasets: [{
      data: [<?php echo "$p1, $p2, $p3, $p4, $p5";?>],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#FF007F', '#FFFF00'],
      hoverBackgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#FF007F', '#FFFF00'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: true,
      caretPadding: 10,
    },
    legend: {
      display: true
    },
    cutoutPercentage: 0,
  },
});
</script>
  <script>// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx1 = document.getElementById("myPieChart1");
var myPieChart1 = new Chart(ctx1, {
  type: 'doughnut',
  data: {
    labels: ["Anak - anak", "Remaja", "Dewasa", "Orang Tua"],
    datasets: [{
      data: [<?php echo "$u1, $u2, $u3, $u4";?>],
      backgroundColor: ['#7FFF00', '#8B008B', '#B8860B', '#A52A2A'],
      hoverBackgroundColor: ['#7FFF00', '#8B008B', '#B8860B', '#A52A2A'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: true,
      caretPadding: 10,
    },
    legend: {
      display: true
    },
    cutoutPercentage: 0,
  },
});
</script>
  <script>// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
    datasets: [{
      label: "Luar Pulau Jawa",
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#4e73df",
      borderColor: "#4e73df",
      data: [<?php echo "$luarjawaJan, $luarjawaFeb, $luarjawaMar, $luarjawaApr, $luarjawaMei, $luarjawaJuni, $luarjawaJuli, $luarjawaAgu, $luarjawaSep, $luarjawaOkt, $luarjawaNov, $luarjawaDes";?>],
     
    },
    {
      label: "Dalam Pulau Jawa",
      backgroundColor: "#FF007F",
      hoverBackgroundColor: "#FF007F",
      borderColor: "#4e73df",
      data: [<?php echo "$jawa, $jawa2, $jawa3, $jawa4, $jawa5, $jawa6, $jawa7, $jawa8, $jawa9, $jawa10, $jawa11, $jawa12";?>],
     
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 10,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 6
        },
        maxBarThickness: 25,
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 30,
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: true
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + " " + number_format(tooltipItem.yLabel);
        }
      }
    },
  }
});
</script>

</body>

</html>
