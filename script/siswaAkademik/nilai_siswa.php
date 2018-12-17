<?php
//$state = $_GET['activeState'];
isset($_GET["activeState"])?$state=$_GET["activeState"]:$state="";

$null = "";
$show = "show active";
$active = "active";
if ($state == "firstSem") {
    $firstSem = $active; $secondSem = $null; $thirdSem = $null; $fourthSem = $null; $fifthSem = $null; $sixthSem = $null;
    $firstSemActive = $show; $secondSemActive = $null; $thirdSemActive = $null; $fourthSemActive = $null; $fifthSemActive = $null; $sixthSemActive = $null;
    $smt = 1;
} elseif ($state == "secondSem") {
    $firstSem = $null; $secondSem = $active; $thirdSem = $null; $fourthSem = $null; $fifthSem = $null; $sixthSem = $null;
    $firstSemActive = $null; $secondSemActive = $show; $thirdSemActive = $null; $fourthSemActive = $null; $fifthSemActive = $null; $sixthSemActive = $null;
    $smt = 2;
} elseif ($state == "thirdSem") {
    $firstSem = $null; $secondSem = $null; $thirdSem = $active; $fourthSem = $null; $fifthSem = $null; $sixthSem = $null;
    $firstSemActive = $null; $secondSemActive = $null; $thirdSemActive = $show; $fourthSemActive = $null; $fifthSemActive = $null; $sixthSemActive = $null;
    $smt = 3;
} elseif ($state == "fourthSem") {
    $firstSem = $null; $secondSem = $null; $thirdSem = $null; $fourthSem = $active; $fifthSem = $null; $sixthSem = $null;
    $firstSemActive = $null; $secondSemActive = $null; $thirdSemActive = $null; $fourthSemActive = $show; $fifthSemActive = $null; $sixthSemActive = $null;
    $smt = 4;
} elseif ($state == "fifthSem") {
    $firstSem = $null; $secondSem = $null; $thirdSem = $null; $fourthSem = $null; $fifthSem = $active; $sixthSem = $null;
    $firstSemActive = $null; $secondSemActive = $null; $thirdSemActive = $null; $fourthSemActive = $null; $fifthSemActive = $show; $sixthSemActive = $null;
    $smt = 5;
} elseif ($state == "sixthSem") {
    $firstSem = $null; $secondSem = $null; $thirdSem = $null; $fourthSem = $null; $fifthSem = $null; $sixthSem = $active;
    $firstSemActive = $null; $secondSemActive = $null; $thirdSemActive = $null; $fourthSemActive = $null; $fifthSemActive = $null; $sixthSemActive = $show;
    $smt = 6;
}

$querySelectHitung = "SELECT COUNT(*) FROM nilai_siswa WHERE NIS = '$data2[NIS]'";
$result = mysqli_query($con, $querySelectHitung);
$row = mysqli_fetch_array($result);
$total = $row[0];
 ?>

<div class="container-fluid">
    <script src="http://localhost/pemrograman%20web/Tugas_Besar/js/jquery.min.js"></script>

    <div class="recent-report3 m-b-40">
        <div class="au-breadcrumb-right">
            <h3 class="title-5 m-b-15">Nilai Siswa</h3>
        </div>
        <hr>
        <div class="table-data__tool-2">
            <div class="table-data__tool-left">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <?php
                    for ($m=1; $m <= $total ; $m++) {
                        if ($m == 1) {
                            $activated = $firstSemActive; $showed = $firstSem;
                            $newState = "firstSem";
                        } elseif ($m == 2) {
                            $activated = $secondSemActive; $showed = $secondSem;
                            $newState = "secondSem";
                        } elseif ($m == 3) {
                            $activated = $thirdSemActive; $showed = $thirdSem;
                            $newState = "thirdSem";
                        } elseif ($m == 4) {
                            $activated = $fourthSemActive; $showed = $fourthSem;
                            $newState = "fourthSem";
                        } elseif ($m == 5) {
                            $activated = $fifthSemActive; $showed = $fifthSem;
                            $newState = "fifthSem";
                        } elseif ($m == 6) {
                            $activated = $sixthSemActive; $showed = $sixthSem;
                            $newState = "sixthSem";
                        }
                        ?>
                        <li class="nav-item">
                            <a class="navlink <?php echo "$showed"; ?>" id="<?php echo "pills-$newState-tab"; ?>" data-toggle="pill" href="index_siswa.php?directionPage=nilaiSiswa&activeState=<?php echo "$newState"; ?>" role="tab" aria-controls="<?php echo "$newState"; ?>" aria-selected="true">
                                Semester <?php echo "$m"; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="table-data__tool-right">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" style="padding-right: 10px;">
                        <a class="navlink active" href="script/siswaAkademik/save-nilai-siswa.php?semester=<?php echo "$smt"; ?>&activeNIS=<?php echo "$_SESSION[login]"; ?>">
                            SIMPAN
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="navlink active" href="script/siswaAkademik/print-nilai-siswa.php?semester=<?php echo "$smt"; ?>&activeNIS=<?php echo "$_SESSION[login]"; ?>">
                            PRINT
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive table-responsive-data2">
                    <div class="tab-content" id="pills-tabContent">
                        <?php
                        for ($m=1; $m <= $total ; $m++) {
                            if ($m == 1) {
                                $activated = $firstSemActive; $showed = $firstSem;
                                $newState = "firstSem";
                            } elseif ($m == 2) {
                                $activated = $secondSemActive; $showed = $secondSem;
                                $newState = "secondSem";
                            } elseif ($m == 3) {
                                $activated = $thirdSemActive; $showed = $thirdSem;
                                $newState = "thirdSem";
                            } elseif ($m == 4) {
                                $activated = $fourthSemActive; $showed = $fourthSem;
                                $newState = "fourthSem";
                            } elseif ($m == 5) {
                                $activated = $fifthSemActive; $showed = $fifthSem;
                                $newState = "fifthSem";
                            } elseif ($m == 6) {
                                $activated = $sixthSemActive; $showed = $sixthSem;
                                $newState = "sixthSem";
                            }

                            $querySelect = "SELECT * FROM nilai_siswa WHERE NIS = '$data2[NIS]' AND semester = '$m'";
                            $nilai = mysqli_query($con, $querySelect);
                            $nilai2 = mysqli_fetch_array($nilai);
                         ?>
                        <!-- X -->
                        <div class="tab-pane fade <?php echo "$activated"; ?>" id="<?php echo "$newState"; ?>" role="tabpanel" aria-labelledby="<?php echo "pills-$newState-tab"; ?>">
                            <?php include 'tabel-nilai-siswa.php'; ?>
                        </div>
                    <?php } ?>
                        <!-- X -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
