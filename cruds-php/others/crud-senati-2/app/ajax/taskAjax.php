<?php
	
	require_once "../../config/env.php";
	// require_once "../views/inc/session_start.php";
	require_once "../../public/autoload.php";
	
	use app\controllers\taskController;

	if(isset($_POST['modulo-task'])){

		$insUsuario = new TaskController();

		if($_POST['modulo-task']=="create-task"){
			echo $insUsuario->saveTask();
		}

		if($_POST['modulo-task']=="delete-task"){
			echo $insUsuario->deleteTaks();
		}

		if($_POST['modulo-task']==="update-task"){
			echo $insUsuario->updateTask();
		}
		
	}else{
		session_destroy();
		header("Location: ".APP_URL."login/");
	}