<script>
var ctx = document.getElementById("chart");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [
            "",
            "Data Wali Kelas",
            "Data Siswa",
            "Data Guru"
        ],
        datasets: [{
            label: 'Data Pengguna',
            data: [ 0,
                <?php
                $querySelectHitungKelas = "SELECT COUNT(*) FROM data_kelas";
                $querySelectHitungSiswa = "SELECT COUNT(*) FROM siswa_profil";
                $querySelectHitungGuru = "SELECT COUNT(*) FROM guru_profil";

                $rowKelas = mysqli_fetch_array(mysqli_query($con, $querySelectHitungKelas));
                $rowSiswa = mysqli_fetch_array(mysqli_query($con, $querySelectHitungSiswa));
                $rowGuru = mysqli_fetch_array(mysqli_query($con, $querySelectHitungGuru));


                echo "$rowKelas[0], $rowSiswa[0], $rowGuru[0]";
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
