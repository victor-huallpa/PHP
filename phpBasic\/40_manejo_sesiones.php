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


*/
session_name('contador');
session_id('hola');
session_start();
