<?php 

    include ('conexion.php');
    $con = conectar();

    session_start();
    $email = $_SESSION["email"];
    $clave = $_SESSION["password"];



    $consulta = "SELECT id_personal FROM registros WHERE usuario = '$email' AND contrasena = '$clave'";
    $result= mysqli_query($con,$consulta);
    $row = mysqli_fetch_array($result);
    $id_personal = $row['id_personal'];
   
   
    


    if (!$con) {
        die("Error de conexión: " . mysqli_connect_error());
    }
    $query = "SELECT hora_entrada FROM asistencias  WHERE id_personal='$id_personal'";
    $result= mysqli_query($con,$query);


    if (!$result) {
        die("Error en la consulta: " . mysqli_error($con));
    }
    
    $fechas = array();
    
    while ($row = mysqli_fetch_array($result)) {
        $fechas[] = $row['hora_entrada'];
    }
    
    // Operaciones con las fechas obtenidas
    foreach ($fechas as $fecha) {
        // Realizar operaciones con la fecha...
        echo $fecha . "<br />";
    }
    if (count($fechas) >= 4) {
        $hora1 = strtotime($fechas[0]);
        $hora2 = strtotime($fechas[1]);
        $hora3 = strtotime($fechas[2]);
        $hora4 = strtotime($fechas[3]);
    
        $diferencia = $hora2 - $hora1;
        $diferencia2 = $hora3 - $hora1;
        $suma = $diferencia + $diferencia2;
        
        echo $suma;
        $diferencia_legible = gmdate("H:i:", $suma);
        // Obtener la parte entera y decimal de la diferencia en horas
        // $horas_enteras = floor($diferencia / 3600);
        // $minutos = fmod(($diferencia / 60), 60);
        if($diferencia_legible>='07:55' && $diferencia_legible<='08:00'){

        
                // Convertir la diferencia a un formato legible, por ejemplo, en horas y minutos
                
                $pago_dia = '7.5';
                // Crear una fecha con la diferencia en horas y minutos
                // $fecha_diferencia = date("H:i", strtotime("+{$horas_enteras} hours +{$minutos} minutes"));
            // Insertar la fecha en la base de datos
                $insert_query = "INSERT INTO costeos  VALUES ('$id_personal','$diferencia_legible','$pago_dia')";
                $insert_result = mysqli_query($con, $insert_query);
    //7:5 y 8:00.
                if ($insert_result) {
                    echo "Diferencia insertada en la base de datos.";
                } else {
                    echo "Error al insertar la diferencia en la base de datos: " . mysqli_error($con);
                }

            }elseif($diferencia_legible>='07:50' && $diferencia_legible<'07:55'){
                $pago_dia = '7.00';
                $insert_query = "INSERT INTO costeos  VALUES ('$id_personal','$diferencia_legible','$pago_dia')";
                $insert_result = mysqli_query($con, $insert_query);
            }

        } else {
            echo "No hay suficientes registros de hora para calcular la diferencia.";
        }
    
    mysqli_free_result($result);
    mysqli_close($con);
?>