<?php
/*
Los traits tambein se pueden conbinar o hacer una clase de polimorfirmos o hereencia
*/

#creamos el trait para combinar los otros dos traits ya creados
trait TecnicasCombinadas {
    use TectnicasSimples, TectnicasEspeciales;

}