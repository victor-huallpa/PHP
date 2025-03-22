<?php
require_once "main.php";

/*== Almacenando id ==*/
$id=limpiar_cadena($_POST['categoria_id']);

/*== Verificando Categoria ==*/
$check_categoria=conexion();
$check_categoria=$check_categoria->query("SELECT * FROM Categoria WHERE categoria_id='$id'");

if($check_categoria->rowCount()<=0){
echo '
    <div class="notification is-danger is-light">
        <strong>¡Ocurrio un error inesperado!</strong><br>
        La CATEGORIA no existe en el sistema.
    </div>
';
exit();
}else{
    $datos=$check_categoria->fetch();
}

$check_categoria=null;

/*== Almacenando datos del usuario ==*/
$nombre=limpiar_cadena($_POST['categoria_nombre']);
$ubicacion=limpiar_cadena($_POST['categoria_ubicacion']);

/*== Verificando campos obligatorios del usuario ==*/
if($nombre==""){
    echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            No has llenado todos los campos que son obligatorios
        </div>
    ';
    exit();
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

# Verificando nombre de la categoria
if($nombre != $datos['categoria_nombre']){
    $check_nombre = conexion();
    $check_nombre = $check_nombre->prepare("SELECT categoria_nombre FROM Categoria WHERE categoria_nombre = ?");
    $check_nombre->execute([$nombre]);

    if ($check_nombre->rowCount() > 0) {
        echo '<div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El NOMBRE DE LA CATEGORIA ya está registrado, por favor seleecione otro nombre.
            </div>';
        exit;
    }
    $check_nombre = null;
}

/*== Actualizar categoria==*/
$actualizar_categoria=conexion();
$actualizar_categoria=$actualizar_categoria->prepare("UPDATE Categoria SET categoria_nombre=:nombre,categoria_ubicacion=:ubicacion WHERE categoria_id=:id");

$marcadores=[
    ":nombre"=>$nombre,
    ":ubicacion"=>$ubicacion,
    ":id"=>$id,
];

if($actualizar_categoria->execute($marcadores)){
    echo '
        <div class="notification is-info is-light">
            <strong>CATEGORIA ACTUALIZADO!</strong><br>
            La categoria se actualizo con exito
        </div>
    ';
}else{
    echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            No se pudo actualizar la categoria, por favor intente nuevamente
        </div>
    ';
}
$actualizar_categoria=null;

