<?php
// Entorno de desarrollo
define('DEVELOPMENT_ENVIRONMENT', true);

if (DEVELOPMENT_ENVIRONMENT) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);
    // Configura el registro de errores en producción
    ini_set('error_log', __DIR__ . '/error.log');
}
?>