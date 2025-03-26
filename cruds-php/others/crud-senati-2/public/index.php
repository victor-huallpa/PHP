<?php 
include_once './autoload.php';

include_once './../config/error.php';
$url = isset($_GET['views']) && !empty($_GET['views']) ? explode("/", $_GET['views']) : ['home'];
// echo $url[0];

include_once './../app/views/inc/head.php';

include_once './../app/views/inc/body.php';
// echo __DIR__;
?>