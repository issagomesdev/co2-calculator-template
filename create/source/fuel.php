<link rel="stylesheet" href="source/styles.css">

<div class="form-container">
    <div class="header">
        <div class="infos">
            <h2>Medição de emissões de combustível</h2>
            <p>Informe abaixo os dados de consumo de combustível da sua empresa em veículos ou equipamentos estacionários (ex: geradores, fogões e caldeiras).</p>
        </div>
    </div>

    <div class="form-content">
        <div class="header">
            <div class="item" id="numbering" style="margin-right: 8em;"> </div>
            <div class="item" id="date"> 
                <p style="width: 4em;"> Data </p> 
            </div>
            <div class="item" id="equipment">
                <p style="width: 12em;"> Tipo de equipamento (em que o combustível foi usado) </p> 
            </div>
            <div class="item" id="fuel">
                <p style="width: 12em;"> Tipo de combustível </p> 
            </div>
            <div class="item" id="amount">
                <p style="width: 12em;"> Quantidade de combustível </p> 
            </div>
            <div class="item" id="customer">
                <p style="width: 12em;"> Cliente (Opcional) </p> 
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
                <div class="column" style="width: 10em;">
                    <input type="date">
                </div>
            </div>

            <div class="columns" id="equipment">
                <div class="column" style="width: 15em;">
                    <select>
                        <option disabled selected>Selecione</option>
                        <option value="EE">Equipamento estacionário</option>
                        <option value="Veículo">Veículo</option>
                    </select>
                </div>
            </div>

            <div class="columns" id="fuel">
                <div class="column" style="width: 15em;">
                    <select onchange="changeFuel(this.value, 0)">
                        <option disabled selected>Selecione</option>
                        <option value="Gasolina">Gasolina</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Etanol">Etanol</option>
                        <option value="GNV">GNV (Gás Natural Veicular)</option>
                        <option value="CLP">CLP (Gás Liquefeito de Petróleo)</option>
                        <option value="GNS">Gás Natural Seco</option>
                        <option value="OC">Óleo Combustível</option>
                    </select>
                </div>
            </div>

            <div class="columns" id="amount">
                <div class="column" style="width: 15em;">
                    <input type="text" oninput="formatValue(this)" style="width: 65%; border-bottom-right-radius: 0;
                    border-top-right-radius: 0;">
                    <input type="text" id="unit" readonly style="width: 35%; border-bottom-left-radius: 0;
                    border-top-left-radius: 0;">
                </div>
            </div>

            <div class="columns" id="customer">
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

