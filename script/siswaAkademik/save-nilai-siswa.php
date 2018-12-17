<?php
    include '../dbConnection.php';
    $nis = $_GET['activeNIS'];
    $smt = $_GET['semester'];

    $querySelect = "SELECT * FROM nilai_siswa WHERE NIS = '$nis' AND semester = '$smt'";
    $nilai = mysqli_query($con, $querySelect);
    $nilai2 = mysqli_fetch_array($nilai);
 ?>
 <link href="../../style/css/font-face.css" rel="stylesheet" media="all">
 <link href="../../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
 <link href="../../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
 <link href="../../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

 <!-- Bootstrap CSS-->
 <link href="../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
 <link href="../../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
 <link href="../../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
 <link href="../../vendor/wow/animate.css" rel="stylesheet" media="all">
 <link href="../../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
 <link href="../../vendor/slick/slick.css" rel="stylesheet" media="all">
 <link href="../../vendor/select2/select2.min.css" rel="stylesheet" media="all">
 <link href="../../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
 <link href="../../vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">
 <link href="../../style/css/theme.css" rel="stylesheet" media="all">

 <script src="../../js/html2canvas0.js" charset="utf-8"></script>
 <script src="../../js/html2canvas.min.js" charset="utf-8"></script>

 <script src="../../js/jspdf.min.js" charset="utf-8"></script>
 <script src="../../html2canvas/dist/html2canvas.js" charset="utf-8"></script>

 <script src="../../js/jquery.min.js" charset="utf-8"></script>

<body id="body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">
                            <h4>SIAGRA MAN Sidoarjo</h4>
                        </div>
                    </div>
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <strong><?php echo "$nilai2[nama_siswa]"; ?></strong>
                            </div>
                            <div class="col-sm-6 text-right">
                                <label><?php echo "$nilai2[NIS]"; ?></label>
                            </div>
                        </div>
                    </div>
                    <div class="card-body card-block">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Al-Qur'an dan Hadits</label>
                                <div class="form-control" style="text-align: center;">
                                    <label><?php echo $nilai2['quran_hadits']; ?></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Aqidah Ahlak</label>
                                <div class="form-control" style="text-align: center;">
                                    <label><?php echo $nilai2['aqidah_ahlak']; ?></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>PPKN</label>
                                <div class="form-control" style="text-align: center;">
                                    <label><?php echo $nilai2['ppkn']; ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Sejarah Kebudayaan Islam</label>
                                <div class="form-control" style="text-align: center;">
                                    <label><?php echo $nilai2['fiqih']; ?></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Bahasa Indonesia</label>
                                <div class="form-control" style="text-align: center;">
                                    <label><?php echo $nilai2['b_indonesia']; ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Bahasa Arab</label>
                                <div class="form-control" style="text-align: center;">
                                    <label><?php echo $nilai2['b_arab']; ?></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Bahasa Inggris</label>
                                <div class="form-control" style="text-align: center;">
                                    <label><?php echo $nilai2['b_inggris']; ?></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Matematika</label>
                                <div class="form-control" style="text-align: center;">
                                    <label><?php echo $nilai2['matematika']; ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Bimbingan Konseling</label>
                                <div class="form-control" style="text-align: center;">
                                    <label><?php echo $nilai2['bk']; ?></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Prakarya</label>
                                <div class="form-control" style="text-align: center;">
                                    <label><?php echo $nilai2['pky']; ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Fisika</label>
                                <div class="form-control" style="text-align: center;">
                                    <label><?php echo $nilai2['fisika']; ?></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Biologi</label>
                                <div class="form-control" style="text-align: center;">
                                    <label><?php echo $nilai2['biologi']; ?></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Kimia</label>
                                <div class="form-control" style="text-align: center;">
                                    <label><?php echo $nilai2['kimia']; ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Sejarah</label>
                                <div class="form-control" style="text-align: center;">
                                    <label><?php echo $nilai2['sejarah']; ?></label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>Ekonomi</label>
                                <div class="form-control" style="text-align: center;">
                                    <label><?php echo $nilai2['ekonomi']; ?></label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>Geografi</label>
                                <div class="form-control" style="text-align: center;">
                                    <label><?php echo $nilai2['geografi']; ?></label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>Sosiologi</label>
                                <div class="form-control" style="text-align: center;">
                                    <label><?php echo $nilai2['sosiologi']; ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Seni dan Kebudayaan</label>
                                <div class="form-control" style="text-align: center;">
                                    <label><?php echo $nilai2['sbk']; ?></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Pendidikan Jasmani dan Kesehatan</label>
                                <div class="form-control" style="text-align: center;">
                                    <label><?php echo $nilai2['penjaskes']; ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Bahasa dan Sastra Indonesia</label>
                                <div class="form-control" style="text-align: center;">
                                    <label><?php echo $nilai2['b_sasindo']; ?></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Bahasa dan Sastra Inggris</label>
                                <div class="form-control" style="text-align: center;">
                                    <label><?php echo $nilai2['b_sasing']; ?></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-6">
                                Total : <label><?php echo $nilai2['total']; ?></label> <br>
                                Rata-Rata : <label><?php echo $nilai2['rata_rata']; ?></label>
                            </div>
                            <div class="col-sm-6 text-right">
                                <h4 style="padding-top: 15px;"><?php echo "SEMESTER : $smt"; ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">
    // var doc = new jsPDF();
    //
    // doc.fromHTML($('#container').get(0), 20, 20, {
    //     'width': 1080 });
    //
    // doc.save('<?php //echo "$nis/semester-$smt.pdf"; ?>');
    // window.history.back();

    html2canvas(document.body).then(function(canvas) {
        var img = canvas.toDataURL("image/png");
        var doc = new jsPDF('l', 'mm', [297, 200]);

        doc.addImage(img, 'JPEG', 10, 10, 277, 180);
        doc.save('<?php echo "$nilai2[NIS]/semester-$nilai2[semester].pdf"; ?>');
        window.history.back();
    });

</script>
