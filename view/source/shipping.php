<?php

$data = [
    (object) ["numbering" => "1", "date" => "24/02/2024", "starting" => "99999999", "destiny" => "99999999", "totalWeight" => "100", "productsVolume" => "não informado", "vehiclesType" => "Motocicleta", "vehiclesNumber" => "3", "fuelType" => "gasolina", "refrigeratedCargo" => "Sim", "type" => "Próprio", "reason" => "Entrega para cliente", "payment" => "não informado", "customer" => "não informado", "supplier" => "não informado", "comments" => "sem comentarios"]
]

?>

<link rel="stylesheet" href="source/styles.css">

<style>
</style>

<div class="form-container">
    <div class="header">
        <div class="infos">
            <h2>Emissões de frete</h2>
            <p>Gerencie as emissões do transporte de cargas em entregas ou recebimentos para sua empresa.</p>
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
                <a href="/reports/source/shipping.php">Ver relatórios</a>
            </div>
        </div>
    </div>

    <div class="form-content">
        <div class="header">
            <div class="item" id="numbering" style="margin-right: 10em;"> </div>
            <div class="item" id="date"> 
                <p style="width: 4em;"> Data </p>
                <input type="date"> 
            </div>
            <div class="item" id="starting">
                <p style="width: 12em;"> CEP partida </p>
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="destiny">
                <p style="width: 12em;"> CEP destino </p>
                <input placeholder="pesquisar..." type="text"> 
            </div>
            <div class="item" id="totalWeight">
                <p style="width: 12em;"> Peso total transportado (kg) </p>
                <input placeholder="pesquisar..." type="text"> 
            </div>
            <div class="item" id="productsVolume">
                <p style="width: 12em;"> Volume dos produtos (m³) (opcional) </p>
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="vehiclesType">
                <p style="width: 12em;"> Tipo de veículo (opcional) </p>
                <input placeholder="pesquisar..." type="text"> 
            </div>
            <div class="item" id="vehiclesNumber">
                <p style="width: 12em;"> Quantidade de veículos (opcional) </p>
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="fuelType">
                <p style="width: 12em;"> Tipo de combustível (opcional) </p>
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="refrigeratedCargo">
                <p style="width: 12em;"> Carga refrigerada </p>
                <input placeholder="pesquisar..." type="text"> 
            </div>
            <div class="item" id="type">
                <p style="width: 12em;"> Frete próprio ou terceirizado </p>
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="reason">
                <p style="width: 12em;"> Finalidade do frete </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="payment">
                <p style="width: 12em;"> Modalidade de pagamento </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="customer">
                <p style="width: 12em;"> Cliente (Opcional) </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="supplier">
                <p style="width: 12em;"> Fornecedor (Opcional) </p> 
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
                <div class="column" style="width: 8em;">
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

            <div class="columns" id="starting">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 15em;">
                    <p><?= $column->starting ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="destiny">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 15em;">
                    <p><?= $column->destiny ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="totalWeight">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 15em;">
                    <p><?= $column->totalWeight ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="productsVolume">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 15em;">
                    <p><?= $column->productsVolume ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="vehiclesType">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 15em;">
                    <p><?= $column->vehiclesType ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="vehiclesNumber">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 15em;">
                    <p><?= $column->vehiclesNumber ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="fuelType">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 15em;">
                    <p><?= $column->fuelType ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="refrigeratedCargo">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 15em;">
                    <p><?= $column->refrigeratedCargo ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="type">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 15em;">
                    <p><?= $column->type ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="reason">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 15em;">
                    <p><?= $column->reason ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="payment">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 15em;">
                    <p><?= $column->payment ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="customer">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 15em;">
                    <p><?= $column->customer ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="supplier">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 15em;">
                    <p><?= $column->supplier ?></p>
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