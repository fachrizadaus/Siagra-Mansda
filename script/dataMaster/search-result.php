<?php
include '../Database/dbConnection.php';
$data = $_GET['dataCari'];
$searchQuery = mysqli_query($con, "select * from guru_profil where
                NIP LIKE '%$data%' OR
                nama LIKE '%$data'% OR
                tempat_lahir LIKE '%$data%' OR
                tanggal_lahir LIKE '%$data%' OR
                jenis_kelamin LIKE '%$data%' OR
                agama LIKE '%$data%' OR
                alamat LIKE '%$data%' OR
                telp LIKE '%$data%' OR
                pangkat_terakhir LIKE '%$data%' OR
                jabatan_terakhir LIKE '%$data%' OR
                unit_kerja LIKE '%$data%' OR
                no_ktp LIKE '%$data%'
                ");
while ($dtSearch = mysqli_fetch_array($searchQuery)) {
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
               <button onclick="editData(<?php echo "'$dtGuru[NIP]'"; ?>)" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                   <i class='zmdi zmdi-edit'></i>
               </button>
               <button onclick="deleteConfirmation(<?php echo "'$dtGuru[nama]', $dtGuru[NIP]"; ?>)" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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
               <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                   <?php include 'show-data-guru.php'; ?>
               </div>
           </div>
       </td>
    </tr>

<?php } ?>
