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

let dateEl = document.createElement('h2');
dateEl.textContent = `${day}, ${dateNumber} ${month} de ${year}`;

let dateSection = document.getElementById('dateSection');

dateSection.appendChild(dateEl);
