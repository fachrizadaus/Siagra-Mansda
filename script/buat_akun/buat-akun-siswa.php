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
        <div class="card">
            <div class="card-header">
                Buat Akun <strong>Siswa</strong>
            </div>
            <div class="card-body card-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <small>NIS</small>
                            <input type="text" class="form-control" id="nisSiswa" name="nisSiswa" placeholder="Nomor Induk Siswa" required>
                            <div class="invalid-feedback">
                              Silahkan Isi Terlebih Dahulu!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <small>Kelas</small>
                            <div class="row">
                                <div class="col-sm-4">
                                    <select class="custom-select" name="kelasSiswa" required>
                                        <option value="">Kelas</option>
                                        <option value="X">10</option>
                                        <option value="XI">11</option>
                                        <option value="XII">12</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="custom-select" name="jurusanSiswa" required>
                                        <option value="">Jurusan</option>
                                        <option value="IPA">IPA</option>
                                        <option value="IPS">IPS</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="custom-select" name="urutanKelasSiswa" required>
                                        <option value="">---</option>
                                        <?php
                                        for ($i=1; $i <= 8; $i++) {
                                            echo "<option value='$i'>$i</option>";
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
                            <input type="text" class="form-control" id="namaSiswa" name="namaSiswa" placeholder="Nama Siswa" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                            <div class="invalid-feedback">
                              Silahkan Isi Terlebih Dahulu!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <small>Tempat Kelahiran</small>
                            <input type="text" class="form-control" id="tempatLahirSiswa" name="tempatLahirSiswa" placeholder="Tempat Lahir" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                            <div class="invalid-feedback">
                              Silahkan Isi Terlebih Dahulu!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <small>Tanggal Kelahiran</small>
                            <input type="date" class="form-control" id="tanggalLahirSiswa" name="tanggalLahirSiswa" placeholder="Tanggal Lahir" required>
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
                            <textarea name="alamatSiswa" id="alamatSiswa" rows="5" placeholder="Alamat Lengkap" class="form-control" required></textarea>
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
                                        <input type="radio" class="custom-control-input" id="radLakiSiswa" name="jenisKelamin" value="LAKI-LAKI" required>
                                        <label class="custom-control-label" for="radLakiSiswa">LAKI-LAKI</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" class="custom-control-input" id="radPerempuanSiswa" name="jenisKelamin" value="PEREMPUAN" required>
                                        <label class="custom-control-label" for="radPerempuanSiswa">PEREMPUAN</label>
                                        <div class="invalid-feedback">Pilih Jenis Kelamin</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <small>Agama</small>
                                    <select class="custom-select" name="slcAgamaSiswa" required>
                                        <option value="">Pilih Agama</option>
                                        <option value="ISLAM">ISLAM</option>
                                        <option value="PROTESTAN">KRISTEN PROTESTAN</option>
                                        <option value="KATOLIK">KATOLIK</option>
                                        <option value="HINDU">HINDU</option>
                                        <option value="BUDDHA">BUDDHA</option>
                                    </select>
                                    <div class="invalid-feedback">Silahkan Pilih Terlebih Dahulu</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <small>Nomor Telepon</small>
                                    <input type="text" class="form-control" id="nomorTeleponSiswa" name="nomorTeleponSiswa" placeholder="Nomor Telepon" required>
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
                                            echo "<option value='20$i'>20$i</option>";
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
                            <input type="text" class="form-control" id="waliSiswa" name="waliSiswa" placeholder="Nama Wali" required>
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
                                <input type="file" class="custom-file-input" id="fotoSiswa" name="fotoSiswa" required>
                                <label class="custom-file-label" for="fotoSiswa"></label>
                                <div class="invalid-feedback">Pilih File Foto</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm" name="submit">
                    <i class="zmdi zmdi-account-add"></i> Buat Akun
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="zmdi zmdi-block"></i> Reset
                </button>
            </div>
        </div>
    </form>
</div>

<?php include 'input_akun_siswa.php'; ?>
