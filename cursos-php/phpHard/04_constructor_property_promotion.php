<?php
/*
Es una nueva forma de hacer los constructores a partir de 8, esta forma de sintaxis
simplifica la manera como le otorgamos valores a los atributos de una clase
*/
class Clase2{

    #atributos
    public string $clase = 'Saiyajin';

    #constructor
    /*el constructo se ejecuta cuando se instancia el onjeto clase y eso puede ser ultil paraasignar valores a los atributos dinamicamente */
    public function __construct(public string $nombre, public int $nivel_pelea)/*Como se observa los parametros resividos
    son directamente colocalos en los atributos asignados */
    {

    }

    #funciones/metodo
    public function Saludar($texto='Hola soy '):string{//tipamos la funcion, y en el parametro que se resive se le asigna un valor en caso no se mande ningun parametro desde fuera
        return $texto.$this->nombre;
    }

    #funcion/metodo
    public function NivelPelea(){
        return $this->nombre.' tiene un nivel de pelea de '.$this->nivel_pelea;
    }

}

    #instancia de objeto de la clse
    $goku = new Clase2(nivel_pelea:150,nombre:"GOKU");//le asignamos el orden de los parametros
    $vegeta = new Clase2("VEGETA",150);

    #acceder a los metodos/funciones
    echo $goku->Saludar().'<br>';
    echo $vegeta->Saludar("Mi nombre es ").'<br>';

    echo '<br>';
