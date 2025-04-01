<?php
    define('MODO_DEBUG', true);

    if(MODO_DEBUG){
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }else{
        ini_set('display_errors', 0);
        ini_set('display_startup_errors', 0);
        error_reporting(0);
        //REGISTRA LOS ERRORES EN PRODUCCION
        ini_set('error_log',__DIR__.'/error.log');
    }