<main>
    <center>
        
        <h1 class="titulo">REGISTRO DE ASISTENCIA</h1>
        <h3 class="subtitulo">HORA LOCAL</h3>
        <div id="reloj"></div>
        <br>
        <form class="registro-form" action="./../app/ajax/loginAjax.php" method="post">
            <input type="hidden" name="modulo-login" value="asistencia">
            <input type="hidden" name="email" value="<?php echo $_SESSION['usuario']; ?>">
            <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
            <label for="registrar" class="label-registrar">Registrador:</label>
            <div class="select-container">
                <select name="registrar" id="registrar" class="select-registrar">
                    <option value="entrada">Entrada</option>
                    <!-- <option value="salida almuerzo">Salida Almuerzo</option> -->
                    <!-- <option value="entrada almuerzo">Entrada Almuerzo</option> -->
                    <option value="salida">Salida</option>
                </select>
                <span class="custom-arrow"></span>
            </div>
            <input type="submit" value="Enviar" class="enviar-button">
        </form>
        
    </center>
</main>