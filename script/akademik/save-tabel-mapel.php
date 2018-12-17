<?php
include '../dbConnection.php';
$mapelIpa = mysqli_query($con, "select * from mata_pelajaran_ipa");
 ?>

<link href="../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
<link href="../../style/css/theme.css" rel="stylesheet" media="all">

<script src="../../js/jspdf.min.js" charset="utf-8"></script>
<script src="../../html2canvas/dist/html2canvas.js" charset="utf-8"></script>
<!-- <script src="../../html2canvas/src/renderers/canvas.js" charset="utf-8"></script> -->
<script src="../../js/jquery.min.js" charset="utf-8"></script>

<body>
    <div class="container" id="container">
        <div class="col-md-2"></div>
        <div style="width: 50%" class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-success">
                        <th width="200">Kode Mata Pelajaran</th>
                        <th width="350">Nama Mata Pelajaran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($dtMapelIpa = mysqli_fetch_array($mapelIpa)) {
                            echo "
                            <tr class='tr-shadow'>
                               <td align='center'>$dtMapelIpa[kode_mapel]</td>
                               <td align='left'>$dtMapelIpa[nama_mapel]</td>
                            </tr>";
                        }
                     ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
</body>

 <script type="text/javascript">
 // var doc = new jsPDF();
 //
 // doc.fromHTML($('#container').get(0), 27, 10, {
 //     'width': 1000 });
 //
 // doc.save('coba.pdf');
 //window.history.back();

 html2canvas(document.body).then(function(canvas) {
     var img = canvas.toDataURL("image/png");
     var doc = new jsPDF('p', 'mm', [200, 297]);
     //document.body.appendChild(canvas);
     // var width = pdf.internal.pageSize.getWidth();
     // var height = pdf.internal.pageSize.getHeight();

     doc.addImage(img, 'JPEG', 10, 10, 180, 277);
     doc.save('coba.pdf');
 });
 </script>
