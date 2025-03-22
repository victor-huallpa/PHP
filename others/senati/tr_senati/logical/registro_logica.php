<?php 
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$correo=$_POST['correo'];
$celular=$_POST['n_cel'];
$contraseña=$_POST['contrasena'];
$contraseña1=$_POST['contrasena1'];
$contra = md5($contraseña);
$tipo_contrato=$_POST['tipo_contrato'];

// header('location: ../index.php')
for ($i=0;$i<count($tipo_contrato);$i++)    
{     
$t_con=$tipo_contrato[$i]; 
} 

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
if($contraseña==''){
    array_push($campo,'el campo contraseña esta vacio');
}
if($contraseña1!=$contraseña){
    array_push($campo,'el campo confirmar contraseña es incorrecto, no coincide la contraseña');
}

if(count($campo)>0){
    for($i=0;$i<count($campo);$i++){
        echo "<li>".$campo[$i]."</li>";
        
        echo "<br><a href='./views/registro.php'>registro</a>";

    }
}

else{
    echo $celular;
    include('conexion.php');
    //INSERTAR DATOS
    $con=conectar();
    $q="INSERT INTO usuarios VALUES ('','$nombre','$apellido','$t_con','$celular','$dni')";
    $eje=mysqli_query($con,$q);
    //SACAR EL ID DEL USURIO

    
    if($eje){
        $c = "SELECT id FROM usuarios WHERE apellido='$apellido'";
        $consulta = mysqli_query($con,$c);
        $lista = mysqli_fetch_array($consulta);

        if($consulta){
            $e="INSERT INTO cuentas VALUES('$
            ','$correo','$contra')";
            $eje1=mysqli_query($con,$e);
            
            if($eje1){
                echo 'se realizo exitozamente';
            }else{
                echo 'algo fallo';
                
            }

        }else{
            echo 'esta mal';
        }
        // header ('location: ')
        
    }
    else{
        echo 'algo salio mal';
        echo $lista;
    }

}   
?>