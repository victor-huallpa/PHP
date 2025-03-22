<?PHP
//coneccion a la base de datos mysql
$servidor = 'localhost';//127.0.0.1
$usuario = 'vi';
$contrasenia = 'vech';
//try an catch se usa para identificar los errores que pueden presentarse.
try{//si no hay error alguno se ejecuta correctamente 
    $conection = new PDO("mysql:host=$servidor;dbname=", $usuario,$contrasenia);
    $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'good conection';
    //consulta y letura de datos
    $sql = "SELECT * FROM fotos";
    $sentencia = $conection->prepare($sql);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();
    //imprimir tabla 'forma1'  con fetchAll
    // print_r($resultado);
    //imprimir tabla forma2 con foreach
    foreach($resultado as $foto){
        echo "</br>".$foto['nombre']."</br>";
    }
    // $conection->exec($sql);
}
catch(PDOException $error){//se ejecuta si se identifica algun error en try
    echo 'conection error '.$error;

}

?>