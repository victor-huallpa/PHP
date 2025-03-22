<?php
/*
En esta parte verificaremos si la session esta iniciada o no y de acorde a ello se tomara 
una deccion para qu ese inicie session o se cierre la session
*/
session_name('validar_login');
session_start();

#evaluamos si la session esta iniciada
if (isset($_SESSION['nombreU'])) {
    // Si la sesión está iniciada, cerrarla y eliminar todas las sesiones
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
} else {
    // Si la sesión no está iniciada, redirigir a login.php
    header("Location: login.php");
    exit();
}
?>