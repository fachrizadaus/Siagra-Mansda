<?php
include 'dbConnection.php';
session_start();
if(isset($_SESSION['login'])){
    //GET DATA SISWA FROM DB
    $data = mysqli_query($con, "select * from siswa_profil Where NIS = '$_SESSION[login]'");
    $data2 = mysqli_fetch_array($data);
    //echo "$data2[NIS]";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Profil Siswa</title>

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
                                        <a class="js-acc-btn" href="#"><?php
                                        echo "$data2[nama]";
                                         ?>
                                        </a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="../<?php echo "images/foto-siswa/$data2[foto_siswa]"; ?>" alt="" >
                                                </a>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="../index_siswa.php">
                                                    <i class="fas fa-chart-bar"></i>
                                                    <span class="bot-line"></span>Akademik
                                                </a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="siswa_profil.php">
                                                    <i class="zmdi zmdi-account"></i>
                                                    <span class="bot-line"></span>Profil
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
                                <a class="js-acc-btn" href="#"><?php
                                echo "$data2[nama]";
                                 ?></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="../<?php echo "images/foto-siswa/$data2[foto_siswa]"; ?>" alt="" >
                                        </a>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="../index_siswa.php">
                                            <i class="fas fa-chart-bar"></i>
                                            <span class="bot-line"></span>Akademik
                                        </a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="siswa_profil.php">
                                            <i class="zmdi zmdi-account"></i>
                                            <span class="bot-line"></span>Profil
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
                                                <a href="siswa_profil.php">Profil Siswa</a>
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
                                            <div class="col-lg-8">
                                                <!-- BIODATA -->
                                                <br>
                                                <div class="recent-report3 m-b-40">
                                                    <div class="col-sm-12">
                                                        <span class="spanbiodata">Berikut ini adalah informasi biodata pokok anda. Pastikan data yang ditampilkan benar dan sesuai.</span>
                                                    </div>
                                                    <div class="title-wrap">
                                                        <div class="col-3">
                                                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                                <a class="navlink active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                                                    Profil
                                                                </a>
                                                                <a class="navlink" id="v-pills-password-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                                                    Password
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-9">
                                                            <div class="tab-content" id="v-pills-tabContent">
                                                                <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                                    <?php include 'siswaProfil/tabel-biodata-siswa.php'; ?>
                                                                </div>
                                                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-password-tab">
                                                                    <?php include 'siswaProfil/ubah-password-siswa.php'; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <br>
                                                <div class="chart-percent-3 m-b-40">
                                                    <aside class="menu-sidebar3 js-spe-sidebar">
                                                        <img src="../<?php echo "images/foto-siswa/$data2[foto_siswa]"; ?>" alt="" class="img-cir">
                                                        <hr>
                                                        <b>
                                                            <?php echo "$data2[nama]"; ?>
                                                        </b> <br>
                                                        NIS : <?php echo "$data2[NIS]"; ?>
                                                    </aside>
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

<?php
} else {
    echo header("location:login.php?sessionOut");
}
 ?>
