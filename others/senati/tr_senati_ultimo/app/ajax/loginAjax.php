<?php
	require_once "./../../config/error.php";
	require_once "./../../config/env.php";
    include_once './../../config/autoload.php';

    use app\controller\userController;

    if(isset($_POST['modulo-login'])){
        $instancia = new userController();
        if($_POST['modulo-login'] === 'login'){
            echo $instancia->loginUser();
        }

        if($_POST['modulo-login'] === 'registro'){
            echo $instancia->registerUser();
        }

        if($_POST['modulo-login'] === 'asistencia'){
            echo $_POST['id'];
            // echo $instancia->registerUser();
        }
    }else{
        session_unset();
        session_destroy();
        header('Location:'.APP_URL.'login');
    }