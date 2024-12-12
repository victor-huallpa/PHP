<?php

#iniciamos la session
session_name('validar_login');
session_start();

#inlcuimos el archivo de datos.php para poder usar la fucnion que verifica si las credenciales coinciden
include_once 'datos.php';  

#almacenamos en variabels lo que se manda del metodo get
$usuario_n = strtoupper($_POST['usuario']);//ayudamos a que el nombre de usuario se convierta a mayusculas
$usuario_p = $_POST['contrasenia'];


#verificamos que lo que se esta resiviendo por el metodo post sea un valor  valido
if($_SERVER['REQUEST_METHOD'] === 'POST' and !empty($_POST['usuario'])){
    #destruimos las varaibles de los metodos 
    unset($_POST['usuario']);
    unset($_POST['contrasenia']);
    validar_expresiones($usuario_n,$usuario_p);
}else{
    exit();
}

#funcion para validar las expreciones regulares
function validar_expresiones($usuario, $pass){
    if(preg_match('/^[a-zA-Z0-9]{3,10}$/', $usuario) and preg_match('/^[a-zA-Z0-9 @.$*()]{8,20}$/', $pass) ){
        verificar_credenciales($usuario, $pass);
    }else{
        echo "los datos ingresados no cumplen con las expresiones regulares";
    }
}