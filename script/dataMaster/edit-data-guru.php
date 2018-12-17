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
        $nip = $_GET['editNip'];
        $dataGuru = mysqli_query($con, "select * from guru_profil where NIP = $nip");
        while ($dtGuru = mysqli_fetch_array($dataGuru)) {
         ?>
        <div class="card">
            <div class="card-header">
                Edit Data <strong>Guru</strong>
            </div>
            <div class="card-body card-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <small>NIP</small>
                            <input type="text" class="form-control" id="nipGuru" name="nipGuru" placeholder="NIP Guru" value="<?php echo "$dtGuru[NIP]"; ?>" readonly>
                            <div class="invalid-feedback">
                              Silahkan Isi Terlebih Dahulu!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <small>Nomor KTP</small>
                            <input type="text" class="form-control" id="ktpGuru" name="ktpGuru" placeholder="Nomor KTP" value="<?php echo "$dtGuru[no_ktp]"; ?>" readonly>
                            <div class="invalid-feedback">
                              Silahkan Isi Terlebih Dahulu!
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <small>Nama</small>
                            <input type="text" class="form-control" id="namaGuru" name="namaGuru" placeholder="Nama Guru" value="<?php echo "$dtGuru[nama]"; ?>" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                            <div class="invalid-feedback">
                              Silahkan Isi Terlebih Dahulu!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <small>Tempat Kelahiran</small>
                            <input type="text" class="form-control" id="tempatLahirGuru" name="tempatLahirGuru" placeholder="Tempat Lahir" value="<?php echo "$dtGuru[tempat_lahir]"; ?>" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                            <div class="invalid-feedback">
                              Silahkan Isi Terlebih Dahulu!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <small>Tanggal Kelahiran</small>
                            <input type="date" class="form-control" id="tanggalLahirGuru" name="tanggalLahirGuru" placeholder="Tanggal Lahir" value="<?php echo "$dtGuru[tanggal_lahir]"; ?>" required>
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
                            <textarea name="alamatGuru" id="alamatGuru" rows="5" placeholder="Alamat Lengkap" class="form-control" required><?php echo "$dtGuru[alamat]"; ?></textarea>
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
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="radLakiGuru" name="jenisKelamin" value="LAKI-LAKI" <?php
                                        if ($dtGuru['jenis_kelamin'] == "LAKI-LAKI") {
                                            echo "checked";
                                        }
                                         ?> required>
                                        <label class="custom-control-label" for="radLakiGuru">LAKI-LAKI</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" class="custom-control-input" id="radPerempuanGuru" name="jenisKelamin" value="PEREMPUAN" <?php
                                        if ($dtGuru['jenis_kelamin'] == "PEREMPUAN") {
                                            echo "checked";
                                        }
                                         ?> required>
                                        <label class="custom-control-label" for="radPerempuanGuru">PEREMPUAN</label>
                                        <div class="invalid-feedback">Pilih Jenis Kelamin</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <small>Agama</small>
                                    <select class="custom-select" name="slcAgamaGuru" required>
                                        <?php $agm = $dtGuru['agama']; ?>
                                        <option value="">Pilih Agama</option>
                                        <option value="ISLAM" <?php if ($agm == "ISLAM") {
                                            echo 'selected';
                                        } ?>>ISLAM</option>
                                        <option value="PROTESTAN" <?php if ($agm == "PROTESTAN") {
                                            echo 'selected';
                                        } ?>>KRISTEN PROTESTAN</option>
                                        <option value="KATOLIK" <?php if ($agm == "KATOLIK") {
                                            echo 'selected';
                                        } ?>>KATOLIK</option>
                                        <option value="HINDU" <?php if ($agm == "HINDU") {
                                            echo 'selected';
                                        } ?>>HINDU</option>
                                        <option value="BUDDHA" <?php if ($agm == "BUDDHA") {
                                            echo 'selected';
                                        } ?>>BUDDHA</option>
                                    </select>
                                    <div class="invalid-feedback">Silahkan Pilih Terlebih Dahulu</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <small>Nomor Telepon</small>
                                    <input type="text" class="form-control" id="nomorTeleponGuru" name="nomorTeleponGuru" placeholder="Nomor Telepon" value="<?php echo "$dtGuru[telp]"; ?>" required>
                                    <div class="invalid-feedback">
                                      Silahkan Isi Terlebih Dahulu!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <small>Unit Kerja</small>
                                    <input type="text" id="unitKerja" name="unitKerja" placeholder="MAN SIDOARJO" disabled="" class="form-control" value="MAN SIDOARJO">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <small>Pangkat Guru</small>
                            <select class="custom-select" name="slcPangkatGuru" required>
                                <?php $pangkat = $dtGuru['pangkat_terakhir']; ?>
                                <option value="">Pilih Pangkat Guru</option>
                                <option value="PENATA MUDA" <?php if ($pangkat == "PENATA MUDA") {
                                    echo "selected";
                                } ?>>Penata Muda</option>
                                <option value="PENATA MUDA TK.I" <?php if ($pangkat == "PENATA MUDA TK.I") {
                                    echo "selected";
                                } ?>>Penata Muda Tk.1</option>
                                <option value="PENATA" <?php if ($pangkat == "PENATA") {
                                    echo "selected";
                                } ?>>Penata</option>
                                <option value="PENATA TK.I" <?php if ($pangkat == "PENATA TK.I") {
                                    echo "selected";
                                } ?>>Penata Tk.1</option>
                                <option value="PEMBINA" <?php if ($pangkat == "PEMBINA") {
                                    echo "selected";
                                } ?>>Pembina</option>
                                <option value="PEMBINA TK.I" <?php if ($pangkat == "PEMBINA TK.I") {
                                    echo "selected";
                                } ?>>Pembina Tk.1</option>
                                <option value="PEMBINA UTAMA MADYA" <?php if ($pangkat == "PEMBINA UTAMA MADYA") {
                                    echo "selected";
                                } ?>>Pembina Utama Madya</option>
                                <option value="PEMBINA UTAMA" <?php if ($pangkat == "PEMBINA UTAMA") {
                                    echo "selected";
                                } ?>>Pembina Utama</option>
                            </select>
                            <div class="invalid-feedback">Silahkan Pilih Terlebih Dahulu</div>
                        </div>
                        <div class="col-md-6">
                            <small>Jabatan Guru</small>
                            <select class="custom-select" name="slcJabatanGuru" required>
                                <?php $jbt = $dtGuru['jabatan_terakhir']; ?>
                                <option value="">Pilih Jabatan Guru</option>
                                <option value="GURU PERTAMA" <?php if ($jbt == "GURU PERTAMA") {
                                    echo "selected";
                                } ?>>Guru Pertama</option>
                                <option value="GURU MUDA" <?php if ($jbt == "GURU MUDA") {
                                    echo "selected";
                                } ?>>Guru Muda</option>
                                <option value="GURU MADYA" <?php if ($jbt == "GURU MADYA") {
                                    echo "selected";
                                } ?>>Guru Madya</option>
                                <option value="GURU UTAMA" <?php if ($jbt == "GURU UTAMA") {
                                    echo "selected";
                                } ?>>Guru Utama</option>
                            </select>
                            <div class="invalid-feedback">Silahkan Pilih Terlebih Dahulu</div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">
                            <small>Foto Guru</small>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file" name="fotoGuru" value="<?php echo $dtGuru['foto_guru'] ?>">
                                <label class="custom-file-label" for="fotoGuru">
                                    <!-- <img src="http://localhost/Pemrograman%20Web/Tugas_Besar/images/foto-guru/<?php //echo "$dtGuru[foto_guru]"; ?>" alt="" style="max-width:10%"> -->
                                    <?php echo "$dtGuru[foto_guru]"; ?>
                                </label>
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
                <a href="index_admin.php?directionPage=dataMaster&activeState=dataGuru" class="btn btn-danger btn-sm">
                    <i class="zmdi zmdi-replay"></i> Kembali
                </a>
            </div>
        </div>
    </form>
</div>

<?php }
include 'update-akun-guru.php'; ?>
