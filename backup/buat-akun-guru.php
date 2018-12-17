<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            Buat Akun <strong>Guru</strong>
        </div>
        <script src="validation-new-account.js"></script>
        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" name="newAccountGuru" onsubmit="checkValidationGuru()">
            <div class="card-body card-block">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="nip" class=" form-control-label">NIP</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="nip" name="nip" placeholder="NIP Guru" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="nomorKtp" class=" form-control-label">Nomor KTP</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="nomorKtp" name="nomorKtp" placeholder="Nomor KTP" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="namaGuru" class=" form-control-label">Nama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="namaGuru" name="namaGuru" placeholder="Nama Guru" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="tempatLahir" class=" form-control-label">Tempat Lahir</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="tempatLahir" name="tempatLahir" placeholder="Tempat Lahir" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="tanggalLahir" class=" form-control-label">Tanggal Lahir</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="date" id="tanggalLahir" name="tanggalLahir" placeholder="Tanggal Lahir" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Jenis Kelamin</label>
                    </div>
                    <div class="col col-md-9">
                        <div class="form-check">
                            <div class="radio">
                                <label for="radio-jk-lk" class="form-check-label ">
                                    <input type="radio" id="radLaki" name="jenisKelamin" value="LAKI-LAKI" class="form-check-input">LAKI-LAKI
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radio-jk-pr" class="form-check-label ">
                                    <input type="radio" id="radPerempuan" name="jenisKelamin" value="PEREMPUAN" class="form-check-input">PEREMPUAN
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Agama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="select" id="select" class="form-control">
                            <option value="">Pilih Agama</option>
                            <option value="ISLAM">ISLAM</option>
                            <option value="PROTESTAN">KRISTEN PROTESTAN</option>
                            <option value="KATOLIK">KATOLIK</option>
                            <option value="HINDU">HINDU</option>
                            <option value="BUDDHA">BUDDHA</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="alamatGuru" class=" form-control-label">Alamat</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="alamatGuru" id="alamatGuru" rows="9" placeholder="Alamat Lengkap" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="telp-input" class=" form-control-label">Nomor Telepon</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="telp-input" name="telp-input" placeholder="Nomor Telepon" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Pangkat Terakhir</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="select" id="select" class="form-control">
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
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Pangkat Terakhir</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="select" id="select" class="form-control">
                            <option value="">Pilih Jabatan Guru</option>
                            <option value="GURU PERTAMA">Guru Pertama</option>
                            <option value="GURU MUDA">Guru Muda</option>
                            <option value="GURU MADYA">Guru Madya</option>
                            <option value="GURU UTAMA">Guru Utama</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="disabled-input" class=" form-control-label">Unit Kerja</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="disabled-input" name="disabled-input" placeholder="MAN SIDOARJO" disabled="" class="form-control" value="MAN SIDOARJO">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Foto Guru</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="file-input" class="form-control-file">
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
        </form>
    </div>
</div>
