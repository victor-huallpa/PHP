document.getElementById("abrirBtn").addEventListener("click", function() {
    document.getElementById("miVentana").style.display = "block";
  });
  
  document.getElementById("cerrarBtn").addEventListener("click", function() {
    document.getElementById("miVentana").style.display = "none";
  });
  

  function abrirCalendario() {
   // Muestra la ventana emergente del calendario
   document.getElementById('calendarioEmergente').classList.remove('oculto');
   
   // Obtiene la referencia al elemento del calendario
   const calendario = document.getElementById('calendario');
   
   // Borra cualquier contenido previo del calendario
   calendario.innerHTML = '';
   
   // Obtiene la fecha actual
   const fechaActual = new Date();
   
   // Obtiene el número de días en el mes actual
   const diasEnMes = new Date(fechaActual.getFullYear(), fechaActual.getMonth() + 1, 0).getDate();
   
   // Genera los días del calendario
   for (let dia = 1; dia <= diasEnMes; dia++) {
     // Crea un elemento de día
     const elementoDia = document.createElement('div');
     elementoDia.classList.add('dia');
     elementoDia.textContent = dia;
     
     // Agrega el evento al hacer clic en el día
     elementoDia.addEventListener('click', () => {
       elementoDia.classList.toggle('evento');
     });
     
     // Agrega el elemento de día al calendario
     calendario.appendChild(elementoDia);
   }
 }
 
 function guardarFecha() {
   // Obtiene la fecha seleccionada
   const fechaSeleccionada = new Date();
   
   // Realiza la llamada AJAX al servidor para guardar la fecha en la base de datos
   // Puedes utilizar la librería jQuery o el objeto XMLHttpRequest para hacer la llamada AJAX
   // Aquí se muestra un ejemplo con jQuery
   $.ajax({
     type: 'POST',
     url: 'guardar_fecha.php',
     data: { fecha: fechaSeleccionada },
     success: function(response) {
       // Maneja la respuesta del servidor
       alert('Fecha guardada con éxito');
     },
     error: function(error) {
       // Maneja los errores de la llamada AJAX
       alert('Error al guardar la fecha');
     }
   });
 }
 
  