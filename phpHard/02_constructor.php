<?php
class MiPrimeraClase{
    #tributos con tipado estricto
    public string $nombre;
    public int $nivel_pelea;

    #constructor
    /*el constructo se ejecuta cuando se instancia el onjeto clase y eso puede ser ultil paraasignar valores a los atributos dinamicamente */
    public function __construct($nombre, $nivel)
    {
        $this->nombre = $nombre;
        $this->nivel_pelea = $nivel;
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
