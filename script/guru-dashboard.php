<script src="js/Chart.bundle.js" charset="utf-8"></script>
<script src="js/Chart.bundle.min.js" charset="utf-8"></script>
<script src="js/Chart/js" charset="utf-8"></script>
<script src="js/Chart.min.js" charset="utf-8"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Dashboard</h2>
            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c3">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                            <?php
                            $iterate = 0;
                            $hitung = mysqli_query($con, "select * from siswa_profil");
                            while ($htg = mysqli_fetch_array($hitung)) {
                                $iterate++;
                            }
                            echo "<h2>$iterate</h2>";
                             ?>
                            <span>Data Siswa</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c2">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                            <?php
                            $iterate = 0;
                            $hitung = mysqli_query($con, "select * from guru_profil");
                            while ($htg = mysqli_fetch_array($hitung)) {
                                $iterate++;
                            }
                            echo "<h2>$iterate</h2>";
                             ?>
                            <span>Data Guru</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c4">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                            <?php
                            $iterate = 0;
                            $hitung = mysqli_query($con, "select * from data_kelas");
                            while ($htg = mysqli_fetch_array($hitung)) {
                                $iterate++;
                            }
                            echo "<h2>$iterate</h2>";
                             ?>
                            <span>Data Wali Kelas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GRAFIK -->
    <div class="row">
        <div class="col-lg-12">
            <div class="au-card m-b-30">
                <div class="au-card-inner">
                    <h3 class="title-2 m-b-40">Data Pengguna</h3>
                    <!-- <canvas id="sales-chart" height="101" width="203" class="chartjs-render-monitor" style="display: block; height: 113px; width: 226px;"></canvas>                     -->
                    <canvas id="chart" height="101" width="203" class="chartjs-render-monitor" style="display: block; height: 113px; width: 226px;"></canvas>
                    <?php include 'graph/jumlah-siswa.php'; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END GRAFIK -->
</div>
