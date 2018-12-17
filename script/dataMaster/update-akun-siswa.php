<?php
if (isset($_POST['submit'])) {
    #declaring var

    $nis = $_POST['nisSiswa'];
    $kelas = $_POST['kelasSiswa']."-".$_POST['jurusanSiswa']."-".$_POST['urutanKelasSiswa'];
    $nama = $_POST['namaSiswa'];
    $tempatLahir = $_POST['tempatLahirSiswa'];
    $tanggalLahir = $_POST['tanggalLahirSiswa'];
    $alamat = $_POST['alamatSiswa'];
    $jk = $_POST['jenisKelamin'];
    $agama = $_POST['slcAgamaSiswa'];
    $telp = $_POST['nomorTeleponSiswa'];
    $masuk = $_POST['tahunMasuk'];
    $wali = $_POST['waliSiswa'];
    $foto = "$nis.jpg";


    isset($_POST['fotoSiswa'])?$fileFoto=$_POST['fotoSiswa']:$fileFoto="";

    if ($fileFoto == "") {
        $sqlUpdateProfileSiswa = "update siswa_profil set
        NIS = '$nis',
        kelas= '$kelas',
        nama = '$nama',
        tempat_lahir = '$tempatLahir',
        tanggal_lahir = '$tanggalLahir',
        jenis_kelamin = '$jk',
        agama = '$agama',
        alamat = '$alamat',
        telp = '$telp',
        tahun_masuk = '$masuk',
        nama_wali = '$wali'
        where NIS = '$nis'";
    } else {
        $sqlUpdateProfileSiswa = "update guru_profil set
        NIS = '$nis',
        nama = '$nama',
        tempat_lahir = '$tempatLahir',
        tanggal_lahir = '$tanggalLahir',
        jenis_kelamin = '$jk',
        agama = '$agama',
        alamat = '$alamat',
        telp = '$telp',
        tahun_masuk = '$masuk',
        nama_wali = '$wali',
        foto_siswa = '$foto'
        where NIS = '$nis'";

        #copy foto to server
        $uploads_dir = 'http://localhost/Pemrograman%20Web/Tugas_Besar/images/foto-siswa';
        $tmp_name = $_FILES["fotoGuru"]["tmp_name"];
        move_uploaded_file($_FILES['fotoGuru']['tmp_name'], "$uploads_dir/$nis.jpg");
    }

    #declare SQL
    //                                     (`NIP`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `telp`, `pangkat_terakhir`, `jabatan_terakhir`, `unit_kerja`, `no_ktp`, `foto_guru`)
    //update datamhs set nim = '$nim', nama = '$nama', fakultas = '$fakultas', prodi = '$prodi' where nim = '$nim'

    // $sqlProfil = "insert into guru_profil values ('$nip', '$nama', '$tempatLahir', '$tanggalLahir', '$jk', '$agama', '$alamat', '$telp', '$pangkat', '$jabatan', '$unit', '$ktp', '$foto')";
    // $sqlAkun = "insert into akun values ('$nip', 'password')";

    #execute query
    mysqli_query($con, $sqlUpdateProfileSiswa) or die (mysqli_error($con));
    // mysqli_query($con, $sqlProfil) or die (mysqli_error($con));
    // mysqli_query($con, $sqlAkun) or die (mysqli_error($con));

    echo "<script type='text/javascript'>alert('Data Berhasil Diubah!');</script>";
    //header("location:index_admin.php?directionPage=dataMaster&activeState=dataSiswa");
?>
<script type="text/javascript">
window.location.href = 'index_admin.php?directionPage=dataMaster&activeState=dataSiswa';
</script>
<?php
}
 ?>
