<?php
$koneksi     = mysqli_connect("localhost", "root", "", "percobaan");
?>
<html>
    <head>
        <script src="Chart.bundle.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
        </style>
    </head>
    <body>
            </br>
    
    <center>
        
        <div class="container">
            <canvas id="myChart" width="100" height="50"></canvas>
        </div>
        <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["TOTAL", "BERAT 40 KG", "BERAT 60 KG"],
                datasets: [{
                    label: 'KANTONG',
                    data: [
                    <?php 
                    $jumlah_jenis = mysqli_query($koneksi,"SELECT * FROM kantong where berat_kantong");
                    echo mysqli_num_rows($jumlah_jenis);
                    ?>, 
                    <?php 
                    $jumlah_40 = mysqli_query($koneksi,"SELECT * FROM kantong where berat_kantong='40'");
                    echo mysqli_num_rows($jumlah_40);
                    ?>, 
                    <?php 
                    $jumlah_60 = mysqli_query($koneksi,"SELECT * FROM kantong where berat_kantong='60'");
                    echo mysqli_num_rows($jumlah_60);
                    ?>, 
                    
                    ],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
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

</center>
</body>
</html>