<?php
if (isset($_POST['submit'])) {
    #declaring var
    $nmFile = $_POST['fileName'];
    $document = $_POST['file'];

    #copy foto to server
    $uploads_dir = 'http://localhost/Pemrograman%20Web/Tugas_Besar/document/document';
    $tmp_name = $_FILES["dokumenUp"]["tmp_name"];
    move_uploaded_file($_FILES['dokumenUp']['tmp_name'], "$uploads_dir/$nmFile.pdf");

    $updirectory = "insert into document values ('$nmFile', '$uploads_dir', 'pdf')";
    mysqli_query($con, $updirectory) or die (mysqli_error($con));

    echo "<script type='text/javascript'>alert('Dokumen Berhasil Diunggah!');</script>";
    //header("location:index_admin.php?directionPage=dataMaster&activeState=dataSiswa");
?>
<script type="text/javascript">
window.location.href = 'index_guru.php?directionPage=document&activeState=docShow';
</script>
<?php
}
 ?>
