<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/regis.css">
    <title>Document</title>
</head>
<body>
  
<div class="register-container">
  <form class="register-form" method="post" action="../logic/registrar_logica.php" enctype="multipart/form-data">
    <div class="form-group">
      <label for="firstname">Nombre</label>
      <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" minlength="3">
    </div>
    <div class="form-group">
      <label for="lastname">Apellido</label>
      <input type="text" id="apellido" name="apellido" placeholder="Ingrese su apellido" minlength="3">
    </div>
    <div class="form-group">
      <label for="dni">DNI</label>
      <input type="text" id="dni" name="dni" placeholder="Ingrese su DNI" minlength="8" maxlength="8">
    </div>
    <div class="form-group">
      <label for="phone">Número de celular</label>
      <input type="tel" id="phone" name="celular" placeholder="Ingrese su número de celular" minlength="9" maxlength="9">
    </div>
    <div class="form-group">
      <label for="email">Correo electrónico</label>
      <input type="email" id="email" name="email" placeholder="Ingrese su correo electrónico">
    </div>
    <div class="form-group">
      <label for="photo">subir foto</label>
      <input type="file" name="foto" placeholder="subir foto">
    </div>
    <button type="submit" class="submit-button">Registrar Personal</button>
    <p class="register-link"><a href="vista_admin.php">atras</a></p> 
  </form>
</div>


</body>
</html>