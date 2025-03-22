<?php
/*
en esta parte recepcionaremos el dato y usamos la funcion incluida en otro archivo par adespues 
generar una respuesta
*/

#iniciamos la sesion 
session_name('nombre');
session_start();


#incluimos el archivo de lafucnion validar
include_once "16_funcion_validacion.php";

#verificamos si el dato recepcionado no esta vacio o no es nulo
if(!empty($_POST['nombre'])){

    #convertimos a mayuscula y encriptamos el nombre del usuario que se envioa atraves de post
    $encirptar = password_hash(strtoupper($_POST['nombre']),PASSWORD_DEFAULT);
    
    #enviamos a la fucnion el dato encriptado
    validar_usuario($encirptar);

}else{
    echo 'Ingrese su usuario por favor';
}
