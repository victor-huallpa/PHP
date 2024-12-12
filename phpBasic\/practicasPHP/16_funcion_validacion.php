<?php
/*
Creamos una funcion que nos ayude a validar el nombre de usuario
*/

#creamos la funcion de validar usuario
function validar_usuario($nombe){

    #variable a comparar
    $clave = 'VICTOR';

    #validamos el usuario con condicional
    if(password_verify($clave,$nombe)){

        #asiganmos el valor a la sesion
        $_SESSION['nombre'] = $clave;
        echo 'vienvenido '.$clave;
        
    }else{
        $_SESSION['nombre'] = '';
        echo 'Usuario incorrecto';
    }
}

/*
NOTA: como este fragmento de c odigo se esta aniadendo al aricho recepcion.php donde ya se incio sesion
      entonces no es necesario iniciarla en este archivo y por ende tambien se puede crear varaibles
      de session. y si en caso alguien quiere acceder a este archvo no no se ejcutara nada. porque todo
      esta dentro de una fucion
*/