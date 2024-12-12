<?php


#funcion de comparacion de datos 
function verificar_credenciales($us, $pa){
    if(!empty($encript = datos_encriptar())){
        if(password_verify($us, $encript['nombre']) and password_verify($pa, $encript['pass'])){
            $_SESSION['nombreU'] = $us;
            echo json_encode(array('success' => true, 'message' => 'index.php'));
        }else{
            echo json_encode(array('success' => false, 'message' => 'Credenciales incorrectas, intente de nuevo'));
        }
    }
}

#fucion encriptar y mandar datos
function datos_encriptar(){
    #variables donde almacenamos las claves que coincidiras
    $usuario = password_hash('VICTOR',PASSWORD_DEFAULT);
    $contrasenia = password_hash('123@vech.', PASSWORD_DEFAULT);
    #array donde almacenaremos las credendciales
    $array_usuario = [
        'nombre' => $usuario,
        'pass' => $contrasenia
    ];
    #retornamos el array
    return $array_usuario;
}