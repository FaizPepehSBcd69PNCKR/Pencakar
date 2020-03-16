 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Ansonika">
  <title>PENCAKAR - Akun Anda</title>
	
  <!-- Favicons-->
  <link rel="shortcut icon" href="img/12.png" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
	
  <!-- Bootstrap core CSS-->
  <link href="assets/akun/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Main styles -->
  <link href="assets/akun/css/admin.css" rel="stylesheet">
  <!-- Icon fonts-->
  <link href="assets/akun/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Plugin styles -->
  <link href="assets/akun/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Your custom styles -->
  <link href="assets/akun/css/custom.css" rel="stylesheet">
  <link href="assets/cakar/css/vendors.css" rel="stylesheet">
	
</head>

<body class="fixed-nav sticky-footer" id="page-top">

  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html"><img src="assets/cakar/img/12.png" data-retina="true" alt="" width="165" height="36"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <div class="panel">
            <div class="panel-body text-center">
                <img src="img/bni1.jpg" class="rounded-circle" alt="foto" width="75" height="75"> 
                <br>
                <br>
                <span class="text-muted"><a style="color: white; font-size: 18px;">Bank Negara Indonesia</a></span> 
                <hr>
            </div>
        </div>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard" style="color: white;"></i>&nbsp;&nbsp;
            <span class="nav-link-text" style="color: white;">Dashboard</span>
          </a>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
          <a class="nav-link" href="user-profile.html">
            <i class="fa fa-user" style="color: white;"></i> &nbsp;&nbsp;
            <span class="nav-link-text" style="color: white;">Profil saya</span>
          </a>
        </li>
           <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Bookings">
          <a class="nav-link" href="bookings.html">
            <i class="fa fa-list" style="color: white;"></i>&nbsp;&nbsp;
            <span class="nav-link-text" style="color: white;">Hasil Rekrut</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Bookings">
          <a class="nav-link" href="bookings_2.html">
            <i class="fa fa-user" style="color: white;"></i>&nbsp;&nbsp;
            <span class="nav-link-text" style="color: white;">Calon karyawan</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bookmarks">
          <a class="nav-link" href="bookmarks.html">
            <i class="fa fa-users" style="color: white;"></i>&nbsp;&nbsp;
            <span class="nav-link-text" style="color: white;">Karyawan saya</span>
          </a>
        </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
          <a class="nav-link" href="messages.html">
            <i class="fa fa-history" style="color: white;"></i>&nbsp;&nbsp;
            <span class="nav-link-text" style="color: white;">History Perusahaan</span>
          </a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="../grid-listings-filterscol.html">
            <i class="fa fa-search" style="color: white;"></i>&nbsp;&nbsp;
           <span class="nav-link-text" style="color: white;">Cari karyawan</span>
         </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="faq.html">
            <i class="fa fa-question-circle" style="color: white;"></i>&nbsp;&nbsp;
           <span class="nav-link-text" style="color: white;">Bantuan</span>
         </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out" style="color: white;"></i>&nbsp;
           <span class="nav-link-text" style="color: white;">keluar</span>
         </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope" style="color: white;"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <!-- <i class="fa fa-fw fa-circle"></i> -->
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">Pesan baru &nbsp;&nbsp;&nbsp;:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="pesan_karyawan.html">
              <strong>Riski Romadoni</strong>
              <span class="small float-right text-muted">11:21 WIB</span>
              <div class="dropdown-message small">Jika Interview apakah sampai 15 hari?</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="pesan_karyawan.html">Lihat semua pesan</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell" style="color: white;"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <!-- <i class="fa fa-fw fa-circle"></i> -->
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">Notifikasi &nbsp;&nbsp;&nbsp;:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="notifikasi.html">
              <span class="text-success">
                  <strong>PENCAKAR</strong>
              </span>
              <span class="small float-right text-muted">21:21</span>
              <div class="dropdown-message small">Moonton bercanda guys</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="notifikasi.html">
              <span class="text-danger">
                <strong>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21</span>
              <div class="dropdown-message small">Perbaikan Website</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="notifikasi.html">Lihat semua notifikasi</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control search-top" type="text" placeholder="Cari...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index-2.html">
            <i class="fa fa-home" style="color: white;"></i>&nbsp;&nbsp;
           <span class="nav-link-text" style="color: white;">Beranda</span>
         </a>
        </li>
      </ul>
    </div>
  </nav>

                <div id="page-content">

                        <?php
                                  $this->load->view($akunhmvc .'/'.$akunhmvcview);
                                ?>

                </div>
          
  <!-- /Navigation-->
  
  
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © PENCAKAR 2020</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Keluar?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Apakah Anda Yakin Mau Keluar.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-primary" href="../../index-2.html">Keluar</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/akun/vendor/jquery/jquery.min.js"></script>
    <script src="assets/akun/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="assets/akun/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="assets/akun/vendor/chart.js/Chart.js"></script>
    <script src="assets/akun/vendor/datatables/jquery.dataTables.js"></script>
    <script src="assets/akun/vendor/datatables/dataTables.bootstrap4.js"></script>
	<script src="assets/akun/vendor/jquery.selectbox-0.2.js"></script>
	<script src="assets/akun/vendor/retina-replace.min.js"></script>
	<script src="assets/akun/vendor/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="assets/akun/js/admin.js"></script>
	<!-- Custom scripts for this page-->
    <script src="assets/akun/js/admin-charts.js"></script>
	
</body>
</html>
