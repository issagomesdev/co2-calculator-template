<link rel="stylesheet" href="source/styles.css">

<div class="form-container">
    <div class="header">
        <div class="infos">
            <h2> Medição de emissões de viagens </h2>
            <p>Informe abaixo os dados de deslocamento e hospedagem em viagens realizadas a serviço da sua empresa. Caso uma viagem não tenho tido hospedagem, deixar seção em branco.</p>
        </div>
    </div>

    <div class="form-content">
        <div class="header">
            <div class="item" id="numbering" style="margin-right: 8em;"> </div>
            <div class="item" id="date"> 
                <p style="width: 10em;"> Data do início da viagem </p> 
            </div>
            <div class="item" id="originCity">
                <p style="width: 12em;"> Cidade de Origem (Cidade, Pais) </p> 
            </div>
            <div class="item" id="destinationCity">
                <p style="width: 12em;"> Cidade de destino (Cidade, País) </p> 
            </div>
            <div class="item" id="type">
                <p style="width: 8em;"> Trecho </p> 
            </div>
            <div class="item" id="mainModal">
                <p style="width: 10em;"> Modal principal </p> 
            </div>
            <div class="item" id="travelersNumber">
                <p style="width: 10em;"> Quantidade de viajantes </p> 
            </div>
            <div class="item" id="roomsNumber">
                <p style="width: 10em;"> Quantidade de quartos </p> 
            </div>
            <div class="item" id="accommodationDuration">
                <p style="width: 10em;"> Duração da hospedagem (noites) </p> 
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

            <div class="columns" id="numbering">
                <div class="column" style="width: 5em;">
                    <p>1</p>
                </div>
            </div>

            <div class="columns" id="date">
                <div class="column" style="width: 15em;">
                    <input type="date">
                </div>
            </div>

            <div class="columns" id="originCity">
                <div class="column" style="width: 15em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="destinationCity">
                <div class="column" style="width: 15em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="type">
                <div class="column" style="width: 11em;">
                    <select>
                        <option disabled selected>Selecione</option>
                        <option value="1">Apenas ida</option>
                        <option value="2">Ida e volta</option>
                    </select>
                </div>
            </div>

            <div class="columns" id="mainModal">
                <div class="column" style="width: 13em;">
                    <select>
                        <option disabled selected>Selecione</option>
                        <option value="1">Avião</option>
                        <option value="2">Carro</option>
                        <option value="3">Trem</option>
                        <option value="4">Ônibus</option>
                        <option value="5">Balsa</option>
                    </select>
                </div>
            </div>

            <div class="columns" id="travelersNumber">
                <div class="column" style="width: 12em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="roomsNumber">
                <div class="column" style="width: 14em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="accommodationDuration">
                <div class="column" style="width: 13em;">
                    <input type="text">
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