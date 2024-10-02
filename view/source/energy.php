<?php

$data = [
    (object) ["numbering" => "1", "date" => "24/02/2024", "consumption" => "152,2", "unit" => "2", "comments" => "sem comentarios"],
    (object) ["numbering" => "2", "date" => "25/02/2024", "consumption" => "165,5", "unit" => "3", "comments" => "Lorem ipsum dolor sit amet. Eum natus dicta eos enim optio qui pariatur dolor. Sed assumenda incidunt ut esse recusandae ut placeat perferendis! Cum voluptatem suscipit ab iusto nulla vel atque corporis ut voluptatum internos est maxime galisum?"],
    (object) ["numbering" => "3", "date" => "26/02/2024", "consumption" => "140,0", "unit" => "2", "comments" => "comentário 2"],
    (object) ["numbering" => "4", "date" => "27/02/2024", "consumption" => "175,8", "unit" => "4", "comments" => "sem comentarios"],
    (object) ["numbering" => "5", "date" => "28/02/2024", "consumption" => "180,3", "unit" => "3", "comments" => "comentário 3"],
    (object) ["numbering" => "6", "date" => "29/02/2024", "consumption" => "162,1", "unit" => "2", "comments" => "comentário 4"],
    (object) ["numbering" => "7", "date" => "01/03/2024", "consumption" => "155,7", "unit" => "3", "comments" => "sem comentarios"],
    (object) ["numbering" => "8", "date" => "02/03/2024", "consumption" => "168,9", "unit" => "4", "comments" => "comentário 5"],
    (object) ["numbering" => "9", "date" => "03/03/2024", "consumption" => "145,6", "unit" => "2", "comments" => "comentário 6"],
    (object) ["numbering" => "10", "date" => "04/03/2024", "consumption" => "160,4", "unit" => "3", "comments" => "sem comentarios"]
]

?>

<link rel="stylesheet" href="source/styles.css">

<style>
</style>

<div class="form-container">
    <div class="header">
        <div class="infos">
            <h2>Emissões de energia</h2>
            <p>Gerencie as emissões do consumo de energia pela sua empresa</p>
        </div>
        <div class="averages">
            <div class="average">
                <p class="name">Número de medições</p>
                <p>1</p>
            </div>
            <div class="average">
                <p class="name">Emissões totais</p>
                <p>0,012 tCO2e</p>
            </div>
            <div class="average">
                <p class="name">Equivalente em árvores</p>
                <p>0,074 árvores</p>
            </div>
            <div class="average">
                <div class="charts">
                    <iconify-icon icon="fluent:data-bar-vertical-16-filled" width="30"></iconify-icon>
                    <iconify-icon icon="fontisto:pie-chart-1" width="30"></iconify-icon>
                    <iconify-icon icon="flowbite:chart-line-down-outline" width="30"></iconify-icon>
                </div>
                <a href="/reports/source/energy.php">Ver relatórios</a>
            </div>
        </div>
    </div>

    <div class="form-content">
        <div class="header">
            <div class="item" id="numbering" style="margin-right: 8em;"> </div>
            <div class="item" id="date" style="margin-right: 11em;"> 
                <p style="width: 4em;"> Data </p>
                <input type="date">
            </div>
            <div class="item" id="consumption">
                <p style="width: 13em;"> Consumo da rede (kwh) </p>
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="unit">
                <p style="width: 17em;"> Unidade da empresa (opcional) </p>
                <input placeholder="pesquisar..." type="text"> 
            </div>
            <div class="item" id="comments">
                <p style="width: 13em;"> Comentários (Opcional) </p>
                <input placeholder="pesquisar..." type="text"> 
            </div>
        </div>
        <div class="content">


            <div class="columns" id="numbering">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 6em;">
                    <p><?= $column->numbering ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="date">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 19em;">
                    <p><?= $column->date ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="consumption">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 16em;">
                    <p><?= $column->consumption ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="unit">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 20em;">
                    <p><?= $column->unit ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="comments">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 18em;">
                    <p><?= $column->comments ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            
            
            
        </div>
    </div>
    
</div>