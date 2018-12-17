<?php
if (isset($_GET['selectedClass'])) {
    $slc = $_GET['selectedClass'];
    $dataKelas = mysqli_query($con, "select * from siswa_profil where kelas like '$slc'");
 ?>
 <table class="table table-data2">
     <thead>
         <tr>
             <th></th>
             <th>nis</th>
             <th>nama</th>
             <th>foto</th>
             <th></th>
         </tr>
     </thead>
     <tbody>
         <?php
             while ($dtKelas = mysqli_fetch_array($dataKelas)) {
                 echo "
                 <tr class='tr-shadow'>
                    <td></td>
                    <td>$dtKelas[NIS]</td>
                    <td>$dtKelas[nama]</td>
                    <td width = '100px'>
                        <img src='images/foto-siswa/$dtKelas[foto_siswa]' alt='' class='imgRadius-15px'>
                    </td>
                    <td></td>
                 </tr>";
             }
          ?>
         <tr class="spacer"></tr>
     </tbody>
 </table>
<?php } ?>
