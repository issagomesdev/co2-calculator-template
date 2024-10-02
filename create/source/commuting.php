<link rel="stylesheet" href="source/styles.css">

<div class="form-container">
    <div class="header">
        <div class="infos">
            <h2>Medição de emissões de deslocamento casa-trabalho e home office</h2>
            <p>Este módulo abrange o cálculo de emissões do transporte de funcionários entre a casa e trabalho, seja utilizando veículos particulares, transporte público (trem, metrô, ônibus) ou transporte da sua empresa; bem como do consumo de energia de funcionários em home office.</p>
        </div>
    </div>

    <div class="form-content">
        <div class="header">
            <div class="item" id="numbering" style="margin-right: 8em;"> </div>
            <div class="item" id="date"> 
                <p style="width: 4em;"> Data </p> 
            </div>
            <div class="item" id="employeeID">
                <p style="width: 13em;"> Nome ou identificador do funcionário </p> 
            </div>
            <div class="item" id="employeeAddress">
                <p style="width: 13em;"> Endereço do funcionário </p> 
            </div>
            <div class="item" id="employeeZipCode">
                <p style="width: 10em;"> CEP do funcionário </p> 
            </div>
            <div class="item" id="workplaceAddress">
                <p style="width: 12em;"> Endereço do local de trabalho </p> 
            </div>
            <div class="item" id="workLocationZipCode">
                <p style="width: 12em;"> CEP do local de trabalho </p> 
            </div>
            <div class="item" id="admissionDate">
                <p style="width: 10em;"> Data da admissão (opcional) </p> 
            </div>
            <div class="item" id="terminationDate" style="margin-right: 4em;">
                <p style="width: 10em;"> Data de desligamento (opcional) </p> 
            </div>
            <div class="item" id="timeAtHomeOffice">
                <p style="width: 12em;"> Percentual do tempo em home office </p> 
            </div>
            <div class="item" id="frequencyUseModalsKnown" style="margin-right: 3em;">
                <p style="width: 12em;"> Frequência de uso de modais é conhecida? </p> 
            </div>
            <div class="item" id="personalCar-gasoline">
                <p style="width: 10em;"> Carro pessoal (gasolina) </p> 
            </div>
            <div class="item" id="personalCar-ethanol" >
                <p style="width: 10em;"> Carro pessoal (etanol) </p> 
            </div>
            <div class="item" id="personalCar-gnv">
                <p style="width: 10em;"> Carro pessoal (gnv) </p> 
            </div>
            <div class="item" id="personalCar-unknownFuel" style="margin-right: 5em;">
                <p style="width: 10em;"> Carro pessoal (combustível desconhecido) </p> 
            </div>
            <div class="item" id="personalMotorcycle-gasoline">
                <p style="width: 10em;"> Moto pessoal (gasolina) </p> 
            </div>
            <div class="item" id="personalMotorcycle-ethanol">
                <p style="width: 10em;"> Moto pessoal (etanol) </p> 
            </div>
            <div class="item" id="personalMotorcycle-unknownFuel">
                <p style="width: 10em;"> Moto pessoal (combustível desconhecido) </p> 
            </div>
            <div class="item" id="taxiOrApp">
                <p style="width: 10em;"> Taxi ou aplicativo </p> 
            </div>
            <div class="item" id="bikeOrWalk">
                <p style="width: 10em;"> Bicicleta ou a pé </p> 
            </div>
            <div class="item" id="bus">
                <p style="width: 5em;"> Ônibus </p> 
            </div>
            <div class="item" id="trainOrSubway">
                <p style="width: 8em;"> Trem ou metrô </p> 
            </div>
            <div class="item" id="ferry" >
                <p style="width: 4em;"> Balsa </p> 
            </div>
            <div class="item" id="carpoolWithAnotherEmployee">
                <p style="width: 10em;"> Carona com outro funcionário </p> 
            </div>
            <div class="item" id="companyTransport">
                <p style="width: 12em;"> Transporte da empresa </p> 
            </div>
            <div class="item" id="customer">
                <p style="width: 10em;"> Cliente (Opcional) </p> 
            </div>
            <div class="item" id="comments">
                <p style="width: 14em;"> Comentários (Opcional) </p> 
            </div>
        </div>
        <div class="content">

            <div class="columns" id="numbering">
                <div class="column" style="width: 5em;">
                    <p>1</p>
                </div>
            </div>

            <div class="columns" id="date">
                <div class="column" style="width: 10em;">
                    <input type="date">
                </div>
            </div>

            <div class="columns" id="employeeID">
                <div class="column" style="width: 16em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="employeeAddress">
                <div class="column" style="width: 16em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="employeeZipCode">
                <div class="column" style="width: 13em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="workplaceAddress">
                <div class="column" style="width: 15em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="workLocationZipCode">
                <div class="column" style="width: 15em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="admissionDate">
                <div class="column" style="width: 12em;">
                    <input type="date">
                </div>
            </div>

            <div class="columns" id="terminationDate">
                <div class="column" style="width: 12em;">
                    <input type="date">
                </div>
            </div>

            <div class="columns" id="timeAtHomeOffice">
                <div class="column" style="width: 16em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="frequencyUseModalsKnown">
                <div class="column" style="width: 13em;">
                    <select>
                        <option disabled selected>Selecione</option>
                        <option value="true">Sim</option>
                        <option value="false">Não</option>
                    </select>
                </div>
            </div>

            <div class="columns" id="personalCar-gasoline">
                <div class="column" style="width: 13em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="personalCar-ethanol">
                <div class="column" style="width: 13em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="personalCar-gnv">
                <div class="column" style="width: 12em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="personalCar-unknownFuel">
                <div class="column" style="width: 13em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="personalMotorcycle-gasoline">
                <div class="column" style="width: 13em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="personalMotorcycle-ethanol">
                <div class="column" style="width: 13em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="personalMotorcycle-unknownFuel">
                <div class="column" style="width: 13em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="taxiOrApp">
                <div class="column" style="width: 13em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="bikeOrWalk">
                <div class="column" style="width: 11em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="bus">
                <div class="column" style="width: 10em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="trainOrSubway">
                <div class="column" style="width: 10em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="ferry">
                <div class="column" style="width: 8em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="carpoolWithAnotherEmployee">
                <div class="column" style="width: 13em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="companyTransport">
                <div class="column" style="width: 15em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="customer">
                <div class="column" style="width: 14em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="comments">
                <div class="column" style="width: 15em;">
                    <input type="text">
                </div>
            </div>
            
        </div>
    </div>

    <div class="new-row">
        <div class="container">
            <button onclick="newRow()"> Adicionar </button>
            <input type="number" step="1" value="0">
            <span>linhas</span>
        </div>
    </div>
    
</div>

<div class="actions">
    <button> Salvar </button>
</div>