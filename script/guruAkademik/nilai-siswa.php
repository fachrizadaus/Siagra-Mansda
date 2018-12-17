<?php


$querySelectHitung = "SELECT COUNT(*) FROM guru_kelas WHERE guru_pengajar = '$_SESSION[login]'";
$result = mysqli_query($con, $querySelectHitung);
$row = mysqli_fetch_array($result);
$total = $row[0];

//echo "$total";

$queryOutputDataGuruKelas = "SELECT * FROM guru_kelas WHERE guru_pengajar = '$_SESSION[login]'";
$executeQuery = mysqli_query($con, $queryOutputDataGuruKelas);
 ?>

<script type="text/javascript">
    function selectClassForNilai() {
        var x = document.getElementById("selectClassForNilai").value;
        window.location.href = "index_guru.php?directionPage=nilaiSiswa&activeState=X&selectedClass="+x;
        //console.log(x);
    }
</script>

<div class="container-fluid">
    <div class="recent-report3 m-b-40">
        <div class="au-breadcrumb-right">
            <h3 class="title-5 m-b-15">Nilai Siswa</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <select class="custom-select" onchange="selectClassForNilai()" id="selectClassForNilai">
                        <?php
                        while ($theResultExecute = mysqli_fetch_array($executeQuery)) {
                            //$a = explode("-", $theResultExecute['kelas']);
                            //echo "$a[0]";
                            ?>
                            <option value="<?php echo "$theResultExecute[kelas]"; ?>"
                                <?php
                                if ($_GET['selectedClass'] == $theResultExecute['kelas']) {
                                    echo "selected";
                                }
                                 ?>
                                >
                                <?php echo "$theResultExecute[kelas] ( $theResultExecute[mapel] )"; ?>
                            </option>
                            <?php
                        }
                         ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php include 'tabel-nilai-siswa.php'; ?>
            </div>
        </div>
    </div>
</div>
