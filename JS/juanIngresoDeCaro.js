//Date de Ingresar el Caro
let dateCar = new Date();
let dateCarNumber = dateCar.getDate();
let dayCar =
    dateCar
        .toLocaleDateString('es-US', {weekday: 'long'})
        .charAt(0)
        .toUpperCase() +
    dateCar.toLocaleDateString('es-US', {weekday: 'long'}).slice(1);

let monthCar =
    dateCar
        .toLocaleDateString('es-US', {month: 'long'})
        .charAt(0)
        .toLocaleUpperCase() +
    dateCar.toLocaleDateString('es-US', {month: 'long'}).slice(1);
let yearCar = dateCar.getFullYear();

let dateTextCar = `${dayCar}, ${dateCarNumber} ${monthCar} de ${yearCar}`;

let dateSectionCar = document.getElementById('ingresarCaroDia');

dateSectionCar.textContent = dateTextCar;

// Calling showTime function at every second
setInterval(showTime, 1000);
//Clock de ingresar el caro
function showTime() {
    let date = new Date();
    let hora = date.getHours();
    let minutos = date.getMinutes();
    let segundos = date.getSeconds();
    let timePeriod = 'AM';

    // Setting time for 12 Hrs format
    if (hora >= 12) {
        if (hora > 12) hora -= 12;
        timePeriod = 'PM';
    } else if (hora == 0) {
        hora = '0' + hora;
        timePeriod = 'AM';
    }

    if (minutos < 10) {
        minutos = '0' + minutos;
    }
    if (segundos < 10) {
        segundos = '0' + segundos;
    }
    let currentClockText = ` ${hora} : ${minutos} : ${segundos} ${timePeriod}`;

    // console.log(currentClockText);

    let timeSection = document.getElementById('inngresarCaroHora');

    timeSection.textContent = currentClockText;
}

showTime();
