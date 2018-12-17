<?php
if (isset($_POST['submit'])) {
    #declaring var
    $nip = $_POST['nipGuru'];
    $ktp = $_POST['ktpGuru'];
    $nama = $_POST['namaGuru'];
    $tempatLahir = $_POST['tempatLahirGuru'];
    $tanggalLahir = $_POST['tanggalLahirGuru'];
    $alamat = $_POST['alamatGuru'];
    $jk = $_POST['jenisKelamin'];
    $agama = $_POST['slcAgamaGuru'];
    $telp = $_POST['nomorTeleponGuru'];
    $unit = "MAN SIDOARJO";
    $pangkat = $_POST['slcPangkatGuru'];
    $jabatan = $_POST['slcJabatanGuru'];
    $foto = "$nip.jpg";

    isset($_POST['fotoGuru'])?$fileFoto=$_POST['fotoGuru']:$fileFoto="";

    if ($fileFoto == "") {
        $sqlUpdateProfile = "update guru_profil set NIP = '$nip', nama = '$nama', tempat_lahir = '$tempatLahir', tanggal_lahir = '$tanggalLahir', jenis_kelamin = '$jk', agama = '$agama', alamat = '$alamat', telp = '$telp', pangkat_terakhir = '$pangkat', jabatan_terakhir = '$jabatan', unit_kerja = '$unit', no_ktp = '$ktp' where NIP = '$nip'";
    } else {
        $sqlUpdateProfile = "update guru_profil set NIP = '$nip', nama = '$nama', tempat_lahir = '$tempatLahir', tanggal_lahir = '$tanggalLahir', jenis_kelamin = '$jk', agama = '$agama', alamat = '$alamat', telp = '$telp', pangkat_terakhir = '$pangkat', jabatan_terakhir = '$jabatan', unit_kerja = '$unit', no_ktp = '$ktp', foto_guru = '$foto' where NIP = '$nip'";
        #copy foto to server
        $uploads_dir = 'C:\xampp\htdocs\Pemrograman Web\Tugas_Besar\images\foto-guru';
        $tmp_name = $_FILES["fotoGuru"]["tmp_name"];
        move_uploaded_file($_FILES['fotoGuru']['tmp_name'], "$uploads_dir/$nip.jpg");
    }

    #declare SQL
    //                                     (`NIP`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `telp`, `pangkat_terakhir`, `jabatan_terakhir`, `unit_kerja`, `no_ktp`, `foto_guru`)
    //update datamhs set nim = '$nim', nama = '$nama', fakultas = '$fakultas', prodi = '$prodi' where nim = '$nim'

    // $sqlProfil = "insert into guru_profil values ('$nip', '$nama', '$tempatLahir', '$tanggalLahir', '$jk', '$agama', '$alamat', '$telp', '$pangkat', '$jabatan', '$unit', '$ktp', '$foto')";
    // $sqlAkun = "insert into akun values ('$nip', 'password')";

    #execute query
    mysqli_query($con, $sqlUpdateProfile) or die (mysqli_error($con));
    // mysqli_query($con, $sqlProfil) or die (mysqli_error($con));
    // mysqli_query($con, $sqlAkun) or die (mysqli_error($con));

    echo "<script type='text/javascript'>alert('Data Berhasil Diubah!');</script>";
    //header("location:index_admin.php?directionPage=dataMaster&activeState=dataGuru");
?>
<script type="text/javascript">
window.location.href = 'index_admin.php?directionPage=dataMaster&activeState=dataGuru';
</script>
<?php
}
 ?>
