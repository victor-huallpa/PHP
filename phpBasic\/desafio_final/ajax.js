// Creamos una constante para guardar lo que se mande por el formulario
const formulario_ajax = document.querySelectorAll(".login");

// Creamos una función para enviar la constante al documento PHP y se almacene y resivir respuesta de dicho archivo
function enviar_formulario_ajax(e) {
    e.preventDefault();

    let enviar = confirm('¿Quieres enviar el formulario?');

    if (enviar == true) {
        let dato = new FormData(this);
        let method = this.getAttribute("method");
        let action = this.getAttribute("action");

        let encabezado = new Headers();

        let config = {
            method: method,
            headers: encabezado,
            mode: 'cors', // Puedes omitir esta línea si no es necesario
            cache: 'no-cache', // 'no_cache' debería ser 'no-cache'
            body: dato
        };

        fetch(action, config)
        .then(respuesta => respuesta.json())
        .then(data => {
            if (data.success) {
                // Autenticación exitosa
                window.location.href = data.message;
                // Redirecciona a la página de inicio o realiza otra acción
            } else {
                // Credenciales incorrectas
                alert(data.message);
                // Puedes agregar más lógica para manejar el error
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Ocurrió un error al procesar la solicitud.');
        });
    }
}

formulario_ajax.forEach(formularios => {
    formularios.addEventListener("submit", enviar_formulario_ajax);
});

/*
NOTA: el escript genera es para mamejar el envio y respuesta del servidor asincronamente, lo que
permite que la pagina no se recarge o te dirija a otra ruta unva ves presionado el boton enviar

Se recoemienda leer mas documentacion al respecto.
*/