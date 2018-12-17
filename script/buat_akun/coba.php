<form class="" action="" method="post" enctype="multipart/form-data">
    <input type="file" id="file" name="filea" class="form-control-file">
    <button type="submit" class="btn btn-primary btn-sm" name="submit">
        <i class="zmdi zmdi-account-add"></i> Buat Akun
    </button>
</form>

<?php
if (isset($_POST['submit'])) {
    $uploads_dir = 'C:\xampp\htdocs\Pemrograman Web\Tugas_Besar\images\foto-guru';
    //$name = $_POST['filea'];
    $tmp_name = $_FILES["filea"]["tmp_name"];

    //copy($tmp_name, $uploads_dir);
    move_uploaded_file($_FILES['filea']['tmp_name'], "$uploads_dir/coba.jpg");

// if ($_FILES["csv_file"]["error"] > 0)
//   {
//   echo "Error: " . $_FILES["csv_file"]["error"] . "<br />";
//   }
// else
//   {
//   echo "Upload: " . $_FILES["csv_file"]["name"] . "<br />";
//   echo "Type: " . $_FILES["csv_file"]["type"] . "<br />";
//   echo "Size: " . ($_FILES["csv_file"]["size"] / 1024) . " Kb<br />";
//   echo "Stored in: " . $_FILES["csv_file"]["tmp_name"];
//   }

}
 ?>
