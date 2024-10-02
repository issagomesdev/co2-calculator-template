<link rel="stylesheet" href="source/styles.css">

<style>
</style>

<div class="form-container">
    <div class="header">
        <div class="infos">
            <h2>Medição de emissões de energia</h2>
            <p>Informe abaixo os dados relacionados ao consumo de energia da sua empresa por mês. </p>
        </div>
    </div>

    <div class="form-content">
        <div class="header">
            <div class="item" id="numbering" style="margin-right: 8em;"> </div>
            <div class="item" id="date" style="margin-right: 11em;"> 
                <p style="width: 4em;"> Data </p> 
            </div>
            <div class="item" id="consumption">
                <p style="width: 13em;"> Consumo da rede (kwh) </p> 
            </div>
            <div class="item" id="unit">
                <p style="width: 17em;"> Unidade da empresa (opcional) </p> 
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
                <div class="column" style="width: 16em;">
                    <input type="date">
                </div>
            </div>

            <div class="columns" id="consumption">
                <div class="column" style="width: 16em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="unit">
                <div class="column" style="width: 20em;">
                    <input type="text">
                </div>
            </div>

            <div class="columns" id="comments">
                <div class="column" style="width: 18em;">
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