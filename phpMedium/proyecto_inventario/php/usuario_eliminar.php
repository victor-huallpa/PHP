<?php
$user_id_del = limpiar_cadena($_GET['user_id_del']);

//verificar el usuario a eliminar
$check_usuario = conexion();
$check_usuario = $check_usuario->query("SELECT usuario_id FROM Usuario WHERE usuario_id = '$user_id_del'");

if($check_usuario->rowCount() == 1){
    //verificar el usuario a eliminar
    $check_productos = conexion();
    $check_productos = $check_productos->query("SELECT usuario_id FROM Producto WHERE usuario_id = '$user_id_del' LIMIT 1");

    if($check_productos->rowCount() <= 0){
        $eliminar_usuario = conexion();
        $eliminar_usuario = $eliminar_usuario->prepare("DELETE FROM Usuario WHERE usuario_id = :id");
        $eliminar_usuario->execute([":id"=>$user_id_del]);
        if($eliminar_usuario->rowCount() == 1){
            echo '
                <div class="notification is-info is-light">
                    <strong>¡Usuario eliminado!</strong><br>
                    El usuario se eliminar exitosamente.
                </div>
            ';
        }else{
            echo '
                <div class="notification is-danger is-light">
                    <strong>¡Ocurrio un error inesperado!</strong><br>
                    El usuario no se puede eliminar.
                </div>
            ';
        }

        $eliminar_usuario = null;
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El usuario no se puede eliminar ya que tiene productos registrados.
            </div>
        ';
    }    
    $check_productos = null;
}else{
    echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            El usuario que intenta eliminar no existe.
        </div>
    ';
}

$check_usuario = null;