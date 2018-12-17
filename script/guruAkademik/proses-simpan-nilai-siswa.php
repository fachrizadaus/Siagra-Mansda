<?php
if (isset($_POST['simpan'])) {
    $qurdis = $_POST['quran_hadits']; $aqidah = $_POST['aqidah_ahlak']; $ppkn = $_POST['ppkn']; $ski = $_POST['ski']; $b_indonesia = $_POST['b_indonesia'];
    $fiqih = $_POST['fiqih']; $b_arab = $_POST['b_arab']; $b_inggris = $_POST['b_inggris']; $matematika = $_POST['matematika']; $bk = $_POST['bk'];
    $pky = $_POST['pky']; $fisika = $_POST['fisika']; $biologi = $_POST['biologi']; $kimia = $_POST['kimia']; $sejarah = $_POST['sejarah'];
    $ekonomi = $_POST['ekonomi']; $geografi = $_POST['geografi']; $sosiologi = $_POST['sosiologi']; $sbk = $_POST['sbk']; $penjaskes = $_POST['penjaskes'];
    $b_sasindo = $_POST['b_sasindo']; $b_sasing = $_POST['b_sasing'];

    $total = $_POST['total']; $rata = $_POST['rata']; $nis = $_POST['nis']; $semester = $_POST['smster'];

    $queryUpdateNilaiSiswa = mysqli_query($con,
    "UPDATE nilai_siswa SET
    quran_hadits = '$qurdis', aqidah_ahlak = '$aqidah', fiqih = '$fiqih', ski = '$ski', ppkn = '$ppkn',
    b_indonesia = '$b_indonesia', b_arab = '$b_arab', b_inggris = '$b_inggris', matematika = '$matematika', fisika = '$fisika',
    biologi = '$biologi', kimia = '$kimia', sejarah = '$sejarah', geografi = '$geografi', ekonomi = '$ekonomi',
    sosiologi = '$sosiologi', sbk = '$sbk', penjaskes = '$penjaskes', b_sasindo = '$b_sasindo', b_sasing = '$b_sasing',
    bk = '$bk', pky = '$pky', total = '$total', rata_rata = '$rata'
    WHERE NIS = '$nis' AND semester = '$semester'");

    echo "<script type='text/javascript'>alert('Nilai Berhasil Diubah!');</script>";

    ?>
    <script type="text/javascript">
        document.location.href="?directionPage=nilaiSiswa&selectedClass=<?php echo "$queryExecuteResult[0]"; ?>"
    </script>
    <?php
}
 ?>
