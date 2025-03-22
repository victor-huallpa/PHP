<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>VI | Login </title>
</head>
<body>
    <div class="login">
        <p>login</p>
        <form action="">
            <div class="entrada loginen">
                <label for="usu">Usuario</label>
                <input type="text" name="usuario" id="usu">
                <label for="contra">Contrasenia</label>
                <input type="password" name="pass" id="contra">
            </div>
            <div class="botones loginbo">
                <input type="submit" value="login">
                <a href="#">Olvide mi contrasenia</a>
                <button id="registrar" class="regsitrar ">registrar</button>
            </div>
        </form>
    </div>
    <div class="registar">
        <p>registar trabajador</p>
        <form action="">
            <div class="entrada regsitraren">
                <label for="nombre">nombre</label>
                <input type="text" name="nombre" id="nombre">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido">
                <label for="DNI">DNI</label>
                <input type="text" name="DNI" id="DNI">
                <label for="correo">Correo</label>
                <input type="text" name="correo" id="correo">
                <label for="celular">Numero de celular</label>
                <input type="text" name="celular" id="celular">
                <label for="foto">Subir Foto:</label>
                <input type="file" id="foto" name="foto" accept="image/*">

                <label for="usuarioC">nombre de usuario</label>
                <input type="text" name="usuarioC" id="usuarioC">
                <label for="passC">crea una contrasenia</label>
                <input type="password" name="passC" id="passC">
                <label for="repass">repite la contrasenia</label>
                <input type="password" name="repass" id="repass">

                <label for="privilegio">Privilegio</label>
                <select name="privilegio" id="privilegio">
                    <option value="admin">Admin</option>
                    <option value="master">Master</option>
                    <option value="user">Usuario</option>
                </select>

                <input type="submit" value="registrar">
            </div>
        </form>
    </div>
</body>
</html>