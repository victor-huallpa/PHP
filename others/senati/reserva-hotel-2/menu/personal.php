<?php
include ('../logic/conection.php');
$con=conn();

// Realizar la consulta
$consulta = "SELECT * FROM personal";
$resultado = mysqli_query($con, $consulta);

if ($resultado) {
    // La consulta se ejecutó correctamente
    // Puedes realizar operaciones con el resultado, como obtener los datos o contar las filas
    $filas = mysqli_num_rows($resultado);
    echo "La consulta se ejecutó correctamente. Se encontraron $filas filas.";

?>

<?php
include('../includes/head.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
    crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" 
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" 
    crossorigin="anonymous"></script>
</head>
<body>
    <!-- nav -->

    <!-- main -->
    <div class="container mt-5">
    <div class="container">
        <!-- Content here -->
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <h1 class="display-4">PERSONAL</h1>
                    <!-- <p>Contenido de tu página...</p> -->
            </div>
                <!-- alert -->
                <div class="alert alert-warning mt-3 mb-3" role="alert">
                    notificacion
                </div>
                <!-- add form -->
                <!-- <form id="addPersonal" method="post" action="../logic/registrar_logica.php">
                    <div class="input-group">
                        <span class="input-group-text">Nuevo Peronal</span>
                        <input type="text" class="form-control" id="nombre" name="name" placeholder="Nombre">
                        <input type="text" class="form-control" id="apellido" name="lastName" placeholder="Apellido">
                        <select class="form-select" name="cargo">
                            <option selected>Cargos</option>
                            <option value="gerente">Gerente</option>
                             <option value="administrador">Administrador</option> 
                            <option value="recepcionista">cajero</option>
                        </select> 
                        <input type="dni" class="form-control" id="dni" name="dni" placeholder="DNI">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Correo">
                        <input type="number" class="form-control" id="celular" name="phone" placeholder="Celular">
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </div>
                </form> -->
                <!-- personal table -->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">id_personal</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">DNI</th>
                            <th scope="col">Correo</th>
                            <th scope="col" colspan="2">Celular</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
                        <tr>
                        <td><?php echo $fila['id_personal']; ?></td>
                        <td><?php echo $fila['nombre']; ?></td>
                        <td><?php echo $fila['apellido']; ?></td>
                        <td><?php echo $fila['cargo']; ?></td>
                        <td><?php echo $fila['dni']; ?></td>
                        <td><?php echo $fila['correo']; ?></td>
                        <td><?php echo $fila['celular']; ?></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-info" >Editar</button>
                                    <button type="button" class="btn btn-danger">Borrar</button>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
        
        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            GUARDAR
        </button> -->

        <!-- Modal -->
        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="editPersonal">
                            <input type="hidden" name="updatePersonal">
                            <div class="mb-3 row">
                              <label for="rname" class="col-md-4 col-form-label text-md-end">Nombre:</label>
                              <div class="col-md-6">
                                <input id="rname" type="text" class="form-control" name="name" autocomplete="name" autofocus>
                              </div>
                            </div>
            
                            <div class="mb-3 row">
                              <label for="rlastname" class="col-md-4 col-form-label text-md-end">Apellidos:</label>
                              <div class="col-md-6">
                                <input id="rlastname" type="text" class="form-control" name="lastName" autocomplete="email" autofocus>
                              </div>
                            </div>
            
                            <div class="mb-3 row">
                              <label for="rpassword" class="col-md-4 col-form-label text-md-end">Password</label>
                              <div class="col-md-6">
                                <input id="rpassword" type="password" class="form-control" name="password" autocomplete="password" autofocus>
                              </div>
                            </div>
            
                            <div class="mb-3 row">
                              <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Register</button>
                              </div>
                            </div>
                          </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div> -->
        <a href="rentas.php" class="btn btn-primary float-left">Atrás</a>
        <a href="cliente.php" class="btn btn-primary float-right">Siguiente</a>
        </div>
    </div>

</body>
</html>

<?php
include('../includes/footer.php');
?>
<?php
} else {
    // Ocurrió un error en la ejecución de la consulta
    // Puedes obtener información sobre el error utilizando mysqli_error()
    $error = mysqli_error($conexion);
    echo "Error en la consulta: $error";
}

// Cerrar la conexión
mysqli_close($con);
?>