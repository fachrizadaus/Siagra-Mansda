<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <strong><?php echo "$dtSiswa[nama]"; ?></strong>
                        </div>
                        <div class="col-sm-6 text-right">
                            <small><?php echo "NIS : $dtSiswa[NIS]"; ?></small>
                        </div>
                    </div>
                </div>
                <div class="card-body card-block">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="http://localhost/Pemrograman%20Web/Tugas_Besar/images/foto-siswa/<?php echo "$dtSiswa[foto_siswa]"; ?>">
                        </div>
                        <div class="col-md-9">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <small>Nama Wali</small>
                                        <input style="text-align: center;" type="text" class="form-control" placeholder="Nama Wali" value="<?php echo "$dtSiswa[nama_wali]"; ?>" readonly>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <small>Kelas</small>
                                                <input style="text-align: center;" type="text" class="form-control" placeholder="Kelas" value="<?php echo "$dtSiswa[kelas]"; ?>" readonly>
                                            </div>
                                            <div class="col-sm-4">
                                                <small>Tahun Masuk</small>
                                                <input style="text-align: center;" type="text" class="form-control" placeholder="Tahun Masuk" value="<?php echo "$dtSiswa[tahun_masuk]"; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <small>Tempat Kelahiran</small>
                                                <input style="text-align: center;" type="text" class="form-control" placeholder="Tempat Lahir" value="<?php echo "$dtSiswa[tempat_lahir]"; ?>" readonly>
                                            </div>
                                            <div class="col-sm-6">
                                                <small>Tanggal Kelahiran</small>
                                                <input style="text-align: center;" type="text" class="form-control" placeholder="Tanggal Lahir" value="<?php echo "$dtSiswa[tanggal_lahir]"; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <small>Nomor Telepon</small>
                                                <input style="text-align: center;" type="text" class="form-control" placeholder="Nomor Telepon" value="<?php echo "$dtSiswa[telp]"; ?>" readonly>
                                            </div>
                                            <div class="col-sm-6">
                                                <small>Agama</small>
                                                <input style="text-align: center;" type="text" class="form-control" placeholder="Agama" value="<?php echo "$dtSiswa[agama]"; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <small>Alamat</small>
                                        <input style="text-align: center;" type="text" class="form-control" placeholder="Alamat" value="<?php echo "$dtSiswa[alamat]"; ?>" readonly>
                                    </div>
                                    <div class="col-sm-6">
                                        <small>Jenis Kelamin</small>
                                        <input style="text-align: center;" type="text" class="form-control" placeholder="Jenis Kelamin" value="<?php echo "$dtSiswa[jenis_kelamin]"; ?>" readonly>
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
