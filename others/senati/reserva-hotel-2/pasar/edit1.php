<?php

include("db.php");

if (isset($_GET['id_venta_cobro'])) 
{ $id = $_GET['id_venta_cobro'];
    $query="SELECT*FROM cajas WHERE id_venta_cobro = $id_venta_cobro";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1){ 
        $row=mysqli_fetch_array($result);
        $id_venta_cobro=$row['id_venta_cobro']; 
        $id_dni=$row['id_dni']; 
        $nombres=$row['nombres']; 
        $apellidos=$row['apellidos'];
        $tipo_habitacion=$row['tipo_habitacion']; 
        $cobro_habitacion=$row['cobro_habitacion'];
        $cobro_toallas=$row['cobro_toallas']; 
        $cobro_jaboncillos=$row['cobro_jaboncillos'];
        $cobro_papel_higenico=$row['cobro_papel_higenico']; 
        $total_cobro=$row['total_cobro'];
        $HORA =$row['HORA'];
    }
}
?>
<?php 
include("db.php")
?>
<div class="container p-4">
    <div class="col-md-4 mx-auto">
        <div class="card card-body">
            <form action="edit1.php?id=<?php echo $_GET['id'];?>"method="POST">
                <div class="form-group">
                  <p>hotel "garfil"le agradece su preferncia 
                  <p>Ticket: N°<?php echo $id_venta_cobro;?>
                  <p>Hora y Fecha: <?php echo $HORA;?>
                  <p>Cliente: <?php echo $nombres;?><br>
                  <p><?php echo $apellidos;?>
                  <p>DNI: <?php echo $id_dni;?><br>
                  <p>habitacion:<?php echo $tipo_habitacion;?><br>
                  <p>costo: <?php echo $cobro_habitacion;?><br>
                  <p>costo toallas: <?php echo $cobro_toallas;?><br>
                  <p>cobro jaboncillos: <?php echo $cobro_jaboncillos;?>
                  <p>cobro papel higenico: <?php echo $cobro_papel_higenico;?><br>
                  <p>Total: <?php echo $total_cobro;?><br>
                </div>
                
                
            </form>
        </div>
    </div>
</div>
