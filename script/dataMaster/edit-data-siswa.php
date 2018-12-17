<div class="col-lg-12">
    <form class="needs-validation" action="" method="post" enctype="multipart/form-data" novalidate>

        <script type="text/javascript">
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
        'use strict';
        window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
        }, false);
        })
        ();
        </script>
        <?php
        $nis = $_GET['editNIS'];
        $dataSiswa = mysqli_query($con, "select * from siswa_profil where NIS = $nis");
        while ($dtSiswa = mysqli_fetch_array($dataSiswa)) {
         ?>
         <div class="card">
             <div class="card-header">
                 Buat Akun <strong>Siswa</strong>
             </div>
             <div class="card-body card-block">
                 <div class="container-fluid">
                     <div class="row">
                         <div class="col-md-6">
                             <small>NIS</small>
                             <input type="text" class="form-control" id="nisSiswa" name="nisSiswa" value="<?php echo "$dtSiswa[NIS]"; ?>"  readonly>
                         </div>
                         <div class="col-md-6">
                             <small>Kelas</small>
                             <div class="row">
                                 <div class="col-sm-4">
                                     <select class="custom-select" name="kelasSiswa" required>
                                         <?php $dtKelasSiswa = explode("-", $dtSiswa['kelas']); ?>
                                         <option value="">Kelas</option>
                                         <option value="X" <?php if ($dtKelasSiswa[0] == "X") {
                                             echo "selected";
                                         } ?>>10</option>
                                         <option value="XI" <?php if ($dtKelasSiswa[0] == "XI") {
                                             echo "selected";
                                         } ?>>11</option>
                                         <option value="XII" <?php if ($dtKelasSiswa[0] == "XII") {
                                             echo "selected";
                                         } ?>>12</option>
                                     </select>
                                 </div>
                                 <div class="col-sm-4">
                                     <select class="custom-select" name="jurusanSiswa" required>
                                         <option value="">Jurusan</option>
                                         <option value="IPA" <?php if ($dtKelasSiswa[1] == "IPA") {
                                             echo "selected";
                                         } ?>>IPA</option>
                                         <option value="IPS" <?php if ($dtKelasSiswa[1] == "IPS") {
                                             echo "selected";
                                         } ?>>IPS</option>
                                     </select>
                                 </div>
                                 <div class="col-sm-4">
                                     <select class="custom-select" name="urutanKelasSiswa" required>
                                         <option value="">---</option>
                                         <?php
                                         for ($i=1; $i <= 4; $i++) {
                                             if ($i == $dtKelasSiswa[2]) {
                                                 $trueSelected = "selected";
                                             } else {
                                                 $trueSelected = "";
                                             }
                                             echo "<option value='$i' $trueSelected>$i</option>";
                                         }
                                          ?>
                                     </select>
                                 </div>
                                 <div class="invalid-feedback">Silahkan Pilih Terlebih Dahulu</div>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-4">
                             <small>Nama</small>
                             <input type="text" class="form-control" id="namaSiswa" name="namaSiswa" placeholder="Nama Siswa" value="<?php echo "$dtSiswa[nama]"; ?>" required>
                             <div class="valid-feedback">
                               Looks good!
                             </div>
                             <div class="invalid-feedback">
                               Silahkan Isi Terlebih Dahulu!
                             </div>
                         </div>
                         <div class="col-md-4">
                             <small>Tempat Kelahiran</small>
                             <input type="text" class="form-control" id="tempatLahirSiswa" name="tempatLahirSiswa" placeholder="Tempat Lahir" value="<?php echo "$dtSiswa[tempat_lahir]"; ?>" required>
                             <div class="valid-feedback">
                               Looks good!
                             </div>
                             <div class="invalid-feedback">
                               Silahkan Isi Terlebih Dahulu!
                             </div>
                         </div>
                         <div class="col-md-4">
                             <small>Tanggal Kelahiran</small>
                             <input type="date" class="form-control" id="tanggalLahirSiswa" name="tanggalLahirSiswa" placeholder="Tanggal Lahir" value="<?php echo "$dtSiswa[tanggal_lahir]"; ?>" required>
                             <div class="valid-feedback">
                               Looks good!
                             </div>
                             <div class="invalid-feedback">
                               Silahkan Isi Terlebih Dahulu!
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-4">
                             <small>Alamat</small>
                             <textarea name="alamatSiswa" id="alamatSiswa" rows="5" placeholder="Alamat Lengkap" class="form-control" required><?php echo "$dtSiswa[alamat]"; ?></textarea>
                             <div class="valid-feedback">
                               Looks good!
                             </div>
                             <div class="invalid-feedback">
                               Silahkan Isi Terlebih Dahulu!
                             </div>
                         </div>
                         <div class="col-md-8">
                             <div class="row">
                                 <div class="col-md-6">
                                     <small>Jenis Kelamin</small>
                                     <?php
                                     if ($dtSiswa['jenis_kelamin'] == "LAKI-LAKI") {
                                         $jkSlcLk = "checked";
                                         $jkSlcPr = "";
                                     } elseif ($dtSiswa['jenis_kelamin'] == "PEREMPUAN") {
                                         $jkSlcLk = "";
                                         $jkSlcPr = "checked";
                                     }
                                      ?>
                                     <div class="custom-control custom-radio">
                                         <input type="radio" class="custom-control-input" id="radLakiSiswa" name="jenisKelamin" value="LAKI-LAKI" <?php echo "$jkSlcLk"; ?> required>
                                         <label class="custom-control-label" for="radLakiSiswa">LAKI-LAKI</label>
                                     </div>
                                     <div class="custom-control custom-radio mb-3">
                                         <input type="radio" class="custom-control-input" id="radPerempuanSiswa" name="jenisKelamin" value="PEREMPUAN" <?php echo "$jkSlcPr"; ?> required>
                                         <label class="custom-control-label" for="radPerempuanSiswa">PEREMPUAN</label>
                                         <div class="invalid-feedback">Pilih Jenis Kelamin</div>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <small>Agama</small>
                                     <select class="custom-select" name="slcAgamaSiswa" required>
                                         <option value="">Pilih Agama</option>
                                         <option value="ISLAM" <?php if ($dtSiswa['agama'] == "ISLAM") {
                                             echo "selected";
                                         } ?>>ISLAM</option>
                                         <option value="PROTESTAN" <?php if ($dtSiswa['agama'] == "PROTESTAN") {
                                             echo "selected";
                                         } ?>>KRISTEN PROTESTAN</option>
                                         <option value="KATOLIK" <?php if ($dtSiswa['agama'] == "KATOLIK") {
                                             echo "selected";
                                         } ?>>KATOLIK</option>
                                         <option value="HINDU" <?php if ($dtSiswa['agama'] == "HINDU") {
                                             echo "selected";
                                         } ?>>HINDU</option>
                                         <option value="BUDDHA" <?php if ($dtSiswa['agama'] == "BUDDHA") {
                                             echo "selected";
                                         } ?>>BUDDHA</option>
                                     </select>
                                     <div class="invalid-feedback">Silahkan Pilih Terlebih Dahulu</div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-6">
                                     <small>Nomor Telepon</small>
                                     <input type="text" class="form-control" id="nomorTeleponSiswa" name="nomorTeleponSiswa" placeholder="Nomor Telepon" value="<?php echo "$dtSiswa[telp]"; ?>" required>
                                     <div class="invalid-feedback">
                                       Silahkan Isi Terlebih Dahulu!
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <small>Tahun Masuk</small>
                                     <select class="custom-select" name="tahunMasuk" required>
                                         <option value="">Pilih Tahun Masuk</option>
                                         <?php
                                         for ($i=10; $i <= 20; $i++) {
                                             if ($dtSiswa['tahun_masuk'] == "20".$i) {
                                                 $thMasuk = "selected";
                                             } else {
                                                 $thMasuk = "";
                                             }
                                             echo "<option value='20$i' $thMasuk>20$i</option>";
                                         }
                                          ?>
                                     </select>
                                     <div class="invalid-feedback">
                                       Silahkan Pilih Terlebih Dahulu!
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-6">
                             <small>Nama Wali</small>
                             <input type="text" class="form-control" id="waliSiswa" name="waliSiswa" placeholder="Nama Wali" value="<?php echo "$dtSiswa[nama_wali]"; ?>" required>
                             <div class="valid-feedback">
                               Looks good!
                             </div>
                             <div class="invalid-feedback">
                               Silahkan Isi Terlebih Dahulu!
                             </div>
                         </div>
                         <div class="col-md-6">
                             <small>Foto Siswa</small>
                             <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="fotoSiswa" name="fotoSiswa">
                                 <label class="custom-file-label" for="fotoSiswa"><?php echo "$dtSiswa[foto_siswa]"; ?></label>
                                 <div class="invalid-feedback">Pilih File Foto</div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="card-footer">
                 <button type="submit" class="btn btn-primary btn-sm" name="submit">
                     <i class="zmdi zmdi-edit"></i> Ubah Data
                 </button>
                 <a href="index_admin.php?directionPage=dataMaster&activeState=dataSiswa" class="btn btn-danger btn-sm">
                     <i class="zmdi zmdi-replay"></i> Kembali
                 </a>
             </div>
         </div>
    </form>
</div>

<?php }
include 'update-akun-siswa.php'; ?>
