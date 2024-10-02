<?php

$data = [
    (object) ["numbering" => "1", "date" => "24/02/2024", "employeeID" => "Veículo", "employeeAddress" => "Centro - São Paulo", "employeeZipCode" => "21194387","workplaceAddress" => "Bela Vista - São Paulo", "workLocationZipCode" => "22194389", "admissionDate" => "não informado", "terminationDate" => "não informado", "timeAtHomeOffice" => "45%", "frequencyUseModalsKnown" => "Não", "personalCarGasoline" => "não informado", "personalCarEthanol" => "não informado", "personalCarGNV" => "não informado", "personalCarUnknownFuel" => "não informado", "personalMotorcycleGasoline" => "não informado", "personalMotorcycleEthanol" => "não informado", "personalMotorcycleUnknownFuel" => "não informado", "taxiOrApp" => "não informado", "bikeOrWalk" => "não informado", "bus" => "não informado", "trainOrSubway" => "não informado", "ferry" => "não informado", "carpoolWithAnotherEmployee" => "não informado", "companyTransport" => "não informado", "customer" => "não informado", "comments" => "sem comentarios" ],
    (object) ["numbering" => "2", "date" => "24/02/2024", "employeeID" => "Veículo", "employeeAddress" => "Centro - São Paulo", "employeeZipCode" => "21194387","workplaceAddress" => "Bela Vista - São Paulo", "workLocationZipCode" => "22194389", "admissionDate" => "não informado", "terminationDate" => "não informado", "timeAtHomeOffice" => "45%", "frequencyUseModalsKnown" => "Não", "personalCarGasoline" => "não informado", "personalCarEthanol" => "não informado", "personalCarGNV" => "não informado", "personalCarUnknownFuel" => "não informado", "personalMotorcycleGasoline" => "não informado", "personalMotorcycleEthanol" => "não informado", "personalMotorcycleUnknownFuel" => "não informado", "taxiOrApp" => "não informado", "bikeOrWalk" => "não informado", "bus" => "não informado", "trainOrSubway" => "não informado", "ferry" => "não informado", "carpoolWithAnotherEmployee" => "não informado", "companyTransport" => "não informado", "customer" => "não informado", "comments" => "sem comentarios" ],
    (object) ["numbering" => "3", "date" => "24/02/2024", "employeeID" => "Veículo", "employeeAddress" => "Centro - São Paulo", "employeeZipCode" => "21194387","workplaceAddress" => "Bela Vista - São Paulo", "workLocationZipCode" => "22194389", "admissionDate" => "não informado", "terminationDate" => "não informado", "timeAtHomeOffice" => "45%", "frequencyUseModalsKnown" => "Não", "personalCarGasoline" => "não informado", "personalCarEthanol" => "não informado", "personalCarGNV" => "não informado", "personalCarUnknownFuel" => "não informado", "personalMotorcycleGasoline" => "não informado", "personalMotorcycleEthanol" => "não informado", "personalMotorcycleUnknownFuel" => "não informado", "taxiOrApp" => "não informado", "bikeOrWalk" => "não informado", "bus" => "não informado", "trainOrSubway" => "não informado", "ferry" => "não informado", "carpoolWithAnotherEmployee" => "não informado", "companyTransport" => "não informado", "customer" => "não informado", "comments" => "sem comentarios" ],
    (object) ["numbering" => "4", "date" => "24/02/2024", "employeeID" => "Veículo", "employeeAddress" => "Centro - São Paulo", "employeeZipCode" => "21194387","workplaceAddress" => "Bela Vista - São Paulo", "workLocationZipCode" => "22194389", "admissionDate" => "não informado", "terminationDate" => "não informado", "timeAtHomeOffice" => "45%", "frequencyUseModalsKnown" => "Não", "personalCarGasoline" => "não informado", "personalCarEthanol" => "não informado", "personalCarGNV" => "não informado", "personalCarUnknownFuel" => "não informado", "personalMotorcycleGasoline" => "não informado", "personalMotorcycleEthanol" => "não informado", "personalMotorcycleUnknownFuel" => "não informado", "taxiOrApp" => "não informado", "bikeOrWalk" => "não informado", "bus" => "não informado", "trainOrSubway" => "não informado", "ferry" => "não informado", "carpoolWithAnotherEmployee" => "não informado", "companyTransport" => "não informado", "customer" => "não informado", "comments" => "sem comentarios" ]
    
]

?>

<link rel="stylesheet" href="source/styles.css">

