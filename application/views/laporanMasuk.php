<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>SINCAN - Laporan Masuk</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url().'assets/css/font-face.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/vendor/font-awesome-4.7/css/font-awesome.min.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/vendor/font-awesome-5/css/fontawesome-all.min.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/vendor/mdi-font/css/material-design-iconic-font.min.css'?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url().'assets/vendor/bootstrap-4.1/bootstrap.min.css'?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url().'assets/vendor/animsition/animsition.min.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/vendor/wow/animate.css" rel="stylesheet'?>" media="all">
    <link href="<?php echo base_url().'assets/vendor/css-hamburgers/hamburgers.min.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/vendor/slick/slick.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/vendor/select2/select2.min.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/vendor/perfect-scrollbar/perfect-scrollbar.css'?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url().'assets/css/theme.css'?>" rel="stylesheet" media="all">
 
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- LOGO MOBILE -->
        <header class="header-mobile d-block d-lg-none">
           <!--  <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?php echo base_url().'assets/img/logosincan.png'?>"/>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div> -->
        <!-- LOGO  MOBILE -->

        <!-- MENU SAMPING MOBILE -->
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="<?php echo base_url().'LaporanMasuk'?>">
                                <i class="fas fa-table"></i>Laporan Masuk</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'DaftarLaporan'?>">
                                <i class="far fa-check-square"></i>Daftar Berita</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'KirimBerita'?>">
                                <i class="fas fa-copy"></i>Kirim Berita</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- MENU SAMPING MOBILE -->

        <!-- MENU SAMPING DEKSTOP-->
        
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url().'assets/img/logosincan.png'?>"/>
                </a>
                <p>Admininistrator</p>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a href="<?php echo base_url().'LaporanMasuk'?>">
                                <i class="fas fa-table"></i>Laporan Masuk</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'DaftarLaporan'?>">
                                <i class="far fa-check-square"></i>Daftar Berita</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'KirimBerita'?>">
                                <i class="fas fa-copy"></i>Kirim Berita</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- MENU SAMPING DEKSTOP-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- AKUN ADMIN-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div>
                            </div>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php echo base_url().'assets/img/avatar-01.jpg'?>" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="Admin" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Admin</a>
                                                    </h5>
                                                    <span class="email">admin@eemail.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Akun</a>
                                                </div>    
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo base_url().'Login'?>">
                                                    <i class="zmdi zmdi-power"></i>Keluar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- AKUN ADMIN-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <!-- TABEL LAPORAN MASUK -->
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>Pelapor</th>
                                            <th>Email</th>
                                            <th>Bencana</th>
                                            <th>Tanggal</th>
                                            <th>Status Validasi</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        foreach($hasil as $r) { ?>
                                        <tr class="tr-shadow">
                                                <td>Auto</td>
                                                <td>
                                                    <span class="block-email">Auto</span>
                                                </td>
                                                <td class="desc"><?php echo $r['jenis_bencana']?></td>
                                                <td><?php echo $r['waktu']?></td>
                                                <td>
                                                    <span class="status--denied">Auto</span>
                                                </td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="<?php echo base_url().'LihatLaporan'?>">Lihat Laporan</a>
                                                    </div>
                                                </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TABEL LAPORAN MASUK -->
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url().'assets/vendor/jquery-3.2.1.min.js'?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url().'assets/vendor/bootstrap-4.1/popper.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/bootstrap-4.1/bootstrap.min.js'?>"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url().'assets/vendor/slick/slick.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/wow/wow.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/animsition/animsition.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/counter-up/jquery.waypoints.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/counter-up/jquery.counterup.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/circle-progress/circle-progress.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/perfect-scrollbar/perfect-scrollbar.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/chartjs/Chart.bundle.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/select2/select2.min.js'?>"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url().'assets/js/main.js'?>"></script>

</body>

</html>

