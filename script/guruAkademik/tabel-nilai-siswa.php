<script type="text/javascript">
    function requestedEditNilaiSiswa(semester, nis) {
        document.location="index_guru.php?directionPage=editNilaiSiswa&editsemester="+semester+"&editNIS="+nis;
    }
</script>
<style media="screen">
    .item{
        display: block;
        height: 30px;
        width: 30px;
        position: relative;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        background: #e5e5e5;
        margin-right: 5px;
    }
</style>

<?php
if (isset($_GET['selectedClass'])) {
    $slc = $_GET['selectedClass'];

    $classExplode = explode("-", $slc);
    $class = $classExplode[0];

    if ($class == "X") {
        $semGjl = 1;
        $semGnp = 2;
    } elseif ($class == "XI") {
        $semGjl = 3;
        $semGnp = 4;
    } elseif ($class == "XII") {
        $semGjl = 5;
        $semGnp = 6;
    }

    $dataNilaiKelasGanjil = mysqli_query($con, "SELECT * FROM nilai_siswa WHERE kelas = '$slc' AND semester = '$semGjl'");
    $dataNilaiKelasGenap = mysqli_query($con, "SELECT * FROM nilai_siswa WHERE kelas = '$slc' AND semester = '$semGnp'");
    //$dataProfilSiswaNilai = mysqli_query($con, "SELECT * FROM nilai_siswa WHERE kelas = '$slc'");
 ?>

<nav>
    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">GANJIL</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">GENAP</a>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <table class="table table-data2">
            <thead>
                <tr>
                    <th></th>
                    <th>nis</th>
                    <th>nama</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($nilaiKelas = mysqli_fetch_array($dataNilaiKelasGanjil)) {
                    echo "
                    <tr class='tr-shadow'>
                       <td></td>
                       <td>$nilaiKelas[NIS]</td>
                       <td>$nilaiKelas[nama_siswa]</td>
                    ";
                    ?>
                    <td>
                        <button onclick="requestedEditNilaiSiswa(<?php echo "'$nilaiKelas[semester]', '$nilaiKelas[NIS]'"; ?>)" class="item" data-toggle="tooltip" data-placement="top" title="Edit Nilai">
                            <i class='zmdi zmdi-edit'></i>
                        </button>
                    </td>
                    </tr>
                    <?php
                }
                 ?>
                <tr class="spacer"></tr>
            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <table class="table table-data2">
            <thead>
                <tr>
                    <th></th>
                    <th>nis</th>
                    <th>nama</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($nilaiKelas = mysqli_fetch_array($dataNilaiKelasGenap)) {
                    echo "
                    <tr class='tr-shadow'>
                       <td></td>
                       <td>$nilaiKelas[NIS]</td>
                       <td>$nilaiKelas[nama_siswa]</td>
                    ";
                    ?>
                    <td>
                        <button onclick="requestedEditNilaiSiswa(<?php echo "'$nilaiKelas[semester]', '$nilaiKelas[NIS]'"; ?>)" class="item" data-toggle="tooltip" data-placement="top" title="Edit Nilai">
                            <i class='zmdi zmdi-edit'></i>
                        </button>
                    </td>
                    </tr>
                    <?php
                }
                 ?>
                <tr class="spacer"></tr>
            </tbody>
        </table>
    </div>
</div>


<?php } ?>
