<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <form action="validacion.php" method="post" class="login">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" pattern="[a-zA-Z0-9]{3,10}" maxlength="10">
        <br>
        <label for="contrasenia">contrasenia</label>
        <input type="password" name="contrasenia" id="contrasenia" pattern="[a-zA-Z0-9 @.$*()]{8,20}" maxlength="20">
        <br>
        <input type="submit" value="login">
    </form>
    <script src="ajax.js"></script>
</body>
</html>