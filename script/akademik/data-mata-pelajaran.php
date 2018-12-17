<?php
$dataGuru = mysqli_query($con, "select * from guru_profil");
$dataSiswa = mysqli_query($con, "select * from siswa_profil");

$state = $_GET['activeState'];
//echo "$state";
$null = "";
$show = "show active";
$active = "active";
if ($state == "mapelIPA") {
    $a = $show;
    $b = $null;
    $aa = $active;
    $bb = $null;
    $mapel = "IPA";
} elseif ($state == "mapelIPS") {
    $a = $null;
    $b = $show;
    $aa = $null;
    $bb = $active;
    $mapel = "IPS";
}
 ?>
<div class="container-fluid">
    <h3 class="title-5 m-b-35">Data Mata Pelajaran</h3>
    <div class="table-data__tool">
        <div class="table-data__tool-left">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="navlink <?php echo "$aa"; ?>" id="pills-home-tab" data-toggle="pill" href="index_admin.php?directionPage=dataMapel&activeState=mapelIPA" role="tab" aria-controls="pills-home" aria-selected="true">Jurusan IPA</a>
                </li>
                <li class="nav-item">
                    <a class="navlink <?php echo "$bb"; ?>" id="pills-profile-tab" data-toggle="pill" href="index_admin.php?directionPage=dataMapel&activeState=mapelIPS" role="tab" aria-controls="pills-profile" aria-selected="false">Jurusan IPS</a>
                </li>
            </ul>
        </div>
        <div class="table-data__tool-right">
            <!-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" style="padding-right: 10px;">
                    <a class="navlink active" href="script/akademik/save-tabel-mapel.php?saveMapel=<?php //echo "$mapel"; ?>">
                        SIMPAN
                    </a>
                </li>
            </ul> -->
        </div>
    </div>
    <div class="table-responsive table-responsive-data2">
        <div class="tab-content" id="pills-tabContent">
            <!-- Tab Data Guru -->
            <div class="tab-pane fade <?php echo "$a"; ?>" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <?php include 'tabel-mapel-ipa.php'; ?>
            </div>
            <!-- End Data Guru -->

            <!-- Tab Data Siswa -->
            <div class="tab-pane fade <?php echo "$b"; ?>" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <?php include 'tabel-mapel-ips.php'; ?>
            </div>
            <!-- End Data Siswa -->
        </div>
    </div>
</div>
