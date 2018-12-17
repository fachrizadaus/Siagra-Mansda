<?php
include '../dbConnection.php';
session_start();
if(isset($_SESSION['login'])){
    //GET DATA FROM DB
    $dataGuru = mysqli_query($con, "select * from guru_profil");
    $dataSiswa = mysqli_query($con, "select * from siswa_profil");

    // $dtGuru = mysqli_fetch_array($dataGuru);
    // $dtSiswa = mysqli_fetch_array($dataSiswa);
    //$data2 = mysqli_fetch_array($data);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <title>Admin Data Master</title>

         <!-- Fontfaces CSS-->
         <link href="../../style/css/font-face.css" rel="stylesheet" media="all">
         <link href="../../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
         <link href="../../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
         <link href="../../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

         <!-- Bootstrap CSS-->
         <link href="../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

         <!-- Vendor CSS-->
         <link href="../../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
         <link href="../../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
         <link href="../../vendor/wow/animate.css" rel="stylesheet" media="all">
         <link href="../../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
         <link href="../../vendor/slick/slick.css" rel="stylesheet" media="all">
         <link href="../../vendor/select2/select2.min.css" rel="stylesheet" media="all">
         <link href="../../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

         <!-- Main CSS-->
         <link href="../../style/css/theme.css" rel="stylesheet" media="all">
         <link href="../../style/style.css" rel="stylesheet" media="all">

     </head>
     <body class="animsition">
         <div class="page-wrapper">
             <!-- HEADER DESKTOP-->
             <header class="header-desktop3 d-none d-lg-block">
                 <div class="section__content section__content--p35">
                     <div class="header3-wrap">
                         <div class="col-sm-8">
                             <div class="header__logo">
                                 <a href="http://www.mansidoarjo.sch.id/">
                                     <span class="topleft-link-span">
                                         <b class="topleft-link-sidebar">SIAGRA</b>
                                         <b class="topleft-link-sidebar2">MANSDA</b>
                                     </span>
                                 </a>
                             </div>
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
                                                 <a href="../../index_admin.php">
                                                     <i class="zmdi zmdi-view-dashboard"></i>
                                                     <span class="bot-line"></span>Dashboard
                                                 </a>
                                             </div>
                                         </div>
                                         <div class="account-dropdown__footer">
                                             <a href="../logout.php">
                                                 <i class="zmdi zmdi-power"></i>Logout</a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </header>
             <!-- END HEADER DESKTOP-->

             <!-- HEADER MOBILE-->
             <header class="header-mobile header-mobile-2 d-block d-lg-none">
                 <div class="header-mobile__bar">
                     <div class="container-fluid">
                         <div class="header-mobile-inner">
                             <a class="logo" href="http://www.mansidoarjo.sch.id/">
                                 <span class="topleft-link-span">
                                     <b class="topleft-link-sidebar">SIAGRA</b>
                                     <b class="topleft-link-sidebar2">MANSDA</b>
                                 </span>
                             </a>
                         </div>
                     </div>
                 </div>
             </header>
             <div class="sub-header-mobile-2 d-block d-lg-none">
                 <div class="header__tool">
                     <div class="account-wrap">
                         <div class="account-item account-item--style2 clearfix js-item-menu">
                             <div class="content">
                                 <a class="js-acc-btn" href="#">
                                     Administrator
                                 </a>
                             </div>
                             <div class="account-dropdown js-dropdown">
                                 <div class="account-dropdown__body">
                                     <div class="account-dropdown__item">
                                         <a href="../../index_admin.php">
                                             <i class="zmdi zmdi-view-dashboard"></i>
                                             <span class="bot-line"></span>Dashboard
                                         </a>
                                     </div>
                                 </div>
                                 <div class="account-dropdown__footer">
                                     <a href="../logout.php">
                                         <i class="zmdi zmdi-power"></i>Logout</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- END HEADER MOBILE -->

             <!-- PAGE CONTENT-->
             <div class="page-content--bgf7">
                 <br>
                 <div class="page-container3">
                     <section>
                         <div class="container">
                             <div class="row">
                                 <div class="col-xl-12">
                                     <!-- PAGE CONTENT-->
                                     <div class="page-content">
                                         <div class="row">
                                             <div class="col-lg-12">
                                                 <h3 class="title-5 m-b-35">Data Master</h3>
                                                 <div class="table-data__tool">
                                                     <div class="table-data__tool-left">
                                                         <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                             <li class="nav-item">
                                                                 <a class="navlink active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Data Guru</a>
                                                             </li>
                                                             <li class="nav-item">
                                                                 <a class="navlink" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Data Siswa</a>
                                                             </li>
                                                             <li class="nav-item">
                                                                 <a class="navlink" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Data Kelas</a>
                                                             </li>
                                                         </ul>
                                                     </div>
                                                     <div class="table-data__tool-right">

                                                     </div>
                                                 </div>
                                                 <div class="table-responsive table-responsive-data2">
                                                     <div class="tab-content" id="pills-tabContent">
                                                         <!-- Tab Data Guru -->
                                                         <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                             <table class="table table-data2">
                                                                 <thead>
                                                                     <tr>
                                                                         <th></th>
                                                                         <th>nip</th>
                                                                         <th>nama</th>
                                                                         <th>jabatan terakhir</th>
                                                                         <th>nomor telepon</th>
                                                                         <th>foto</th>
                                                                         <th></th>
                                                                     </tr>
                                                                 </thead>
                                                                 <tbody>
                                                                     <?php
                                                                     include 'tabel-data-guru.php';
                                                                      ?>

                                                                     <tr class="spacer"></tr>
                                                                 </tbody>
                                                             </table>

                                                         </div>
                                                         <!-- End Data Guru -->

                                                         <!-- Tab Data Siswa -->
                                                         <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                             <table class="table table-data2">
                                                                 <thead>
                                                                     <tr>
                                                                         <th></th>
                                                                         <th>nis</th>
                                                                         <th>nama</th>
                                                                         <th>kelas</th>
                                                                         <th>nomor telepon</th>
                                                                         <th>foto</th>
                                                                         <th></th>
                                                                     </tr>
                                                                 </thead>
                                                                 <tbody>
                                                                     <?php include 'tabel-data-siswa.php'; ?>
                                                                     <tr class="spacer"></tr>
                                                                 </tbody>
                                                             </table>
                                                         </div>
                                                         <!-- End Data Siswa -->

                                                         <!-- Tab Data Kelas -->
                                                         <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                             <table class="table table-data2">
                                                                 <thead>
                                                                     <tr>
                                                                         <th></th>
                                                                         <th>nis</th>
                                                                         <th>nama</th>
                                                                         <th>kelas</th>
                                                                         <th>nomor telepon</th>
                                                                         <th>foto</th>
                                                                         <th></th>
                                                                     </tr>
                                                                 </thead>
                                                                 <tbody>
                                                                     <?php include 'tabel-data-siswa.php'; ?>
                                                                     <tr class="spacer"></tr>
                                                                 </tbody>
                                                             </table>
                                                         </div>
                                                         <!-- End Data Kelas -->
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </section>
                 </div>
             </div>
         </div>

         <!-- Jquery JS-->
         <script src="../../vendor/jquery-3.2.1.min.js"></script>
         <!-- Bootstrap JS-->
         <script src="../../vendor/bootstrap-4.1/popper.min.js"></script>
         <script src="../../vendor/bootstrap-4.1/bootstrap.min.js"></script>
         <!-- Vendor JS       -->
         <script src="../../vendor/slick/slick.min.js">
         </script>
         <script src="../../vendor/wow/wow.min.js"></script>
         <script src="../../vendor/animsition/animsition.min.js"></script>
         <script src="../../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
         </script>
         <script src="../../vendor/counter-up/jquery.waypoints.min.js"></script>
         <script src="../../vendor/counter-up/jquery.counterup.min.js">
         </script>
         <script src="../../vendor/circle-progress/circle-progress.min.js"></script>
         <script src="../../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
         <script src="../../vendor/chartjs/Chart.bundle.min.js"></script>
         <script src="../../vendor/select2/select2.min.js">
         </script>

         <!-- Main JS-->
         <script src="../../js/main.js"></script>

     </body>
 </html>
 <!-- end document-->
<?php
} else {
    echo header("location:../../login.php?sessionOut");
}
 ?>
