let date = new Date();
let dateNumber = date.getDate();
let day = date.toLocaleDateString('es-US', {weekday: 'long'});
let month = date.toLocaleDateString('es-US', {month: 'long'});
let year = date.getFullYear();
console.log(year);

let dateEl = document.createElement('h2');
dateEl.textContent = `${day}, ${dateNumber} ${month} de ${year}`;

console.log(dateEl);
