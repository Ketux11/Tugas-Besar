
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SINCAN - Home Masyarakat</title>
 

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url().'assets/css/all.min.css'?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url().'assets/css/magnific-popup.css'?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url().'assets/css/freelancer.min.css'?>" rel="stylesheet"> 

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top " id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Welcome, </a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">BERITA TERBARU</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">BUAT LAPORAN</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#laporanku">LAPORANKU</a>
            </li>
            <li>
              <a href="<?php echo base_url().'Login' ?>">
              <img src="https://cdn2.iconfinder.com/data/icons/flat-icons-web/40/Log_Out-512.png" width="50px;"></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center" style="padding-top: 140px;">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="<?php echo base_url().'assets/img/profile.png'?>" alt="">
        <h1 class="text-uppercase mb-0">S I N C A N</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Sistem Pelaporan Lokasi Rawan Bencana</h2>
      </div>
    </header>

    <!-- Berita Terbaru Grid Section -->

    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">BERITA TERBARU</h2>
        <hr class="star-dark mb-5">

        <div class="row">
          <?php foreach($hasilbt as $bt) { ?>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <h1 class="text-center text-uppercase text-secondary mb-0"><?php echo $bt['judul']?></h1>
              <img class="img-fluid" src="<?php echo base_url().'assets/img/portfolio/3.png'?>" alt="">
            </a>
          </div>
        <?php } ?>
        </div>
      </div>
    </section>

    <!-- Buat Laporan Section -->
    <section id="contact">
      <div class="sidebar-widget-area border-right-0" style="margin-top: -80px;">
          <h2 class="text-center text-uppercase text-secondary mb-0">FORM PELAPORAN</h2>
          <hr class="star-dark mb-5">
          <div class="widget-content fixed">
            <div class="container">
              <form action="<?php echo site_url('HomeMasyarakat/insert') ?>" method="POST">
                
                <div class="form-row">
                  <!-- 
                  <div class="form-group col-md-6">
                    <label for="pelapor">Pelapor</label>
                      <input type="email" class="form-control" id="pelapor" placeholder="Pelapor">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                  </div>
                   -->
                  <div class="form-group col-md-6">
                    <label for="jenisbencana">Jenis Bencana</label>
                    <select id="jenisbencana" class="form-control" name="jenis_bencana">
                      <option >Gempa Bumi</option>
                      <option >Tsunami</option>
                      <option >Gunung Meletus</option>
                      <option >Banjir</option>
                      <option >Longsor</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="time">Waktu Kejadian</label>
                    <input type="date" class="form-control" id="waktukejadian" name="waktu">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="kotakabupaten">Kota / Kabupaten</label>
                    <select id="kotakabupaten" class="form-control" name="kota" >
                      <option>Sleman</option>
                      <option>Bantul</option>
                      <option>Gunung Kidul</option>
                      <option>Klaten</option>
                      <option>Solo</option>
                      <option>Bandung</option>
                      <option>Jakarta</option>
                      <option>Surabaya</option>
                      <option>Malang</option>
                      <option>Padang</option>
                      <option>Medan</option>
                      <option>Palembang</option>
                      <option>Pekanbaru</option>       
                      <option>Pati</option>
                      <option>Semarang</option>
                      <option>Kudus</option>
                      <option>Makassar</option>
                      <option>Samarinda</option>
                      <option>Palu</option>

                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="provinsi">Provinsi</label>
                    <select id="provinsi" class="form-control" name="provinsi">
                      <option>Aceh</option>
                      <option>Sumatera Utara</option>
                      <option>Sumatera Barat</option>
                      <option>Sumatera Selatan</option>
                      <option>Jawa Tengah</option>
                      <option>Jawa Timur</option>
                      <option>Jawa Barat</option>
                      <option>Riau</option>
                      <option>Sumatra Selatan</option>
                      <option>Kalimantan Barat</option>
                      <option>Kalimantan Timur</option>
                      <option>Kalimantan Selatan</option>
                      <option>Kalimantan Tengah</option>
                      <option>Bengkulu</option>
                      <option>Jambi</option>
                      <option>Lampung</option>
                      <option>Yogyakarta</option>
                      <option>Jakarta</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" style="width: 550px; height: 100px;"></textarea>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="uploadgambar">Upload Gambar</label> 
                    <input type="file" class="form-control-file" id="gambar" name="gambar">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                    Konfirmasi Laporan
                    </label>
                  </div>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Laporkan!</button>
              </form>
            </div>
          </div>
      </div>
    </section>

    <!-- Laporanku Section -->
     <section class="portfolio" id="laporanku">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">LAPORANKU</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <?php foreach($hasillu as $lu) { ?>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#laporanku-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <h1 class="text-center text-uppercase text-secondary mb-0"><?php echo $lu['jenis_bencana']?></h1>
              <img class="img-fluid" src="<?php echo base_url().'assets/img/portfolio/1.png'?>" alt="">
            </a>
          </div>
        <?php } ?>
        </div>
      </div>
    </section>

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
    <?php foreach ($hasilbt as $bt) { ?>
      # code...
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0"><?php echo $bt['judul']?></h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="<?php echo base_url().'assets/img/portfolio/1.png'?>" alt="">
              <form>
                <div class="form-group">
                  <button type="button" class="btn btn-light" style="width: 600px;"><?php echo $bt['tanggal']?></button>
                  <br></br>
                  <button type="button" class="btn btn-light" style="width: 600px;"><?php echo $bt['kota']?></button>
                  <br></br>
                  <button type="button" class="btn btn-light" style="width: 600px;"><?php echo $bt['status']?></button>
                  <br></br>
                  <button type="button" class="btn btn-light" style="width: 600px;"><?php echo $bt['deskripsi']?></button>
                </div>
              </form>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Tutup Laporan
              </a>
            </div>        
          </div>
        </div>
      </div>
    </div>
    <?php } ?>

    
        <!-- Portfolio Modals Laporanku-->

    <!-- Portfolio Modal Laporanku 1 -->
    <?php foreach($hasillu as $lu) { ?>
    <div class="portfolio-modal mfp-hide" id="laporanku-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0"><?php echo $lu['jenis_bencana']?></h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="<?php echo base_url().'assets/img/portfolio/1.png'?>" alt="">
              <form>
                <div class="form-group">

                  <button type="button" class="btn btn-light" style="width: 600px;"><?php echo $lu['waktu']?></button>
                  <br></br>
                  <button type="button" class="btn btn-light" style="width: 600px;"><?php echo $lu['kota']?></button>
                  <br></br>
                  <button type="button" class="btn btn-light" style="width: 600px;"><?php echo $lu['provinsi']?></button>
                  <br></br>
                  <button type="button" class="btn btn-light" style="width: 600px;"><?php echo $lu['deskripsi']?></button>
                </div>
              </form> -->
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Tutup Laporan</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>

    

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