<script type="text/javascript">
function deleteConfirmationGuru(nama, nip) {
    nama = nama.toLowerCase().split(' ').map((s) => s.charAt(0).toUpperCase() + s.substring(1)).join(' ');
    var jawab = confirm("Hapus Data "+ nama + " ?");
    if (jawab) {
        document.location="index_admin.php?directionPage=dataMaster&activeState=dataGuru&deleteNip="+nip;
    }
}
function editDataGuru(nip) {
    //goto page edit
    document.location="index_admin.php?directionPage=editDataGuru&activeState=dataGuru&editNip="+nip;
    //console.log("OK");
}
function showUpDataGuru(nip) {
    document.location="index_admin.php?directionPage=showUpDataGuru&activeState=dataGuru&showNip="+nip;
}
</script>

<?php
if (isset($_GET['deleteNip'])) {
    $nip = $_GET['deleteNip'];
    mysqli_query($con, "delete from guru_profil where NIP = $nip") or die (mysqli_error($con));
    mysqli_query($con, "delete from akun where username = $nip") or die (mysqli_error($con));
    //header("location:index_admin.php?directionPage=dataMaster");
}
 ?>

<?php
while ($dtGuru = mysqli_fetch_array($dataGuru)) {
    echo "
    <tr class='tr-shadow'>
       <td></td>
       <td>$dtGuru[NIP]</td>
       <td>$dtGuru[nama]</td>
       <td>$dtGuru[jabatan_terakhir]</td>
       <td>
           <span class='block-email'>$dtGuru[telp]</span>
       </td>
       <td width = '25px'>
           <img src='images/foto-guru/$dtGuru[foto_guru]' alt=''>
       </td>";
       ?>
       <td>
           <div class='table-data-feature'>
               <button onclick="editDataGuru(<?php echo "'$dtGuru[NIP]'"; ?>)" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                   <i class='zmdi zmdi-edit'></i>
               </button>
               <button onclick="deleteConfirmationGuru(<?php echo "'$dtGuru[nama]', $dtGuru[NIP]"; ?>)" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                   <i class='zmdi zmdi-delete'></i>
               </button>
               <!-- <button onclick="showUp(<?php //echo "'$dtGuru[NIP]'"; ?>)" class='item' data-toggle='tooltip' data-placement='top' title='Show'> -->
               <!-- <a data-toggle="tooltip" data-placement="top" title="Show">
                   <button class="item" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class='zmdi zmdi-more'></i>
                   </button>
               </a> -->
               <button class="item" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class='zmdi zmdi-more'></i>
               </button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="max-width: 80%;">
                   <?php include 'show-data-guru.php'; ?>
               </div>
           </div>
       </td>
    </tr>

<?php } ?>
