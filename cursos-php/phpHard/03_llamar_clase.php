<?php
    #incluimos el archivo que contiene la clase
    require_once "02_constructor.php";

    /*como el archivo ya esta incluido, lo unico que tenemos que realizar es instanciar y llamar a la clase */

    #instancia de objeto de la clse
    $goku = new MiPrimeraClase(nivel:150,nombre:"GOKU");//le asignamos el orden de los parametros
    $vegeta = new MiPrimeraClase("VEGETA",150);

    #acceder a los metodos/funciones
    echo $goku->Saludar().'<br>';
    echo $vegeta->Saludar("Mi nombre es ").'<br>';


    #acceder a un atriuto/variables de la clase
    // echo $goku->nombre.'<br>';
    // echo $goku->nivel_pelea.'<br>';


    // var_dump($goku);