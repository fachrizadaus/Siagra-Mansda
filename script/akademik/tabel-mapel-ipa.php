<?php
$mapelIpa = mysqli_query($con, "select * from mata_pelajaran_ipa");
 ?>
 <table class="table table-data2">
     <thead>
         <tr>
             <th></th>
             <th>Kode Mata Pelajaran</th>
             <th>Nama Mata Pelajaran</th>
             <th></th>
         </tr>
     </thead>
     <tbody>
         <?php
             while ($dtMapelIpa = mysqli_fetch_array($mapelIpa)) {
                 echo "
                 <tr class='tr-shadow'>
                    <td></td>
                    <td>$dtMapelIpa[kode_mapel]</td>
                    <td>$dtMapelIpa[nama_mapel]</td>
                    <td></td>
                 </tr>";
             }
          ?>
         <tr class="spacer"></tr>
     </tbody>
 </table>
