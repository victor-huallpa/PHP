<?PHP
//constructor
class persona{//en una clase tenemos control sobre esta a diferencia de una funcion
    //encapsulamiento
    public $nombre;//propiedades publicas
    private $edad;//propiedad privada, una propiedad privada solo se puede acceder desde la misma clase'metoos' y nadie mas puede tener control sobre esta propiedad.
    protected $altura;//$nos sirve para identificar otros elementos, se peude acceder desde la misma clase y las clases heredadas
    
    function __construct($newNombre){
        $this->asignarNombre($newNombre);
    }

    public function asignarNombre($nuevoNombre){//acciones o metodos
        $this->nombre=$nuevoNombre;
    }

    public function impriName(){
        $this->showName();
        echo 'hola soy '.$this->nombre.' y tengo '.$this->edad.' años';
    }
    public function showName(){
        $this->edad = 20;
        //eturn $this->edad;//es para que salga fuera de la clase
    }
}

$objAlumno = new persona('vech H');//crear un objeto apartir de la clase 'instancia'
$objAlumno->impriName();

?>