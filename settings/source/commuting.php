<link rel="stylesheet" href="source/styles.css">

<div class="form-container">
    <div class="header">
        <div class="infos">
            <h2>Deslocamento casa-trabalho</h2>
        </div>
    </div>

    <div class="form-content">
        <div class="questions">
            <div class="question">
                <p>A sua empresa tem os dados de quantos dias cada funcionário trabalhou por mês?</p>
                <div class="options">
                    <div class="option">
                        <input type="radio" id="1" name="has_employee_work_data">
                        <label for="1">Sim</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="2" name="has_employee_work_data">
                        <label for="2">Não</label>
                    </div>
                </div>
            </div>
            <div class="question">
                <p>A sua empresa sabe qual modal de transporte os funcionários usam para ir ao trabalho?</p>
                <div class="options">
                    <div class="option">
                        <input type="radio" id="1" name="mode_of_transport_for_employees">
                        <label for="1">Sim</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="2" name="mode_of_transport_for_employees">
                        <label for="2">Apenas para alguns funcionários</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="3" name="mode_of_transport_for_employees">
                        <label for="3">Não</label>
                    </div>
                </div>
                <p class="observation">Exemplo: carro próprio do funcionário, van da empresa, transporte público, etc.</p>
            </div>
            <div class="question">
                <p>A sua empresa oferece transporte para os funcionários?</p>
                <div class="options">
                    <div class="option">
                        <input type="radio" id="1" name="offers_transportation">
                        <label for="1">Sim</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="2" name="offers_transportation">
                        <label for="2">Não</label>
                    </div>
                </div>
                <p class="observation">Exemplo: serviço de van própria ou contratada pela empresa para transporte dos funcionários</p>
            </div>
            <div class="question">
                <p>Nesse caso, quem é responsável pela compra de combustível desses veículos?</p>
                <div class="options">
                    <div class="option">
                        <input type="radio" id="1" name="responsible_for_purchasing_fuel">
                        <label for="1">A minha empresa compra o combustível e tem o controle do quanto consome</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="2" name="responsible_for_purchasing_fuel">
                        <label for="2">A minha empresa compra o combustível, mas não tem controle do quanto consome</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="3" name="responsible_for_purchasing_fuel">
                        <label for="3">O fornecedor que realiza transporte é quem compra o combustível</label>
                    </div>
                    <div class="option">
                        <input type="radio" id="4" name="responsible_for_purchasing_fuel">
                        <label for="4">Não sei / não se aplica</label>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="actions">
            <button> Salvar </button>
        </div>
    </div>
    
</div>
