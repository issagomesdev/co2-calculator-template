let iterator = 1;

function newRow() {

    const addRowNumber = document.querySelector(".new-row .container input");
    const numbering = document.querySelector(".columns#numbering");
    const date = document.querySelector(".columns#date");
    const starting = document.querySelector(".columns#starting");
    const destiny = document.querySelector(".columns#destiny");
    const totalWeight = document.querySelector(".columns#totalWeight");
    const productsVolume = document.querySelector(".columns#productsVolume");
    const vehiclesType = document.querySelector(".columns#vehiclesType");
    const vehiclesNumber = document.querySelector(".columns#vehiclesNumber");
    const fuelType = document.querySelector(".columns#fuelType");
    const refrigeratedCargo = document.querySelector(".columns#refrigeratedCargo");
    const type = document.querySelector(".columns#type");
    const reason = document.querySelector(".columns#reason");
    const payment = document.querySelector(".columns#payment");
    const customer = document.querySelector(".columns#customer");
    const supplier = document.querySelector(".columns#supplier");
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

        const startingColumn = document.createElement('div');
        startingColumn.classList.add("column");
        startingColumn.innerHTML = `<input type="text">`
        starting.appendChild(startingColumn)

        const destinyColumn = document.createElement('div');
        destinyColumn.classList.add("column");
        destinyColumn.innerHTML = `<input type="text">`
        destiny.appendChild(destinyColumn)

        const totalWeightColumn = document.createElement('div');
        totalWeightColumn.classList.add("column");
        totalWeightColumn.innerHTML = `<input type="text">`
        totalWeight.appendChild(totalWeightColumn)

        const productsVolumeColumn = document.createElement('div');
        productsVolumeColumn.classList.add("column");
        productsVolumeColumn.innerHTML = `<input type="text">`
        productsVolume.appendChild(productsVolumeColumn)

        const vehiclesTypeColumn = document.createElement('div');
        vehiclesTypeColumn.classList.add("column");
        vehiclesTypeColumn.innerHTML = `<select>
            <option disabled selected>Selecione</option>
            <option value="motocicleta">Motocicleta</option>
            <option value="V_PBT">Van - PBT</option>
            <option value="V_PBT_1.3">Van - PBT até 1,3 ton</option>
            <option value="V_PBT_1.3-1.7">Van - PBT 1,3 a 1,7 ton</option>
            <option value="V_PBT_1.7-3.5">Van - PBT 1,7 a 3,5 ton</option>
            <option value="C_PBT">Caminhão - PBT</option>
            <option value="CR_PBT">Caminhão rígido - PBT</option>
            <option value="CA_PBT">Caminhão articulado - PBT</option>
            <option value="CR_PBT_3.5-7.5">Caminhão rígido - PBT 3,5 a 7,5 ton</option>
            <option value="CR_PBT_7.5-17">Caminhão rígido - PBT 7,5 a 17 ton</option>
            <option value="CR_PBT_>17">Caminhão rígido - PBT acima de 17 ton</option>
            <option value="CA_PBT_3.5-33">Caminhão articulado - PBT 3,5 a 33 ton</option>
            <option value="CA_PBT_>33">Caminhão articulado - PBT acima de 33 ton</option>
        </select>`
        vehiclesType.appendChild(vehiclesTypeColumn)

        const vehiclesNumberColumn = document.createElement('div');
        vehiclesNumberColumn.classList.add("column");
        vehiclesNumberColumn.innerHTML = `<input type="text">`
        vehiclesNumber.appendChild(vehiclesNumberColumn)

        const fuelTypeColumn = document.createElement('div');
        fuelTypeColumn.classList.add("column");
        fuelTypeColumn.innerHTML = `<select>
            <option disabled selected>Selecione</option>
            <option value="gasolina">Gasolina</option>
            <option value="diesel">Diesel</option>
            <option value="etanol">Etanol</option>
            <option value="gnv">GNV</option>
        </select>`
        fuelType.appendChild(fuelTypeColumn)

        const refrigeratedCargoColumn = document.createElement('div');
        refrigeratedCargoColumn.classList.add("column");
        refrigeratedCargoColumn.innerHTML = `<select>
            <option disabled selected>Selecione</option>
            <option value="true">Sim</option>
            <option value="false">Não</option>
        </select>`
        refrigeratedCargo.appendChild(refrigeratedCargoColumn)

        const typeColumn = document.createElement('div');
        typeColumn.classList.add("column");
        typeColumn.innerHTML = `<select>
            <option disabled selected>Selecione</option>
            <option value="own">Próprio</option>
            <option value="out">Terceirizado</option>
        </select>`
        type.appendChild(typeColumn)

        const reasonColumn = document.createElement('div');
        reasonColumn.classList.add("column");
        reasonColumn.innerHTML = `<select>
            <option disabled selected>Selecione</option>
            <option value="delivery">Entrega para cliente</option>
            <option value="transport">Transporte entre unidades da empresa</option>
            <option value="receipt">Recebimento de compras</option>
            <option value="none">Não sei / Não se aplica</option>
        </select>`
        reason.appendChild(reasonColumn)

        const paymentColumn = document.createElement('div');
        paymentColumn.classList.add("column");
        paymentColumn.innerHTML = `<select>
            <option disabled selected>Selecione</option>
            <option value="cif">CIF</option>
            <option value="fob">FOB</option>
            <option value="none">Não sei / Não se aplica</option>
        </select>`
        payment.appendChild(paymentColumn)

        const customerColumn = document.createElement('div');
        customerColumn.classList.add("column");
        customerColumn.innerHTML = `<input type="text">`
        customer.appendChild(customerColumn)

        const supplierColumn = document.createElement('div');
        supplierColumn.classList.add("column");
        supplierColumn.innerHTML = `<input type="text">`
        supplier.appendChild(supplierColumn)

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

function shippingType(value) {
    
}

function mainModal(value) {
    
}

function hiringModel(value) {
    
}

function distanceCalculation(value) {
    
}