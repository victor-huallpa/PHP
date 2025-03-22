<?php
/*
PHP tiene un modelo de excepciones similar al de otros lenguajes de programación. 
Una excepción puede ser lanzada ("thrown"), y atrapada ("catched") dentro de PHP. El 
código puede estar dentro de un bloque try para facilitar la captura de excepciones 
potenciales. Cada bloque try debe tener al menos un bloque catch o finally 
correspondiente. 

sintaxis:

try(){
}catch{
}finally
*/

#definimos la funcion que devolvera la excepcion
#no es necesario definirla ya que php tiene una aplia gama de excepciones predefinidas que puede
#manejar solo lee la documentacion para saber cuales son estas excepciones.
function inversa($valor) {
    if (!$valor) {
        throw new Exception('División por cero.');
    }
    return 1/$valor;
}

#manejo de ecepcion
try {//se ejecuta lo que esta dentro de try y encaso exista un error en las lineas  
    //de codigo se buscara el catch que maneje dicho error o finally
    echo inversa(5) . "<br>";
} catch (Exception $e) {//en caso exista un error con esta excepcion se ejecuta este catch
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
} finally {//se ejcuta por defento ya que es el final de un manejo de error
    echo "Primer finally.<br>";
}

//analiza este majejo de ecepcion y di cual crees que sera el resultado
try {
    echo inversa(0) . "\n";
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
} finally {
    echo "Segundo finally.<br>";
}

// Continuar ejecución
echo 'Hola Mundo<br>';

/*
NOTA: Recomendamos leer la documentaicon para entender mas sobre el manejo de excepciones

LINKS:
    Try,CATCH y FINALLY: https://www.php.net/manual/es/language.exceptions.php
    
    AMPLIACION DE EXEPCIONES: https://www.php.net/manual/es/language.exceptions.extending.php

    EXCEPCIONES PREDEFINIDAS: https://www.php.net/manual/es/reserved.exceptions.php
*/
