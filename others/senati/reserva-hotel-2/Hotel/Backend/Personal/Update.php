<?php

require('../Controller.php');
$tabla = 'personal';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuesta =  $sql = '';
    $estado = false;
    //
    $id = trim($_POST['updatePersonal']);
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
    $conditions = array('id' => $id);
    $personal = new Controller($tabla);
    $resp = $personal->update($datos, $conditions);
    $sql = $resp['sql'];
    if ($resp['resp']) {
        $estado = true;
        $respuesta = $resp['resp'];
    } else {
        $respuesta = 'Personal no Actualizado';
    }
    $responce = [
        'sql' => $sql,
        'estado' => true,
        'datos' => $respuesta
    ];
    echo json_encode($responce);
    return;
} else {
    $responce = [
        'estado' => false,
        'respuesta' => 'NOT POST REQUEST'
    ];
    echo json_encode($responce);
    return;
}
