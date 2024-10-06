//Date
let date = new Date();
let dateNumber = date.getDate();
let day =
    date
        .toLocaleDateString('es-US', {weekday: 'long'})
        .charAt(0)
        .toUpperCase() +
    date.toLocaleDateString('es-US', {weekday: 'long'}).slice(1);

let month =
    date
        .toLocaleDateString('es-US', {month: 'long'})
        .charAt(0)
        .toLocaleUpperCase() +
    date.toLocaleDateString('es-US', {month: 'long'}).slice(1);
let year = date.getFullYear();
console.log(year);

let dateText = `${day}, ${dateNumber} ${month} de ${year}`;

let dateSection = document.getElementById('dateSection');

dateSection.textContent = dateText;
// Calling showTime function at every second
setInterval(showTime, 1000);
//Clock
function showTime() {
    let date = new Date();
    let hour = date.getHours();
    let minutos = date.getMinutes();
    let segundos = date.getSeconds();
    let timePeriod = 'AM';

    // Setting time for 12 Hrs format
    if (hour >= 12) {
        if (hour > 12) hour -= 12;
        timePeriod = 'PM';
    } else if (hour == 0) {
        hr = 12;
        timePeriod = 'AM';
    }
    if (hour <= 0) {
        hour = '0' + hour;
    }
    if (minutos < 10) {
        minutos = '0' + minutos;
    }
    if (segundos < 10) {
        segundos = '0' + segundos;
    }
    let currentClockText = ` ${hour} : ${minutos} : ${segundos} ${timePeriod}`;

    // console.log(currentClockText);

    let timeSection = document.getElementById('clockSection');

    timeSection.textContent = currentClockText;
}

showTime();