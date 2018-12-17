<?php
isset($_GET["selectedLevel"])?$selectedLevel=$_GET["selectedLevel"]:$selectedLevel="";
isset($_GET["selectedVoc"])?$selectedVoc=$_GET["selectedVoc"]:$selectedVoc="";
isset($_GET["selectedClass"])?$selectedClass=$_GET["selectedClass"]:$selectedClass="";

if ($selectedVoc == "IPA") {
    $mapel_pilih = "mata_pelajaran_ipa";
} elseif ($selectedVoc == "IPS") {
    $mapel_pilih = "mata_pelajaran_ips";
} else {
    $mapel_pilih = "mata_pelajaran_ipa";
}

$querySelectedMapel = "SELECT * FROM $mapel_pilih";
$executeQuerySelectMapel = mysqli_query($con, $querySelectedMapel);
$resultSelectMapel = mysqli_fetch_array($executeQuerySelectMapel);

$querySelectGuru = "SELECT * FROM guru_profil";
$executeQuerySelectGuru = mysqli_query($con, $querySelectGuru);
$resultSelectGuru = mysqli_fetch_array($executeQuerySelectGuru);
 ?>

<script type="text/javascript">
    function funcPilih() {
        var tingkat = document.getElementById('tingkatan').value;
        var jur = document.getElementById('jurusan').value;
        var kelas = document.getElementById('kelas').value;

        window.location.href = "index_admin.php?directionPage=pengampuMapel&selectedLevel="+tingkat+"&selectedVoc="+jur+"&selectedClass="+kelas;
    }
</script>

<div class="col-md-12">
    <form class="" action="" method="post">
    <div class="recent-report3 m-b-40">
        <div class="au-breadcrumb-right">
            <h3 class="title-5 m-b-15">Pengampu Mata Pelajaran</h3>
        </div>
        <hr>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="">Pilih Kelas</label>
            </div>
            <select id="tingkatan" name="tingkatan" class="custom-select">
                <option value="">Pilih Tingkatan</option>
                <option value="X" <?php if ($selectedLevel == "X") {
                    echo "selected";
                } ?>>X</option>
                <option value="XI" <?php if ($selectedLevel == "XI") {
                    echo "selected";
                } ?>>XI</option>
                <option value="XII" <?php if ($selectedLevel == "XII") {
                    echo "selected";
                } ?>>XII</option>
            </select>
            <select id="jurusan" name="jurusan" class="custom-select">
                <option value="">Pilih Jurusan</option>
                <option value="IPA" <?php if ($selectedVoc == "IPA") {
                    echo "selected";
                } ?>>IPA</option>
                <option value="IPS" <?php if ($selectedVoc == "IPS") {
                    echo "selected";
                } ?>>IPS</option>
            </select>
            <select id="kelas" name="kelas" onchange="funcPilih()" class="custom-select">
                <option value="">Pilih Kelas</option>
                <?php
                for ($i=1; $i <= 4 ; $i++) {
                    if ($selectedClass == $i) {
                        $yes = "selected";
                    } else {
                        $yes = "";
                    }
                    echo "<option value='$i' $yes>$i</option>";
                }
                 ?>
            </select>
        </div>
        <hr>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="">Pilih Mata Pelajaran</label>
            </div>
            <select id="mapel" name="mapel" class="custom-select">
                <option value="">Pilih Mata Pelajaran</option>
                <?php
                while ($mapel = mysqli_fetch_array($executeQuerySelectMapel)) {
                    echo "
                    <option value='$mapel[kode_mapel]'>$mapel[nama_mapel]</option>";
                }
                 ?>
            </select>
        </div>
        <div class="input-group mb-3">
            <select id="guru" name="guru" class="custom-select">
                <option value="">Pilih Guru Mata Pelajaran</option>
                <?php
                while ($guru = mysqli_fetch_array($executeQuerySelectGuru)) {
                    echo "
                    <option value='$guru[NIP]'>$guru[NIP] | $guru[nama]</option>";
                }
                 ?>
            </select>
        </div>
        <hr>
        <button type="submit" class="btn btn-primary btn-sm" name="submit">
            <i class="zmdi zmdi-rotate-right"></i> Update Guru Mata Pelajaran
        </button>
    </div>
    </form>
</div>
<?php include 'proses-pengampu-mapel.php'; ?>
