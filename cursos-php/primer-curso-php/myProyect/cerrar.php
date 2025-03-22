<?php
session_start();  // Iniciar la sesión

if (isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])) {
    // Si la sesión de usuario está establecida y no está vacía
    session_destroy();  // Destruir la sesión
    header('Location: index.php');  // Redirigir a la página de inicio
    exit();  // Detener la ejecución del script
} else {
    // Si la sesión de usuario no está establecida o está vacía
    header('Location: login.php');  // Redirigir a la página de inicio de sesión
    exit();  // Detener la ejecución del script
}
?>
