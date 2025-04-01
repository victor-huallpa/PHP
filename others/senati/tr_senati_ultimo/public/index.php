<?php
    include_once '../config/autoload.php';
    include_once '../config/env.php';
    include_once '../config/error.php';
    include_once '../config/session-start.php';
    //RUTA DE LA VARIABLE VIEW DE INDEX
    $url = isset($_GET['views']) && !empty($_GET['views']) ? explode("/", $_GET['views']) : ['login'];
    //INCLUCION DE CONTENIDO
    include_once '../app/view/inc/head.php';
    include_once '../app/view/inc/body.php';

