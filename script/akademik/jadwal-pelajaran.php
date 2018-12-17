<?php
$state = $_GET['activeState'];
isset($_GET["selectedRes"])?$selectedRes=$_GET["selectedRes"]:$selectedRes="IPA";
//echo "$state";
$null = "";
$show = "show active";
$active = "active";
if ($state == "XII") {
    $a = $null;
    $b = $null;
    $c = $show;
    $aa = $null;
    $bb = $null;
    $cc = $active;
} elseif ($state == "X") {
    $a = $show;
    $b = $null;
    $c = $null;
    $aa = $active;
    $bb = $null;
    $cc = $null;
} elseif ($state == "XI") {
    $a = $null;
    $b = $show;
    $c = $null;
    $aa = $null;
    $bb = $active;
    $cc = $null;
}

if ($selectedRes == "IPA") {
    $res = "$state-IPA";
} elseif ($selectedRes == "IPS") {
    $res = "$state-IPS";
}
 ?>



<div class="container-fluid">
    <h3 class="title-5 m-b-35">Jadwal Mata Pelajaran</h3>
    <style>
    #example1.pdfobject-container {
        height: 30rem;
        border: 1rem
        solid rgba(0,0,0,.1);
    }
    </style>
    <script type="text/javascript">
    function myFunction() {
        var activeState = <?php echo "'$state'"; ?>;
        var x = document.getElementById(activeState).value;

        //console.log(activeState);
        window.location.href = "index_admin.php?directionPage=jadwalMapel&activeState="+activeState+"&selectedRes="+x;

    }
    </script>
    <div class="table-data__tool">
        <div class="table-data__tool-left">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="navlink <?php echo "$aa"; ?>" id="pills-home-tab" data-toggle="pill" href="index_admin.php?directionPage=jadwalMapel&activeState=X" role="tab" aria-controls="pills-home" aria-selected="true">X</a>
                </li>
                <li class="nav-item">
                    <a class="navlink <?php echo "$bb"; ?>" id="pills-profile-tab" data-toggle="pill" href="index_admin.php?directionPage=jadwalMapel&activeState=XI" role="tab" aria-controls="pills-profile" aria-selected="false">XI</a>
                </li>
                <li class="nav-item">
                    <a class="navlink <?php echo "$cc"; ?>" id="pills-contact-tab" data-toggle="pill" href="index_admin.php?directionPage=jadwalMapel&activeState=XII" role="tab" aria-controls="pills-contact" aria-selected="false">XII</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="recent-report3 m-b-40">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive table-responsive-data2">
                    <div class="tab-content" id="pills-tabContent">
                        <!-- X -->
                        <div class="tab-pane fade <?php echo "$a"; ?>" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="slcKelas">Pilih Jurusan</label>
                                </div>
                                <select id="X" onchange="myFunction()" class="custom-select">
                                    <option value="IPA" <?php if ($selectedRes == "IPA") {
                                        echo "selected";
                                    } ?>>IPA</option>
                                    <option value="IPS" <?php if ($selectedRes == "IPS") {
                                        echo "selected";
                                    } ?>>IPS</option>
                                </select>
                            </div>
                            <div id="example1" class=" pdfobject-container">
                                <embed class="pdfobject" type="application/pdf" style="overflow: auto; width: 100%; height: 100%;" internalinstanceid="5"
                                src="http://localhost/Pemrograman%20Web/Tugas_Besar/document/Jadwal_Pelajaran/<?php echo "$res.pdf"; ?>">
                            </div>
                        </div>
                        <!-- X -->

                        <!-- XI -->
                        <div class="tab-pane fade <?php echo "$b"; ?>" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="slcKelas">Pilih Jurusan</label>
                                </div>
                                <select id="XI" onchange="myFunction()" class="custom-select">
                                    <option value="IPA" <?php if ($selectedRes == "IPA") {
                                        echo "selected";
                                    } ?>>IPA</option>
                                    <option value="IPS" <?php if ($selectedRes == "IPS") {
                                        echo "selected";
                                    } ?>>IPS</option>
                                </select>
                            </div>
                            <div id="example1" class=" pdfobject-container">
                                <embed class="pdfobject" type="application/pdf" style="overflow: auto; width: 100%; height: 100%;" internalinstanceid="5"
                                src="http://localhost/Pemrograman%20Web/Tugas_Besar/document/Jadwal_Pelajaran/<?php echo "$res.pdf"; ?>">
                            </div>
                        </div>
                        <!-- XI -->

                        <!-- XII -->
                        <div class="tab-pane fade <?php echo "$c"; ?>" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="slcKelas">Pilih Jurusan</label>
                                </div>
                                <select id="XII" onchange="myFunction()" class="custom-select">
                                    <option value="IPA" <?php if ($selectedRes == "IPA") {
                                        echo "selected";
                                    } ?>>IPA</option>
                                    <option value="IPS" <?php if ($selectedRes == "IPS") {
                                        echo "selected";
                                    } ?>>IPS</option>
                                </select>
                            </div>
                            <div id="example1" class=" pdfobject-container">
                                <embed class="pdfobject" type="application/pdf" style="overflow: auto; width: 100%; height: 100%;" internalinstanceid="5"
                                src="http://localhost/Pemrograman%20Web/Tugas_Besar/document/Jadwal_Pelajaran/<?php echo "$res.pdf"; ?>">
                            </div>
                        </div>
                        <!-- XII -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
