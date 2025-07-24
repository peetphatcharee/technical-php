<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz4</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>

<body>


    <div style="display:flex; position: relative;">
        <div class="chart-bar">
            <canvas id="myChartBar"></canvas>
        </div>
        <div class="chart-circle">
            <canvas id="myChartCircle" width="500"></canvas>

        </div>
    </div>


    <script>
        const cBar = document.getElementById('myChartBar');
        const cCircle = document.getElementById('myChartCircle');
        const backgroundColor = ['rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
        ];
        const borderColor = [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
        ];
        
        $(document).ready(function() {
            $.ajax({
                type: "POST",
                url: "https://www.trcloud.co/test/api.php",
                dataType: "json",
                success: function(response) {
                    let countrys = [];
                    let populations = [];
                    for (let item of response) {
                        countrys.push(item.Country);
                        populations.push(item.Population);
                    }


                    let dataBar = {
                        labels: countrys,
                        datasets: [{
                            label: 'Range by Country',
                            data: populations,
                            borderWidth: 1,
                            backgroundColor: backgroundColor,
                            borderColor: borderColor,
                        }]
                    }

                    let dataCircle = {
                        labels: countrys,
                        datasets: [{
                            label: 'Range by Country',
                            data: populations,
                            borderWidth: 1,
                            hoverOffset: 4,
                            backgroundColor: backgroundColor,
                            borderColor: borderColor,

                        }]
                    }


                    new Chart(cBar, {
                        type: 'bar',
                        data: dataBar,
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });

                    new Chart(cCircle, {
                        type: 'pie',
                        data: dataCircle,

                    });
                }
            });
        });
    </script>

</body>
<style>
    .chart-bar {
        margin-bottom: 20px;
        width: 100vw;
        height: auto;
        display: flex;
        align-items: center;
    }

    .chart-circle {
        width: 100vw;
        height: auto;
        display: flex;
        justify-content: center;
    }
</style>

</html>