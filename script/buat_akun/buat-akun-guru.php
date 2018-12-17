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
                Buat Akun <strong>Guru</strong>
            </div>
            <div class="card-body card-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <small>NIP</small>
                            <input type="text" class="form-control" id="nipGuru" name="nipGuru" placeholder="NIP Guru" required>
                            <div class="invalid-feedback">
                              Silahkan Isi Terlebih Dahulu!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <small>Nomor KTP</small>
                            <input type="text" class="form-control" id="ktpGuru" name="ktpGuru" placeholder="Nomor KTP" required>
                            <div class="invalid-feedback">
                              Silahkan Isi Terlebih Dahulu!
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <small>Nama</small>
                            <input type="text" class="form-control" id="namaGuru" name="namaGuru" placeholder="Nama Guru" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                            <div class="invalid-feedback">
                              Silahkan Isi Terlebih Dahulu!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <small>Tempat Kelahiran</small>
                            <input type="text" class="form-control" id="tempatLahirGuru" name="tempatLahirGuru" placeholder="Tempat Lahir" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                            <div class="invalid-feedback">
                              Silahkan Isi Terlebih Dahulu!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <small>Tanggal Kelahiran</small>
                            <input type="date" class="form-control" id="tanggalLahirGuru" name="tanggalLahirGuru" placeholder="Tanggal Lahir" required>
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
                            <textarea name="alamatGuru" id="alamatGuru" rows="5" placeholder="Alamat Lengkap" class="form-control" required></textarea>
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
                                        <input type="radio" class="custom-control-input" id="radLakiGuru" name="jenisKelamin" value="LAKI-LAKI" required>
                                        <label class="custom-control-label" for="radLakiGuru">LAKI-LAKI</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" class="custom-control-input" id="radPerempuanGuru" name="jenisKelamin" value="PEREMPUAN" required>
                                        <label class="custom-control-label" for="radPerempuanGuru">PEREMPUAN</label>
                                        <div class="invalid-feedback">Pilih Jenis Kelamin</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <small>Agama</small>
                                    <select class="custom-select" name="slcAgamaGuru" required>
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
                                    <input type="text" class="form-control" id="nomorTeleponGuru" name="nomorTeleponGuru" placeholder="Nomor Telepon" required>
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
                        <div class="col-md-4">
                            <small>Pangkat Guru</small>
                            <select class="custom-select" name="slcPangkatGuru" required>
                                <option value="">Pilih Pangkat Guru</option>
                                <option value="PENATA MUDA">Penata Muda</option>
                                <option value="PENATA MUDA TK.I">Penata Muda Tk.1</option>
                                <option value="PENATA">Penata</option>
                                <option value="PENATA TK.I">Penata Tk.1</option>
                                <option value="PEMBINA">Pembina</option>
                                <option value="PEMBINA TK.I">Pembina Tk.1</option>
                                <option value="PEMBINA UTAMA MADYA">Pembina Utama Madya</option>
                                <option value="PEMBINA UTAMA">Pembina Utama</option>
                            </select>
                            <div class="invalid-feedback">Silahkan Pilih Terlebih Dahulu</div>
                        </div>
                        <div class="col-md-4">
                            <small>Jabatan Guru</small>
                            <select class="custom-select" name="slcJabatanGuru" required>
                                <option value="">Pilih Jabatan Guru</option>
                                <option value="GURU PERTAMA">Guru Pertama</option>
                                <option value="GURU MUDA">Guru Muda</option>
                                <option value="GURU MADYA">Guru Madya</option>
                                <option value="GURU UTAMA">Guru Utama</option>
                            </select>
                            <div class="invalid-feedback">Silahkan Pilih Terlebih Dahulu</div>
                        </div>
                        <div class="col-md-4">
                            <small>Foto Guru</small>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file" name="fotoGuru" required>
                                <label class="custom-file-label" for="fotoGuru">

                                </label>
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

<?php include 'input_akun_guru.php'; ?>
