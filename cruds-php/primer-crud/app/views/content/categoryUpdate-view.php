<div class="container is-fluid mb-6">
    <h1 class="title">Categorías</h1>
    <h2 class="subtitle">Actualizar categoría</h2>
</div>
<div class="container pb-6 pt-6">

<?php
    $id = $insLogin->limpiarCadena($url[1]);

    include_once './app/views/content/btn_back.php';

    $datos = $insLogin->seleccionarDatos("Unico","Categoria","categoria_id", $id);

    if($datos->rowCount() == 1 ){
        $datos = $datos->fetch();
?>
<div class="form-rest mb-6 mt-6"></div>
    <form action="<?php echo APP_URL ?>app/ajax/categoriasAjax.php" method="POST" class="FormularioAjax" autocomplete="off" >

        <input type="hidden" name="modulo_categoria" value="actualizar">
        <input type="hidden" name="categoria_id" value="<?php echo $datos['categoria_id']; ?>">

        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Nombre</label>
                    <input class="input" type="text" name="categoria_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{4,50}" maxlength="50"  value="<?php echo $datos['categoria_nombre']; ?>" required >
                </div>
            </div>
            <div class="column">
                <div class="control">
                    <label>Ubicación</label>
                    <input class="input" type="text" name="categoria_ubicacion" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{5,150}" maxlength="150" value="<?php echo $datos['categoria_ubicacion']; ?>">
                </div>
            </div>
        </div>
        <p class="has-text-centered">
            <button type="submit" class="button is-success is-rounded">Actualizar</button>
        </p>
    </form>
<?php 
    }else{
        include_once './app/views/content/error_alert.php';
    }
?>

</div>