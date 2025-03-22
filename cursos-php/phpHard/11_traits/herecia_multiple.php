<?php
/*
En caso de php no se puede hacer una herencia multiple con extent, ya que esta sentencia solo
permite hacer  una herencia simple una sola herencia, pero en php se usa otra forma de hacer
una herrencia simple, que en este caso es creando traits y luego poder usarlas dentro 
de una clase, simulando a una herencia multiple

un trait no se puede instancias


*/

#incluimos los archivos de los traits
include_once 'trait_01.php';//trait de tecnicas simples
include_once 'trait_02.php';//trait de tecnicas especiales
include_once 'trait_03.php';//trait de tecnicas combinadas

#clase padre
class Sajayins{

    #usamos los traits
    use TecnicasCombinadas;//como ya son las tecnicas combinadas, se heredan directamente del trait
    // use TectnicasSimples, TectnicasEspeciales;
    // {
    //     // TectnicasEspeciales as private;
    // }

    
    #atributos
    public string $clase = 'Saiyajin';    
    private string $nombre ;
    public int $nivel_pelea ;

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

    #setter, asignamos un valor al atributo nombre que esta encapsulado' es privado'.
    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    #getter, mostramos el valor del atributo nombre que esta encapsulado' es privado'.
    function getNombre(){
        return $this->nombre;
    }
}

#clase hija
class SuperSaiyajin extends Sajayins {
    #atributos
    public string $clase = 'Super Saiyajin';

    #funcion/metodo
    public function Transformacion(){
        if($this->nivel_pelea >= 1000 ){
            $texto = $this->getNombre().' se ha transformado en '.$this->clase;
        }else{
            $texto = $this->getNombre().' no se ha transformado en '.$this->clase;
        }

        return $texto;
    }

    #funcion/metodo polimorfismo
    public function NivelPelea(){
        $nivel = $this->nivel_pelea * 2;
        return $this->getNombre().' tiene un nivel de pelea de '.$nivel;
    }
}


#instanciamos el objeto de la clase
$objeto = new Sajayins('GOKU', 1500);

echo $objeto-> getNombre();
echo $objeto-> AumentarVelocidad();
echo $objeto-> UsarKameHameHa();


/*

NOTA: Como se daran cuenta los traits tambien se heredad a las clases haciendo haci una
      herencia multiple o simulandola

      Tambien con los traits se puede trabajar con el encapsulamiento
      usando llaves {} en donde se le invoca o usa, posterior a eso poniedo el nombre
      del trait despues con as para despues darle el tipo de visibilidad que se le 
      quiere dar ya sea privado, publico o protegido
      */

    