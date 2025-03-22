<?php 
    date_default_timezone_set('America/Lima');
    include ("conexion.php");
    $con=conectar();

    session_start();
    $email = $_SESSION["email"];
    $clave = $_SESSION["password"];

    $registro = $_POST['registrar'];//catálogo

    $consulta = "SELECT id_personal FROM registros WHERE usuario = '$email' AND contrasena = '$clave'";
    $result= mysqli_query($con,$consulta);
    $row = mysqli_fetch_array($result);
    $id_personal = $row['id_personal'];
    
    $hora = date("H:i:s");
    $fecha = date("Y-m-d");

    // Verificando si el usuario ya ha registrado una asistencia para la fecha actual 
    $consulta_asistencia = "SELECT * FROM asistencias WHERE id_personal = '$id_personal' AND fecha = '$fecha' AND accion = '$registro'";
    $result_asistencia = mysqli_query($con, $consulta_asistencia);

    if (mysqli_num_rows($result_asistencia) > 0) {
        echo 'Ya has registrado esta opción hoy.';
        $q = "SELECT tipo_de_contrato FROM personal WHERE correo = '$email'";
        $consulta= mysqli_query($con,$q);
        $row = mysqli_fetch_array($consulta);

        if($row['tipo_de_contrato']=='tiempo completo'){

            echo "<br><a href='../views/asistencia.php'>regresar</a>";
        }elseif($row['tipo_de_contrato']=='tiempo parcial'){
            echo "<br><a href='../views/asistencia2.php'>regresar</a>";
        }else{
            echo 'lo sentimos no tieenes un tipo de contrato';
            echo "<br><a href='../index.php'>regresar</a>";
        }
        

    }else {
        $q = "INSERT INTO asistencias VALUES (null, '$id_personal', '$hora', '$registro', '$fecha')";
        $consulta = mysqli_query($con, $q);

        if ($registro == 'salida'){
            //para cerrar la sesion
            session_destroy();
            header("location: ../index.php");
        }else{
            $q = "SELECT tipo_de_contrato FROM personal WHERE correo = '$email'";
            $consulta= mysqli_query($con,$q);
            $row = mysqli_fetch_array($consulta);

            if($row['tipo_de_contrato']=='tiempo completo'){

                header("location: ../views/asistencia.php");
            }else{
                header('location: ../views/asistencia2.php');
            }
        }
    }
    /*
    if($registro == 'entrada'){
        if (!isset($_SESSION["entradaRegistrada"]) || !$_SESSION["entradaRegistrada"]) {
            // Marcar la entrada y actualizar la variable de sesión
            $_SESSION["entradaRegistrada"] = true;
            $q = "INSERT INTO asistencia VALUES (null,'$id_personal','$hora','Entrada','$fecha')";
            $consulta= mysqli_query($con,$q);
            header("location: ../views/asistencia.php");
        }
    }else{
        echo 'No marcaste entrada';
    }*/
?>