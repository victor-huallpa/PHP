<?php
/*
La herencia se refeire al cantenido de una clase que se puede heredar a otra clase,
esto es muy util cuando se tiene una clase con atributos y metodos que se pueden
reutilizar en otra clase, en lugar de volver a escribit el codigo de la clase padre

esto se logra con la palabra reservada extends
*/

#llamamos a al docuemnto que tiene la clase padre
require_once '04_constructor_property_promotion.php';

#clase hija

class SuperSaiyajin extends Clase2 {
    #atributos
    public string $clase = 'Super Saiyajin';

    public function Transformacion(){
        if($this->nivel_pelea >= 1000 ){
            $texto = $this->nombre.' se ha transformado en '.$this->clase;
        }else{
            $texto = $this->nombre.' no se ha transformado en '.$this->clase;
        }

        return $texto;
    }
}

#instancia de objeto de la clse hija
$gohan = new SuperSaiyajin("GOHAN",1550);//llamamos a la clase hija

#acceder a los metodos/funciones desde la instancia de la clase hija
echo $gohan->Saludar().'<br>';
echo $gohan->NivelPelea().'<br>';
echo $gohan->Transformacion().'<br>';
