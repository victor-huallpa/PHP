<?php
/*
Programacion Orientada a Objetos 'POO' 
es un paradigma de programación que utiliza "objetos" para representar datos y 
métodos que operan sobre esos datos. Este enfoque permite organizar el código de 
manera más modular y reutilizable, facilitando el mantenimiento y la escalabilidad 
de las aplicaciones.

Clase: Es una plantilla o un modelo que define las propiedades (atributos) y comportamientos (métodos) de un tipo de objeto. Por ejemplo, una clase Coche puede tener atributos como color, marca y métodos como acelerar() y frenar().
Objeto: Es una instancia de una clase. Por ejemplo, un objeto miCoche de la clase Coche puede tener el color "rojo" y la marca "Toyota".

Ejemplo
*/

class Sajayin{
    #tributos con tipado estricto
    public string $nombre = 'goku' ;
    public int $nivel_pelea = 1000;

    #funciones/metodo
    public function Saludar():string{//tipamos la funcion
        return 'Hola soy '.$this->nombre;
    }

    #funcion/metodo
    public function NivelPelea(){
        return $this->nombre.' tiene un nivel de pelea de '.$this->nivel_pelea;
    }

}

#instancia de objeto de la clse
$goku = new Sajayin();


#acceder a un atriuto/variables de la clase
echo $goku->nombre.'<br>';
echo $goku->nivel_pelea.'<br>';

#acceder a los metodos/funciones
echo $goku->saludar().'<br>';
echo $goku->NivelPelea().'<br>';

// var_dump($goku);