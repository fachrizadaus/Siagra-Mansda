<?php
if (isset($_GET['selectedClass'])) {

 ?>

<script type="text/javascript">
    function funcSendNIS(nis) {
        //console.log(nis);

    }
</script>

<table class="table table-data2">
    <thead>
        <tr>
            <th></th>
            <th>nis</th>
            <th>nama</th>
            <th>rata-rata</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $dataNilai = mysqli_query($con, "select * from nilai_siswa where kelas like '$slcCls' and semester = '$slcSem'");
        while ($dtNilai = mysqli_fetch_array($dataNilai)) {
            echo "
            <tr class='tr-shadow'>
               <td></td>
               <td>$dtNilai[NIS]</td>
               <td>$dtNilai[nama_siswa]</td>
               <td>$dtNilai[rata_rata]</td>";
        ?>
                <td>
                    <div class='table-data-feature'>
                        <!-- <button class="item" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="max-width: 80%;">
                            <i class='zmdi zmdi-more'></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <?php //include 'show-nilai-siswa.php'; ?>
                        </div> -->
                        <button type="button" class="item" data-toggle="modal" data-target="#mediumModal" data-backdrop="false">
                            <i class='zmdi zmdi-more'></i>
                        </button>
                        <div class="m-t-80 m-l-200 modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true" style="z-index: 1100 !important;">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mediumModalLabel">Nilai Siswa</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php include 'script/akademik/show-nilai-siswa.php'; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td></td>
            </tr>
        <?php } ?>
        <tr class="spacer"></tr>
    </tbody>
</table>
<?php }
//include_once 'show-nilai-siswa.php';

?>
