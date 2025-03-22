<?PHP 
include ('../logic/conection.php');
$con=conn();

$usuario=$_POST['username'];
$pas =$_POST ['password'];

$query="SELECT * FROM cuentas_personal WHERE usuario='$usuario' and contrasena='$pas'";
$conn= mysqli_query($con,$query);
$row=mysqli_fetch_array($conn);

//verificamos si existe el usuario

if(mysqli_num_rows($conn)>0){    
    if($row['tipo_cuenta']=='administrador'){
        header('location: ../views/vista_admin.php');
        

    }

    elseif($row['tipo_cuenta']=='comun'){
        header ('location: ../../trabajo_final/habitacion.html');
    }

    else{
        echo'algo salio mal';
    }
}else{
    echo'no se encontro usurio vuelva a intentarlo';
    echo '<br><a href="../index.php">atras</a>';
}
?>