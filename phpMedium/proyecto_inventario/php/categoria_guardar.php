<?php

require_once "main.php";

$nombre = limpiar_cadena($_POST['categoria_nombre']);
$ubicacion = limpiar_cadena($_POST['categoria_ubicacion']);

# Verificar los campos obligatorios
if ($nombre == '' ) {
    echo '<div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            No has llenado todos los campos que son obligatorios
          </div>';
    exit;
}

# Verificando integridad de los datos
if (verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{4,50}", $nombre)) {
    echo '<div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            El nombre no cumple con el formato solicitado
          </div>';
    exit;
}

if($ubicacion != ""){
    if (verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{5,150}", $ubicacion)) {
        echo '<div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                La UBICACION no cumple con el formato solicitado
              </div>';
        exit;
    } 
}

# Verificando usuario
$check_nombre = conexion();
$check_nombre = $check_nombre->prepare("SELECT categoria_nombre FROM Categoria WHERE categoria_nombre = ?");
$check_nombre->execute([$nombre]);

if ($check_nombre->rowCount() > 0) {
    echo '<div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            El NOMBRE DE LA CATEGORIA ya está registrado
          </div>';
    exit;
}
$check_nombre = null;

# Guardando datos en la base de datos
$guardar_categoria = conexion();
$guardar_categoria = $guardar_categoria->prepare("INSERT INTO Categoria(categoria_nombre, categoria_ubicacion) VALUES (:nombre, :ubicacion)");

$marcadores=[
    ":nombre"=>$nombre,
    ":ubicacion"=>$ubicacion
];

$guardar_categoria->execute($marcadores);

if($guardar_categoria->rowCount() == 1){
    echo '<div class="notification is-info is-light">
                <strong>¡Categorira regsitrada!</strong><br>
                Categoria registrada exitosamente.
            </div>';
}else{
    echo '<div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se puedo registrar la Categoria, por favor intente de nuevo.
            </div>';
}

$guardar_categoria = null;
