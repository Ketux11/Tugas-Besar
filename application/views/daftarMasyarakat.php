 
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SINCAN - Daftar Masyarakat</title>


    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="assets/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="assets/css/freelancer.min.css" rel="stylesheet"> 

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top " id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">SINCAN - Register</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container" style="margin-top: -60px;">
        <h2 class="font-weight-bold mb-5">FORM PENDAFTARAN</h2>
    <form action="<?php echo site_url('DaftarMasyarakat/insert') ?>" method="POST">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" required="">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Password</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Nama Lengkap</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Your name" name="nama_lengkap">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Alamat</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Address" name="alamat">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Kota</label>
          <input type="text" class="form-control" id="inputCity" name="kota">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">Negara</label>
          <input type="text" class="form-control" id="inputCountry" name="negara">
        </div>
        <div class="form-group col-md-2">
          <label for="inputState">Kode Pos</label>
          <input type="text" class="form-control" id="inputCountry" name="kodepos">
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Check me out
          </label>
        </div>
      </div>
      <a href="<?php echo base_url().'Login'?>" />
      <button class="btn btn-secondary" type="sumbit" style="width: 150px;">Register</button>
    </form>
    </div>
    </header>

    <!-- Berita Terbaru Grid Section -->

    <!-- Buat Laporan Section -->
  
    <!-- Laporanku Section -->

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">Jl. Kaliurang Km 14
              <br>Slman DIY 55584<br>Telp. +62 274 000000<br>Faks. +62 274 111111<br>Email: info@sincan.com</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div> 
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About SINCAN</h4>
            <p class="lead mb-0">SINCAN adalah Sebuah website untuk melakukan pelaporan lokasi bencana bagi masyarakat</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Pak Eko 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals Berita Terbaru-->

    <!-- Portfolio Modal 1 -->

    <!-- Portfolio Modal 2 -->


    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url().'assets/js/jquery/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.bundle.min.js'?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url().'assets/js/jquery.easing.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.magnific-popup.min.js'?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url().'assets/js/jqBootstrapValidation.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/contact_me.js'?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url().'assets/js/freelancer.min.js'?>"></script>

  </body>

</html>


