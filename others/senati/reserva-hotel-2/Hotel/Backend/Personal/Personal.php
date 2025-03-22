<?php

require('../Controller.php');
$tabla = 'personal';
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $sql = '';
    $estado = false;
    $respuesta = array();
    // instance controller
    $personal = new Controller($tabla);
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        // get data
        $id = trim($_GET['id']);
        $data = $personal->seeData($id);
        $sql = $data['sql'];
        if ($data['resp']){
            $data = $data['resp'];
            $respuesta = array(
                'id' => $id,
                'name' => $data['nombres'],
                'lastname' => $data['apellidos'],
                'cargo' => $data['cargo'],
                'dni' => $data['dni'],
                'email' => $data['correo'],
                'phone' => $data['celular']
            );
            $estado = true;
        } else {
            $respuesta = 'Personal no Encontrado';
        }
    } elseif (isset($_GET['delete']) && !empty($_GET['delete'])) {
        $id = trim($_GET['delete']);
        $conditions = array('id' => $id);
        $data = $personal->delete($conditions);
        $sql = $data['sql'];
        if ($data['resp']) {
            $estado = true;
            $respuesta = $data['resp'];
        } else {
            $respuesta = 'Personal no Eliminado';
        }
    } else {
        // get all data
        $datos = $personal->getData();
        $sql = $datos['sql'];
        if ($datos['resp']) {
            foreach ($datos['resp'] as $data) {
                $values = array(
                    'id' => $data['id'],
                    'name' => $data['nombres'],
                    'lastname' => $data['apellidos'],
                    'cargo' => $data['cargo'],
                    'dni' => $data['dni'],
                    'email' => $data['correo'],
                    'phone' => $data['celular']
                );
                array_push($respuesta, $values);
            }
            $estado = true;
        } else {
            $respuesta = 'Datos no obtenidos';
        }
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
        'datos' => 'NOT GET REQUEST'
    ];
    echo json_encode($responce);
    return;
}