<?php  include('../includes/head.php')?>
<center>
    <h1>REGISTRO dE ASISTENCIA</h1>
    <h3>HORA LOCAL</h3>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        displaytime();
    });

    function displaytime() {
        var fecha = new Date();
        var hora = fecha.toLocaleTimeString();
        document.getElementById('reloj').innerHTML = hora;
        setTimeout(displaytime, 1000);
    }
</script>
    <form action="../logical/asistencia_logica.php" method="post">registrar:  
        <select name="registrar" id="">
            <option value="entrada">entrada</option>
            <option value="salida almuerxo">salida almuerzo</option>
            <option value="entrafa almuerzo">entrada aluerzo</option>
            <option value="salida">salida</option>
        </select>
        <input type="submit" value="enviar">
    </form>
     <a href="../index.php">salir</a>
</center>

<?php  include('../includes/footer.php')?>
