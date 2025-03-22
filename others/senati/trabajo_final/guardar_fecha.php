<?php
// Obtén la fecha seleccionada enviada desde JavaScript
$fechaSeleccionada = $_POST['fecha'];

// Conectarse a la base de datos (debes completar los datos de conexión)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hoteldb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión a la base de datos
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Escapar la fecha seleccionada para evitar inyecciones SQL
$fechaSeleccionada = $conn->real_escape_string($fechaSeleccionada);

// Crear la consulta SQL para insertar la fecha en la base de datos (debes adaptarla según tu estructura de base de datos)
$sql = "INSERT INTO tabla_fechas (fecha) VALUES ('$fechaSeleccionada')";

if ($conn->query($sql) === TRUE) {
    echo "Fecha guardada correctamente en la base de datos";
} else {
    echo "Error al guardar la fecha en la base de datos: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
