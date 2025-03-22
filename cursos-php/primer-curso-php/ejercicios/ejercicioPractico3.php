<?PHP
class persona3{
    protected $passd;
    protected $usua;
    private $contra;
    protected $usuari;
    protected $dato;

    function __construct()
    {
        $this->agregarName();
    }
    private function agregarName(){
        $this->dato = $this->retornarDatos();
        $this->passd = $_POST['passw'];
        $this->usua = $_POST['user'];
    }
    public function retornarDatos(){
        $this->usuari = 'vech';
        $this->contra = 123;
        return $this->contra;
    }
}
class usurio extends persona3{
    function __construct()
    {
        parent::__construct();
        $this->showValidate();
    }

    function showValidate(){
        // echo $this->passd.' hola bb '.$this->usua;
        // $val1 = $this->passd ;
        // $val2 = $this->contra;
        // echo $val1.'</br>';
        // echo $val2.'</br>';
        // echo ($val1 == $val2)? 'true </br>':'false </br>';//forma en la que puedes hacer que te devuelva el valor boleano
        if(($this->usua != $this->usuari || $this->passd != $this->dato) && $_POST ){
            if ($this->usua == ''){
                echo 'Ingresa el campo de USER </br>';
            }
            if($this->passd == ''){
                echo 'Ingresa el campo de password </br>';
            }
            else{
                echo 'datos incorrectos, vuelva a intentarlo';
            }
        }
        elseif($this->passd == $this->dato && $this->usua == $this->usuari){
            echo 'Bienvenido '.$this->usua;
        }
    }
}
// $usuario = $_POST['user'];
// $contrasenia = $_POST['passw'];

$objnombre = new usurio();
// $objnombre->showValidate();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="ejercicioPractico3.php" method="post">
        USER:
        <input type="text" name="user" id="">
        <br>
        PASSWORD:
        <input type="text" name="passw" id="">
        <br>
        <input type="submit" value="login">
    </form>
</body>
</html>