<script>
var ctx = document.getElementById("chart");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["", "Semester 1","Semester 2","Semester 3","Semester 4","Semester 5", "Semester 6"],
        datasets: [{
            label: '# of Votes',
            data: [ 0, 
            <?php
            $query = mysqli_query($con,"SELECT * FROM nilai_siswa where NIS='0001323217' AND SEMESTER='1'");
            foreach ($query as $row){
            echo $row['rata_rata'];
            } ?>,
            <?php
            $query = mysqli_query($con,"SELECT * FROM nilai_siswa where NIS='0001323217' AND SEMESTER='2'");
            foreach ($query as $row){
            echo $row['rata_rata'];
            } ?>,
            <?php
            $query = mysqli_query($con,"SELECT * FROM nilai_siswa where NIS='0001323217' AND SEMESTER='3'");
            foreach ($query as $row){
            echo $row['rata_rata'];
            } ?>,
            <?php
            $query = mysqli_query($con,"SELECT * FROM nilai_siswa where NIS='0001323217' AND SEMESTER='4'");
            foreach ($query as $row){
            echo $row['rata_rata'];
            } ?>,
            <?php
            $query = mysqli_query($con,"SELECT * FROM nilai_siswa where NIS='0001323217' AND SEMESTER='5'");
            foreach ($query as $row){
            echo $row['rata_rata'];
            } ?>,
            <?php
            $query = mysqli_query($con,"SELECT * FROM nilai_siswa where NIS='0001323217' AND SEMESTER='6'");
            foreach ($query as $row){
            echo $row['rata_rata'];
            } ?>],
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
