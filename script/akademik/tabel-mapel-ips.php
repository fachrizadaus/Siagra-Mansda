<?php
$mapelIps = mysqli_query($con, "select * from mata_pelajaran_ips");
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
             while ($dtMapelIps = mysqli_fetch_array($mapelIps)) {
                 echo "
                 <tr class='tr-shadow'>
                    <td></td>
                    <td>$dtMapelIps[kode_mapel]</td>
                    <td>$dtMapelIps[nama_mapel]</td>
                    <td></td>
                 </tr>";
             }
          ?>
         <tr class="spacer"></tr>
     </tbody>
 </table>
