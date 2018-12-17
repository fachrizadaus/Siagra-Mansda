<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <strong><?php echo "$dtGuru[nama]"; ?></strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <small><?php echo "NIP. $dtGuru[NIP]"; ?></small>
                        </div>
                    </div>
                </div>
                <div class="card-body card-block">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="http://localhost/Pemrograman%20Web/Tugas_Besar/images/foto-guru/<?php echo "$dtGuru[foto_guru]"; ?>">
                        </div>
                        <div class="col-md-9">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <small>Nomor KTP</small> <br>
                                        <input type="text" class="form-control" id="ktpGuru" name="ktpGuru" placeholder="Nomor KTP" value="<?php echo "$dtGuru[no_ktp]"; ?>" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <small>Nomor Telepon</small> <br>
                                        <input type="text" class="form-control" id="nomorTeleponGuru" name="nomorTeleponGuru" placeholder="Nomor Telepon" value="<?php echo "$dtGuru[telp]"; ?>" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <small>Tempat Kelahiran</small> <br>
                                        <input type="text" class="form-control" id="tempatLahirGuru" name="tempatLahirGuru" placeholder="Tempat Lahir" value="<?php echo "$dtGuru[tempat_lahir]"; ?>" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <small>Tanggal Kelahiran</small> <br>
                                        <input type="text" class="form-control" id="tanggalLahirGuru" name="tanggalLahirGuru" placeholder="Tanggal Lahir" value="<?php echo "$dtGuru[tanggal_lahir]"; ?>" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <small>Alamat</small>
                                        <textarea name="alamatGuru" class="form-control" id="alamatGuru" rows="5" placeholder="Alamat Lengkap" readonly><?php echo "$dtGuru[alamat]"; ?></textarea>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <small>Jenis Kelamin</small>
                                                <input type="text" class="form-control" name="jenisKelamin" value="<?php echo "$dtGuru[jenis_kelamin]"; ?>" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <small>Agama</small>
                                                <input type="text" class="form-control" name="agama" value="<?php echo "$dtGuru[agama]"; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <small>Unit Kerja</small>
                                                <input type="text" id="unitKerja" name="unitKerja" placeholder="MAN SIDOARJO" disabled="" class="form-control" value="MAN SIDOARJO">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <small>Pangkat Guru</small>
                                        <input type="text" class="form-control" name="pangkat" value="<?php echo "$dtGuru[pangkat_terakhir]"; ?>" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <small>Jabatan Guru</small>
                                        <input type="text" class="form-control" name="jabatan" value="<?php echo "$dtGuru[jabatan_terakhir]"; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Action</button>
    <button class="dropdown-item" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>
</div> -->
