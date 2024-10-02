<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../shared/global.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>CO2 Calculator - Relatórios</title>
</head>
<body>
    
    <div class="content">
        <?php include '../shared/nav.php'; ?>

        <div class="panel-container">
                <div class="container">
                    <div class="instructions">
                        <h2>Relatórios prontos para sua empresa usar</h2>
                        <p>Entenda e visualize suas emissões através de dashboards e gráficos. </p>
                    </div>

                    <div class="reports">
                        <a href="/reports/source/general.php" class="report">
                            <div class="icon">
                                <iconify-icon icon="ph:projector-screen-chart-duotone" width="70"></iconify-icon>
                            </div>
                            <div class="description">
                                <h3>Visão Geral</h3>
                                <p>Panorama completo das emissões e compensações da sua empresa</p>
                            </div>
                        </a>
                        <a href="/reports/source/ghg.php" class="report">
                            <div class="icon">
                                <iconify-icon icon="carbon:chart-relationship" width="70"></iconify-icon>
                            </div>
                            <div class="description">
                                <h3>GHG Protocol</h3>
                                <p>Relatório alinhado ao padrão de reporte do GHG Protocol Brasil</p>
                            </div>
                        </a>
                        <a href="/reports/source/fuel.php" class="report">
                            <div class="icon">
                                <iconify-icon icon="bi:fuel-pump" width="70"></iconify-icon>
                            </div>
                            <div class="description">
                                <h3>Combustível</h3>
                                <p>Análise das emissões do consumo de combustível da sua empresa</p>
                            </div>
                        </a>
                        <a href="/reports/source/commuting.php" class="report">
                            <div class="icon">
                                <iconify-icon icon="mdi:bus-sign" width="70"></iconify-icon>
                            </div>
                            <div class="description">
                                <h3>Deslocamento e Home Office</h3>
                                <p>Análise das emissões de deslocamento e trabalho remoto</p>
                            </div>
                        </a>
                        <a href="/reports/source/emissions.php" class="report">
                            <div class="icon">
                                <iconify-icon icon="mdi:smoke" width="70"></iconify-icon>
                            </div>
                            <div class="description">
                                <h3>Emissões fugitivas</h3>
                                <p>Análise das emissões fugitivas da sua empresa</p>
                            </div>
                        </a>
                        <a href="/reports/source/energy.php" class="report">
                            <div class="icon">
                                <iconify-icon icon="fluent:database-lightning-20-filled" width="70"></iconify-icon>
                            </div>
                            <div class="description">
                                <h3>Energia</h3>
                                <p>Análise das emissões de energia da sua empresa</p>
                            </div>
                        </a>
                        <a href="/reports/source/shipping.php" class="report">
                            <div class="icon">
                                <iconify-icon icon="mdi:truck-fast-outline" width="70"></iconify-icon>
                            </div>
                            <div class="description">
                                <h3>Frete</h3>
                                <p>Análise das emissões de logística e transporte de mercadorias</p>
                            </div>
                        </a>
                        <a href="/reports/source/trip.php" class="report">
                            <div class="icon">
                                <iconify-icon icon="clarity:airplane-solid" width="70"></iconify-icon>
                            </div>
                            <div class="description">
                                <h3>Viagens</h3>
                                <p>Análise das emissões de viagens de negócios</p>
                            </div>
                        </a>
                    </div>
                </div>
        </div>
    </div>

</body>
</html>