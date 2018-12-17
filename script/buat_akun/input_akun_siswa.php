<?php
if (isset($_POST['submit'])) {
    $nis = $_POST['nisSiswa'];

    $kls = $_POST['kelasSiswa'];
    $jur = $_POST['jurusanSiswa'];
    $urt = $_POST['urutanKelasSiswa'];
    $kelas = "$kls-$jur-$urt";

    $nama = $_POST['namaSiswa'];
    $tempatLahir = $_POST['tempatLahirSiswa'];
    $tanggalLahir = $_POST['tanggalLahirSiswa'];
    $jk = $_POST['jenisKelamin'];
    $agama = $_POST['slcAgamaSiswa'];
    $alamat = $_POST['alamatSiswa'];
    $telp = $_POST['nomorTeleponSiswa'];
    $masuk = $_POST['tahunMasuk'];
    $wali = $_POST['waliSiswa'];
    $foto = "$nis.jpg";


    #declare SQL
    //(`$nis`, `$kelas`, `$nama`, `$tempatLahir`, `$tanggalLahir`, `$jk`, `$agama`, `$alamat`, `$telp`, `$masuk`, `$wali`, `$foto`)
    $sqlProfil = "insert into siswa_profil values ('$nis', '$kelas', '$nama', '$tempatLahir', '$tanggalLahir', '$jk', '$agama', '$alamat', '$telp', '$masuk', '$wali', '$foto')";
    $sqlAkun = "insert into akun values ('$nis', 'password')";
    #execute query
    mysqli_query($con, $sqlProfil) or die (mysqli_error($con));
    mysqli_query($con, $sqlAkun) or die (mysqli_error($con));

    #copy foto to server
    $uploads_dir = 'C:\xampp\htdocs\Pemrograman Web\Tugas_Besar\images\foto-siswa';
    $tmp_name = $_FILES["fotoSiswa"]["tmp_name"];
    move_uploaded_file($_FILES['fotoSiswa']['tmp_name'], "$uploads_dir/$nis.jpg");

    echo "<script type='text/javascript'>alert('Akun Berhasil Dibuat!');</script>";

}

 ?>
