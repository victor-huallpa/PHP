<?php
// Conexión a la base de datos
$conexion = new PDO('mysql:host=localhost;dbname=crud', 'vi', 'vech');

// Datos a insertar
$nombre = 'victor';
$apellido = 'huallpa';
$email = 'victor@gmail.com';
$usuario = 'vech';
$clave = password_hash('123vech',PASSWORD_BCRYPT,["cost"=>10]); // Hasheando la contraseña
$foto = '';

// Consulta SQL
$sql = "INSERT INTO usuarios (
            usuario_nombre,
            usuario_apellido,
            usuario_email,
            usuario_usuario,
            usuario_clave,
            usuario_foto,
            usuario_creado,
            usuario_actualizado
        ) VALUES (
            :nombre,
            :apellido,
            :email,
            :usuario,
            :clave,
            :foto,
            NOW(),
            NOW()
        )";

// Preparar y ejecutar la consulta
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':apellido', $apellido);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':clave', $clave);
$stmt->bindParam(':foto', $foto);

if ($stmt->execute()) {
    echo "Usuario registrado correctamente.";
} else {
    echo "Error al registrar el usuario.";
}
?>