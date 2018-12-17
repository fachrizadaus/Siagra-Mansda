<html>
    <body>
        <script type="text/javascript">
        function slcJur() {
            var slc = document.getElementById("slcJur").value;
            document.getElementById("slc").value = slc;
            window.location.href = "index_admin.php?slc="+slc;
        }
        function myFunction() {
            var x = document.getElementById("slcKelas").value;
            document.getElementById("demo").innerHTML = "You selected: " + x;
        }
        </script>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="slcKelas">Pilih Kelas</label>
                        </div>
                        <select id="slcKelas" onchange="myFunction()" class="custom-select">
                            <?php
                            echo "<optgroup label='X-IPA'>";
                            for ($i=1; $i <= 8 ; $i++) {
                                echo "<option value='X-IPA-$i'>X-IPA-$i</option>";
                            }
                            echo "</optgroup>";
                            echo "<optgroup label='X-IPS'>";
                            for ($i=1; $i <= 5 ; $i++) {
                                echo "<option value='X-IPS-$i'>X-IPS-$i</option>";
                            }
                            echo "</optgroup>";
                             ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <p id="demo"></p>
    </body>
</html>
