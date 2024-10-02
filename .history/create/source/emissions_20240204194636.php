<link rel="stylesheet" href="source/styles.css">

<div class="form-container">
    <div class="header">
        <div class="infos">
            <h2>Medição de emissões fugitivas</h2>
            <p>As emissões fugitivas resultam da liberação direta para a atmosfera de gases de efeito estufa provenientes de equipamentos, como refrigeradores, ar condicionados, extintores de incêndio e sistemas de armazenamento de gases industriais.</p>
        </div>
    </div>

    <div class="form-content">
        <div class="header">
            <div class="item" id="numbering" style="margin-right: 8em;"> </div>
            <div class="item" id="date"> 
                <p style="width: 4em;"> Data </p> 
            </div>
            <div class="item" id="equipment">
                <p style="width: 10em;"> Categoria do equipamento </p> 
            </div>
            <div class="item" id="gas">
                <p style="width: 8em"> Tipo de gás </p> 
            </div>
            <div class="item" id="equipmentCapacity">
                <p style="width: 12em;"> Capacidade de gás de cada equipamento (kg) </p> 
            </div>
            <div class="item" id="amount">
                <p style="width: 12em;"> Quantidade de equipamentos </p> 
            </div>
            <div class="item" id="purchasedThisYear">
                <p style="width: 13em;"> Equipamento comprado esse ano? </p> 
            </div>
            <div class="item" id="purchasedloaded">
                <p style="width: 13em;"> Equipamento comprado carregado? </p> 
            </div>
            <div class="item" id="purchaseDate">
                <p style="width: 9em;"> Data da compra </p> 
            </div>
            <div class="item" id="discardedThisYear">
                <p style="width: 13em;"> Equipamento descartado esse ano? </p> 
            </div>
            <div class="item" id="discardedDate">
                <p style="width: 10em;"> Data do descarte </p> 
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
                <div class="column" style="width: 12em;">
                    <select>
                        <option disabled selected>Selecione</option>
                        <option value="RRE">Refrigerador residencial / escritório</option>
                        <option value="RCI">Refrigerador comercial individual</option>
                        <option value="RCMG">Refrigerador comercial médio / grande</option>
                        <option value="VTR">Veículo de transporte refrigerado</option>
                        <option value="RI">Refrigeração industrial (processos e armazenagem)</option>
                        <option value="chiller">Chiller (Ar condicionado central à agua)</option>
                        <option value="ACRC">Ar condicionado residencial / comercial</option>
                        <option value="ACC">Ar condicionado de carros</option>
                        <option value="ACCM">Ar condicionado de caminhões</option>
                        <option value="EIC02">Extintor de incêndio de CO2</option>
                        <option value="EIABC">Extintor de incêndio ABC</option>
                    </select>
                </div>
            </div>

            <div class="columns" id="gas">
                <div class="column" style="width: 11em;">
                    <select>
                        <option disabled selected>Selecione</option>
                        <option value="CO2">Gás carbônico (CO2)</option>
                        <option value="CH4">Metano (CH4)</option>
                        <option value="N2O">Óxido nitroso (N2O)</option>
                    </select>
                </div>
            </div>

            <div class="columns" id="equipmentCapacity">
                <div class="column" style="width: 15em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="amount">
                <div class="column" style="width: 15em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="purchasedThisYear">
                <div class="column" style="width: 16em;">
                    <select>
                        <option disabled selected>Selecione</option>
                        <option value="true">Sim</option>
                        <option value="false">Não</option>
                    </select>
                </div>
            </div>

            <div class="columns" id="purchasedloaded">
                <div class="column" style="width: 16em;">
                    <select>
                        <option disabled selected>Selecione</option>
                        <option value="true">Sim</option>
                        <option value="false">Não</option>
                    </select>
                </div>
            </div>

            <div class="columns" id="purchaseDate">
                <div class="column" style="width: 12em;">
                    <input type="date">
                </div>
            </div>

            <div class="columns" id="discardedThisYear">
                <div class="column" style="width: 16em;">
                    <select>
                        <option disabled selected>Selecione</option>
                        <option value="true">Sim</option>
                        <option value="false">Não</option>
                    </select>
                </div>
            </div>

            <div class="columns" id="discardedDate">
                <div class="column" style="width: 12em;">
                    <input type="date">
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