<?php
$category_id_del = limpiar_cadena($_GET['category_id_del']);

//verificar categoria a eliminar
$check_categoria = conexion();
$check_categoria = $check_categoria->query("SELECT categoria_id FROM Categoria WHERE categoria_id = '$category_id_del'");

if($check_categoria->rowCount() == 1){
        //verificar el producto a eliminar
        $check_productos = conexion();
        $check_productos = $check_productos->query("SELECT categoria_id FROM Producto WHERE categoria_id = '$category_id_del' LIMIT 1");

        if($check_productos->rowCount() <= 0){
            $eliminar_categoria = conexion();
            $eliminar_categoria = $eliminar_categoria->prepare("DELETE FROM Categoria WHERE categoria_id = :id");
            $eliminar_categoria->execute([":id"=>$category_id_del]);

            if($eliminar_categoria->rowCount() == 1){
                echo '
                    <div class="notification is-info is-light">
                        <strong>cATEGORIA ELIMINADA!</strong><br>
                        La CATEGORIA se eliminar exitosamente.
                    </div>
                ';
            }else{
                echo '
                    <div class="notification is-danger is-light">
                        <strong>¡Ocurrio un error inesperado!</strong><br>
                        La CATEGORIA no se puede eliminar.
                    </div>
                ';
            }
    
            $eliminar_categoria = null;
        }else{
            echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                la CATEGORIA que intenta eliminar contiene productos asosciados.
            </div>
        ';
        }
}else{
    echo '
    <div class="notification is-danger is-light">
        <strong>¡Ocurrio un error inesperado!</strong><br>
        la CATEGORIA que intenta eliminar no existe.
    </div>
';
}

$check_categoria = null;