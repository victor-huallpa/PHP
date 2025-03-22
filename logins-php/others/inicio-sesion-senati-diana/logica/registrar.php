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
        
        }else{
            include ('conexion6.php');
            $con=coneccion6();
            $sql="INSERT INTO iniciologin2 VALUES('','$usuario','$password','$cargo','$privilegio')";
            $query= mysqli_query($con,$sql);    


            if($query){
                Header("Location: index.php");
            }else {
                echo 'algo salio mal';
            } 
        }
    }
}
function checkbox(){
    if(isset($_POST['yes']))
    {
        $privilegio='si';
        $cargo = 'instructor';
        registro($cargo, $privilegio);

    }else{
        $privilegio = 'no';
        $cargo = 'alumno';
        registro($cargo, $privilegio);
    }
}




function registro2(){
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
        
        }else{
            $privilegio='no';
            $cargo = 'alumno';
            include ('conexion6.php');
            $con=coneccion6();
            $sql="INSERT INTO iniciologin2 VALUES('','$usuario','$password','$cargo','$privilegio')";
            $query= mysqli_query($con,$sql);    


            if($query){
                Header("Location: ../vista/bienvenida.php");
            }else {
                echo 'algo salio mal';
            } 
        }
    }
}
?>