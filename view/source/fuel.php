<?php

$data = [
    (object) ["numbering" => "1", "date" => "24/02/2024", "equipment" => "Veículo", "fuel" => "GNS", "amount" => "200", "customer" => "não informado", "comments" => "sem comentarios"],
    (object) ["numbering" => "2", "date" => "25/02/2024", "equipment" => "Equipamento estacionário", "fuel" => "Etanol", "amount" => "200", "customer" => "não informado", "comments" => "Lorem ipsum dolor sit amet. Eum natus dicta eos enim optio qui pariatur dolor. Sed assumenda incidunt ut esse recusandae ut placeat perferendis! Cum voluptatem suscipit ab iusto nulla vel atque corporis ut voluptatum internos est maxime galisum?"],
    (object) ["numbering" => "3", "date" => "26/02/2024", "equipment" => "Veículo", "fuel" => "OC", "amount" => "200", "customer" => "Ana Julia", "comments" => "sem comentarios"],
    (object) ["numbering" => "4", "date" => "27/02/2024", "equipment" => "Veículo", "fuel" => "GNV", "amount" => "200", "customer" => "não informado", "comments" => "sem comentarios"],
    (object) ["numbering" => "5", "date" => "28/02/2024", "equipment" => "Equipamento estacionário", "fuel" => "Diesel", "amount" => "200", "customer" => "não informado", "comments" => "sem comentarios"],
    (object) ["numbering" => "6", "date" => "29/02/2024", "equipment" => "Equipamento estacionário", "fuel" => "CLP", "amount" => "200", "customer" => "Alfredo", "comments" => "sem comentarios"],
    (object) ["numbering" => "7", "date" => "30/02/2024", "equipment" => "Veículo", "fuel" => "Gasolina", "amount" => "200",  "customer" => "Marcos Mario", "comments" => "sem comentarios"],
]

?>

<link rel="stylesheet" href="source/styles.css">

<div class="form-container">
    <div class="header">
        <div class="infos">
            <h2>Emissões de combustível</h2>
            <p>Gerencie as emissões do consumo de combustível pela sua empresa.</p>
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
                <a href="/reports/source/fuel.php">Ver relatórios</a>
            </div>
        </div>
    </div>

    <div class="form-content">
        <div class="header">
            <div class="item" id="numbering" style="margin-right: 8em;"> </div>
            <div class="item" id="date"> 
                <p style="width: 4em;"> Data </p>
                <input type="date">
            </div>
            <div class="item" id="equipment">
                <p style="width: 12em;"> Tipo de equipamento (em que o combustível foi usado) </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="fuel">
                <p style="width: 12em;"> Tipo de combustível </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="amount">
                <p style="width: 12em;"> Quantidade de combustível </p>
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="customer">
                <p style="width: 12em;"> Cliente (Opcional) </p> 
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
                <div class="column" style="width: 7em;">
                    <p><?= $column->numbering ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="date">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 10em;">
                    <p><?= $column->date ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="equipment">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 16em;">
                    <p><?= $column->equipment ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="fuel">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 16em;">
                    <p><?= $column->fuel ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="amount">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 13em;">
                    <p><?= $column->amount ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="customer">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 16em;">
                    <p><?= $column->customer ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="comments">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 16em;">
                    <p><?= $column->comments ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            
        </div>
    </div>
    
</div>

