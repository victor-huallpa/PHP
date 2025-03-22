<?PHP
//metodods estaticos, se pueden llamar sin tener una instancia
class UnaClase{
    public static function unMetodo(){
        echo 'hola soy un metodo estatico';
    }
}
$obj = new UnaClase();//estamos instanciando a la clase
$obj->unMetodo();

UnaClase::unMetodo();//se puede llamar cuando los metodos son estaticos, se accede mediante referencia a la clase

?>