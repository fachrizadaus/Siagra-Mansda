<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <strong><?php echo "$nilai2[nama_siswa]"; ?></strong>
                        </div>
                        <div class="col-sm-6 text-right">
                            <small><?php echo "$nilai2[NIS]"; ?></small>
                        </div>
                    </div>
                </div>
                <div class="card-body card-block">
                    <div class="row">
                        <div class="col-md-4">
                            <small>Al-Qur'an dan Hadits</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $nilai2['quran_hadits']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <small>Aqidah Ahlak</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $nilai2['aqidah_ahlak']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <small>PPKN</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $nilai2['ppkn']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <small>Sejarah Kebudayaan Islam</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $nilai2['fiqih']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <small>Bahasa Indonesia</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $nilai2['b_indonesia']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <small>Bahasa Arab</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $nilai2['b_arab']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <small>Bahasa Inggris</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $nilai2['b_inggris']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <small>Matematika</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $nilai2['matematika']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <small>Bimbingan Konseling</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $nilai2['bk']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <small>Prakarya</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $nilai2['pky']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <small>Fisika</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $nilai2['fisika']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <small>Biologi</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $nilai2['biologi']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <small>Kimia</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $nilai2['kimia']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <small>Sejarah</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $nilai2['sejarah']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <small>Ekonomi</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $nilai2['ekonomi']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <small>Geografi</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $nilai2['geografi']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <small>Sosiologi</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $nilai2['sosiologi']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <small>Seni dan Kebudayaan</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $nilai2['sbk']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <small>Pendidikan Jasmani dan Kesehatan</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $nilai2['penjaskes']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <small>Bahasa dan Sastra Indonesia</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $nilai2['b_sasindo']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <small>Bahasa dan Sastra Inggris</small>
                            <div class="form-control" style="text-align: center;">
                                <span><?php echo $nilai2['b_sasing']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-6">
                            Total : <span><?php echo $nilai2['total']; ?></span> <br>
                            Rata-Rata : <span><?php echo $nilai2['rata_rata']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
