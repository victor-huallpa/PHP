<?php
/*
El setter y getter son metodos que se utilizan para asignar y obtener valores de los
atributos de una clase, respectivamente

setter: asigna un valor a un atributo de una clase.
getter: obtiene el valor de un atributo de una clase.

esto lo hace mediante metodos de la clase, y seutilizan para proteger atributos de una 
clase
*/

#clase 
class ClasePadre{
    #tributos con tipado estricto
    private string $clase = 'Saiyajin';
    private string $nombre;//atributo privado para encapsular el nombre
    private int $nivel_pelea;

    #constructor
    /*el constructo se ejecuta cuando se instancia el onjeto clase y eso puede ser ultil paraasignar valores a los atributos dinamicamente */
    public function __construct($nombre, $nivel)
    {
        $this->nombre = $nombre;
        $this->nivel_pelea = $nivel;
    }

    #funciones/metodo privada para encasular el saludo
    private function Saludar($texto='Hola soy '):string{//tipamos la funcion, y en el parametro que se resive se le asigna un valor en caso no se mande ningun parametro desde fuera
        return $texto.$this->nombre;
    }

    #funcion/metodo
    public function NivelPelea(){
        return $this->Saludar().' y tengo un nivel de pelea de '.$this->nivel_pelea;
    }

    #setter, asignamos un valor al atributo nombre que esta encapsulado' es privado'.
    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    #getter, mostramos el valor del atributo nombre que esta encapsulado' es privado'.
    function getNombre(){
        return $this->nombre;
    }

}

#instancia de objeto de la clase 
$gohan = new ClasePadre("GOHAN",1550);

#acceder a los metodos/funciones desde la instancia de la clase y modificamos el valor con setter y mostramos con getter
echo $gohan->getNombre().'<br>'; //mostramos el nombre
$gohan->setNombre('GOKU').'<br>';//asignamos un nuevo nombre
echo $gohan->getNombre().'<br>'; //mostramos el nuevo nombre
