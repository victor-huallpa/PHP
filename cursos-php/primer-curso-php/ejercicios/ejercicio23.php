<?PHP
// herencia
class persona2{//en una clase tenemos control sobre esta a diferencia de una funcion
    
    public $nombre;//propiedades publicas
    private $edad;//propiedad privada, una propiedad privada solo se puede acceder desde la misma clase'metoos' y nadie mas puede tener control sobre esta propiedad.
    protected $altura;//$nos sirve para identificar otros elementos, se peude acceder desde la misma clase y las clases heredadas
    public function asignarNombre($nuevoNombre){//acciones o metodos
        $this->nombre=$nuevoNombre;
    }
    public function impriName(){
        echo 'hola soy '.$this->nombre;
    }
    public function showName(){
        $this->edad = 20;
        return $this->edad;
    }
}

class trabajador1 extends persona2{//clase hija de persona
    public $puesto;//nuevapropiedad 
    public function preTrabajador(){
        
        echo 'Hola soy '.$this->nombre.' y soy un '.$this->puesto.' mido '.$this->altura;
    }
}

$objTrabajador = new trabajador1();//crear un objeto apartir de la clase 'instancia'
$objTrabajador->asignarNombre('vech H');
$objTrabajador->puesto = 'profesor';
$objTrabajador->preTrabajador();
?>