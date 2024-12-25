<?php
require_once "main.php"; // Asegúrate de que el nombre del archivo sea correcto

# Recepción de datos del formulario
$nombre = limpiar_cadena($_POST['usuario_nombre']);
$apellido = limpiar_cadena($_POST['usuario_apellido']);
$usuario = limpiar_cadena($_POST['usuario_usuario']); // Corregido
$correo = limpiar_cadena($_POST['usuario_email']);
$pass1 = limpiar_cadena($_POST['usuario_clave_1']);
$pass2 = limpiar_cadena($_POST['usuario_clave_2']);

# Verificar los campos obligatorios
if ($nombre == '' || $apellido == '' || $usuario == '' || $pass1 == '' || $pass2 == '') {
    echo '<div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            No has llenado todos los campos que son obligatorios
          </div>';
    exit;
}

# Verificando integridad de los datos
if (verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}", $nombre)) {
    echo '<div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            El nombre no cumple con el formato solicitado
          </div>';
    exit;
}

if (verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}", $apellido)) {
    echo '<div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            El apellido no cumple con el formato solicitado
          </div>';
    exit;
}

if (verificar_datos("[a-zA-Z0-9_]{3,40}", $usuario)) { // Corregido
    echo '<div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            El Usuario no cumple con el formato solicitado
          </div>';
    exit;
}

if (verificar_datos("[a-zA-Z0-9!@#$%^&*()_+=-]{3,40}", $pass1) || verificar_datos("[a-zA-Z0-9!@#$%^&*()_+=-]{3,40}", $pass2)) { // Ajustado para permitir caracteres especiales
    echo '<div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            Las claves no cumplen con el formato solicitado
          </div>';
    exit;
}

# Verificando el email
if ($correo != '') {
    if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $check_email = conexion();
        $check_email = $check_email->prepare("SELECT usuario_email FROM Usuario WHERE usuario_email = ?");
        $check_email->execute([$correo]);
        
        if ($check_email->rowCount() > 0) {
            echo '<div class="notification is-danger is-light">
                    <strong>¡Ocurrio un error inesperado!</strong><br>
                    El correo ya está registrado
                  </div>';
            exit;
        }
        $check_email = null;
    } else {
        echo '<div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El correo no cumple con el formato solicitado
              </div>';
        exit;
    }
}

# Verificando usuario
$check_usuario = conexion();
$check_usuario = $check_usuario->prepare("SELECT usuario_usuario FROM Usuario WHERE usuario_usuario = ?");
$check_usuario->execute([$usuario]);

if ($check_usuario->rowCount() > 0) {
    echo '<div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            El usuario ya está registrado
          </div>';
    exit;
}
$check_usuario = null;

# Verificando las claves
if ($pass1 != $pass2) {
    echo '<div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            Las claves no coinciden
          </div>';
    exit;
} else {
    $pass1 = password_hash($pass1, PASSWORD_BCRYPT, ["cost" => 10]);
}

# Guardando datos en la base de datos
$guardar_usuario = conexion();
$stmt = $guardar_usuario->prepare("INSERT INTO Usuario(usuario_nombre, usuario_apellido, usuario_usuario, usuario_clave, usuario_email) VALUES (?, ?, ?, ?, ?)");
if ($stmt->execute([$nombre, $apellido, $usuario, $pass1, $correo])) {
    echo "Usuario registrado correctamente.";
} else {
    echo "Error al registrar el usuario.";
}