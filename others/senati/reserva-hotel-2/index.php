<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>

  <div class="login-container">
    <h2>Iniciar sesión</h2>
    <form class="login-form" action="logic/index_logica.php" method="post">
      <div class="form-group">
        <label for="username">Usuario</label>
        <input type="text" id="username" name="username" placeholder="Ingrese su usuario">
      </div>
      <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Ingrese su contraseña">
      </div>
      <button type="submit" class="submit-button">Iniciar sesión</button>
    </form>
  </div>

  
</body>
</html>