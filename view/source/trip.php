<?php

$data = [
    (object) ["numbering" => "1", "date" => "24/02/2024", "originCity" => "São paulo, Brasil", "destinationCity" => "Rio de janeiro, Brasil", "type" => "Apenas ida", "mainModal" => "Carro", "travelersNumber" => "8", "roomsNumber" => "10", "accommodationDuration" => "11", "discardedThisYear" => "Sim", "discardedDate" => "12/04/2024", "customer" => "não informado", "supplier" => "não informado", "comments" => "sem comentarios"]
]

?>

<link rel="stylesheet" href="source/styles.css">

<div class="form-container">
    <div class="header">
        <div class="infos">
            <h2><Em></Em>missões de viagens </h2>
            <p>Gerencie as emissões de deslocamento e hospedagem em viagens a serviço da sua empresa.</p>
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
                <a href="/reports/source/trip.php">Ver relatórios</a>
            </div>
        </div>
    </div>

    <div class="form-content">
        <div class="header">
            <div class="item" id="numbering" style="margin-right: 7em;"> </div>
            <div class="item" id="date"> 
                <p style="width: 10em;"> Data do início da viagem </p>
                <input type="date"> 
            </div>
            <div class="item" id="originCity">
                <p style="width: 12em;"> Cidade de Origem (Cidade, Pais) </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="destinationCity">
                <p style="width: 12em;"> Cidade de destino (Cidade, País) </p>  
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="type">
                <p style="width: 8em;"> Trecho </p>  
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="mainModal">
                <p style="width: 10em;"> Modal principal </p>  
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="travelersNumber">
                <p style="width: 10em;"> Quantidade de viajantes </p>  
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="roomsNumber">
                <p style="width: 10em;"> Quantidade de quartos </p>  
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="accommodationDuration">
                <p style="width: 10em;"> Duração da hospedagem (noites) </p>  
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

            <div class="columns" id="originCity">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 15em;">
                    <p><?= $column->originCity ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="destinationCity">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 15em;">
                    <p><?= $column->destinationCity ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="type">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 12em;">
                    <p><?= $column->type ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="mainModal">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 13em;">
                    <p><?= $column->mainModal ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="travelersNumber">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 12em;">
                    <p><?= $column->travelersNumber ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="roomsNumber">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 14em;">
                    <p><?= $column->roomsNumber ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="accommodationDuration">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 13em;">
                    <p><?= $column->accommodationDuration ?></p>
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