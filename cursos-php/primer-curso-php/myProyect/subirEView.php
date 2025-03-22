<?php
require_once'subirEjercicios.php';
require_once'cabecera.php';
if (!isset($_SESSION['usuario']) && empty($_SESSION['usuario'])) {
    header('Location: index.php');  // Redirigir a la página de inicio
    exit();  // Detener la ejecución del script
}

$objSubirEjercicios = new SubirEjercicios();
if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['enviarE'] === 'enviarE'){
    $objSubirEjercicios->validarE($_POST, $_FILES['archivoP']);
}elseif($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['accion']) && $_GET['accion'] === 'borrar'){
    $objSubirEjercicios->dataValidate($_GET);
}
?>

<div class="conteiner">
    <h1>Subir Ejercicios:</h1>
    <div class="row">
        <div class="col-6">
            <form action="subirEView.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="" class="form-label">Nombre del Ejercicio:</label> <?php echo $objSubirEjercicios->nombreM; ?>
                    <input
                        type="text"
                        class="form-control form-control-sm"
                        name="nombreE"
                        value=""
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-muted">el nombre es refente al ejercicio php</small>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Archivo PHP:</label>
                    <?php echo $objSubirEjercicios->archivoM; ?>
                    <input
                        type="file"
                        class="form-control"
                        name="archivoP"
                        id=""
                        placeholder="Subir Archivo"
                        aria-describedby="fileHelpId"
                    />
                    <div id="fileHelpId" class="form-text">Tiene que ser un Archivo .PHP</div><br>
                    <div class="mb-3">
                        <label for="" class="form-label">Descripcion del Ejercicio PHP:</label>
                        <?php echo $objSubirEjercicios->descripcionM; ?>
                        <textarea class="form-control" name="descripcionE" id="" rows="3"></textarea>
                    </div>
                    <button
                        type="submit"
                        name="enviarE"
                        value="enviarE"
                        class="btn btn-primary"
                    >
                        Guardar Ejercicio
                    </button>
                </div>
            </form>
        </div>
        <div class="col-6">
            <div
                class="table-responsive"
            >
                <table
                    class="table table-striped table-hover table-borderless table-primary align-middle"
                >
                    <thead class="table-light">
                        <caption>
                            Ejercicios PHP
                        </caption>
                        <tr>
                            <th>ID</th>
                            <th>Ejercicio</th>
                            <th>Descripcion</th>
                            <th>Archivo PHP</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                    <?php $objSubirEjercicios->pedirDatoA();?>
                    </tbody>

                    <tfoot>
                        Tabla Reamsterisada
                    </tfoot>
                </table>
            </div>
            
        </div>
    </div>
</div>
<?php require_once'pie.php';?>
