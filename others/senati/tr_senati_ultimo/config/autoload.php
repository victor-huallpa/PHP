<?php 
    spl_autoload_register(function($clase){
        $archivo = __DIR__.'/../'.$clase.'.php';
        $archivo = str_replace('\\', '/', $archivo);

        if(file_exists($archivo)){
            include_once $archivo;
        }
    });