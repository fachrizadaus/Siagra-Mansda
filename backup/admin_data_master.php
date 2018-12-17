<?php
include 'dbConnection.php';
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
         <link href="../style/css/font-face.css" rel="stylesheet" media="all">
         <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
         <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
         <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

         <!-- Bootstrap CSS-->
         <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

         <!-- Vendor CSS-->
         <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
         <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
         <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
         <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
         <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
         <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
         <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

         <!-- Main CSS-->
         <link href="../style/css/theme.css" rel="stylesheet" media="all">
         <link href="../style/style.css" rel="stylesheet" media="all">

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
                                                 <a href="../index_siswa.php">
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
                                         <a href="../index_admin.php">
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
                 <!-- BREADCRUMB-->
                 <section class="au-breadcrumb2">
                     <div class="container">
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="au-breadcrumb-content">
                                     <div class="au-breadcrumb-left">
                                         <ul class="list-unstyled list-inline au-breadcrumb__list">
                                             <li class="list-inline-item active">
                                                 <a href="admin_data_master.php">Data Master</a>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </section>
                 <hr class="line-seprate">
                 <!-- END BREADCRUMB-->

                 <!-- PROFIL SISWA-->
                 <div class="page-container3">
                     <section>
                         <div class="container">
                             <div class="row">
                                 <div class="col-xl-12">
                                     <!-- PAGE CONTENT-->
                                     <div class="page-content">
                                         <div class="row">
                                             <div class="col-lg-12">
                                                 <!-- BIODATA -->
                                                 <br>
                                                 <div class="recent-report3 m-b-40">
                                                     <div class="title-wrap">
                                                         <div class="col-3">
                                                             <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                                 <a class="navlink active" id="v-pills-guru-tab" data-toggle="pill" href="#v-pills-guru" role="tab" aria-controls="v-pills-guru" aria-selected="false">
                                                                     Data Guru
                                                                 </a>
                                                                 <a class="navlink" id="v-pills-siswa-tab" data-toggle="pill" href="#v-pills-siswa" role="tab" aria-controls="v-pills-siswa" aria-selected="false">
                                                                     Data Siswa
                                                                 </a>
                                                                 <a class="navlink" id="v-pills-kelas-tab" data-toggle="pill" href="#v-pills-kelas" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                                                     Data Kelas
                                                                 </a>
                                                             </div>
                                                         </div>
                                                         <div class="col-9">
                                                             <div class="tab-content" id="v-pills-tabContent">
                                                                 <div class="tab-pane fade show active" id="v-pills-guru" role="tabpanel" aria-labelledby="v-pills-guru-tab">
                                                                     <div class="col-sm-12 title-color-blue">
                                                                         <b>Data Guru</b>
                                                                     </div>
                                                                     <table class="table">
                                                                         <tbody>
                                                                             <tr width = "35">
                                                                                 <th>NIP</th>
                                                                                 <th>Nama Guru</th>
                                                                             </tr>
                                                                             <?php
                                                                             while ($dtGuru = mysqli_fetch_array($dataGuru)) {
                                                                                 echo "<tr>
                                                                                     <td>$dtGuru[NIP]</td>
                                                                                     <td>$dtGuru[nama]</td>
                                                                                 </tr>";
                                                                             }
                                                                              ?>
                                                                         </tbody>
                 				                                    </table>
                                                                    <div class="col-sm-12 title-color-blue">

                                                                    </div>
                                                                 </div>
                                                                 <div class="tab-pane fade" id="v-pills-siswa" role="tabpanel" aria-labelledby="v-pills-siswa-tab">
                                                                     <div class="col-sm-12 title-color-blue">
                                                                         <b>Data Siswa</b>
                                                                     </div>
                                                                     <table class="table">
                                                                         <tbody>
                                                                             <tr width = "35">
                                                                                 <th>NIS</th>
                                                                                 <th>Nama Siswa</th>
                                                                             </tr>
                                                                             <?php
                                                                             while ($dtSiswa = mysqli_fetch_array($dataSiswa)) {
                                                                                 echo "<tr>
                                                                                     <td>$dtSiswa[NIS]</td>
                                                                                     <td>$dtSiswa[nama]</td>
                                                                                 </tr>";
                                                                             }
                                                                              ?>
                                                                         </tbody>
                 				                                    </table>
                                                                    <div class="col-sm-12 title-color-blue">

                                                                    </div>
                                                                 </div>
                                                                 <div class="tab-pane fade" id="v-pills-kelas" role="tabpanel" aria-labelledby="v-pills-kelas-tab">
                                                                     kelas
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <!-- END BIODATA -->
                                         </div>
                                 </div>
                             </div>
                         </div>
                     </section>
                 </div>
                 <!-- END PROFIL -->

             </div>

         </div>

         <!-- Jquery JS-->
         <script src="../vendor/jquery-3.2.1.min.js"></script>
         <!-- Bootstrap JS-->
         <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
         <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
         <!-- Vendor JS       -->
         <script src="../vendor/slick/slick.min.js">
         </script>
         <script src="../vendor/wow/wow.min.js"></script>
         <script src="../vendor/animsition/animsition.min.js"></script>
         <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
         </script>
         <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
         <script src="../vendor/counter-up/jquery.counterup.min.js">
         </script>
         <script src="../vendor/circle-progress/circle-progress.min.js"></script>
         <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
         <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
         <script src="../vendor/select2/select2.min.js">
         </script>

         <!-- Main JS-->
         <script src="../js/main.js"></script>

     </body>
 </html>
 <!-- end document-->
<?php
} else {
    echo header("location:../login.php?sessionOut");
}
 ?>
