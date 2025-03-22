<?PHP
session_start();//cuanod se inicia la sesion se peude traer las variables de sesion simplemente mencionandolas

if(isset($_SESSION['usuario'])){
echo 'usuario: '. $_SESSION['usuario'].' estatus: '.$_SESSION['status'].'</br>';

}
else{
    echo 'no hay datos';
}
?>