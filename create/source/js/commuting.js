let iterator = 1;

function newRow() {

    const addRowNumber = document.querySelector(".new-row .container input");
    const numbering = document.querySelector(".columns#numbering");
    const date = document.querySelector(".columns#date");
    const employeeID = document.querySelector(".columns#employeeID");
    const employeeAddress = document.querySelector(".columns#employeeAddress");
    const employeeZipCode = document.querySelector(".columns#employeeZipCode");
    const workplaceAddress = document.querySelector(".columns#workplaceAddress");
    const workLocationZipCode = document.querySelector(".columns#workLocationZipCode");
    const admissionDate = document.querySelector(".columns#admissionDate");
    const terminationDate = document.querySelector(".columns#terminationDate");
    const timeAtHomeOffice = document.querySelector(".columns#timeAtHomeOffice");
    const frequencyUseModalsKnown = document.querySelector(".columns#frequencyUseModalsKnown");
    const personalCarGasoline = document.querySelector(".columns#personalCar-gasoline");
    const personalCarEthanol = document.querySelector(".columns#personalCar-ethanol");
    const personalCarGnv = document.querySelector(".columns#personalCar-gnv");
    const personalCarUnknownFuel = document.querySelector(".columns#personalCar-unknownFuel");
    const personalMotorcycleGasoline = document.querySelector(".columns#personalMotorcycle-gasoline");
    const personalMotorcycleEthanol = document.querySelector(".columns#personalMotorcycle-ethanol");
    const personalMotorcycleUnknownFuel = document.querySelector(".columns#personalMotorcycle-unknownFuel");
    const taxiOrApp = document.querySelector(".columns#taxiOrApp");
    const bikeOrWalk = document.querySelector(".columns#bikeOrWalk");
    const bus = document.querySelector(".columns#bus");
    const trainOrSubway = document.querySelector(".columns#trainOrSubway");
    const ferry = document.querySelector(".columns#ferry");
    const carpoolWithAnotherEmployee = document.querySelector(".columns#carpoolWithAnotherEmployee");
    const companyTransport = document.querySelector(".columns#companyTransport");
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

        const employeeIDColumn = document.createElement('div');
        employeeIDColumn.classList.add("column");
        employeeIDColumn.innerHTML = `<input type="text">`
        employeeID.appendChild(employeeIDColumn)

        const employeeAddressColumn = document.createElement('div');
        employeeAddressColumn.classList.add("column");
        employeeAddressColumn.innerHTML = `<input type="text">`
        employeeAddress.appendChild(employeeAddressColumn)

        const employeeZipCodeColumn = document.createElement('div');
        employeeZipCodeColumn.classList.add("column");
        employeeZipCodeColumn.innerHTML = `<input type="text">`
        employeeZipCode.appendChild(employeeZipCodeColumn)

        const workplaceAddressColumn = document.createElement('div');
        workplaceAddressColumn.classList.add("column");
        workplaceAddressColumn.innerHTML = `<input type="text">`
        workplaceAddress.appendChild(workplaceAddressColumn)

        const workLocationZipCodeColumn = document.createElement('div');
        workLocationZipCodeColumn.classList.add("column");
        workLocationZipCodeColumn.innerHTML = `<input type="text">`
        workLocationZipCode.appendChild(workLocationZipCodeColumn)

        const admissionDateColumn = document.createElement('div');
        admissionDateColumn.classList.add("column");
        admissionDateColumn.innerHTML = `<input type="date">`
        admissionDate.appendChild(admissionDateColumn)

        const terminationDateColumn = document.createElement('div');
        terminationDateColumn.classList.add("column");
        terminationDateColumn.innerHTML = `<input type="date">`
        terminationDate.appendChild(terminationDateColumn)

        const timeAtHomeOfficeColumn = document.createElement('div');
        timeAtHomeOfficeColumn.classList.add("column");
        timeAtHomeOfficeColumn.innerHTML = `<input type="text">`
        timeAtHomeOffice.appendChild(timeAtHomeOfficeColumn)

        const frequencyUseModalsKnownColumn = document.createElement('div');
        frequencyUseModalsKnownColumn.classList.add("column");
        frequencyUseModalsKnownColumn.innerHTML = `<select>
            <option disabled selected>Selecione</option>
            <option value="true">Sim</option>
            <option value="false">Não</option>
        </select>`
        frequencyUseModalsKnown.appendChild(frequencyUseModalsKnownColumn)

        const personalCarGasolineColumn = document.createElement('div');
        personalCarGasolineColumn.classList.add("column");
        personalCarGasolineColumn.innerHTML = `<input type="text">`
        personalCarGasoline.appendChild(personalCarGasolineColumn)

        const personalCarEthanolColumn = document.createElement('div');
        personalCarEthanolColumn.classList.add("column");
        personalCarEthanolColumn.innerHTML = `<input type="text">`
        personalCarEthanol.appendChild(personalCarEthanolColumn)

        const personalCarGnvColumn = document.createElement('div');
        personalCarGnvColumn.classList.add("column");
        personalCarGnvColumn.innerHTML = `<input type="text">`
        personalCarGnv.appendChild(personalCarGnvColumn)

        const personalCarUnknownFuelColumn = document.createElement('div');
        personalCarUnknownFuelColumn.classList.add("column");
        personalCarUnknownFuelColumn.innerHTML = `<input type="text">`
        personalCarUnknownFuel.appendChild(personalCarUnknownFuelColumn)

        const personalMotorcycleGasolineColumn = document.createElement('div');
        personalMotorcycleGasolineColumn.classList.add("column");
        personalMotorcycleGasolineColumn.innerHTML = `<input type="text">`
        personalMotorcycleGasoline.appendChild(personalMotorcycleGasolineColumn)

        const personalMotorcycleEthanolColumn = document.createElement('div');
        personalMotorcycleEthanolColumn.classList.add("column");
        personalMotorcycleEthanolColumn.innerHTML = `<input type="text">`
        personalMotorcycleEthanol.appendChild(personalMotorcycleEthanolColumn)

        const personalMotorcycleUnknownFuelColumn = document.createElement('div');
        personalMotorcycleUnknownFuelColumn.classList.add("column");
        personalMotorcycleUnknownFuelColumn.innerHTML = `<input type="text">`
        personalMotorcycleUnknownFuel.appendChild(personalMotorcycleUnknownFuelColumn)

        const taxiOrAppColumn = document.createElement('div');
        taxiOrAppColumn.classList.add("column");
        taxiOrAppColumn.innerHTML = `<input type="text">`
        taxiOrApp.appendChild(taxiOrAppColumn)

        const bikeOrWalkColumn = document.createElement('div');
        bikeOrWalkColumn.classList.add("column");
        bikeOrWalkColumn.innerHTML = `<input type="text">`
        bikeOrWalk.appendChild(bikeOrWalkColumn)

        const busColumn = document.createElement('div');
        busColumn.classList.add("column");
        busColumn.innerHTML = `<input type="text">`
        bus.appendChild(busColumn)

        const trainOrSubwayColumn = document.createElement('div');
        trainOrSubwayColumn.classList.add("column");
        trainOrSubwayColumn.innerHTML = `<input type="text">`
        trainOrSubway.appendChild(trainOrSubwayColumn)

        const ferryColumn = document.createElement('div');
        ferryColumn.classList.add("column");
        ferryColumn.innerHTML = `<input type="text">`
        ferry.appendChild(ferryColumn)

        const carpoolWithAnotherEmployeeColumn = document.createElement('div');
        carpoolWithAnotherEmployeeColumn.classList.add("column");
        carpoolWithAnotherEmployeeColumn.innerHTML = `<input type="text">`
        carpoolWithAnotherEmployee.appendChild(carpoolWithAnotherEmployeeColumn)

        const companyTransportColumn = document.createElement('div');
        companyTransportColumn.classList.add("column");
        companyTransportColumn.innerHTML = `<input type="text">`
        companyTransport.appendChild(companyTransportColumn)

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

function formatValue(item) {
    item.value = item.value.replace(/[^0-9.]/g, '');
    
    if (item.value.indexOf('.') !== item.value.lastIndexOf('.')) {
        item.value = item.value.slice(0, -1);
    }
}