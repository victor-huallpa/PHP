<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <title>LOGIN</title>
</head>
<body>

    <section>
        <div class="login-box">
            <form action="logica/inicio.php" method="post">
                <h2>Inicio de Sesion</h2>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="text" required name="usuario">
                    <label>E-mail</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" required name="clave">
                    <label>Contraseña</label>
                </div>
                <div class="remember-forgot">

                </div>
                <button type="submit">INICIAR</button>
                <div class="register-link">
                    <p>¿No tienes una cuenta? <a 
                    href="#">Registrarme</a></p>
                </div>
            </form>
        </div>
    </section>
    
    
    </form>
</body>
</html>