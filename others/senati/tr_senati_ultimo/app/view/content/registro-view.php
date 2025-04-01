<main>
    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
        <h2>REGISTRO</h2>
        <p><h3> Llenar los siguientes campos </h3></p>
        <form action="../logical/registro_logica.php" method="post">
            <label for="nombre">Nombre:</label><br>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" required><br>

            <label for="apellido">Apellido:</label><br>
            <input type="text" name="apellido" id="apellido" placeholder="Apellido" required><br>

            <label for="dni">DNI:</label><br>
            <input type="text" name="dni" id="dni" placeholder="DNI" minlength="8" maxlength="8" required><br>

            <label for="correo">Correo:</label><br>
            <input type="email" name="correo" id="correo" placeholder="Correo" required><br>

            <label for="n_cel">Celular:</label><br>
            <input type="text" name="n_cel" id="n_cel" placeholder="Celular" minlength="9" maxlength="9" required autocomplete="tel"><br>

            <label for="contrasena">Contraseña:</label><br>
            <input type="password" name="contrasena" id="contrasena" placeholder="contraseña" autocomplete="new-password" required><br>

            <label for="contrasena2">Confirmar contraseña:</label><br>
            <input type="password" name="contrasena2" id="contrasena2" placeholder="confirmar contraseña" autocomplete="new-password" required><br>

            <h4>Tipo de contrato:
                <select name="tipo_contrato" id="">                
                    <option value="tiempo completo">tiempo completo</option>
                    <option value="tiempo parcial">tiempo parcial</option>
                </select>
            </h4>
            <input type="submit" value="Registrar"><br>
        </form>
        <h3>Ya tengo una cuenta: <a href="<?php echo APP_URL; ?>login">Iniciar sesion</a></h3>
    </div>
</main>