let iterator = 1;

function newRow() {

    const addRowNumber = document.querySelector(".new-row .container input");
    const numbering = document.querySelector(".columns#numbering");
    const date = document.querySelector(".columns#date");
    const consumption = document.querySelector(".columns#consumption");
    const unit = document.querySelector(".columns#unit");
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

        const consumptionColumn = document.createElement('div');
        consumptionColumn.classList.add("column");
        consumptionColumn.innerHTML = `<input type="text">`
        consumption.appendChild(consumptionColumn)

        const unitColumn = document.createElement('div');
        unitColumn.classList.add("column");
        unitColumn.innerHTML = `<input type="text">`
        unit.appendChild(unitColumn)

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