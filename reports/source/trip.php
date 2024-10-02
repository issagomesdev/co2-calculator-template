<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../shared/global.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>CO2 Calculator - Viagens</title>
</head>
<body>
    
    <div class="content">

        <div class="panel-container">
                <div class="container">
                    <div class="instructions">
                        <h2> <a class="return" href="/reports"> <iconify-icon icon="fa6-solid:arrow-left" width="20"></iconify-icon> </a> Viagens</h2>
                        <p>Visualize as informações detalhadas sobre as fontes de emissões de CO2 da sua empresa, tendo um panorama dos impactos ambientais gerados pelas operações de sua empresa</p>
                    </div>
                    <div class="filters">
                        <span>Filtros</span>
                        <div class="filter">
                            <iconify-icon icon="mdi:calendar-outline"></iconify-icon>
                            <span>Periodo</span>
                            <iconify-icon icon="ep:arrow-down-bold" width="10"></iconify-icon>
                        </div>
                    </div>
                    <div class="charts">
                        <div class="chart" id="all">
                            <p>Emissões e compensações totais até hoje [tonCO2e]</p>
                            <div id="chart"> <canvas></canvas> </div>
                        </div>
                        <div class="chart" id="monthly">
                            <p>Emissões mensais, total até hoje [tonCO2e]</p>
                            <div id="chart"> <canvas></canvas> </div>
                        </div>
                        <div class="chart" id="source">
                            <p>Resumo das emissões quebradas por fonte, total até hoje [tonCO2e]</p>
                            <div id="chart"> <canvas></canvas> </div>
                        </div>
                        <div class="chart" id="scope">
                            <p>Resumo das emissões quebradas por escopo, total até hoje [tonCO2e]</p>
                            <div id="chart"> <canvas></canvas> </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

    const all = document.querySelector('.chart#all #chart canvas');
    const monthly = document.querySelector('.chart#monthly #chart canvas');
    const source = document.querySelector('.chart#source #chart canvas');
    const scope = document.querySelector('.chart#scope #chart canvas');
    
    new Chart(all, {
        type: 'bar',
        data: {
            labels: ['Emissões'],
            datasets: [{
                label: 'tonCO2e',
                data: [0.012],
                backgroundColor: ['#559188'],
            }, ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    max: function(context) {
                        var maxDataValue = Math.max(...context.chart.data.datasets.map(dataset => Math.max(...dataset.data)));
                        return maxDataValue + 0.001;
                    }
                },

            },
        }
    });
    
    new Chart(monthly, {
        type: 'bar',
        data: {
            labels: ['Emissões'],
            datasets: [{
                label: 'tonCO2e',
                data: [0.012],
                backgroundColor: ['#559188'],
            }, ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    max: function(context) {
                        var maxDataValue = Math.max(...context.chart.data.datasets.map(dataset => Math.max(...dataset.data)));
                        return maxDataValue + 0.001;
                    }
                },

            },
        }
    });
    
    new Chart(source, {
        type: 'bar',
        data: {
            labels: ['Emissões'],
            datasets: [{
                label: 'tonCO2e',
                data: [0.012],
                backgroundColor: ['#559188'],
            }, ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    max: function(context) {
                        var maxDataValue = Math.max(...context.chart.data.datasets.map(dataset => Math.max(...dataset.data)));
                        return maxDataValue + 0.001;
                    }
                },

            },
        }
    });
    
    new Chart(scope, {
        type: 'bar',
        data: {
            labels: ['Escopo 1', 'Escopo 2'],
            datasets: [{
                label: 'tonCO2e',
                data: [0.2, 0.5],
                backgroundColor: ['#559188'],
            }, ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    max: function(context) {
                        var maxDataValue = Math.max(...context.chart.data.datasets.map(dataset => Math.max(...dataset.data)));
                        return maxDataValue + 0.1;
                    }
                },

            },
        }
    });
    
</script>