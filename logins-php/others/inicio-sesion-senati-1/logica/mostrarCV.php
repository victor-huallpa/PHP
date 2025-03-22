<?php

    while($row=mysqli_fetch_array($query)){
?>
    <tr>
    <td></td><td><?php  echo $row['edad']?></td>
    <td></td><td><?php  echo $row['carrera']?></td>
    <td></td><td><?php  echo $row['genero']?></td>
    <td></td><td><?php  echo $row['estado']?></td>
    <td></td><td><?php  echo $row['correo']?></td> 
                                           
    </tr>
<?php 
    }
?>