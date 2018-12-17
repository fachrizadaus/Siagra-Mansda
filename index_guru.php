<?php
include 'script/dbConnection.php';
session_start();
if(isset($_SESSION['login'])){
    $data = mysqli_query($con, "select * from guru_profil Where NIP = '$_SESSION[login]'");
    $data2 = mysqli_fetch_array($data);
    $queryOutputDataGuruKelas = mysqli_query($con, "SELECT * FROM guru_kelas WHERE guru_pengajar = '$_SESSION[login]'");
    $queryExecuteResult = mysqli_fetch_row($queryOutputDataGuruKelas);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dashboard</title>

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
        <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

        <script src="script/graph/js/Chart.bundle.js" charset="utf-8"></script>
        <script src="script/graph/js/Chart.bundle.min.js" charset="utf-8"></script>
        <script src="script/graph/js/Chart/js" charset="utf-8"></script>
        <script src="script/graph/js/Chart.min.js" charset="utf-8"></script>

        <!-- Main CSS-->
        <link href="style/css/theme.css" rel="stylesheet" media="all">
    </head>
    <body class="animsition">
        <div class="page-wrapper">
            <!-- Side Bar Menu -->
            <aside class="menu-sidebar2">
                <div class="logo">
                    <a href="http://www.mansidoarjo.sch.id/" >
                        <img src="images/mansda.png" alt="SIAGRA MANSDA" class="imgLogo">
                        <span class="topleft-link-span">
                            <b class="topleft-link-sidebar">SIAGRA</b>
                            <b class="topleft-link-sidebar2">MANSDA</b>
                        </span>
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="<?php
                            echo "images/foto-guru/$data2[foto_guru]";
                             ?>" alt="Siswa">
                        </div>
                        <br>
                        <h5>
                            <?php echo "$data2[nama]"; ?>
                        </h5>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li class="has-sub">
                                <a href="index_guru.php">
                                    <i class="fas fa-tachometer-alt"></i>
                                    Dashboard
                                </a>
                            </li>
                            <!-- Data Master -->
                            <li class="has-sub">
                                <a class="js-arrow" href="?directionPage=dataMaster&activeState=dataSiswa">
                                    <i class="zmdi zmdi-folder-person"></i>
                                    Data Master
                                </a>
                            </li>
                            <!-- Akademik -->
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-chart-bar"></i>
                                    Akademik
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="?directionPage=jadwalPelajaran&activeState=X">
                                            <i class="fas fa-calendar-alt"></i>
                                            Jadwal Pelajaran
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?directionPage=nilaiSiswa&selectedClass=<?php echo "$queryExecuteResult[0]"; ?>">
                                            <i class="fas fa-table"></i>
                                            Nilai Siswa
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Dokumen -->
                            <li class="has-sub">
                                <a href="?directionPage=document&activeState=docShow">
                                    <i class="fas fa-copy"></i>
                                    Dokumen
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- Side Bar End Here -->

            <!-- Page Container -->
            <div class="page-container2">
                <!-- Header -->
                <header class="header-desktop2">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="header-wrap2">
                                <div class="d-block d-lg-none">
                                    <a href="http://www.mansidoarjo.sch.id/">
                                        <img src="images/mansda.png" alt="" class="imgLogo2">
                                        <span class="topleft-link-span">
                                            <b class="topleft-link-sidebar">SIAGRA</b>
                                            <b class="topleft-link-sidebar2">MANSDA</b>
                                        </span>
                                    </a>
                                </div>
                                <div class="header-button2">
                                    <div class="header-button-item mr-0 js-sidebar-btn">
                                        <i class="zmdi zmdi-menu"></i>
                                    </div>
                                    <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-account"></i>Profil
                                                </a>
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
                <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                    <div class="logo">
                        <a href="http://www.mansidoarjo.sch.id/">
                            <img src="images/mansda.png" alt="" class="imgLogo2">
                        </a>
                    </div>
                    <div class="menu-sidebar2__content js-scrollbar2">
                        <div class="account2">
                            <div class="image img-cir img-120">
                                <img src="<?php
                                echo "images/foto-guru/$data2[foto_guru]";
                                 ?>" alt="">
                            </div>
                            <h6 class="name"><?php
                            echo "$data2[nama]";
                             ?></h6>
                            <a href="logout.php">Logout</a>
                        </div>
                        <nav class="navbar-sidebar2">
                            <ul class="list-unstyled navbar__list">
                                <li class="has-sub">
                                    <a href="index_guru.php">
                                        <i class="fas fa-tachometer-alt"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <!-- Data Master -->
                                <li class="has-sub">
                                    <a class="js-arrow" href="?directionPage=dataMaster&activeState=dataGuru">
                                        <i class="zmdi zmdi-folder-person"></i>
                                        Data Master
                                    </a>
                                </li>
                                <!-- Akademik -->
                                <li class="has-sub">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-chart-bar"></i>
                                        Akademik
                                        <span class="arrow">
                                            <i class="fas fa-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <a href="?directionPage=jadwalPelajaran&activeState=X">
                                                <i class="fas fa-calendar-alt"></i>
                                                Jadwal Pelajaran
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?directionPage=nilaiSiswa&selectedClass=<?php echo "$queryExecuteResult[0]"; ?>">
                                                <i class="fas fa-table"></i>
                                                Nilai Siswa
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Dokumen -->
                                <li class="has-sub">
                                    <a href="?directionPage=document&activeState=docShow">
                                        <i class="fas fa-copy"></i>
                                        Dokumen
                                    </a>
                                </li>
                            </ul>
                            <ul>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Profil
                                        </a>
                                    </div>
                                </div>
                            </ul>
                        </nav>
                    </div>
                </aside>
                <!-- End Header -->

                <!-- Breadcrumb -->
                <section class="au-breadcrumb m-t-75 active">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="au-breadcrumb-content">
                                        <div class="au-breadcrumb-left">
                                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                <li class="list-inline-item active">
                                                    <a href="index_guru.php">Dashboard</a>
                                                </li>
                                                <li class="list-inline-item seprate">
                                                    <span>/</span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <?php
                                                    isset($_GET["directionPage"])?$page=$_GET["directionPage"]:$page="";

                                                    if ($page == "") {
                                                        echo $data2['nama'];
                                                    } elseif ($page == "dataMasterGuru") {
                                                        echo "Data Master / Guru";
                                                    } elseif ($page == "dataMasterSiswa") {
                                                        echo "Data Master / Siswa";
                                                    } elseif ($page == "dataMasterKelas") {
                                                        echo "Data Master / Kelas";
                                                    } elseif ($page == "jadwalPelajaran") {
                                                        echo "Jadwal Pelajaran";
                                                    } elseif ($page == "nilaiSiswa") {
                                                        echo "Nilai Siswa";
                                                    } elseif ($page == "document") {
                                                        echo "Dokumen";
                                                    } elseif ($page == "dataMaster") {
                                                        echo "Data Master";
                                                    } elseif ($page == "editNilaiSiswa") {
                                                        echo "Edit Nilai Siswa";
                                                    }
                                                    ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Breadcrumb -->

                <!-- Container -->
                <section class="statistic">
                    <div class="main-content">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <?php
                                    isset($_GET["directionPage"])?$page=$_GET["directionPage"]:$page="";

                                    if ($page == "") {
                                        include 'script/guru-dashboard.php';
                                    } elseif ($page == "dataMaster") {
                                        include 'script/guruDataMaster/data-master.php';
                                    } elseif ($page == "jadwalPelajaran") {
                                        include 'script/guruAkademik/jadwal-pelajaran.php';
                                    } elseif ($page == "nilaiSiswa") {
                                        include 'script/guruAkademik/nilai-siswa.php';
                                    } elseif ($page == "document") {
                                        include 'script/guruDokumen/dokumen-master.php';
                                    } elseif ($page == "editNilaiSiswa") {
                                        include 'script/guruAkademik/edit-nilai-siswa.php';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Container -->



            </div>
        </div>


        <!-- Jquery JS-->
        <script src="vendor/jquery-3.2.1.min.js"></script>
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
        <script src="vendor/vector-map/jquery.vmap.js"></script>
        <script src="vendor/vector-map/jquery.vmap.min.js"></script>
        <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
        <script src="vendor/vector-map/jquery.vmap.world.js"></script>

        <!-- Main JS-->
        <script src="js/main.js"></script>
    </body>
</html>

 <?php
} else {
    echo header("location:login.php?sessionOut");
}
 ?>
