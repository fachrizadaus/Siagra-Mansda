<?php
include 'script/dbConnection.php';
session_start();
if(isset($_SESSION['login'])){
    //GET DATA ADMIN FROM DB
    // $data = mysqli_query($con, "select * from guru_profil Where NIP = '$_SESSION[login]'");
    // $data2 = mysqli_fetch_array($data);
 ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <!-- Required meta tags-->
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Administrator</title>

     <!-- Fontfaces CSS-->
     <link href="style/css/font-face.css" rel="stylesheet" media="all">
     <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
     <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
     <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

     <!-- Bootstrap CSS-->
     <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

     <!-- Vendor CSS-->
     <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
     <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
     <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
     <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
     <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
     <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
     <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

     <!-- Main CSS-->
     <link href="style/css/theme.css" rel="stylesheet" media="all">

 </head>

 <body class="animsition">
     <div class="page-wrapper">
         <!-- HEADER MOBILE-->
         <header class="header-mobile d-block d-lg-none">
             <div class="header-mobile__bar">
                 <div class="container-fluid">
                     <div class="header-mobile-inner">
                         <div class="col-sm-6">
                             <a href="http://www.mansidoarjo.sch.id/" >
                                 <img src="images/mansda.png" alt="SIAGRA MANSDA" class="imgLogo">
                                 <span class="topleft-link-span-black">
                                     <b class="topleft-link-sidebar">SIAGRA</b>
                                     <b class="topleft-link-sidebar2">MANSDA</b>
                                 </span>
                             </a>
                         </div>
                         <button class="hamburger hamburger--slider" type="button">
                             <span class="hamburger-box">
                                 <span class="hamburger-inner"></span>
                             </span>
                         </button>
                     </div>
                 </div>
             </div>
             <nav class="navbar-mobile">
                 <div class="container-fluid">
                     <ul class="navbar-mobile__list list-unstyled">
                         <li>
                             <a href="index_admin.php">
                                 <i class="zmdi zmdi-view-dashboard"></i>Dashboard
                             </a>
                         </li>
                         <li class="has-sub">
                             <a class="js-arrow" href="?directionPage=dataMaster&activeState=dataGuru">
                                 <i class="zmdi zmdi-folder-person"></i>Data Master
                             </a>
                         </li>
                         <li class="has-sub">
                             <a class="js-arrow" href="#">
                                 <i class="fas fa-chart-bar"></i>Akademik
                             </a>
                             <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                 <li>
                                     <a href="?directionPage=dataMapel&activeState=mapelIPA">Data Mata Pelajaran</a>
                                 </li>
                                 <li>
                                     <a href="?directionPage=jadwalMapel&activeState=X">Jadwal Pelajaran</a>
                                 </li>
                                 <li>
                                     <a href="?directionPage=nilaiSiswa&activeState=X">Nilai Siswa</a>
                                 </li>
                                 <li>
                                     <a href="?directionPage=pengampuMapel">Guru Mata Pelajaran</a>
                                 </li>
                             </ul>
                         </li>
                         <li class="has-sub">
                             <a class="js-arrow" href="#">
                                 <i class="zmdi zmdi-accounts-add"></i>Buat Akun
                             </a>
                             <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                 <li>
                                     <a href="?directionPage=akun_guru">Akun Guru</a>
                                 </li>
                                 <li>
                                     <a href="?directionPage=akun_siswa">Akun Siswa</a>
                                 </li>
                             </ul>
                         </li>
                         <!-- <li class="has-sub">
                             <a class="js-arrow" href="#">
                                 <i class="zmdi zmdi-money-box"></i>Riwayat Pembayaran
                             </a>
                             <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                 <li>
                                     <a href="#">Pembayaran SPP</a>
                                 </li>
                                 <li>
                                     <a href="#">Gaji Guru</a>
                                 </li>
                             </ul>
                         </li> -->
                         <li>
                             <a class="js-arrow" href="?directionPage=dokumen&activeState=docShow">
                                 <i class="zmdi zmdi-cloud-upload"></i>Dokumen
                             </a>
                         </li>
                         <li>
                             <a class="js-arrow" href="?directionPage=adminChgPassword">
                                 <i class="zmdi zmdi-settings"></i>Ubah Password
                             </a>
                         </li>
                         <li>
                             <a href="logout.php">
                                 <i class="zmdi zmdi-power"></i>Logout
                             </a>
                         </li>
                     </ul>
                 </div>
             </nav>

         </header>
         <!-- END HEADER MOBILE-->

         <!-- MENU SIDEBAR-->
         <aside class="menu-sidebar2 d-none d-lg-block">
             <div class="logo2">
                 <a href="http://www.mansidoarjo.sch.id/" >
                     <img src="images/mansda.png" alt="SIAGRA MANSDA" class="imgLogo">
                     <span class="topleft-link-span-black">
                         <b class="topleft-link-sidebar">SIAGRA</b>
                         <b class="topleft-link-sidebar2">MANSDA</b>
                     </span>
                 </a>
             </div>
             <div class="menu-sidebar__content js-scrollbar1">
                 <nav class="navbar-sidebar">
                     <ul class="list-unstyled navbar__list">
                         <li>
                             <a href="index_admin.php">
                                 <i class="zmdi zmdi-view-dashboard"></i>Dashboard
                             </a>
                         </li>
                         <li class="has-sub">
                             <a class="js-arrow" href="?directionPage=dataMaster&activeState=dataGuru">
                                 <!--<a class="js-arrow" href="script/dataMaster/admin_data_master.php">-->
                                 <i class="zmdi zmdi-folder-person"></i>Data Master
                             </a>
                         </li>
                         <li class="has-sub">
                             <a class="js-arrow" href="#">
                                 <i class="fas fa-chart-bar"></i>Akademik
                             </a>
                             <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                 <li>
                                     <a href="?directionPage=dataMapel&activeState=mapelIPA">Data Mata Pelajaran</a>
                                 </li>
                                 <li>
                                     <a href="?directionPage=jadwalMapel&activeState=X">Jadwal Pelajaran</a>
                                 </li>
                                 <li>
                                     <a href="?directionPage=nilaiSiswa&activeState=X">Nilai Siswa</a>
                                 </li>
                                 <li>
                                     <a href="?directionPage=pengampuMapel">Guru Mata Pelajaran</a>
                                 </li>
                             </ul>
                         </li>
                         <li class="has-sub">
                             <a class="js-arrow" href="#">
                                 <i class="zmdi zmdi-accounts-add"></i>Buat Akun
                             </a>
                             <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                 <li>
                                     <a href="?directionPage=akun_guru">Akun Guru</a>
                                 </li>
                                 <li>
                                     <a href="?directionPage=akun_siswa">Akun Siswa</a>
                                 </li>
                             </ul>
                         </li>
                         <!-- <li class="has-sub">
                             <a class="js-arrow" href="#">
                                 <i class="zmdi zmdi-money-box"></i>Riwayat Pembayaran
                             </a>
                             <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                 <li>
                                     <a href="#">Pembayaran SPP</a>
                                 </li>
                                 <li>
                                     <a href="#">Gaji Guru</a>
                                 </li>
                             </ul>
                         </li> -->
                         <li>
                             <a class="js-arrow" href="?directionPage=dokumen&activeState=docShow">
                                 <i class="zmdi zmdi-cloud-upload"></i>Dokumen
                             </a>
                         </li>
                     </ul>
                 </nav>
             </div>
         </aside>
         <!-- END MENU SIDEBAR-->

         <!-- PAGE CONTAINER-->
         <div class="page-container">
             <!-- HEADER DESKTOP-->
             <header class="header-desktop3 d-none d-lg-block">
                 <div class="section__content section__content--p35">
                     <div class="header3-wrap">
                         <div class="col-sm-8">
                             <!-- BELUM SELESAI -->
                         </div>
                         <div class="header__tool">
                             <div class="account-wrap">
                                 <div class="account-item account-item--style2 clearfix js-item-menu">
                                     <div class="content">
                                         <a class="js-acc-btn" href="#">Administrator
                                         </a>
                                     </div>
                                     <div class="account-dropdown js-dropdown">
                                         <div class="account-dropdown__body">
                                             <div class="account-dropdown__item">
                                                 <a href="?directionPage=adminChgPassword">
                                                     <i class="zmdi zmdi-settings"></i>Ubah Password
                                                 </a>
                                             </div>
                                         </div>
                                         <div class="account-dropdown__footer">
                                             <a href="logout.php">
                                                 <i class="zmdi zmdi-power"></i>Logout
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </header>
             <!-- HEADER DESKTOP-->

             <!-- MAIN CONTENT-->
             <div class="main-content">
                 <div class="section__content section__content--p30">
                     <div class="container-fluid">
                         <div class="row">
                             <?php
                             isset($_GET["directionPage"])?$page=$_GET["directionPage"]:$page="";

                             if ($page == "") {
                                 include 'script/admin_dashboard.php';
                             } elseif ($page == "akun_guru") {
                                 include 'script/buat_akun/buat-akun-guru.php';
                             } elseif ($page == "akun_siswa") {
                                 include 'script/buat_akun/buat-akun-siswa.php';;
                             } elseif ($page == "dataMaster") {
                                 include 'script/dataMaster/data-master.php';
                             } elseif ($page == "editDataGuru") {
                                 include 'script/dataMaster/edit-data-guru.php';
                             } elseif ($page == "editDataSiswa") {
                                 include 'script/dataMaster/edit-data-siswa.php';
                             } elseif ($page == "showUpDataGuru") {
                                 include 'script/dataMaster/show-data-guru.php';
                             } elseif ($page == "nilaiSiswa") {
                                 include 'script/akademik/nilaiSiswa.php';
                             } elseif ($page == "pengampuMapel") {
                                 include 'script/akademik/pengampu-mapel.php';
                             } elseif ($page == "dataMapel") {
                                 include 'script/akademik/data-mata-pelajaran.php';
                             } elseif ($page == "jadwalMapel") {
                                 include 'script/akademik/jadwal-pelajaran.php';
                             } elseif ($page == "dokumen") {
                                 include 'script/dokumen/dokumen-master.php';
                             } elseif ($page == "adminChgPassword") {
                                 include 'script/admin-ubah-password.php';
                             }
                              ?>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- END MAIN CONTENT-->
             <!-- END PAGE CONTAINER-->
         </div>

     </div>

     <!-- Jquery JS-->
     <script src="vendor/jquery-3.2.1.min.js"></script>
     <script src="js/jquery.min.js"></script>
     <script src="vendor/jquery-3.1.1.min.js"></script>
     <!-- Bootstrap JS-->
     <script src="vendor/bootstrap-4.1/popper.min.js"></script>
     <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
     <!-- Vendor JS       -->
     <script src="vendor/slick/slick.min.js">
     </script>
     <script src="vendor/wow/wow.min.js"></script>
     <script src="vendor/animsition/animsition.min.js"></script>
     <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
     </script>
     <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
     <script src="vendor/counter-up/jquery.counterup.min.js">
     </script>
     <script src="vendor/circle-progress/circle-progress.min.js"></script>
     <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
     <script src="vendor/chartjs/Chart.bundle.min.js"></script>
     <script src="vendor/select2/select2.min.js">
     </script>

     <!-- Main JS-->
     <script src="js/main.js"></script>

 </body>

 </html>
 <!-- end document-->
 <?php
 } else {
     echo header("location:login.php?sessionOut");
 }
  ?>
