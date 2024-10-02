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
    <title>CO2 Calculator - Inserir Medição</title>
</head>
<body>
    
    <div class="content">
        <?php include '../shared/nav.php'; ?>

        <div class="panel-container">
            <div class="select-emissions-source">
                <div class="container">
                    <div class="instructions">
                        <p>Qual é a fonte de suas emissões?</p>
                    </div>
                    <div id="selection"> 
                        <select onchange="goMeasurement(this.value)">
                            <option disabled selected>Selecione uma opção</option>
                            <option value="fuel">Combustível</option>
                            <option value="commuting">Deslocamento Casa-Trabalho</option>
                            <option value="emissions">Emissões Fugitivas</option>
                            <option value="energy">Energia</option>
                            <option value="shipping">Frete</option>
                            <option value="trip">Viagens</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form">

            </div>
        </div>
    </div>

</body>
</html>

<script>

    const selection = document.querySelector("#selection select");
    const url = new URL(window.location.href);
    const params = new URLSearchParams(url.search);
    const source = params.get('source');

    if (source !== null) {

        addMeasurement(source);
        selection.value = source;
    }

    async function addMeasurement(value) {
        const form = document.querySelector('.form');
        const script = document.createElement('script');
        script.src = `source/js/${value}.js`;
        document.body.appendChild(script);
        const res = await fetch(`source/${value}.php`);
        const file = await res.text();
        form.innerHTML = file;
    }
    
    async function goMeasurement(value) {
        const goUrl = new URL(window.location.href);
        goUrl.searchParams.set('source', value);
        window.location.href = goUrl.toString();
    }

</script>
