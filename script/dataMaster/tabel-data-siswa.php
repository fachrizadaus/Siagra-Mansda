<?php
// while ($dtSiswa = mysqli_fetch_array($dataSiswa)) {
//     echo "
//     <tr class='tr-shadow'>
//        <td></td>
//        <td>$dtSiswa[NIS]</td>
//        <td>$dtSiswa[nama]</td>
//        <td>$dtSiswa[kelas]</td>
//        <td>
//            <span class='block-email'>$dtSiswa[telp]</span>
//        </td>
//        <td width = '25px'>
//            <img src='images/foto-siswa/$dtSiswa[foto_siswa]' alt=''>
//        </td>
//        <td>
//            <div class='table-data-feature'>
//                <a class='item' data-toggle='tooltip' data-placement='top' title='Edit' href='#'>
//                    <i class='zmdi zmdi-edit'></i>
//                </a>
//                <a class='item' data-toggle='tooltip' data-placement='top' title='Delete' href='#'>
//                    <i class='zmdi zmdi-delete'></i>
//                </a>
//                <a class='item' data-toggle='tooltip' data-placement='top' title='Show' href='#'>
//                    <i class='zmdi zmdi-more'></i>
//                </a>
//            </div>
//        </td>
//     </tr>";
// }
 ?>

 <script type="text/javascript">
 function deleteConfirmationSiswa(nama, nis) {
     nama = nama.toLowerCase().split(' ').map((s) => s.charAt(0).toUpperCase() + s.substring(1)).join(' ');
     var jawab = confirm("Hapus Data "+ nama + " ?");
     if (jawab) {
         document.location="index_admin.php?directionPage=dataMaster&activeState=dataSiswa";
     }
 }
 function editDataSiswa(nis) {
     //goto page edit
     document.location="index_admin.php?directionPage=editDataSiswa&activeState=dataSiswa&editNIS="+nis;
 }
 function showUp(nis) {
     document.location="index_admin.php?directionPage=showUpDataSiswa&activeState=dataSiswa&showNIS="+nis;
 }
 </script>

 <?php
 if (isset($_GET['deleteNIS'])) {
     $nis = $_GET['deleteNIS'];
     mysqli_query($con, "delete from siswa_profil where NIS = $nis") or die (mysqli_error($con));
     mysqli_query($con, "delete from akun where username = $nis") or die (mysqli_error($con));
     //header("location:index_admin.php?directionPage=dataMaster");
 }
  ?>

 <?php
 while ($dtSiswa = mysqli_fetch_array($dataSiswa)) {
     echo "
     <tr class='tr-shadow'>
        <td></td>
        <td>$dtSiswa[NIS]</td>
        <td>$dtSiswa[nama]</td>
        <td>$dtSiswa[kelas]</td>
        <td>
            <span class='block-email'>$dtSiswa[telp]</span>
        </td>
        <td width = '25px'>
            <img src='images/foto-siswa/$dtSiswa[foto_siswa]' alt=''>
        </td>";
        ?>
        <td>
            <div class='table-data-feature'>
                <button onclick="editDataSiswa(<?php echo "'$dtSiswa[NIS]'"; ?>)" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                    <i class='zmdi zmdi-edit'></i>
                </button>
                <button onclick="deleteConfirmationSiswa(<?php echo "'$dtSiswa[nama]', '$dtSiswa[NIS]'"; ?>)" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                    <i class='zmdi zmdi-delete'></i>
                </button>
                <!-- <button onclick="showUp(<?php //echo "'$dtGuru[NIS]'"; ?>)" class='item' data-toggle='tooltip' data-placement='top' title='Show'> -->
                <!-- <a data-toggle="tooltip" data-placement="top" title="Show">
                    <button class="item" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='zmdi zmdi-more'></i>
                    </button>
                </a> -->
                <button class="item" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class='zmdi zmdi-more'></i>
                </button>
                <div style="max-width: 85%;" class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <?php include 'show-data-siswa.php'; ?>
                </div>
            </div>
        </td>
     </tr>

 <?php } ?>
