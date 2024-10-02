let iterator = 1;

function newRow() {

    const addRowNumber = document.querySelector(".new-row .container input");
    const numbering = document.querySelector(".columns#numbering");
    const date = document.querySelector(".columns#date");
    const equipment = document.querySelector(".columns#equipment");
    const fuel = document.querySelector(".columns#fuel");
    const amount = document.querySelector(".columns#amount");
    const customer = document.querySelector(".columns#customer");
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
            <option value="EE">Equipamento estacionário</option>
            <option value="Veículo">Veículo</option>
        </select>`
        equipment.appendChild(equipmentColumn)

        const fuelColumn = document.createElement('div');
        fuelColumn.classList.add("column");
        fuelColumn.innerHTML = `<select onchange="changeFuel(this.value, ${index})">
            <option disabled selected>Selecione</option>
            <option value="Gasolina">Gasolina</option>
            <option value="Diesel">Diesel</option>
            <option value="Etanol">Etanol</option>
            <option value="GNV">GNV (Gás Natural Veicular)</option>
            <option value="CLP">CLP (Gás Liquefeito de Petróleo)</option>
            <option value="GNS">Gás Natural Seco</option>
            <option value="OC">Óleo Combustível</option>
        </select>`
        fuel.appendChild(fuelColumn)

        const amountColumn = document.createElement('div');
        amountColumn.classList.add("column");
        amountColumn.innerHTML = `<input type="text" oninput="formatValue(this)" style="width: 65%; border-bottom-right-radius: 0; border-top-right-radius: 0;">
        <input type="text" id="unit" readonly style="width: 35%; border-bottom-left-radius: 0; border-top-left-radius: 0;">`
        amount.appendChild(amountColumn)

        const customerColumn = document.createElement('div');
        customerColumn.classList.add("column");
        customerColumn.innerHTML = `<input type="text">`
        customer.appendChild(customerColumn)

        const commentsColumn = document.createElement('div');
        commentsColumn.classList.add("column");
        commentsColumn.innerHTML = `<input type="text">`
        comments.appendChild(commentsColumn)
    } 
}

function changeFuel(value, index) {
    const fuelUnit = document.querySelectorAll(".columns#amount .column input#unit");

     if(value == "Gasolina" || value == "Diesel" || value == "Etanol" || value == "OC"){
        fuelUnit[index].value = "litros";
     } else if(value == "GNV" || value == "GNS"){
        fuelUnit[index].value = "m³";
     } else if(value == "CLP"){
        fuelUnit[index].value = "kg";
     }
}

function formatValue(item) {
    item.value = item.value.replace(/[^0-9.]/g, '');
    
    if (item.value.indexOf('.') !== item.value.lastIndexOf('.')) {
        item.value = item.value.slice(0, -1);
    }
}