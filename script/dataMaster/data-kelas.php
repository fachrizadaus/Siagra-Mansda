
<script type="text/javascript">
function myFunctions() {
    //var y = document.getElementById()
    var x = document.getElementById("slcKelas").value;
    //document.getElementById("demo").innerHTML = x;
    //document.write(x);
    window.location.href = "index_admin.php?directionPage=dataMaster&activeState=dataKelas&selectedClass="+x;
    // $.ajax({
    //     type: "POST",
    //     url: 'tabel-data-kelas.php',
    //     data: {slc : x},
    //     success: function(data){
    //         $('#results').html(data);
    //     }
    // });
}
</script>

<div class="container-fluid">
    <div class="recent-report3 m-b-40">
        <div class="row">
          <div class="col-12">
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="slcKelas">Pilih Kelas</label>
                  </div>
                  <select id="slcKelas" onchange="myFunctions()" class="custom-select">
                      <option value="">Silahkan Pilih Kelas</option>
                      <?php
                      //$selectedClass = $_GET['selectedClass'];
                      echo "<optgroup label='X-IPA'>";
                      for ($i=1; $i <= 4 ; $i++) {
                          echo "<option value='X-IPA-$i'>X-IPA-$i</option>";
                      }
                      echo "</optgroup>";
                      echo "<optgroup label='X-IPS'>";
                      for ($i=1; $i <= 4 ; $i++) {
                          echo "<option value='X-IPS-$i'>X-IPS-$i</option>";
                      }
                      echo "</optgroup>";
                      echo "<optgroup label='XI-IPA'>";
                      for ($i=1; $i <= 4 ; $i++) {
                          echo "<option value='XI-IPA-$i'>XI-IPA-$i</option>";
                      }
                      echo "</optgroup>";
                      echo "<optgroup label='XI-IPS'>";
                      for ($i=1; $i <= 4 ; $i++) {
                          echo "<option value='XI-IPS-$i'>XI-IPS-$i</option>";
                      }
                      echo "</optgroup>";
                      echo "<optgroup label='XII-IPA'>";
                      for ($i=1; $i <= 4 ; $i++) {
                          echo "<option value='XII-IPA-$i'>XII-IPA-$i</option>";
                      }
                      echo "</optgroup>";
                      echo "<optgroup label='XII-IPS'>";
                      for ($i=1; $i <= 4 ; $i++) {
                          echo "<option value='XII-IPS-$i'>XII-IPS-$i</option>";
                      }
                      echo "</optgroup>";
                       ?>
                  </select>
              </div>
              <p id="demo"></p>
              <?php include 'tabel-data-kelas.php'; ?>
          </div>
        </div>
    </div>
</div>
