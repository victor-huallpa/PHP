<?php
/*
Para entender el encapsulamiento, primero debemos saber que es la visibilidad de los 
atributos y metodos de una clase, la visibilidad se regiere a que tan accesible es
un atributo o metodo de una clase desde fuera de la clase, es decir, si se puede acceder
a un atributo o metodo desde otra clase o desde un archivo externo.

Para esto usamos los modificadores de acceso, que son palabras reservadas que nos
permiten definir la visibilidad de los atributos y metodos de una clase, estos son;

public: los atributos y metodos con este modificador de acceso son de acceso publico
y se pueden acceder desde cualquier parte de la aplicacion

protected: los atributos y metodos con este modificador de acceso son de acceso protegido
y solo se pueden acceder desde la misma clase o desde una clase hija.

private: los atributos y metodos con este modificador de acceso son de acceso privado
y solo se pueden acceder desde la misma clase.

Teniendo en cuenta esto, el encapsulamiento es una caracteristica de la programacion
orientada a objetos que nos permite proteger los atributos y metodos de una clase
para que no se puedan acceder desde fuera de la clase, esto se logra con los modificadores
de acceso.
*/

#clase padre
class ClasePadre{
    #tributos con tipado estricto
    public string $clase = 'Saiyajin';
    private string $nombre;//atributo privado para encapsular el nombre
    public int $nivel_pelea;

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

}

#clase hija
class ClaseHija extends ClasePadre {
    #atributos
    public string $clase = 'Super Saiyajin';

    public function Transformacion(){
        if($this->nivel_pelea >= 1000 ){
            $texto = $this->NivelPelea().'<br> se ha transformado en '.$this->clase;
        }else{
            $texto =  $this->NivelPelea().'<br> no se ha transformado en '.$this->clase;
        }

        return $texto;
    }
}

#instancia de objeto de la clse hija
$gohan = new ClaseHija("GOHAN",1550);//llamamos a la clase hija

#acceder a los metodos/funciones desde la instancia de la clase hija
echo $gohan->Transformacion().'<br>';