<div class="col-xl-7">
    <!-- CHART -->
    <div class="recent-report3 m-b-40">
        <div class="title-wrap">
            <h3 class="title-3">Perkembangan Studi</h3>
        </div>
        <div class="chart-wrap">
          <!-- <canvas id="sales-chart" height="101" width="203" class="chartjs-render-monitor" style="display: block; height: 113px; width: 226px;"></canvas>                     -->
          <!-- <canvas id="perkembanganstudi" class="chartjs-render-monitor" style="display: block;"></canvas> -->
          <canvas id="perkembanganstudi" height="101" width="203" class="chartjs-render-monitor" style="display: block; height: 113px; width: 226px;"></canvas>
          <?php include 'script/graph/nilai_usersiswa.php'; ?>
        </div>
    </div>
    <!-- End CHART -->
</div>

<div class="col-xl-5">
    <!-- Biodata -->
    <div class="recent-report2">
        <h3 class="title-3">
            <i class="zmdi zmdi-account-circle"></i>
            <a href="#"><?php
            echo "$data2[nama]";
             ?></a>
        </h3>
        <br>
        <div class="table-responsive-md">
            <table class="table">
                <tr>
                    <td class="bg-primary">Nama</td>
                    <td><?php
                    echo "$data2[nama]";
                     ?></td>
                </tr>
                <tr>
                    <td class="bg-primary">Kelas</td>
                    <td><?php
                    echo "$data2[kelas]";
                     ?></td>
                </tr>
                <tr>
                    <td class="bg-primary">NIS</td>
                    <td><?php echo "$data2[NIS]"; ?></td>
                </tr>
            </table>
        </div>
    </div>
    <!-- Biodata -->
</div>
