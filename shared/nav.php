
<?php

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = ltrim($path, '/');
$path = rtrim($path, '/');

?>

<link rel="stylesheet" href="/shared/global.css">
<link rel="stylesheet" href="styles.css">
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<div class="nav">
    <a href="/" class="nav-item <?php if(!$path) echo "active" ?>">
        <iconify-icon icon="pixelarticons:dashbaord" width="30"></iconify-icon>
        <div class="name">
            <p>Painel de emissões</p>
        </div>
    </a>
    <a href="/view" class="nav-item <?php if($path == "view") echo "active" ?>">
        <iconify-icon icon="ant-design:fund-view-outlined" width="30"></iconify-icon>
        <div class="name">
            <p>Ver emissões</p>
        </div>
    </a>
    <a href="/create"  class="nav-item <?php if($path == "create") echo "active" ?>">
        <iconify-icon icon="fluent:gauge-add-20-filled" width="30"></iconify-icon>
        <div class="name">
            <p>Inserir medição</p>
        </div>
    </a>
    <a href="/queue"  class="nav-item <?php if($path == "queue") echo "active" ?>">
        <iconify-icon icon="fluent:calculator-arrow-clockwise-24-filled" width="30"></iconify-icon>
        <div class="name">
            <p>Fila de cálculos</p>
        </div>
    </a>
    <a href="/settings"  class="nav-item <?php if($path == "settings") echo "active" ?>">
        <iconify-icon icon="ant-design:setting-twotone" width="30"></iconify-icon>
        <div class="name">
            <p>Configurar medições</p>
        </div>
    </a>
    <a href="/reports"  class="nav-item <?php if($path == "reports") echo "active" ?>">
        <iconify-icon icon="fluent:chart-multiple-20-filled" width="30"></iconify-icon>
        <div class="name">
            <p>Relatórios</p>
        </div>
    </a>
</div>