let iterator = 1;

function newRow() {

    const addRowNumber = document.querySelector(".new-row .container input");
    const numbering = document.querySelector(".columns#numbering");
    const date = document.querySelector(".columns#date");
    const equipment = document.querySelector(".columns#equipment");
    const gas = document.querySelector(".columns#gas");
    const equipmentCapacity = document.querySelector(".columns#equipmentCapacity");
    const amount = document.querySelector(".columns#amount");
    const purchasedThisYear = document.querySelector(".columns#purchasedThisYear");
    const purchasedloaded = document.querySelector(".columns#purchasedloaded");
    const purchaseDate = document.querySelector(".columns#purchaseDate");
    const discardedThisYear = document.querySelector(".columns#discardedThisYear");
    const discardedDate = document.querySelector(".columns#discardedDate");
    const comments = document.querySelector(".columns#comments");

    for (let index = 1; index <= addRowNumber.value; index++) {

        iterator++

        const numberingColumn = document.createElement('div');
        numberingColumn.classList.add("column");
        numberingColumn.innerHTML = `<p>${iterator}</p>`
        numbering.appendChild(numberingColumn)

        const dateColumn = document.createElement('div');
        dateColumn.classList.add("column");
        dateColumn.innerHTML = `<input type="date">`
        date.appendChild(dateColumn)

        const equipmentColumn = document.createElement('div');
        equipmentColumn.classList.add("column");
        equipmentColumn.innerHTML = `<select>
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
        </select>`
        equipment.appendChild(equipmentColumn)

        const gasColumn = document.createElement('div');
        gasColumn.classList.add("column");
        gasColumn.innerHTML = `<select>
            <option disabled selected>Selecione</option>
            <option value="CO2">Gás carbônico (CO2)</option>
            <option value="CH4">Metano (CH4)</option>
            <option value="N2O">Óxido nitroso (N2O)</option>
        </select>`
        gas.appendChild(gasColumn)

        const equipmentCapacityColumn = document.createElement('div');
        equipmentCapacityColumn.classList.add("column");
        equipmentCapacityColumn.innerHTML = `<input type="text">`
        equipmentCapacity.appendChild(equipmentCapacityColumn)

        const amountColumn = document.createElement('div');
        amountColumn.classList.add("column");
        amountColumn.innerHTML = `<input type="text" oninput="formatValue(this)" style="width: 65%; border-bottom-right-radius: 0; border-top-right-radius: 0;">
        <input type="text" id="unit" readonly style="width: 35%; border-bottom-left-radius: 0; border-top-left-radius: 0;">`
        amount.appendChild(amountColumn)

        const purchasedThisYearColumn = document.createElement('div');
        purchasedThisYearColumn.classList.add("column");
        purchasedThisYearColumn.innerHTML = `<select>
            <option disabled selected>Selecione</option>
            <option value="true">Sim</option>
            <option value="false">Não</option>
        </select>`
        purchasedThisYear.appendChild(purchasedThisYearColumn)

        const purchasedloadedColumn = document.createElement('div');
        purchasedloadedColumn.classList.add("column");
        purchasedloadedColumn.innerHTML = `<select>
            <option disabled selected>Selecione</option>
            <option value="true">Sim</option>
            <option value="false">Não</option>
        </select>`
        purchasedloaded.appendChild(purchasedloadedColumn)

        const purchaseDateColumn = document.createElement('div');
        purchaseDateColumn.classList.add("column");
        purchaseDateColumn.innerHTML = `<input type="date">`
        purchaseDate.appendChild(purchaseDateColumn)

        const discardedThisYearColumn = document.createElement('div');
        discardedThisYearColumn.classList.add("column");
        discardedThisYearColumn.innerHTML = `<select>
            <option disabled selected>Selecione</option>
            <option value="true">Sim</option>
            <option value="false">Não</option>
        </select>`
        discardedThisYear.appendChild(discardedThisYearColumn)

        const discardedDateColumn = document.createElement('div');
        discardedDateColumn.classList.add("column");
        discardedDateColumn.innerHTML = `<input type="date">`
        discardedDate.appendChild(discardedDateColumn)

        const commentsColumn = document.createElement('div');
        commentsColumn.classList.add("column");
        commentsColumn.innerHTML = `<input type="text">`

        comments.appendChild(commentsColumn)
    } 
}

function formatValue(item) {
    item.value = item.value.replace(/[^0-9.]/g, '');
    
    if (item.value.indexOf('.') !== item.value.lastIndexOf('.')) {
        item.value = item.value.slice(0, -1);
    }
}