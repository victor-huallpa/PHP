<main>
    <form action="<?php echo APP_URL; ?>../app/ajax/loginAjax.php" method="POST">
        <input type="hidden" name="modulo-login" value="login">
        <div class="login-box">
            <h1>INICIO SESION:</h1> 
            
            <div class="user-box">
                <input type="text" placeholder="correo" name="mail" autocomplete="email" required>
            </div>
            <div class="user-box">
                <input type="password" placeholder="contrasenia" name="clave" autocomplete="current-password" required>
            </div>
            <input type="submit" value="Inicio" class="modern-button">
            <br>
            <br>
            
            <div class="tex">
            No cuenta con una cuenta <a href="<?php echo APP_URL; ?>registro">REGISTRATE.</a>
            </div>
        </div>

    </form>
</main>