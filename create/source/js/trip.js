let iterator = 1;

function newRow() {

    const addRowNumber = document.querySelector(".new-row .container input");
    const numbering = document.querySelector(".columns#numbering");
    const date = document.querySelector(".columns#date");
    const originCity = document.querySelector(".columns#originCity");
    const destinationCity = document.querySelector(".columns#destinationCity");
    const type = document.querySelector(".columns#type");
    const mainModal = document.querySelector(".columns#mainModal");
    const travelersNumber = document.querySelector(".columns#travelersNumber");
    const roomsNumber = document.querySelector(".columns#roomsNumber");
    const accommodationDuration = document.querySelector(".columns#accommodationDuration");
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

        const originCityColumn = document.createElement('div');
        originCityColumn.classList.add("column");
        originCityColumn.innerHTML = `<input type="text">`
        originCity.appendChild(originCityColumn)

        const destinationCityColumn = document.createElement('div');
        destinationCityColumn.classList.add("column");
        destinationCityColumn.innerHTML = `<input type="text">`
        destinationCity.appendChild(destinationCityColumn)

        const typeColumn = document.createElement('div');
        typeColumn.classList.add("column");
        typeColumn.innerHTML = `<select>
            <option disabled selected>Selecione</option>
            <option value="1">Apenas ida</option>
            <option value="2">Ida e volta</option>
        </select>`
        type.appendChild(typeColumn)

        const mainModalColumn = document.createElement('div');
        mainModalColumn.classList.add("column");
        mainModalColumn.innerHTML = `<select>
            <option disabled selected>Selecione</option>
            <option value="1">Avião</option>
            <option value="2">Carro</option>
            <option value="3">Trem</option>
            <option value="4">Ônibus</option>
            <option value="5">Balsa</option>
        </select>`
        mainModal.appendChild(mainModalColumn)

        const travelersNumberColumn = document.createElement('div');
        travelersNumberColumn.classList.add("column");
        travelersNumberColumn.innerHTML = `<input type="text">`
        travelersNumber.appendChild(travelersNumberColumn)

        const roomsNumberColumn = document.createElement('div');
        roomsNumberColumn.classList.add("column");
        roomsNumberColumn.innerHTML = `<input type="text">`
        roomsNumber.appendChild(roomsNumberColumn)

        const accommodationDurationColumn = document.createElement('div');
        accommodationDurationColumn.classList.add("column");
        accommodationDurationColumn.innerHTML = `<input type="text">`
        accommodationDuration.appendChild(accommodationDurationColumn)

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