<div class="form-container">
    <div class="header">
        <div class="infos">
            <h2>Emissões de deslocamento casa-trabalho de funcionários</h2>
            <p>Gerencie as emissões do transporte de funcionários entre a casa e trabalho, bem como do consumo de energia de funcionários em home office.</p>
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
                <a href="/reports/source/commuting.php">Ver relatórios</a>
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
            <div class="item" id="employeeID">
                <p style="width: 13em;"> Nome ou identificador do funcionário </p>
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="employeeAddress">
                <p style="width: 13em;"> Endereço do funcionário </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="employeeZipCode">
                <p style="width: 10em;"> CEP do funcionário </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="workplaceAddress">
                <p style="width: 12em;"> Endereço do local de trabalho </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="workLocationZipCode">
                <p style="width: 12em;"> CEP do local de trabalho </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="admissionDate">
                <p style="width: 10em;"> Data da admissão (opcional) </p> 
                <input  type="date">
            </div>
            <div class="item" id="terminationDate" style="margin-right: 4em;">
                <p style="width: 10em;"> Data de desligamento (opcional) </p> 
                <input type="date">
            </div>
            <div class="item" id="timeAtHomeOffice">
                <p style="width: 12em;"> Tempo em home office (%) </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="frequencyUseModalsKnown" style="margin-right: 3em;">
                <p style="width: 12em;"> Frequência de uso de modais é conhecida? (%) </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="personalCar-gasoline">
                <p style="width: 10em;"> Carro pessoal (gasolina) (%) </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="personalCar-ethanol" >
                <p style="width: 10em;"> Carro pessoal (etanol) (%) </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="personalCar-gnv">
                <p style="width: 10em;"> Carro pessoal (gnv) (%) </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="personalCar-unknownFuel" style="margin-right: 5em;">
                <p style="width: 10em;"> Carro pessoal (combustível desconhecido) (%) </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="personalMotorcycle-gasoline">
                <p style="width: 10em;"> Moto pessoal (gasolina) (%) </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="personalMotorcycle-ethanol">
                <p style="width: 10em;"> Moto pessoal (etanol) (%) </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="personalMotorcycle-unknownFuel">
                <p style="width: 10em;"> Moto pessoal (combustível desconhecido) (%) </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="taxiOrApp">
                <p style="width: 10em;"> Taxi ou aplicativo (%) </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="bikeOrWalk">
                <p style="width: 10em;"> Bicicleta ou a pé (%) </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="bus">
                <p style="width: 5em;"> Ônibus (%) </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="trainOrSubway">
                <p style="width: 8em;"> Trem ou metrô (%) </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="ferry" >
                <p style="width: 7em;"> Balsa (%) </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="carpoolWithAnotherEmployee">
                <p style="width: 10em;"> Carona com outro funcionário (%) </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="companyTransport">
                <p style="width: 12em;"> Transporte da empresa (%) </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="customer">
                <p style="width: 10em;"> Cliente (Opcional) </p> 
                <input placeholder="pesquisar..." type="text">
            </div>
            <div class="item" id="comments">
                <p style="width: 15em;"> Comentários (Opcional) </p> 
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
                <div class="column" style="width: 11em;">
                    <p><?= $column->date ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="employeeID">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 16em;">
                    <p><?= $column->employeeID ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="employeeAddress">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 16em;">
                    <p><?= $column->employeeAddress ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="employeeZipCode">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 13em;">
                    <p><?= $column->employeeZipCode ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="workplaceAddress">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 15em;">
                    <p><?= $column->workplaceAddress ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="workLocationZipCode">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 15em;">
                    <p><?= $column->workLocationZipCode ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="admissionDate">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 13em;">
                    <p><?= $column->admissionDate ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="terminationDate">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 12em;">
                    <p><?= $column->terminationDate ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="timeAtHomeOffice">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 16em;">
                    <p><?= $column->timeAtHomeOffice ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="frequencyUseModalsKnown">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 13em;">
                    <p><?= $column->frequencyUseModalsKnown ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="personalCar-gasoline">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 13em;">
                    <p><?= $column->personalCarGasoline ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="personalCar-ethanol">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 13em;">
                    <p><?= $column->personalCarEthanol ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="personalCar-gnv">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 13em;">
                    <p><?= $column->personalCarGNV?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="personalCar-unknownFuel">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 13em;">
                    <p><?= $column->personalCarUnknownFuel ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="personalMotorcycle-gasoline">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 13em;">
                    <p><?= $column->personalMotorcycleGasoline ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="personalMotorcycle-ethanol">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 13em;">
                    <p><?= $column->personalMotorcycleEthanol ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="personalMotorcycle-unknownFuel">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 13em;">
                    <p><?= $column->personalMotorcycleUnknownFuel ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="taxiOrApp">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 13em;">
                    <p><?= $column->taxiOrApp ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="bikeOrWalk">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 11em;">
                    <p><?= $column->bikeOrWalk ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="bus">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 10em;">
                    <p><?= $column->bus ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="trainOrSubway">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 10em;">
                    <p><?= $column->trainOrSubway ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="ferry">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 10em;">
                    <p><?= $column->ferry ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="carpoolWithAnotherEmployee">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 13em;">
                    <p><?= $column->carpoolWithAnotherEmployee ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="companyTransport">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 15em;">
                    <p><?= $column->companyTransport ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="columns" id="customer">
                <?php foreach ($data as $column): ?>
                <div class="column" style="width: 14em;">
                    <p><?= $column->customer ?></p>
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

