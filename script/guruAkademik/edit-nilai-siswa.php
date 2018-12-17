<?php
$semester = $_GET['editsemester'];
$nis = $_GET['editNIS'];
$nipGuruPengajar = $_SESSION['login'];

$queryGetDataEditNilaiSiswa = mysqli_query($con, "SELECT * FROM nilai_siswa WHERE NIS = '$nis' AND semester = $semester");
while ($dtEditNilaiSiswa = mysqli_fetch_array($queryGetDataEditNilaiSiswa)) {
    $kelas = $dtEditNilaiSiswa['kelas'];
    $queryGuruPengajar = mysqli_query($con, "SELECT * FROM guru_kelas WHERE guru_pengajar = '$nipGuruPengajar' AND kelas = '$kelas'");
    $executeQueryGuruPengajar = mysqli_fetch_array($queryGuruPengajar);

 ?>

<script type="text/javascript">
    function changeTotal() {
        var qurdis = document.getElementById('quran_hadits').value;
        var aqidah = document.getElementById('aqidah_ahlak').value;
        var ppkn = document.getElementById('ppkn').value;
        var ski = document.getElementById('ski').value;
        var b_indonesia = document.getElementById('b_indonesia').value;

        var fiqih = document.getElementById('fiqih').value;
        var b_arab = document.getElementById('b_arab').value;
        var b_inggris = document.getElementById('b_inggris').value;
        var matematika = document.getElementById('matematika').value;
        var bk = document.getElementById('bk').value;

        var pky = document.getElementById('pky').value;
        var fisika = document.getElementById('fisika').value;
        var biologi = document.getElementById('biologi').value;
        var kimia = document.getElementById('kimia').value;
        var sejarah = document.getElementById('sejarah').value;

        var ekonomi = document.getElementById('ekonomi').value;
        var geografi = document.getElementById('geografi').value;
        var sosiologi = document.getElementById('sosiologi').value;
        var sbk = document.getElementById('sbk').value;
        var penjaskes = document.getElementById('penjaskes').value;

        var b_sasindo = document.getElementById('b_sasindo').value;
        var b_sasing = document.getElementById('b_sasing').value;

        var total = parseInt(qurdis) + parseInt(aqidah) + parseInt(ppkn) + parseInt(ski) + parseInt(b_indonesia)
        + parseInt(fiqih) + parseInt(b_arab) + parseInt(b_inggris) + parseInt(matematika) + parseInt(bk)
        + parseInt(pky) + parseInt(fisika) + parseInt(biologi) + parseInt(kimia) + parseInt(sejarah)
        + parseInt(ekonomi) + parseInt(geografi) + parseInt(sosiologi) + parseInt(sbk) + parseInt(penjaskes) + parseInt(b_sasindo) + parseInt(b_sasing);
        var rata = parseInt(total/22);

        document.getElementById('total').value = total;
        document.getElementById('total').innerHTML = total;
        document.getElementById('totalspan').innerHTML = total;

        document.getElementById('rata').value = rata;
        document.getElementById('rata').innerHTML = rata;
        document.getElementById('rataspan').innerHTML = rata;
    }
</script>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <form class="" action="" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <strong><?php echo "$dtEditNilaiSiswa[nama_siswa]"; ?></strong>
                        </div>
                        <div class="col-sm-6 text-right">
                            <input type="hidden" id="nis" name="nis" value="<?php echo "$dtEditNilaiSiswa[NIS]"; ?>">
                            <small><?php echo "$dtEditNilaiSiswa[NIS]"; ?></small>
                        </div>
                    </div>
                </div>
                <div class="card-body card-block">
                    <div class="row">
                        <div class="col-md-6">
                            <small>Semester</small>
                            <input type="hidden" id="smster" name="smster" value="<?php echo "$dtEditNilaiSiswa[semester]"; ?>">
                            <input style="text-align: center;" type="text" class="form-control" value="<?php echo "$dtEditNilaiSiswa[semester]"; ?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <small>Kelas</small>
                            <input style="text-align: center;" type="text" class="form-control" value="<?php echo "$dtEditNilaiSiswa[kelas]"; ?>" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <small>Al-Qur'an dan Hadits</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="quran_hadits" name="quran_hadits" value="<?php echo $dtEditNilaiSiswa['quran_hadits']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "AL-QUR'AN HADITS") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                        <div class="col-md-4">
                            <small>Aqidah Ahlak</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="aqidah_ahlak" name="aqidah_ahlak" value="<?php echo $dtEditNilaiSiswa['aqidah_ahlak']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "AQIDAH AHLAK") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                        <div class="col-md-4">
                            <small>PPKN</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="ppkn" name="ppkn" value="<?php echo $dtEditNilaiSiswa['ppkn']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "PPKN") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <small>Sejarah Kebudayaan Islam</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="ski" name="ski" value="<?php echo $dtEditNilaiSiswa['ski']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "SEJARAH KEBUDAYAAN ISLAM") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                        <div class="col-md-4">
                            <small>Bahasa Indonesia</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="b_indonesia" name="b_indonesia" value="<?php echo $dtEditNilaiSiswa['b_indonesia']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "BAHASA INDONESIA") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                        <div class="col-md-4">
                            <small>Fiqih</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="fiqih" name="fiqih" value="<?php echo $dtEditNilaiSiswa['fiqih']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "FIQIH") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <small>Bahasa Arab</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="b_arab" name="b_arab" value="<?php echo $dtEditNilaiSiswa['b_arab']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "BAHASA ARAB") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                        <div class="col-md-4">
                            <small>Bahasa Inggris</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="b_inggris" name="b_inggris" value="<?php echo $dtEditNilaiSiswa['b_inggris']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "BAHASA INGGRIS") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                        <div class="col-md-4">
                            <small>Matematika</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="matematika" name="matematika" value="<?php echo $dtEditNilaiSiswa['matematika']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "MATEMATIKA") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <small>Bimbingan Konseling</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="bk" name="bk" value="<?php echo $dtEditNilaiSiswa['bk']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "BIMBINGAN KONSELING") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                        <div class="col-md-6">
                            <small>Prakarya</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="pky" name="pky" value="<?php echo $dtEditNilaiSiswa['pky']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "PRAKARYA DAN KEWIRAUSAHAAN") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <small>Fisika</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="fisika" name="fisika" value="<?php echo $dtEditNilaiSiswa['fisika']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "FISIKA") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                        <div class="col-md-4">
                            <small>Biologi</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="biologi" name="biologi" value="<?php echo $dtEditNilaiSiswa['biologi']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "BIOLOGI") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                        <div class="col-md-4">
                            <small>Kimia</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="kimia" name="kimia" value="<?php echo $dtEditNilaiSiswa['kimia']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "KIMIA") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <small>Sejarah</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="sejarah" name="sejarah" value="<?php echo $dtEditNilaiSiswa['sejarah']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "SEJARAH") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                        <div class="col-md-3">
                            <small>Ekonomi</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="ekonomi" name="ekonomi" value="<?php echo $dtEditNilaiSiswa['ekonomi']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "EKONOMI") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                        <div class="col-md-3">
                            <small>Geografi</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="geografi" name="geografi" value="<?php echo $dtEditNilaiSiswa['geografi']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "GEOGRAFI") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                        <div class="col-md-3">
                            <small>Sosiologi</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="sosiologi" name="sosiologi" value="<?php echo $dtEditNilaiSiswa['sosiologi']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "SOSIOLOGI") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <small>Seni dan Kebudayaan</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="sbk" name="sbk" value="<?php echo $dtEditNilaiSiswa['sbk']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "SENI DAN BUDAYA") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                        <div class="col-md-6">
                            <small>Pendidikan Jasmani dan Kesehatan</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="penjaskes" name="penjaskes" value="<?php echo $dtEditNilaiSiswa['penjaskes']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "PENDIDIKAN JASMANI DAN KESEHATAN") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <small>Bahasa dan Sastra Indonesia</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="b_sasindo" name="b_sasindo" value="<?php echo $dtEditNilaiSiswa['b_sasindo']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "BAHASA DAN SASTRA INDONESIA") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                        <div class="col-md-6">
                            <small>Bahasa dan Sastra Inggris</small>
                            <input oninput="changeTotal()" class="form-control" type="text" style="text-align: center;" id="b_sasing" name="b_sasing" value="<?php echo $dtEditNilaiSiswa['b_sasing']; ?>" <?php
                            if ($executeQueryGuruPengajar['mapel'] == "BAHASA DAN SASTRA INGGRIS") {
                                echo "";
                            } else {
                                echo "readonly";
                            }
                             ?>>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="hidden" id="total" name="total">
                            Total : <span id="totalspan"><?php echo $dtEditNilaiSiswa['total']; ?></span> <br>
                            <input type="hidden" id="rata" name="rata">
                            Rata-Rata : <span id="rataspan"><?php echo $dtEditNilaiSiswa['rata_rata']; ?></span>
                        </div>
                        <div class="col-sm-6 text-right">
                            <button type="submit" class="btn btn-primary btn-sm" name="simpan" id="simpan">
                                <i class="zmdi zmdi-upload"></i> Simpan
                            </button>
                            <a href="?directionPage=nilaiSiswa&selectedClass=<?php echo "$queryExecuteResult[0]"; ?>" class="btn btn-danger btn-sm">
                                <i class="zmdi zmdi-replay"></i> Kembali
                            </a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }
#proses simpan belum ya!

include 'proses-simpan-nilai-siswa.php';
?>
