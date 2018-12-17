<?php
$dataGuru = mysqli_query($con, "select * from guru_profil");
$dataSiswa = mysqli_query($con, "select * from siswa_profil");

$state = $_GET['activeState'];
//echo "$state";
$null = "";
$show = "show active";
$active = "active";
if ($state == "dataKelas") {
    $a = $null;
    $b = $null;
    $c = $show;
    $aa = $null;
    $bb = $null;
    $cc = $active;
} elseif ($state == "dataGuru") {
    $a = $show;
    $b = $null;
    $c = $null;
    $aa = $active;
    $bb = $null;
    $cc = $null;
} elseif ($state == "dataSiswa") {
    $a = $null;
    $b = $show;
    $c = $null;
    $aa = $null;
    $bb = $active;
    $cc = $null;
}
 ?>
<div class="container-fluid">
    <h3 class="title-5 m-b-35">Data Master</h3>
    <div class="table-data__tool">
        <div class="table-data__tool-left">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="navlink <?php echo "$aa"; ?>" id="pills-home-tab" data-toggle="pill" href="index_admin.php?directionPage=dataMaster&activeState=dataGuru" role="tab" aria-controls="pills-home" aria-selected="true">Data Guru</a>
                </li>
                <li class="nav-item">
                    <a class="navlink <?php echo "$bb"; ?>" id="pills-profile-tab" data-toggle="pill" href="index_admin.php?directionPage=dataMaster&activeState=dataSiswa" role="tab" aria-controls="pills-profile" aria-selected="false">Data Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="navlink <?php echo "$cc"; ?>" id="pills-contact-tab" data-toggle="pill" href="index_admin.php?directionPage=dataMaster&activeState=dataKelas" role="tab" aria-controls="pills-contact" aria-selected="false">Data Kelas</a>
                </li>
            </ul>
        </div>
        <div class="table-data__tool-right">
            <!-- <div class="au-form-icon--sm">
                <form  action="" method="post">
                    <button class="au-btn--submit2" id="btnFormCari">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="au-input--w300 au-input--style2" type="text" placeholder="Search..." id="searchForm">
                </form>
            </div> -->
        </div>
    </div>
    <div class="table-responsive table-responsive-data2">
        <div class="tab-content" id="pills-tabContent">
            <!-- Tab Data Guru -->
            <div class="tab-pane fade <?php echo "$a"; ?>" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div id="tableContainer">
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
                        //include 'search-result.php';
                         ?>
                        <tr class="spacer"></tr>
                    </tbody>
                </table>
                </div>
            </div>
            <!-- End Data Guru -->

            <!-- Tab Data Siswa -->
            <div class="tab-pane fade <?php echo "$b"; ?>" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
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
            <div class="tab-pane fade <?php echo "$c"; ?>" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <?php include 'data-kelas.php'; ?>
            </div>
            <!-- End Data Kelas -->
        </div>
    </div>
</div>
<script type="text/javascript">
// //getting the Input
// var searchIn = document.getElementById('searchForm');
// var seacrhClick = document.getElementById('btnFormCari');
// var container = document.getElementById('tableContainer');
//
// //event listener to search
// searchIn.addEventListener('keyup', function() {
//     //console.log(searchIn.value);
//
//     var xhr = new XMLHttpRequest();
//     xhr.onreadystatechange = function() {
//         if (xhr.readyState == 4 && xhr.status == 200) {
//             console.log(xhr.responseText);
//             container.innerHTML = xhr.responseText;
//         }
//     }
//
//     xhr.open('GET', 'index_admin.php?directionPage=dataMaster&activeState=dataGuru&dataCari='+searchIn.value, true);
//     xhr.send();
// });
</script>
