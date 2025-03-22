<?php
// Usamos el autoloader
spl_autoload_register(function ($clase) {
    $nombre_archivo = str_replace("\\", "/", $clase).'.php';
    if(file_exists($nombre_archivo)){
        require_once $nombre_archivo;//con esta parte estamos diciendo que la barra invertida la convierta en barra normal
    }
});