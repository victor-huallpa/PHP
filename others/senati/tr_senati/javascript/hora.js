
function displaytime() {
    var fecha = new Date();
    var hora = fecha.toLocaleTimeString();
    document.getElementById('reloj').innerHTML = hora;
    setTimeout(displaytime, 1000);
}
displaytime();
