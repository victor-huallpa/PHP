<?PHP
//coneccion a la base de datos mysql
$servidor = 'localhost';//127.0.0.1
$usuario = 'vi';
$contrasenia = 'vech';
//try an catch se usa para identificar los errores que pueden presentarse.
try{//si no hay error alguno se ejecuta correctamente 
    $conection = new PDO("mysql:host=$servidor;dbname=prueba", $usuario,$contrasenia);
    $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'good conection';
    //insertar datos
    $sql = "INSERT INTO fotos VALUES(null,'juagndo con php', 'foto4.jpg');";
    $conection->exec($sql);
}
catch(PDOException $error){//se ejecuta si se identifica algun error en try
    echo 'conection error '.$error;

}

?>