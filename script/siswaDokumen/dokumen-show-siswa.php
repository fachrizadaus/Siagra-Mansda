<div class="container">
<?php
$documentShow = mysqli_query($con, "select * from document");
while ($document = mysqli_fetch_array($documentShow)) {
 ?>
 <style>
 .pdfobject-container { height: 30rem; border: 1rem solid rgba(0,0,0,.1); }
 </style>

 <div class="row">
     <div class="col-md-12 form-control">
         <i class="zmdi zmdi-folder"></i> <?php echo "$document[nama_file]"; ?> <hr>
         <div class="embed-responsive embed-responsive-16by9">
             <iframe class="embed-responsive-item" src="<?php echo "$document[directory]"; ?>"></iframe>
         </div>
     </div>
 </div>
 <hr>
<?php } ?>
</div>
