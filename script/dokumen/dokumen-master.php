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
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="navlink <?php echo "$docShow"; ?>" id="v-pills-profile-tab" data-toggle="pill" href="index_admin.php?directionPage=dokumen&activeState=docShow" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    Dokumen
                </a>
                <a class="navlink <?php echo "$docUp"; ?>" id="v-pills-password-tab" data-toggle="pill" href="index_admin.php?directionPage=dokumen&activeState=docUp" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                    Upload Dokumen
                </a>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade <?php echo "$docShowDiv"; ?>" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <?php include 'dokumen-show.php'; ?>
                </div>
                <div class="tab-pane fade <?php echo "$docUpDiv"; ?>" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-password-tab">
                    <?php include 'dokumen-upload.php'; ?>
                </div>
            </div>
        </div>
    </div>
</div>
