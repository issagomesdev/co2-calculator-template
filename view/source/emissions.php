<?php

$data = [
    (object) ["numbering" => "1", "date" => "24/02/2024", "equipment" => "Refrigerador residencial / escritório", "gas" => "Gás carbônico (CO2)", "equipmentCapacity" => "200", "amount" => "23", "purchasedThisYear" => "Sim", "purchasedloaded" => "Sim", "purchaseDate" => "13/01/2024", "discardedThisYear" => "Sim", "discardedDate" => "12/04/2024", "comments" => "sem comentarios"],
    (object) ["numbering" => "2", "date" => "24/02/2024", "equipment" => "Refrigerador residencial / escritório", "gas" => "Gás carbônico (CO2)", "equipmentCapacity" => "200", "amount" => "23", "purchasedThisYear" => "Sim", "purchasedloaded" => "Sim", "purchaseDate" => "13/01/2024", "discardedThisYear" => "Sim", "discardedDate" => "12/04/2024", "comments" => "sem comentarios"],
    (object) ["numbering" => "3", "date" => "24/02/2024", "equipment" => "Refrigerador residencial / escritório", "gas" => "Gás carbônico (CO2)", "equipmentCapacity" => "200", "amount" => "23", "purchasedThisYear" => "Sim", "purchasedloaded" => "Sim", "purchaseDate" => "13/01/2024", "discardedThisYear" => "Sim", "discardedDate" => "12/04/2024", "comments" => "sem comentarios"]
];

?>

<link rel="stylesheet" href="source/styles.css">

<div class="form-container">
    <div class="header">
        <div class="infos">
            <h2>Emissões fugitivas</h2>
            <p>Gerencie as emissões que resultam da fuga para a atmosfera de gases presentes em equipamentos como ar condicionados, geladeiras, extintores de incêndios e sistemas de armazenamento de gases industriais.</p>
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
                <a href="/reports/source/emissions.php">Ver relatórios</a>
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
                <p style="width: 10em;"> Categoria do equipamento </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="gas">
                <p style="width: 8em"> Tipo de gás </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="equipmentCapacity">
                <p style="width: 12em;"> Capacidade de gás de cada equipamento (kg) </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="amount">
                <p style="width: 12em;"> Quantidade de equipamentos </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="purchasedThisYear">
                <p style="width: 13em;"> Equipamento comprado esse ano? </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="purchasedloaded">
                <p style="width: 13em;"> Equipamento comprado carregado? </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="purchaseDate">
                <p style="width: 9em;"> Data da compra </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="discardedThisYear">
                <p style="width: 13em;"> Equipamento descartado esse ano? </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="discardedDate">
                <p style="width: 10em;"> Data do descarte </p> 
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
                <div class="column" style="width: 5em;">
                    <p><?= $column->numbering ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="date">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 13em;">
                    <p><?= $column->date ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="equipment">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 13em;">
                    <p><?= $column->equipment ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="gas">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 12em;">
                    <p><?= $column->gas ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="equipmentCapacity">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 15em;">
                    <p><?= $column->equipmentCapacity ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="amount">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 15em;">
                    <p><?= $column->amount ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="purchasedThisYear">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 16em;">
                    <p><?= $column->purchasedThisYear ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="purchasedloaded">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 16em;">
                    <p><?= $column->purchasedloaded ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="purchaseDate">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 12em;">
                    <p><?= $column->purchaseDate ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="discardedThisYear">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 16em;">
                    <p><?= $column->discardedThisYear ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="discardedDate">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 13em;">
                    <p><?= $column->discardedDate ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="comments">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 15em;">
                    <p><?= $column->comments ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            
        </div>
    </div>
    
</div>