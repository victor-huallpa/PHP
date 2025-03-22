<?php
function registro($cargo, $privilegio){
    if(isset($_POST['usuario']))
    {
        $usuario=$_POST['usuario'];
        $password=$_POST['clave'];

        $campos= array();
        
        if($usuario=='' || strlen($usuario)<2 || strpos($usuario,"@")===false)
        {
            array_push($campos, "USUARIO: Es obligatorio con mas de 2 caracteres o no cuenta con @");
        }
        if(strlen($password)<6 || strlen($password)>11)
        {
            array_push($campos, "PASSWORD: No contiene los caracteres suficientes");
        }
        if(count( $campos)> 0){
            echo "<div class='error'>";
            for($i=0; $i < count( $campos); $i ++){
                echo "<li>".$campos[$i]."</li>";
    
            }
        
        }
        else{
            include('conexion.php');
            $con=conectar();
            $sql="INSERT INTO iniciologin2 VALUES('','$usuario','$password','$cargo','$privilegio')";
            $query= mysqli_query($con,$sql);    
            //tenemos que modificar esto

            if($query){
                Header("Location: ../index.php");

            }else {
                echo 'algo salio mal';
            }
            
    
        }
        
    }
}
if(isset($_POST['checkbox'])){
    $cargo = 'instructor';
    $privilegio = 'si';
    registro($cargo, $privilegio);
    // header('location: ../vista/bienvenida.php');
}else{
    $cargo = 'alumno';
    $privilegio = 'no';
    registro($cargo, $privilegio);
    // header('location: ../vista/bienvenida.php');

}

?>