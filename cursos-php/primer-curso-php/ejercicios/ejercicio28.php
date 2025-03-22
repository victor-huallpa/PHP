<?PHP
//inicio de sesion con datos y variables de inicio de sesion
session_start();

$_SESSION['usuario']="vech";
$_SESSION['status']="logeado";


echo 'sesion iniciada'.'</br>';

echo 'usuario: '. $_SESSION['usuario'].' estatus: '.$_SESSION['status'].'</br>';



?>