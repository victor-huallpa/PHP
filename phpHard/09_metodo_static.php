<?php
/*
el metodo estatico es un metodo que puede acceder a un atributo de una clase sin
necesidad de instanciar un objeto de la clase, es decir, se puede acceder a un metodo
estatico sin necesidad de crear un objeto de la clase

un atributo estatico no puede llamarce desde fura de la clase isntanciando un objeto de
la clse, pero si se puede acceder a este mediante:

:: = operador de resolucion de ambito o de paquete

Un metodo estatico no puede acceder a los atributos normales de una clase que no sean estaticos
Un atributo sttico que es heredado no puede ser no estatico en la clase hija al momento
de soreescribirlo

Tanto los atributos y metodos estaticos tienen que ser pulicos ya que si no tendremos
un error de acceso

ejemplo:

*/

class estatico{
    #nombramos atributos
    public static $atributo = 'es un atributo estatico';


    public static function Metodo(){
        $txt = 'tramemos a '. self::$atributo;//se puede acceder a un atributo estatico mediante self:: o llamando a la misma clase
        return "Este es un metodo estatico<br>".$txt;
    }

}
#instanciamos el objeto de la clase
$objeto = new estatico;
#llamamos al metodo estatico 
echo estatico::Metodo().'<br>';
echo $objeto->Metodo().'<br>';

#llamamos al atributo estatico
echo estatico::$atributo.'<br>';