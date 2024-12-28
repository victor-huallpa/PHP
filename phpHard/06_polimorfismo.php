<?php
/*
El polimorfismo es una caracteristica de la programacion orientada a objetos
que permite a dos clase padre e hija tener metodos con el mismo nombre pero con diferente funcionamiento

*/

#llamamos a al docuemnto que tiene la clase padre
require_once '04_constructor_property_promotion.php';

#clase hija
class SuperSaiyajin extends Clase2 {
    #atributos
    public string $clase = 'Super Saiyajin';

    #funcion/metodo
    public function Transformacion(){
        if($this->nivel_pelea >= 1000 ){
            $texto = $this->nombre.' se ha transformado en '.$this->clase;
        }else{
            $texto = $this->nombre.' no se ha transformado en '.$this->clase;
        }

        return $texto;
    }

    #funcion/metodo polimorfismo
    public function NivelPelea(){
        $nivel = $this->nivel_pelea * 2;
        return $this->nombre.' tiene un nivel de pelea de '.$nivel;
    }
}

#instancia de objeto de la clse hija
$gohan = new SuperSaiyajin("GOHAN",1550);//llamamos a la clase hija

#acceder a los metodos/funciones desde la instancia de la clase hija
echo $gohan->Saludar().'<br>';
echo $gohan->NivelPelea().'<br>';
echo $gohan->Transformacion().'<br>';