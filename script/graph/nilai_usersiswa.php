<script>
var ctx = document.getElementById("perkembanganstudi");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        <?php
        $querySelectHitung = "SELECT COUNT(*) FROM nilai_siswa WHERE NIS = '$data2[NIS]'";
        $result = mysqli_query($con, $querySelectHitung);
        $row = mysqli_fetch_array($result);
        $total = $row[0];
         ?>
        labels: [
            <?php
            echo "''";
            for ($n=1; $n <= $total ; $n++) {
                echo ", 'Semester $n' ";
            }
             ?>
        ],
        datasets: [{
            label: 'Perkembangan Studi',
            data: [
                <?php
                echo "0";
                for ($n=1; $n <= $total; $n++) {
                    $query = mysqli_query($con,"SELECT * FROM nilai_siswa where NIS='$data2[NIS]' AND SEMESTER='$n'");
                    foreach ($query as $row){
                    echo ", ".$row['rata_rata'];
                    }
                }
                 ?>
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
