<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <strong><?php echo "$dtNilai[nama_siswa]"; ?></strong>
                        </div>
                        <div class="col-sm-6 text-right">
                            <small><?php echo "$dtNilai[NIS]"; ?></small>
                        </div>
                    </div>
                </div>
                <div class="card-body card-block">
                    <div class="row">
                        <div class="col-md-6">
                            <small>Semester</small>
                            <input style="text-align: center;" type="text" class="form-control" value="<?php echo "$newSlcSem"; ?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <small>Kelas</small>
                            <input style="text-align: center;" type="text" class="form-control" value="<?php echo "$slcCls"; ?>" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <small>Al-Qur'an dan Hadits</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $dtNilai['quran_hadits']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <small>Aqidah Ahlak</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $dtNilai['aqidah_ahlak']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <small>PPKN</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $dtNilai['ppkn']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <small>Sejarah Kebudayaan Islam</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $dtNilai['fiqih']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <small>Bahasa Indonesia</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $dtNilai['b_indonesia']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <small>Bahasa Arab</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $dtNilai['b_arab']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <small>Bahasa Inggris</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $dtNilai['b_inggris']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <small>Matematika</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $dtNilai['matematika']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <small>Bimbingan Konseling</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $dtNilai['bk']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <small>Prakarya</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $dtNilai['pky']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <small>Fisika</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $dtNilai['fisika']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <small>Biologi</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $dtNilai['biologi']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <small>Kimia</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $dtNilai['kimia']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <small>Sejarah</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $dtNilai['sejarah']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <small>Ekonomi</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $dtNilai['ekonomi']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <small>Geografi</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $dtNilai['geografi']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <small>Sosiologi</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $dtNilai['sosiologi']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <small>Seni dan Kebudayaan</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $dtNilai['sbk']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <small>Pendidikan Jasmani dan Kesehatan</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $dtNilai['penjaskes']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <small>Bahasa dan Sastra Indonesia</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $dtNilai['b_sasindo']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <small>Bahasa dan Sastra Inggris</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $dtNilai['b_sasing']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-6">
                            Total : <span><?php echo $dtNilai['total']; ?></span> <br>
                            Rata-Rata : <span><?php echo $dtNilai['rata_rata']; ?></span>
                        </div>
                        <div class="col-sm-6 text-right">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
