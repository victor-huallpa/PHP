<?php
include ('../logic/conection.php');
$con=conn();

// Realizar la consulta
$consulta = "SELECT * FROM cajas";
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

<body>
<div class="container mt-5">

<!-- Content here -->
<div class="card">
    <div class="card-body">
        <div class="container">
            <h1 class="display-4">caja</h1>
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
                            <th scope="col">costo habitacion</th>
                            <th scope="col">costo tohalla</th>
                            <th scope="col">costo jaboncillo</th>
                            <th scope="col">costo papel H</th>
                            <th scope="col">total cobro</th>
                            <th scope="col">comprovante de pago</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td><?php echo $fila['id_venta_cobro']; ?></td>
                            <td><?php echo $fila['cobro_habitacion']; ?></td>
                            <td><?php echo $fila['cobro_tohallas']; ?></td>
                            <td><?php echo $fila['cobro_jaboncillos']; ?></td>
                            <td><?php echo $fila['cobro_papel_higenico']; ?></td>
                            <td><?php echo $fila['total_cobro']; ?></td>
                            <td><?php echo $fila['comprobante_pago']; ?></td>

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
        <a href="habitacion.php" class="btn btn-primary float-left">Atrás</a>
        <a href="cuentas.php" class="btn btn-primary float-right">Siguiente</a>
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