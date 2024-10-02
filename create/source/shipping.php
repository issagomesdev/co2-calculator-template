<link rel="stylesheet" href="source/styles.css">

<style>
</style>

<div class="form-container">
    <div class="header">
        <div class="infos">
            <h2>Medição de emissões de frete</h2>
            <p>Informe abaixo as características do seu frete para prosseguir com o cálculo de emissões. </p>
        </div>
    </div>

    <div class="variations">
        <div class="variation" id="shippingType">
            <div class="name"> <h4>Abrangência do frete</h4> </div>
            <div class="options">
                <div class="option selected" onclick="shippingType(1)">Nacional</div>
                <div class="option" onclick="shippingType(2)">Internacional</div>
            </div>
        </div>
        <div class="variation" id="mainModal">
            <div class="name"> <h4>Modal principal</h4> </div>
            <div class="options">
                <div class="option selected" onclick="mainModal('terrestrial')">Terrestre</div>
                <div class="option" onclick="mainModal('air')">Aéreo</div>
                <div class="option" onclick="mainModal('maritime')">Marítimo</div>
                <div class="option" onclick="mainModal('unknown')">Não sei</div>
            </div>
        </div>
        <div class="variation" id="hiringModel">
            <div class="name"> <h4>Modelo de contratação</h4> </div>
            <div class="options">
                <div class="option selected" onclick="hiringModel('fractioned')">Fracionado</div>
                <div class="option" onclick="hiringModel('dedicated')">Dedicado</div>
            </div>
        </div>
        <div class="variation" id="distanceCalculation">
            <div class="name"> <h4>Dado disponível para o cálculo de distância</h4> </div>
            <div class="options">
                <div class="option selected" onclick="distanceCalculation('cep')">CEP partida/destino</div>
                <div class="option" onclick="distanceCalculation('city')">Cidade partida/destino</div>
                <div class="option" onclick="distanceCalculation('distance')">Distância percorrida (km)</div>
            </div>
        </div>
    </div>

    <div class="form-content">
        <div class="header">
            <div class="item" id="numbering" style="margin-right: 4em;"> </div>
            <div class="item" id="date" style="margin-right: 11em;"> 
                <p style="width: 4em;"> Data </p> 
            </div>
            <div class="item" id="starting">
                <p style="width: 12em;"> CEP partida </p> 
            </div>
            <div class="item" id="destiny">
                <p style="width: 12em;"> CEP destino </p> 
            </div>
            <div class="item" id="totalWeight">
                <p style="width: 12em;"> Peso total transportado (kg) </p> 
            </div>
            <div class="item" id="productsVolume">
                <p style="width: 12em;"> Volume dos produtos (m³) (opcional) </p> 
            </div>
            <div class="item" id="vehiclesType">
                <p style="width: 12em;"> Tipo de veículo (opcional) </p> 
            </div>
            <div class="item" id="vehiclesNumber">
                <p style="width: 12em;"> Quantidade de veículos (opcional) </p> 
            </div>
            <div class="item" id="fuelType">
                <p style="width: 12em;"> Tipo de combustível (opcional) </p> 
            </div>
            <div class="item" id="refrigeratedCargo">
                <p style="width: 12em;"> Carga refrigerada </p> 
            </div>
            <div class="item" id="type">
                <p style="width: 12em;"> Frete próprio ou terceirizado </p> 
            </div>
            <div class="item" id="reason">
                <p style="width: 12em;"> Finalidade do frete </p> 
            </div>
            <div class="item" id="payment">
                <p style="width: 12em;"> Modalidade de pagamento </p> 
            </div>
            <div class="item" id="customer">
                <p style="width: 12em;"> Cliente (Opcional) </p> 
            </div>
            <div class="item" id="supplier">
                <p style="width: 12em;"> Fornecedor (Opcional) </p> 
            </div>
            <div class="item" id="comments">
                <p style="width: 13em;"> Comentários (Opcional) </p> 
            </div>
        </div>
        <div class="content">

            <div class="columns" id="numbering" style="width: 7em;">
                <div class="column">
                    <p>1</p>
                </div>
            </div>

            <div class="columns" id="date">
                <div class="column" style="width: 14em;">
                    <input type="date">
                </div>
            </div>

            <div class="columns" id="starting">
                <div class="column" style="width: 15em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="destiny">
                <div class="column" style="width: 15em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="totalWeight">
                <div class="column" style="width: 15em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="productsVolume">
                <div class="column" style="width: 15em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="vehiclesType">
                <div class="column" style="width: 15em;">
                    <select>
                        <option disabled selected>Selecione</option>
                        <option value="motocicleta">Motocicleta</option>
                        <option value="V_PBT">Van - PBT</option>
                        <option value="V_PBT_1.3">Van - PBT até 1,3 ton</option>
                        <option value="V_PBT_1.3-1.7">Van - PBT 1,3 a 1,7 ton</option>
                        <option value="V_PBT_1.7-3.5">Van - PBT 1,7 a 3,5 ton</option>
                        <option value="C_PBT">Caminhão - PBT</option>
                        <option value="CR_PBT">Caminhão rígido - PBT</option>
                        <option value="CA_PBT">Caminhão articulado - PBT</option>
                        <option value="CR_PBT_3.5-7.5">Caminhão rígido - PBT 3,5 a 7,5 ton</option>
                        <option value="CR_PBT_7.5-17">Caminhão rígido - PBT 7,5 a 17 ton</option>
                        <option value="CR_PBT_>17">Caminhão rígido - PBT acima de 17 ton</option>
                        <option value="CA_PBT_3.5-33">Caminhão articulado - PBT 3,5 a 33 ton</option>
                        <option value="CA_PBT_>33">Caminhão articulado - PBT acima de 33 ton</option>
                    </select>
                </div>
            </div>

            <div class="columns" id="vehiclesNumber">
                <div class="column" style="width: 15em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="fuelType">
                <div class="column" style="width: 15em;">
                    <select>
                        <option disabled selected>Selecione</option>
                        <option value="gasolina">Gasolina</option>
                        <option value="diesel">Diesel</option>
                        <option value="etanol">Etanol</option>
                        <option value="gnv">GNV</option>
                    </select>
                </div>
            </div>

            <div class="columns" id="refrigeratedCargo">
                <div class="column" style="width: 15em;">
                    <select>
                        <option disabled selected>Selecione</option>
                        <option value="true">Sim</option>
                        <option value="false">Não</option>
                    </select>
                </div>
            </div>

            <div class="columns" id="type">
                <div class="column" style="width: 15em;">
                    <select>
                        <option disabled selected>Selecione</option>
                        <option value="own">Próprio</option>
                        <option value="out">Terceirizado</option>
                    </select>
                </div>
            </div>

            <div class="columns" id="reason">
                <div class="column" style="width: 15em;">
                    <select>
                        <option disabled selected>Selecione</option>
                        <option value="delivery">Entrega para cliente</option>
                        <option value="transport">Transporte entre unidades da empresa</option>
                        <option value="receipt">Recebimento de compras</option>
                        <option value="none">Não sei / Não se aplica</option>
                    </select>
                </div>
            </div>

            <div class="columns" id="payment">
                <div class="column" style="width: 15em;">
                    <select>
                        <option disabled selected>Selecione</option>
                        <option value="cif">CIF</option>
                        <option value="fob">FOB</option>
                        <option value="none">Não sei / Não se aplica</option>
                    </select>
                </div>
            </div>

            <div class="columns" id="customer">
                <div class="column" style="width: 15em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="supplier">
                <div class="column" style="width: 15em;">
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