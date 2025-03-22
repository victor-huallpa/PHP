<?php 
function salida($registro){
        if ($registro == 'salida'){
            //para cerrar la sesion
            session_destroy();
            header("location: ../index.php");
    }
}
function consulta($id_personal, $hora, $registro, $fecha, $con){
    $q = "INSERT INTO asistencias VALUES (null, '$id_personal', '$hora', '$registro', '$fecha')";
    $consulta = mysqli_query($con, $q);
    salida($registro);
}
function atras($con, $email){
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
}

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
    
    $_SESSION['id']= $id_personal;
    
    $hora = date("H:i");
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
        

    }elseif(mysqli_num_rows($result_asistencia) == false){

        $q = "SELECT tipo_de_contrato FROM personal WHERE correo = '$email'";
        $consulta= mysqli_query($con,$q);
        $row = mysqli_fetch_array($consulta);

        if($row['tipo_de_contrato']=='tiempo completo'){// EVALUAMOS EL TIEMPO EN QUE INGRERASA LOS DATOS. timepo completo
            

            date_default_timezone_set('America/Lima');
            $hora1 = date('H:i'); // Obtiene la hora actual en formato de 24 horas (por ejemplo, 14:30)

            if ($registro=='entrada') {//entrada
                if($hora1 >= '08:00' && $hora1 <= '08:15'){//a la hora
                    consulta($id_personal, $hora, $registro, $fecha, $con);
                    echo "entro a la hora, y registro";
                    atras($con, $email);
                }elseif($hora1 >= '08:16' && $hora1 <= '08:20'){//tarde
                    consulta($id_personal, $hora, $registro, $fecha, $con);
                    echo "entro tarde, y se le registro";
                    atras($con, $email);
                }else{// llego muy tarde
                    if($hora1 >= '00:01' && $hora1 <= '07:59'){
                        echo "es muy temprano para registrar su asistencia";
                        atras($con, $email);
                    }elseif($hora1 >= '08:21' && $hora1 <= '23:59'){
                        echo "PIENSA PE PIENSA como vas a marcar tu asistencia de entrada tan tarde ESTUDIA SONSO ";
                        atras($con, $email);
                    }else{
                        echo "ERROR 404";
                    }
                    // echo 'se le conosidera como falto apesar de que asistio ya que yanno es hora de entrda o ya registro su asistencia de entrada';
                    // atras($con, $email);
                }

            }elseif($registro=='salida almuerzo'){//salida a almorzar
                if($hora1 >= '12:00' && $hora1 <= '12:05'){//hora salida almuerzo a la hora
                    consulta($id_personal, $hora, $registro, $fecha, $con);
                    echo "Registraste tu salida de almuerzo correctamente";
                    atras($con, $email);
                    
                }elseif($hora1 >= '12:06' && $hora1 <= '12:10'){//salio tarde a la hora de almorzar
                    consulta($id_personal, $hora, $registro, $fecha, $con);
                    echo "Estas saliendo muy tarde a almorzar";
                    atras($con, $email);
                }elseif($hora1 >= '12:11' && $hora1 <= '12:59'){
                    echo "Estas saliendo muy tarde y Recuerde debe volver a la 13PM para continuar com su labor";

                }else{// llego muy tarde
                    if($hora1 >= '00:01' && $hora1 <= '11:59'){//antes de la hora de almuerzo
                        echo "es muy temprano para registrar su asistencia de salida a almorzar";
                        atras($con, $email);
                    }elseif($hora1 >= '13:00' && $hora1 <= '23:59'){//despues de la hora de almuerzo
                        echo "PIENSA PE PIENSA como vas a marcar tu asistencia de entrada tan tarde ESTUDIA SONSO ";
                        atras($con, $email);
                    }else{
                        echo "ERROR 404";
                    }
                    echo 'Aun no es la hora de almuerzo/Ya paso la hora de almuerzo <br/> No sea desubicado, REVISAR SU HORA.';
                    atras($con, $email);
                }
            }elseif($registro=='entrada almuerzo'){//Regreso de almuerzo
                if($hora1 >= '13:00' && $hora1 <= '13:05'){//hora entrada almuerzo a la hora
                    consulta($id_personal, $hora, $registro, $fecha, $con);
                    echo "entro a la hora, y registro";
                    atras($con, $email);
                }elseif($hora1 >= '13:06' && $hora1 <= '13:10'){//entrada almuerzo tarde
                    consulta($id_personal, $hora, $registro, $fecha, $con);
                    echo "entro tarde, y se le registro";
                    atras($con, $email);
                }else{// llego muy tarde
                    echo 'lo sentimos regreso de almorzar muy tarde por lo cual no se le considerara la asistencia del almuerzo';
                    atras($con, $email);
                }
            }elseif($registro=='salida'){// salida
                if($hora1 >= '17:00' && $hora1 <= '17:15'){//a la hora
                    consulta($id_personal, $hora, $registro, $fecha, $con);
                    echo "registro su salida adecuadamente";
                    atras($con, $email);
                }elseif($hora1 >= '17:16' && $hora1 <= '17:20'){//tardanza de registro de asistencia
                    consulta($id_personal, $hora, $registro, $fecha, $con);
                    echo "se le considera horas extra, regsitro adecuadamente su salida";
                    atras($con, $email);
                }else{// llego muy tarde
                    echo 'las politicas de la empresa diice que solo se pueden hacer un maximo de 3 horas extras';
                    atras($con, $email);
                }

            }
            else {
                echo "algo salio mal";
            }

        }elseif($row['tipo_de_contrato']=='tiempo parcial'){// EVALUAMOS EL TIEMPO EN QUE INGRERASA LOS DATOS. timepo parcial
            
            salida($registro);

            date_default_timezone_set('America/Lima');
            $hora1 = date('H:i'); // Obtiene la hora actual en formato de 24 horas (por ejemplo, 14:30)

            if ($registro=='entrada') {//entrada-Turno mañana
                if($hora1 >= '8:00' && $hora1 <= '8:05'){//a la hora mañana
                    consulta($id_personal, $hora, $registro, $fecha, $con);
                    echo "entro a la hora, y registro";
                    atras($con, $email);
                }elseif($hora1 >= '08:06' && $hora1 <= '08:10'){//tarde
                    consulta($id_personal, $hora, $registro, $fecha, $con);
                    echo "entro tarde, y se le registro";
                    // segundo horario-Turno Por la tarde
                    atras($con, $email);
                }elseif($hora1 >= '13:00' && $hora1 <= '13:05'){//a la hora tarde
                    consulta($id_personal, $hora, $registro, $fecha, $con);
                    echo "entro a la hora, y registro";
                    atras($con, $email);
                }elseif($hora1 >= '13:06' && $hora1 <= '13:10'){//tarde
                    consulta($id_personal, $hora, $registro, $fecha, $con);
                    echo "entro tarde, y se le registro";
                    atras($con, $email);
                }
                // en caso no se pueda evaluar
                else{// llego muy tarde
                    echo 'Registro su asistencia muy tarde, se le considerará como falto.';
                    atras($con, $email);
                }

            }elseif($registro=='salida'){// salida
                if($hora1 >= '12:00' && $hora1 <= '12:05'){//a la hora mañana
                    consulta($id_personal, $hora, $registro, $fecha, $con);
                    echo "entro a la hora, y registro";
                    atras($con, $email);
                }elseif($hora1 >= '12:06' && $hora1 <= '12:10'){//tarde
                    consulta($id_personal, $hora, $registro, $fecha, $con);
                    echo "entro tarde, y se le registro";
                    // segundo horario
                    atras($con, $email);
                }elseif($hora1 >= '17:00' && $hora1 <= '17:05'){//a la hora tarde
                    consulta($id_personal, $hora, $registro, $fecha, $con);
                    echo "entro a la hora, y registro";
                    atras($con, $email);
                }elseif($hora1 >= '17:06' && $hora1 <= '17:10'){//tarde
                    consulta($id_personal, $hora, $registro, $fecha, $con);
                    echo "entro tarde, y se le registro";
                    atras($con, $email);
                }else{// llego muy tarde
                    echo 'las politicas de la empresa diice que solo se pueden hacer un maximo de 3 horas extras';
                    atras($con, $email);
                }
            }
            else {
                echo "algo salio mal";
            }
        }else{
            echo 'lo sentimos no tieenes un tipo de contrato';
            echo "<br><a href='../index.php'>regresar</a>";
        }
    }else{
        echo'algo malio sal';
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