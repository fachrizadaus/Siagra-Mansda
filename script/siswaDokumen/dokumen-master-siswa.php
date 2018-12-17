<?php
isset($_GET["activeState"])?$state=$_GET["activeState"]:$state="";

if ($state == "docShow") {
    $docShow = "active";
    $docUp = "";
    $docShowDiv = "show active";
    $docUpDiv = "";
} elseif ($state == "docUp") {
    $docShow = "";
    $docUp = "active";
    $docShowDiv = "";
    $docUpDiv = "show active";
}
 ?>

<div class="recent-report3 m-b-40 col-lg-12">
    <div class="title-wrap">
        <div class="col-12">
            <?php include 'dokumen-show-siswa.php'; ?>
        </div>
    </div>
</div>
