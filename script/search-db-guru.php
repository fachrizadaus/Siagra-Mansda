<?php
$src = $_POST['find-src'];
$srcGuru = mysqli_query($con, "select * from guru_profil Where nama LIKE '%$src%'");
while ($dtGuru = mysqli_fetch_array($srcGuru)) {
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
           <img src='../$dtGuru[foto_guru]' alt=''>
       </td>
       <td>
           <div class='table-data-feature'>
               <a class='item' data-toggle='tooltip' data-placement='top' title='Edit' href='#'>
                   <i class='zmdi zmdi-edit'></i>
               </a>
               <a class='item' data-toggle='tooltip' data-placement='top' title='Delete' href='#'>
                   <i class='zmdi zmdi-delete'></i>
               </a>
               <a class='item' data-toggle='tooltip' data-placement='top' title='Show' href='#'>
                   <i class='zmdi zmdi-more'></i>
               </a>
           </div>
       </td>
    </tr>";
}
 ?>
