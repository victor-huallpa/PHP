<?php
include ('conection.php');
$con = conn();
//tabla personal
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cargo='cajero';
$dni=$_POST['dni'];
$celular=$_POST['celular'];
$correo=$_POST['email'];
$foto1=$_FILES['foto']["tmp_name"];

//tabla cuentas_personal
$tip_cuenta='comun';
$fecha=date("Y-m-d");
$user=$nombre.'@hotel.com';
$pas=$dni;


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
if($celular==''){
    array_push($campo,'el campo celular esta vacio');
}
if($correo==''){
    array_push($campo,'el correo esta vacio');
}
if($foto1==''){
    array_push($campo,'introdusca una foto');
}
if(count($campo)>0){
    for($i=0;$i<count($campo);$i++){
        echo "<li>".$campo[$i]."</li>";
    }
    echo "<br><a href='../views/registrar.php'>regresar</a>";


}else{

    $q="SELECT * FROM personal WHERE dni='$dni'";
    $co=mysqli_query($con,$q);
    $array = mysqli_fetch_array($co);
    if($array['dni']!=$dni ){
        $foto= file_get_contents($foto1);
        $foto = mysqli_real_escape_string($con, $foto);
        $que = "INSERT INTO personal VALUES (null,'$nombre','$apellido','$cargo','$dni','$correo','$celular','$foto')";
        $consulta1 = mysqli_query($con,$que);
        $consulta2 = "SELECT id_personal FROM personal WHERE dni = $dni";
        $result= mysqli_query($con,$consulta2);
        $row = mysqli_fetch_array($result);
        $id_personal = $row['id_personal'];
        $que2 = "INSERT INTO cuentas_personal VALUES ('$id_personal','$tip_cuenta','$user','$pas','$fecha')";
        $consulta3 = mysqli_query($con,$que2);
        header('location ../views/registrar.php');
        // echo'regsitro satidfactorio';
        
        // echo '<br><a href="../views/vista_admin.php"">regresar</a>';
        
        

    }
    else{
        echo'lo sentimos el usuario con ese dni o correo ya existe';

        echo '<br><a href="../views/registrar.php">regresar</a>';
    }

}

?>