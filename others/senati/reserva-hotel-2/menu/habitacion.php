<?php
include ('../logic/conection.php');
$con=conn();

// Realizar la consulta
$consulta = "SELECT * FROM habitaciones";
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
    <title>habitaciones</title>
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
        <!-- Content here -->
        <div class="card">
            <div class="card-body">
            <div class="container">
                    <h1 class="display-4">habitaciones</h1>
                    <p>Contenido de tu página...</p>
                  </div>
                <!-- alert -->
                <div class="alert alert-warning mt-3 mb-3" role="alert">
                    A simple danger alert—check it out!
                </div>
                <!-- add form -->
                <!-- <form id="addPersonal">
                    <div class="input-group">
                        <span class="input-group-text">habitaciones</span>
                        <select class="form-select" name="cargo">
                            <option selected>habitaciones</option>
                            <option value="Suit">Suit</option>
                            <option value="Matrimonial">Matrimonial</option>
                            <option value="M-Cama extra">M-Cama extra</option>
                            <option value="simple">simple</option>
                            <option value="Comun">Comun</option>
                            <option value="Paso Hot">Paso Hot</option>
                        </select>
                        <input type="date" class="form-control" id="date" name="date" placeholder="DNI">
                        <input type="time" class="form-control" id="time" name="time" placeholder="Correo">
                        <input type="time" class="form-control" id="time" name="time" placeholder="DNI">
                        <select class="form-select" name="cargo">
                            <option selected>Utencilios</option>
                            <option value="Suit">Toalla</option>
                            <option value="Matrimonial">Jabom</option>
                            <option value="M-Cama extra">Papel</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </div>
                </form> -->
                <!-- personal table -->
                <table class="table table-hover">
                    
                    <thead>
                        <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
                        <tr>
                            <th scope="col">id_habitacion</th>
                            <th scope="col">tipo_habitacion</th>
                            <th scope="col">fecha_ocupada</th>
                            <th scope="col">hora_ocupada</th>
                            <th scope="col" colspan="2">hora_salida</th>
                        </tr>
                    </thead>
                    
                    <td><?php echo $fila['id_habitacion']; ?></td>
                    <td><?php echo $fila['tipo_habitacion']; ?></td>
                    <td><?php echo $fila['fecha_ocupada']; ?></td>
                    <td><?php echo $fila['hora_ocupada']; ?></td>
                    <td><?php echo $fila['hora_salida']; ?></td>

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
        <a href="cliente.php" class="btn btn-primary float-left">Atrás</a>
        <a href="caja.php" class="btn btn-primary float-right">Siguiente</a>
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