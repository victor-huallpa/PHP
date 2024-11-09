<?php
# Array:
/*Tipo especial de datos, esots representad mapas ordenados de datos, se asocian datos a una clave 
conocidos como array asociativos.
-Los Array pueden almacenar diferentes tipos de datos sin ser necesaria mente los mismos como en 
otros lenguajes de programacion.
-En los array tambien se pueden alamacenar otros arrays, llamados arrays multidimensionales.
 */
//datos de un  array:
#Su nombre empieza con el signo de dolar '$'
#Es key sensitib, sensible a mayusculas y minusculas.
#se puede usar calmel case o sneke case para nombrarlas.
#Se le asigna valores despues de colocar el singo igual '='.
#Los elementos de un array se separan por comas ','
#El contenido de un array esta delimitado por parentesis '()' o corchetes '[]'.
#Si Abres o inicias un array con parentecis '()' estos deben ir despues de mencionar la palabra  array
#Se puede utilizar corchetes para signar los elementos directos de un array apartir de PHP 5.4.
#Los elementos de un arra ys epeude nactualizar despues de que ya tengan definidos los elementos.


 /*PHP soporta tanto array escalares (inidce, numero), array asociativos (inidce por clave) 
 -Para aceder a los elementos de un array se utiliza corchetes '[]' donde se indica el indice o clave del elemento
 -no se requiere definir prevaimente el array para usarlo, cuando se definen elementos de un array php los reconoce
 automaticamente que se trata de un array
 */

#Tipos de Arrays:
/*
-Escalares: Este tipo de array usa indice para acceder a sus elementos, el indice inicia desde 0.P*/
$estudiantes = ['Carlos','Jaun','Pedro'];
$utiles = array('lapices','colores','cuadernos');
echo $utiles[2],'<br />';
echo $estudiantes[0][5],$estudiantes[1],'<br />'; //si el array contiene solo elementos y al imprimirlo lo ahces mediante dos corchetes este dividira el elementos en pequenios indices y de mandara el resultado
$estudiantes[1] = 'David'; //acutalizacion del inidice 0, de Carlos a David
echo $estudiantes[1],'<br />';
echo count($estudiantes),'<br />';

/*
-Asociativos: Para acceder a los elementos del array se requiere una clave que lo vincule. utilizando sintaxis =>
'clave' => 'valor', la clave puede ser un tipo de dato strin, entero o flotante
*/
$cursos = ['curso1' => 'matematicas', 'curso2' => 'comunicacion', 'curso3' => 'ciencia tecnologia'];
echo $cursos['curso1'],'<br />';
echo $cursos['curso1'][2],'<br />';//apesar de la clave si divides el elemnto de la clave esto se divide en indice de 0 a mas
$cursos['curso1'] = 'historia';//actualizar el curso 1 de matematicas a historia.
echo $cursos['curso1'],'<br />';
echo count($cursos),'<br />';
/*
-MUltidimensionales: Es el almacenamiento de un array dentro de otro, no tenido fin de de alamcenara arras dentro de
                     otros. para acceder a sus elementos se tiene que poner tantos corchetes se requieran de acorde
                     a la dimension del array. 1 array [][], dos arrays [][][]... haci sucesivamente. dentro de los
                     corchetes se teine que especificar al arra yque acedes y el inidice del elemento.
*/
$tutotres = [
    'matematicas' => [
        'nombre' => ['Pedro','jakeline'],
        'apellido' => ['Perez', 'Fernandes'],
        'edad' => [
            'edad1' => '24',
            'edad2' => '45'
            ]
        ],
    'lengauje' => [
        'nombre' => 'jasmin',
        'apellido' => 'Quispe',
        'edad' => '20'
        ],
    'historia' => [
        'nombre' => 'Kely',
        'apellido' => 'Torres',
        'edad' => '35'
        ]
    ];
echo $tutotres['matematicas']['edad']['edad2'],'<br />';
echo $tutotres['matematicas']['nombre'][0],'<br />';
echo $tutotres['matematicas']['nombre'][0][3],'<br />';//al termnal o llegar al elemento del array. este elemento se divide en inidice de 0 a mas

$tutotres['matematicas']['edad']['edad2'] = 35 ; // actualizacion de la edad2 de un tutor de matematicas.
echo $tutotres['matematicas']['edad']['edad2'],'<br />';

$tutotres['economia']['nombre'] = 'Alejandra'; // agregar un nuevo array al array con un elemento
echo $tutotres['economia']['nombre'],'<br />'   ;

echo count($tutotres),'<br />'; // contar numero de elementos del array turores.
echo count($tutotres['matematicas']),'<br />';// contar numero de elementos del array matematicas que esta dentro del array de tutores

echo count($tutotres,COUNT_RECURSIVE),'<br />';// cuenta el  numero de elementos totales del array o dentro del array tutores


/*
Nota: los array tambien se pueden definir dentro de una cosntante, y toma sus caracteristicas como la de no poder actualizar o agregar elemetnos 
*/
const libros = ['matematica', 'comunicacion', 'ingles', 'historia'];

echo libros[3],'<br />';

define("historia",['peru','brazil','colombia']);
echo historia[1];