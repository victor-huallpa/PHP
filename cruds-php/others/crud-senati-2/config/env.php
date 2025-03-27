<?php
$envfile = __DIR__. '/../.env';

if(file_exists($envfile)){
    $lines = file($envfile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach($lines as $line){
        if(strpos(trim($line), '#') === 0){
            continue;//ignora comentarios
        }

        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);
        putenv("$name=$value");
    }
}

//funcion de ayuda para acceder a la variables de entorno
function env($key, $default = null){
    $value = getenv($key);
    return $value !== false ? $value : $default;
}

//DATOS SERVIDOR
define('DB_HOST', env('DB_HOST', 'localhost'));
define('DB_DATABASE', env('DB_DATABASE', 'prueba'));
define('DB_USERNAME', env('DB_USERNAME', 'root'));
define('DB_USERPASS', env('DB_USERPASS', ''));

//DATOS APP
define('APP_NAME', env('APP_NAME', 'CRUD-SENATI'));
define('APP_URL', env('APP_URL', 'http://localhost/PHP/cruds-php/others/crud-senati-2/public/'));
define('APP_SESSION_NAME', env('APP_SESSION_NAME', 'CRUD'));

//ZONA HORARIA
define('APP_TIMEZONE', env('APP_TIMEZONE', 'America/Lima'));