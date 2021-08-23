jQuery(document).ready( $ => {

    // Leaflet
    let lat = $("#lat").val();
    let lng = $("#lng").val();
    let direccion = $("#direccion").val();
    let ubicacion = $("#ubi").val();

    var map = L.map('mapa').setView([lat, lng], 17);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([lat, lng]).addTo(map)
        .bindPopup(`La direccion es: ${direccion} y la ubicacion es: ${ubicacion}`)
        .openPopup();
});


// Fijar barra de navegacion al hacer scroll - Arrow Function
window.onscroll = () => {
    const scroll = window.scrollY;

    const headerNav = document.querySelector('#menu-principal');

    // Si la cantidad de scroll es mayor a 300px agregamos una clase
    if(scroll > 100) {
        headerNav.classList.add('position-fixed');
    } else {
        headerNav.classList.remove('position-fixed');
    }
}
