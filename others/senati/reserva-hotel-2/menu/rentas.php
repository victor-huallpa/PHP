<?php
include ('../logic/conection.php');
$con=conn();

// Realizar la consulta
$consulta = "SELECT * FROM rentas_ventas";
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
    <title>Cliente</title>
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
<div class="container mt-5">

<!-- Content here -->
<div class="card">
    <div class="card-body">
        <div class="container">
            <h1 class="display-4">rentas</h1>
            <p>Contenido de tu página...</p>
          </div>
        <!-- alert -->
        <div class="alert alert-warning mt-3 mb-3" role="alert">
            A simple danger alert—check it out!
        </div>
        <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">num_venta</th>
                            <th scope="col">numero de habitaciones</th>
                            <th scope="col">numero de tohallas</th>
                            <th scope="col">numero de jaboncillo</th>
                            <th scope="col">cantidad de papel H</th>
                            <th scope="col">total productos</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td><?php echo $fila['id_venta_cantida']; ?></td>
                            <td><?php echo $fila['can_habitaciones']; ?></td>
                            <td><?php echo $fila['can_tohallas']; ?></td>
                            <td><?php echo $fila['can_jaboncillos']; ?></td>
                            <td><?php echo $fila['can_papel_higenico']; ?></td>
                            <td><?php echo $fila['total_productos']; ?></td>


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
        <a href="registros.php" class="btn btn-primary float-left">Atrás</a>
        <a href="personal.php" class="btn btn-primary float-right">Siguiente</a>
        </div>

</body>
</html>



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