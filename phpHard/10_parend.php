<?php
/*
La palabra reserbada PARENT se utiliza para acceder a los metodos y atributos de la clase
padre, es decir, la clase de la que se hereda, y se utiliza para acceder a los metodos
y atributos de la clase padre desde la clase hija


RETROALIMENTACION:

self: se utiliza para acceder a los metodos y atributos "ESTATICOS" de la clase
$this: se utiliza para acceder a los metodos y atributos de la clase


ejemplos
*/

class ClasePadre{
    #atributos
    private string $nombre;
    private int $edad;

    #constructor
    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    #metodo
    public function Saludar(){
        return 'Hola soy '.$this->nombre.' y tengo '.$this->edad.' años';
    }
}

class ClaseHija extends ClasePadre{
    #atributos
    private string $nombre_hijo;
    private int $edad_hijo;

    #constructor
    public function __construct($nombre, $edad, $nombre_hijo, $edad_hijo)
    {
        parent::__construct($nombre, $edad);//llamamos al constructor de la clase padre con parent
        $this->nombre_hijo = $nombre_hijo;
        $this->edad_hijo = $edad_hijo;
    }

    #metodo
    public function Saludar(){
        #llamamos al metodo de la clase padre con parent
        return parent::Saludar().'<br>'.'Hola soy '.$this->nombre_hijo.' y tengo '.$this->edad_hijo.' años';
    }
}

#instanciamos el objeto de la clase hija
$goku = new ClaseHija('GOKU', 40, 'GOHAN', 10);
echo $goku->Saludar();