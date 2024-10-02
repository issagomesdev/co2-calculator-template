<?php

$data = [
    (object) ["id" => 1, "created_at" => "04/02/2024", "source" => "fuel", "user" => "exemple@email.com", "measurements" => "xxx", "erros" => "xxx", "status" => "sucesso"],
    (object) ["id" => 1, "created_at" => "04/02/2024", "source" => "fuel", "user" => "exemple@email.com", "measurements" => "xxx", "erros" => "xxx", "status" => "erro"]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../shared/global.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>CO2 Calculator - Fila de cálculos </title>
</head>
<body>
    
    <div class="content">
        <?php include '../shared/nav.php'; ?>

        <div class="panel-container">
            <div class="form">
                <div class="form-container">
                    <div class="header">
                        <div class="infos">
                            <h2> Fila de cálculos </h2>
                            <p>Acompanhe o status das medições de alto volume realizadas na plataforma.</p>
                        </div>
                    </div>

                    <div class="form-content">
                        <div class="header">
                            <div class="item" id="id"> 
                                <p style="width: 10em; margin-left: 1em"> ID </p> 
                                <input placeholder="pesquisar..." type="text">
                            </div>
                            <div class="item" id="created_at">
                                <p style="width: 12em;"> Criado em </p> 
                                <input type="date">
                            </div>
                            <div class="item" id="source">
                                <p style="width: 12em;"> Fonte </p>  
                                <input placeholder="pesquisar..." type="text">
                            </div>
                            <div class="item" id="user">
                                <p style="width: 15em;"> Usuário </p>  
                                <input placeholder="pesquisar..." type="text">
                            </div>
                            <div class="item" id="measurements">
                                <p style="width: 15em;"> Medições </p> 
                                <input placeholder="pesquisar..." type="text">
                            </div>
                            <div class="item" id="erros">
                                <p style="width: 12em;"> Erros </p>  
                                <input placeholder="pesquisar..." type="text">
                            </div>
                            <div class="item" id="status">
                                <p style="width: 14em;"> Status </p>  
                                <select>
                                    <option value="all">Todos</option>
                                    <option value="true">sucesso</option>
                                    <option value="false">erro</option>
                                </select>
                            </div>
                            <div class="item" id="actions">
                                <p style="width: 7em;"> Ações </p> 
                            </div>
                        </div>
                        <div class="content">

                            <div class="columns" id="id">
                                <?php foreach ($data as $column): ?>
                                <div class="column" style="width: 13em; margin-left: 1em">
                                    <p><?= $column->id ?></p>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="columns" id="created_at">
                                <?php foreach ($data as $column): ?>
                                <div class="column" style="width: 15em;">
                                    <p><?= $column->created_at ?></p>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="columns" id="source">
                                <?php foreach ($data as $column): ?>
                                <div class="column" style="width: 15em;">
                                    <p><?= $column->source ?></p>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="columns" id="user">
                                <?php foreach ($data as $column): ?>
                                <div class="column" style="width: 19em;">
                                    <p><?= $column->user ?></p>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="columns" id="measurements">
                                <?php foreach ($data as $column): ?>
                                <div class="column" style="width: 17em;">
                                    <p><?= $column->measurements ?></p>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="columns" id="erros">
                                <?php foreach ($data as $column): ?>
                                <div class="column" style="width: 15em;">
                                    <p><?= $column->erros ?></p>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="columns" id="status">
                                <?php foreach ($data as $column): ?>
                                <div class="column" style="width: 15em;">
                                    <p><?= $column->status ?></p>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="columns" id="actions">
                                <?php foreach ($data as $column): ?>
                                    <div class="actions hidden" onclick="showActions(this)" style="width: 8em;">
                                        <div class="action">
                                            <iconify-icon icon="heroicons:ellipsis-vertical-16-solid" width="20"></iconify-icon>
                                        </div>

                                        <div class="container">
                                            <div class="option">
                                                <a href="">Opção 1</a>
                                            </div>
                                            <div class="option">
                                                <a href="">Opção 2</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>

<script>

const actions = document.querySelectorAll('.actions');

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

</script>


</body>
</html>