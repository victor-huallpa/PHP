<?php
$product_id_del = limpiar_cadena($_GET['product_id_del']);
//verificar producto a eliminar
$check_producto = conexion();
$check_producto = $check_producto->query("SELECT * FROM Producto WHERE producto_id = '$product_id_del'");

if($check_producto->rowCount() == 1){
    $datos = $check_producto->fetch();

    $eliminar_producto = conexion();
    $eliminar_producto = $eliminar_producto->prepare("DELETE FROM Producto WHERE producto_id = :id");
    $eliminar_producto->execute([":id"=>$product_id_del]);

    if($eliminar_producto->rowCount() == 1){
        if(is_file("./img/producto/".$datos['producto_foto'])){
            chmod("./img/producto/".$datos['producto_foto'], 0777);
            unlink("./img/producto/".$datos['producto_foto']);
        }
        echo '
            <div class="notification is-info is-light">
                <strong>PRODUCTO ELIMINADA!</strong><br>
                El PRODUCTO se eliminar exitosamente.
            </div>
        ';
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El PRODUCTO no se puede eliminar.
            </div>
        ';
    }

    $eliminar_producto = null;
}else{
    echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            El PRODUCTO que intenta eliminar no existe.
        </div>
    ';
}

$check_producto = null;
