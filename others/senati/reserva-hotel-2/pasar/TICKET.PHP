<div class="col-md-8">
      <table class="table table-bordered">
      <p>______________________________________________________________________________________________________________________________________________________________________</p>
      <p>CAJAS</p>
        <thead>
          <tr>
            <th></th>
            <th>placa</th>
            <th>modelo</th>
            <th>telefono</th>
            <th>lavado basico</th>
            <th>lavado interior</th>
            <th>lavado detallado</th>
            <th>Pulido y encerado</th>
            <th>Empleado</th>
            <th>HORA</th>

          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM `cajas`";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['id_venta_cobro']; ?></td>
            <td><?php echo $row['tipo_habitacion']; ?></td>
            <td><?php echo $row['id_dni']; ?></td>
            <td><?php echo $row['nombres']; ?></td>
            <td><?php echo $row['apellidos']; ?></td>
            <td><?php echo $row['cobro_habitacion']; ?></td>
            <td><?php echo $row['cobro_toallas']; ?></td>
            <td><?php echo $row['cobro_jaboncillos']; ?></td>
            <td><?php echo $row['cobro_papel_higenico']; ?></td>
            <td><?php echo $row['total_cobro']; ?></td>
            
            <td>
              <a href="edit1.php?id=<?php echo $row['id_venta_cobro']?>"class="btn btn-secondary">imprimir
              </a>
              <a href="delete_task.php?id=<?php echo $row['id_venta_cobro']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>