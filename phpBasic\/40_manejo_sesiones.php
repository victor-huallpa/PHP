<?php
/*
Las sessiones en php es para almacenar informacion durante toda la visita a la web dicha informacion
se almacena en el servidor

ejemplos de uso:
login
busqueda de inforamcion que recuerde la busqueda

SINTAXIS:

session_name('nombre de la session');// se le asigna un nombre a la sesion
session_id();//se le aniade un identificador a la sesion
session_start();//se inicia la sesion
session_destroy();// destruye la sesion por complet
session_unset();//elimina todas las variables de sesiones


*/
session_name('contador');
session_id('hola');
session_start();

#varriables de session

$_SESSION['contador'] = 1;//las varaibles de sesion solo secrean si se inicio sesion

echo $_SESSION['contador'];


// session_unset();
// session_unset();
/*

NOTA: cuando inicies session y utilices variables de sesion que contenga informacion, esta informacion
podras usarla en cualquier parte del proyecto que estes realizando siempre i cuando tambien en la parte 
que quieras usar est ainformacion inicies sesion y llames a la variable de sesion*/