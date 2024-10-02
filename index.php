<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shared/global.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>CO2 Calculator</title>
</head>
<body>
    
    <div class="content">

        <?php include 'shared/nav.php'; ?>

        <div class="panel-container">
            <div class="header">
                <div class="infos">
                    <h2>Painel de emissões de carbono</h3>
                    <p>Acompanhe quanto a sua empresa emitiu por mês para cada fonte de emissão (tonCO2e)</p>
                </div>

                <div class="filters">
                    <div class="by-year" onclick="showOptions()">
                        <iconify-icon icon="bx:calendar"></iconify-icon>
                        <p>2024</p>
                    </div>

                    <div class="options hidden">
                        <div class="item"> <p> 2023 </p> </div>
                        <div class="item"> <p> 2022 </p> </div>
                        <div class="item"> <p> 2021 </p> </div>
                        <div class="item"> <p> 2020 </p> </div>
                    </div>
                </div>
            </div>

            <div class="panel-content">
                <div class="header">
                    <div class="items" id="source">
                        <div class="item">
                            <p>Fonte de emissão</p>
                        </div>
                    </div>
                    <div class="items" id="months">
                        <div class="item">
                            <p>Jan</p>
                        </div>
                        <div class="item">
                            <p>Fev</p>
                        </div>
                        <div class="item">
                            <p>Mar</p>
                        </div>
                        <div class="item">
                            <p>Abr</p>
                        </div>
                        <div class="item">
                            <p>Mai</p>
                        </div>
                        <div class="item">
                            <p>Jun</p>
                        </div>
                        <div class="item">
                            <p>Jul</p>
                        </div>
                        <div class="item">
                            <p>Ago</p>
                        </div>
                        <div class="item">
                            <p>Set</p>
                        </div>
                        <div class="item">
                            <p>Out</p>
                        </div>
                        <div class="item">
                            <p>Nov</p>
                        </div>
                        <div class="item">
                            <p>Dez</p>
                        </div>
                    </div>
                    <div class="items" id="total">
                        <div class="item">
                            <p>Total</p>
                        </div>
                    </div>
                    <div class="items" id="actions">
                        <div class="item">
                            <p>Ações</p>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="columns" id="source">
                        <div class="column">
                            <iconify-icon icon="bi:fuel-pump" width="45"></iconify-icon>
                            <p>Combustível</p>
                        </div>
                        <div class="column">
                            <iconify-icon icon="mdi:bus-sign" width="45"></iconify-icon>
                            <p>Deslocamento Casa-Trabalho</p>
                        </div>
                        <div class="column">
                            <iconify-icon icon="mdi:smoke" width="45"></iconify-icon>
                            <p>Emissões Fugitivas</p>
                        </div>
                        <div class="column">
                            <iconify-icon icon="fluent:database-lightning-20-filled" width="45"></iconify-icon>
                            <p>Energia</p>
                        </div>
                        <div class="column">
                            <iconify-icon icon="mdi:truck-fast-outline" width="45"></iconify-icon>
                            <p>Frete</p>
                        </div>
                        <div class="column">
                            <iconify-icon icon="clarity:airplane-solid" width="45"></iconify-icon>
                            <p>Viagens</p>
                        </div>
                    </div>
                    <div class="columns" id="values">

                        <!--  -->

                        <div class="columns-values">
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="columns-values">
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                        </div>

                        <div class="columns-values">
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                        </div>

                        <div class="columns-values">
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                        </div>

                        <div class="columns-values">
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                        </div>

                        <div class="columns-values">
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                        </div>

                        <div class="columns-values">
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                        </div>

                        <div class="columns-values">
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                        </div>

                        <div class="columns-values">
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                        </div>

                        <div class="columns-values">
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                        </div>

                        <div class="columns-values">
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                        </div>

                        <div class="columns-values">
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                        </div>

                        <!--  -->

                    </div>
                    <div class="columns" id="total">
                        <div class="columns-values">
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="values">
                                    <p> 10 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="columns" id="actions">
                            <div class="actions hidden" onclick="showActions(this)">
                                <div class="action">
                                    <iconify-icon icon="heroicons:ellipsis-vertical-16-solid" width="20"></iconify-icon>
                                </div>

                                <div class="container">
                                    <div class="option">
                                        <iconify-icon icon="ant-design:fund-view-outlined" width="20"></iconify-icon>
                                        <a href="/view/?source=fuel">Ver emissões</a>
                                    </div>
                                    <div class="option">
                                        <iconify-icon icon="fluent:gauge-add-20-filled" width="20"></iconify-icon>
                                        <a href="/create/?source=fuel">Inserir medição</a>
                                    </div>
                                </div>
                            </div>
                            <div class="actions hidden" onclick="showActions(this)">
                                <div class="action">
                                    <iconify-icon icon="heroicons:ellipsis-vertical-16-solid" width="20"></iconify-icon>
                                </div>

                                <div class="container">
                                    <div class="option">
                                        <iconify-icon icon="ant-design:fund-view-outlined" width="20"></iconify-icon>
                                        <a href="/view/?source=commuting">Ver emissões</a>
                                    </div>
                                    <div class="option">
                                        <iconify-icon icon="fluent:gauge-add-20-filled" width="20"></iconify-icon>
                                        <a href="/create/?source=commuting">Inserir medição</a>
                                    </div>
                                </div>
                            </div>
                            <div class="actions hidden" onclick="showActions(this)">
                                <div class="action">
                                    <iconify-icon icon="heroicons:ellipsis-vertical-16-solid" width="20"></iconify-icon>
                                </div>

                                <div class="container">
                                    <div class="option">
                                        <iconify-icon icon="ant-design:fund-view-outlined" width="20"></iconify-icon>
                                        <a href="/view/?source=emissions">Ver emissões</a>
                                    </div>
                                    <div class="option">
                                        <iconify-icon icon="fluent:gauge-add-20-filled" width="20"></iconify-icon>
                                        <a href="/create/?source=emissions">Inserir medição</a>
                                    </div>
                                </div>
                            </div>
                            <div class="actions hidden" onclick="showActions(this)">
                                <div class="action">
                                    <iconify-icon icon="heroicons:ellipsis-vertical-16-solid" width="20"></iconify-icon>
                                </div>

                                <div class="container">
                                    <div class="option">
                                        <iconify-icon icon="ant-design:fund-view-outlined" width="20"></iconify-icon>
                                        <a href="/view/?source=energy">Ver emissões</a>
                                    </div>
                                    <div class="option">
                                        <iconify-icon icon="fluent:gauge-add-20-filled" width="20"></iconify-icon>
                                        <a href="/create/?source=energy">Inserir medição</a>
                                    </div>
                                </div>
                            </div>
                            <div class="actions hidden" onclick="showActions(this)">
                                <div class="action">
                                    <iconify-icon icon="heroicons:ellipsis-vertical-16-solid" width="20"></iconify-icon>
                                </div>

                                <div class="container">
                                    <div class="option">
                                        <iconify-icon icon="ant-design:fund-view-outlined" width="20"></iconify-icon>
                                        <a href="/view/?source=shipping">Ver emissões</a>
                                    </div>
                                    <div class="option">
                                        <iconify-icon icon="fluent:gauge-add-20-filled" width="20"></iconify-icon>
                                        <a href="/create/?source=shipping">Inserir medição</a>
                                    </div>
                                </div>
                            </div>
                            <div class="actions hidden" onclick="showActions(this)">
                                <div class="action">
                                    <iconify-icon icon="heroicons:ellipsis-vertical-16-solid" width="20"></iconify-icon>
                                </div>

                                <div class="container">
                                    <div class="option">
                                        <iconify-icon icon="ant-design:fund-view-outlined" width="20"></iconify-icon>
                                        <a href="/view/?source=trip">Ver emissões</a>
                                    </div>
                                    <div class="option">
                                        <iconify-icon icon="fluent:gauge-add-20-filled" width="20"></iconify-icon>
                                        <a href="/create/?source=trip">Inserir medição</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</body>
</html>

<script>

const actions = document.querySelectorAll('.actions');
const filterOption = document.querySelector('.header .filters .options');

function showActions(item) {
    if(item.classList.contains('hidden')){
        actions.forEach(action => {
            action.classList.remove('show');
            action.classList.add('hidden');
        });
        item.classList.remove('hidden');
        item.classList.add('show');
    } else if(item.classList.contains('show')) {
        actions.forEach(action => {
            action.classList.remove('show');
            action.classList.add('hidden');
        });
    }
}

function showOptions() {
    if(filterOption.classList.contains('hidden')){
        filterOption.classList.remove('hidden');
        filterOption.classList.add('show');
    } else {
        filterOption.classList.remove('show');
        filterOption.classList.add('hidden');
    }
}

</script>
