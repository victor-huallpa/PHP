<?php
	
	require_once "../../config/env.php";
	// require_once "../views/inc/session_start.php";
	require_once "../../public/autoload.php";
	
	use app\controllers\userController;

	if(isset($_POST['modulo-user'])){

		$insUsuario = new userController();

		if($_POST['modulo-user']==="update"){
			echo $insUsuario->updateUser();
		}

		if($_POST['modulo-user']=="delete-user"){
			echo $insUsuario->deleteUser();
		}

		if($_POST['modulo-user']=="create-user"){
			echo $insUsuario->saveUser();
		}
		
	}else{
		session_destroy();
		header("Location: ".APP_URL."login/");
	}