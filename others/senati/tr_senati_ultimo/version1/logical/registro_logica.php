<?php 
    include ("conexion.php");
    $con=conectar();

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $correo = $_POST['correo'];
    $celular = $_POST['n_cel'];
    $contra = $_POST['contrasena'];
    $contra2 = $_POST['contrasena2'];
    $contrato = $_POST['tipo_contrato'];

    $campo=array();
if($nombre==''){
    array_push($campo,'el campo nombre esta vacio');
}
if($apellido==''){
    array_push($campo,'el campo apellido esta vacio');
}
if($dni==''){
    array_push($campo,'el campo dni esta vacio');
}
if($correo==''){
    array_push($campo,'el correo esta vacio');
}
if($celular==''){
    array_push($campo,'el campo celular esta vacio');
}
if($contra==''){
    array_push($campo,'el campo contraseña esta vacio');
}
if($contra2!=$contra){
    array_push($campo,'el campo confirmar contraseña es incorrecto, no coincide la contraseña');
}

if(count($campo)>0){
    for($i=0;$i<count($campo);$i++){
        echo "<li>".$campo[$i]."</li>";
    }
    echo "<br><a href='../views/registro.php'>regresar</a>";
    

}

    // if($contra != $contra2 || strpos($correo,"@")===false || strlen($dni) != 8){
    //     echo '<br> Datos equivocados';
    //     echo '<br> contraseña mal';
    //     echo '<br> falata @ en el correo';
    //     echo '<br> dni incorrecto';

    // }
    else{
        $que = "INSERT INTO personal VALUES (null,'$nombre','$apellido','$dni','$correo','$celular','$contrato')";
        $consulta1 = mysqli_query($con,$que);
        $consulta2 = "SELECT id_personal FROM personal WHERE dni = $dni";
        $result= mysqli_query($con,$consulta2);
        $row = mysqli_fetch_array($result);
        $id_personal = $row['id_personal'];
        $que2 = "INSERT INTO registros VALUES (null,'$id_personal','$correo','$contra')";
        $consulta3 = mysqli_query($con,$que2);
        header("location:../index.php");
    }
?>