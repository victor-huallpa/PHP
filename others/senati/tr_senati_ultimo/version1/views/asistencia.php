<link rel="stylesheet" href="../css/asistencia.css">
<?php 
    include('../includes/head.php');
    session_start();
    $email =$_SESSION["email"];
    $clave =$_SESSION["password"];

    /*$entradaRegistrada = isset($_SESSION["entradaRegistrada"]) && $_SESSION["entradaRegistrada"];

    // Si ya se registró la entrada, deshabilitar el campo de selección
    $entradaDisabled = $entradaRegistrada ? 'disabled' : 'entrada';*/
?>
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
<center>
    
    <h1 class="titulo">REGISTRO DE ASISTENCIA</h1>
    <h3 class="subtitulo">HORA LOCAL</h3>
    <div id="reloj"></div>
    <br>
    <form class="registro-form" action="../logical/asistencia_logica2.php" method="post">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <input type="hidden" name="pasword" value="<?php echo $clave; ?>">
    <label for="registrar" class="label-registrar">Registrador:</label>
    <div class="select-container">
        <select name="registrar" id="registrar" class="select-registrar">
            <option value="entrada">Entrada</option>
            <option value="salida almuerzo">Salida Almuerzo</option>
            <option value="entrada almuerzo">Entrada Almuerzo</option>
        <option value="salida">Salida</option>
        </select>
        <span class="custom-arrow"></span>
    </div>
    <input type="submit" value="Enviar" class="enviar-button">
    </form>
    
</center>
<?php  include('../includes/footer.php');?>
