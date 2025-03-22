<?PHP

class persona1{//en una clase tenemos control sobre esta a diferencia de una funcion
    //encapsulamiento
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

$objAlumno = new persona1();//crear un objeto apartir de la clase 'instancia'
$objAlumno2 = new persona1();

$objAlumno->asignarNombre('oscar');//llamando un meotodo
echo $objAlumno->nombre;//imprimir una propiedad;

$objAlumno2->asignarNombre('pancho');
$objAlumno2->impriName();

echo $objAlumno2->impriName();
echo $objAlumno2->showName();
?>