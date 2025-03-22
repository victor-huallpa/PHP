<?php
function registro(){
    if(isset($_POST['usuario']))
    {
        $usuario=$_POST['usuario'];
        $password=$_POST['clave'];

        $edad=$_POST['edad'];
        $carrera=$_POST['carrera'];
        $genero=$_POST['genero'];
        $estado=$_POST['estado'];
        $correo=$_POST['correo'];

        $campos= array();
        
        if($usuario=='' || strlen($usuario)<2 || strpos($usuario,"@")===false)
        {
            array_push($campos, "USUARIO: Es obligatorio con mas de 2 caracteres o no cuenta con @");
        }
        if(strlen($password)<6 || strlen($password)>11)
        {
            array_push($campos, "PASSWORD: No contiene los caracteres suficientes");
        }
        if(strlen($edad)<1 || strlen($edad)>3 || $edad=="")
        {
             array_push($campos,"EDAD: ESte espacio esta vacio o exedio los caracteres especificados 1 a 3");  
        }
        if($carrera=="")
        {
            array_push($campos,"CARRERA: este campo debe ser llenado adecuadamente y no estar vacio.");  
        }
        if($genero=="")
        {
            array_push($campos,"GENERO:  Este campo esta vacio, debe llenarlo");  
        }
        if($estado=="")
        {
            array_push($campos,"ESTADO: Este campo esta vacio debe ser llenado.");  
        }
        if($correo=="" || strpos($correo,"@")===false)
        {
            array_push($campos,"CORREO: Este campo esta bacio o no incluyo el carecter especial @");  
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
            $sql="INSERT INTO iniciologin VALUES('$password','$usuario','$edad','$carrera','$genero','$estado','$correo')";
            $query= mysqli_query($con,$sql);    


            if($query){
                Header("Location: login.php");

            }else {
                echo 'algo salio mal';
            }
            
    
        }
        
    }
}
?>