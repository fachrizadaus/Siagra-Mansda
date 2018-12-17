<?php
if (isset($_POST['submit'])) {
    #declaring var
    $kelas = $_POST['tingkatan']."-".$_POST['jurusan']."-".$_POST['kelas'];
    $mapel = $_POST['mapel'];
    $guru = $_POST['guru'];

    $slcDataGuru = mysqli_query($con, "SELECT * FROM guru_profil WHERE NIP = '$guru'");
    $resDataGuru = mysqli_fetch_array($slcDataGuru);

    $queryUpdateGuruKelas = "UPDATE guru_kelas SET guru_pengajar = '$guru', nama_guru = '$resDataGuru[nama]' WHERE kelas = '$kelas' AND kode_mapel = '$mapel'";
    $ecxQuery = mysqli_query($con, $queryUpdateGuruKelas) or die (mysqli_error($con));

    echo "<script type='text/javascript'>alert('Data Berhasil Di Up-date!');</script>";
?>
<script type="text/javascript">
window.location.href = 'index_admin.php?directionPage=pengampuMapel';
</script>
<?php
}
 ?>
