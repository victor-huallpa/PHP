<?php 
    include ("conexion.php");
    $con=conectar();

    session_start();
    $email=$_POST['mail'];
    $clave=$_POST['pasword'];
    
    $q="SELECT * FROM registros WHERE usuario='$email' and contrasena='$clave'";
    $consulta= mysqli_query($con,$q);
    
    if(mysqli_num_rows($consulta) > 0){
        $consulta = "SELECT id_personal FROM registros WHERE usuario = '$email' AND contrasena = '$clave'";
        $result= mysqli_query($con,$consulta);
        $row = mysqli_fetch_array($result);
        $id_personal = $row['id_personal'];

        $fecha = date("Y-m-d");

        // Verificar si el usuario ya ha registrado la salida hoy y tiene la sesión cerrada
        $consulta_salida = "SELECT * FROM asistencias WHERE id_personal = '$id_personal' AND fecha = '$fecha' AND accion = 'salida'";
        $result_salida = mysqli_query($con, $consulta_salida);
        $sesionCerrada = (mysqli_num_rows($result_salida) > 0);

        if($sesionCerrada){
            echo "Ya marcaste tu asistencia del dia de hoy";
        }else{
            $q = "SELECT tipo_de_contrato FROM personal WHERE id_personal = '$id_personal'";
            $consulta= mysqli_query($con,$q);
            $row = mysqli_fetch_array($consulta);

            if($row['tipo_de_contrato']=='tiempo completo'){
                $_SESSION["email"] = $email;
                $_SESSION["password"] = $clave;
                header('location: ../views/asistencia.php');
            }else{
                $_SESSION["email"] = $email;
                $_SESSION["password"] = $clave;
                header('location: ../views/asistencia2.php');
            }
        }
    }
    else{
        echo'el usuario no existe le recomendamos REGISTRACE!!';
        echo "<br><a href='../views/registro.php'>registrarce</a>";
        echo "<br><a href='../index.php'>regresar LOGIN</a>";


    }


    
?>