<?php

require('../Controller.php');
$tabla = 'personal';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuesta =  $sql = '';
    $estado = false;
    //
    $nombre = trim($_POST['name']);
    $apellido = trim($_POST['lastname']);
    $cargo = trim($_POST['cargo']);
    $dni = trim($_POST['dni']);
    $correo = trim($_POST['email']);
    $celular = trim($_POST['phone']);
    //
    $datos = array(
        'nombres' => $nombre,
        'apellidos' => $apellido,
        'cargo' => $cargo,
        'dni' => $dni,
        'correo' => $correo,
        'celular' => $celular
    );
    $personal = new Controller($tabla);
    $resp = $personal->insert($datos);
    $sql = $resp['sql'];
    if ($resp['resp']) {
        $estado = true;
        $respuesta = $resp['resp'];
    } else {
        $respuesta = 'Personal no Agregado';
    }
    $responce = [
        'sql' => $sql,
        'estado' => true,
        'datos' => $resp
    ];
    echo json_encode($responce);
    return;
} else {
    $responce = [
        'estado' => $estado,
        'datos' => 'NOT POST REQUEST'
    ];
    echo json_encode($responce);
    return;
}
