<?php
//$state = $_GET['activeState'];
isset($_GET["activeState"])?$state=$_GET["activeState"]:$state="";
isset($_GET["selectedClass"])?$slcCls=$_GET["selectedClass"]:$slcCls="";
isset($_GET["selectedSem"])?$slcSem=$_GET["selectedSem"]:$slcSem="";
//echo "$state <br> $selectedClass";
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

//$slc = $_GET['activeState'];
// $dataKelas = mysqli_query($con, "select * from nilai_siswa where kelas like 'slc'");

 ?>

<div class="container-fluid">
    <script type="text/javascript">
    function myFunction() {
        var activeState = <?php echo "'$state'"; ?>; //X / XI / XII

        if (activeState == "X") {
            var semester = document.getElementById('slcSemeterX').value;
            var slcClass = document.getElementById('slcClassX').value;
        } else if (activeState == "XI") {
            var semester = document.getElementById('slcSemeterXI').value;
            var slcClass = document.getElementById('slcClassXI').value;
        } else if (activeState == "XII") {
            var semester = document.getElementById('slcSemeterXII').value;
            var slcClass = document.getElementById('slcClassXII').value;
        }

        window.location.href = "index_admin.php?directionPage=nilaiSiswa&activeState="+ activeState +"&selectedSem="+ semester +"&selectedClass="+activeState+"-"+slcClass;

        //console.log(a);
        //window.location.href = "index_admin.php?directionPage=dataMaster&activeState="+ x +"&selectedClass="+ selectedClass;

    }
    </script>
    <script src="http://localhost/pemrograman%20web/Tugas_Besar/js/jquery.min.js"></script>
    <script>
        // var activeState = <?php //echo "'$state'"; ?>; //X / XI / XII
        // $(document).ready(function(){
        //     $('#X').change(function(){
        //         //Selected value
        //         var inputValue = $(this).val();
        //         console.log(inputValue);
        //         document.getElementById('containerCoba').innerHTML == inputValue;
        //
        //         //Ajax for calling php function
        //         // $.post('submit.php', { dropdownValue: inputValue }, function(data){
        //         //     alert('ajax completed. Response:  '+data);
        //         //     //do after submission operation in DOM
        //         // });
        //     });
        // });
    </script>
    <div class="recent-report3 m-b-40">
        <div class="au-breadcrumb-right">
            <h3 class="title-5 m-b-15">Nilai Siswa</h3>
        </div>
        <hr>
        <div class="table-data__tool-2">
            <div class="table-data__tool-left">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="navlink <?php echo "$aa"; ?>" id="pills-home-tab" data-toggle="pill" href="index_admin.php?directionPage=nilaiSiswa&activeState=X" role="tab" aria-controls="pills-home" aria-selected="true">X</a>
                    </li>
                    <li class="nav-item">
                        <a class="navlink <?php echo "$bb"; ?>" id="pills-profile-tab" data-toggle="pill" href="index_admin.php?directionPage=nilaiSiswa&activeState=XI" role="tab" aria-controls="pills-profile" aria-selected="false">XI</a>
                    </li>
                    <li class="nav-item">
                        <a class="navlink <?php echo "$cc"; ?>" id="pills-contact-tab" data-toggle="pill" href="index_admin.php?directionPage=nilaiSiswa&activeState=XII" role="tab" aria-controls="pills-contact" aria-selected="false">XII</a>
                    </li>
                </ul>
            </div>
            <div class="table-data__tool-right">
                <li class="list-inline-item" style="margin-top: 8px;"><?php
                if ($slcSem == "1") {
                    $newSlcSem = "GANJIL";
                    $ganjil = "selected";
                    $genap = "";
                } elseif ($slcSem == "2") {
                    $newSlcSem = "GENAP";
                    $ganjil = "";
                    $genap = "selected";
                } else {
                    $newSlcSem = "";
                    $ganjil = "";
                    $genap = "";
                }

                if ($slcCls && $newSlcSem !== "") {
                    $x = explode("-", $slcCls);
                    echo "$slcCls / SEMESTER $newSlcSem";
                    $slcSelectedClass = "$x[1]-$x[2]";
                }
                ?>
            </li>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive table-responsive-data2">
                    <div class="tab-content" id="pills-tabContent">
                        <!-- X -->
                        <div class="tab-pane fade <?php echo "$a"; ?>" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="slcKelas">Pilih</label>
                                </div>
                                <select id="slcSemeterX" class="custom-select" onchange="myFunction()">
                                    <option value="1" <?php echo "$ganjil"; ?>>Ganjil</option>
                                    <option value="2" <?php echo "$genap"; ?>>Genap</option>
                                </select>
                                <select id="slcClassX" onchange="myFunction()" class="custom-select">
                                    <?php
                                    //active state = $state; selectedClass
                                    echo "<optgroup label='X-IPA'>";
                                    for ($i=1; $i <= 4 ; $i++) {
                                        if ($slcSelectedClass == "IPA-$i") {
                                            $selected = "selected";
                                        } else {
                                            $selected = "";
                                        }
                                        echo "<option value='IPA-$i' $selected>X-IPA-$i</option>";
                                    }
                                    echo "</optgroup>";
                                    echo "<optgroup label='X-IPS'>";
                                    for ($i=1; $i <= 4 ; $i++) {
                                        if ($slcSelectedClass == "IPS-$i") {
                                            $selected = "selected";
                                        } else {
                                            $selected = "";
                                        }
                                        echo "<option value='IPS-$i' $selected>X-IPS-$i</option>";
                                    }
                                     ?>
                                </select>
                            </div>
                            <div id="containerCoba">
                                <?php include 'tabel-nilai-siswa.php'; ?>
                            </div>
                        </div>
                        <!-- X -->

                        <!-- XI -->
                        <div class="tab-pane fade <?php echo "$b"; ?>" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="slcKelas">Pilih</label>
                                </div>
                                <select id="slcSemeterXI" class="custom-select" onchange="myFunction()">
                                    <option value="1" <?php echo "$ganjil"; ?>>Ganjil</option>
                                    <option value="2" <?php echo "$genap"; ?>>Genap</option>
                                </select>
                                <select id="slcClassXI" onchange="myFunction()" class="custom-select">
                                    <?php
                                    //active state = $state; selectedClass
                                    echo "<optgroup label='XI-IPA'>";
                                    for ($i=1; $i <= 4 ; $i++) {
                                        if ($slcSelectedClass == "IPA-$i") {
                                            $selected = "selected";
                                        } else {
                                            $selected = "";
                                        }
                                        echo "<option value='IPA-$i' $selected>XI-IPA-$i</option>";
                                    }
                                    echo "</optgroup>";
                                    echo "<optgroup label='XI-IPS'>";
                                    for ($i=1; $i <= 4 ; $i++) {
                                        if ($slcSelectedClass == "IPS-$i") {
                                            $selected = "selected";
                                        } else {
                                            $selected = "";
                                        }
                                        echo "<option value='IPS-$i' $selected>XI-IPS-$i</option>";
                                    }
                                     ?>
                                </select>
                            </div>
                            <div id="containerCoba">
                                <?php include 'tabel-nilai-siswa.php'; ?>
                            </div>
                        </div>
                        <!-- XI -->

                        <!-- XII -->
                        <div class="tab-pane fade <?php echo "$c"; ?>" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="slcKelas">Pilih</label>
                                </div>
                                <select id="slcSemeterXII" class="custom-select" onchange="myFunction()">
                                    <option value="1" <?php echo "$ganjil"; ?>>Ganjil</option>
                                    <option value="2" <?php echo "$genap"; ?>>Genap</option>
                                </select>
                                <select id="slcClassXII" onchange="myFunction()" class="custom-select">
                                    <?php
                                    //active state = $state; selectedClass
                                    echo "<optgroup label='XII-IPA'>";
                                    for ($i=1; $i <= 4 ; $i++) {
                                        if ($slcSelectedClass == "IPA-$i") {
                                            $selected = "selected";
                                        } else {
                                            $selected = "";
                                        }
                                        echo "<option value='IPA-$i' $selected>XII-IPA-$i</option>";
                                    }
                                    echo "</optgroup>";
                                    echo "<optgroup label='XII-IPS'>";
                                    for ($i=1; $i <= 4 ; $i++) {
                                        if ($slcSelectedClass == "IPS-$i") {
                                            $selected = "selected";
                                        } else {
                                            $selected = "";
                                        }
                                        echo "<option value='IPS-$i' $selected>XII-IPS-$i</option>";
                                    }
                                     ?>
                                </select>
                            </div>
                            <div id="containerCoba">
                                <?php include 'tabel-nilai-siswa.php'; ?>
                            </div>
                        </div>
                        <!-- XII -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
