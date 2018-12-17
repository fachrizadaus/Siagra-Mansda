<?php
if (isset($_POST['submit'])) {
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

    #declare SQL
    //                                     (`NIP`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `telp`, `pangkat_terakhir`, `jabatan_terakhir`, `unit_kerja`, `no_ktp`, `foto_guru`)
    $sqlProfil = "insert into guru_profil values ('$nip', '$nama', '$tempatLahir', '$tanggalLahir', '$jk', '$agama', '$alamat', '$telp', '$pangkat', '$jabatan', '$unit', '$ktp', '$foto')";
    $sqlAkun = "insert into akun values ('$nip', 'password')";
    #execute query
    mysqli_query($con, $sqlProfil) or die (mysqli_error($con));
    mysqli_query($con, $sqlAkun) or die (mysqli_error($con));

    #copy foto to server
    $uploads_dir = 'C:\xampp\htdocs\Pemrograman Web\Tugas_Besar\images\foto-guru';
    $tmp_name = $_FILES["fotoGuru"]["tmp_name"];
    move_uploaded_file($_FILES['fotoGuru']['tmp_name'], "$uploads_dir/$nip.jpg");

    echo "<script type='text/javascript'>alert('Akun Berhasil Dibuat!');</script>";
}
 ?>
