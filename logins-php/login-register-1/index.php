<?php
    require_once './config/app.php';
    require_once './autoload.php';
    include_once './app/views/inc/session_start.php';

    //validar el get que viene en la url o caso contrario darele un valor
    if(isset($_GET['vista'])){
        $url = explode("/",$_GET['vista']);
    }else{
        $url = ['login'];
    }

    // echo $url[0];
    include_once './app/views/inc/head.php';
    include_once './app/views/inc/body.php';
