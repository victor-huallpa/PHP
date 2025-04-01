<?php
    namespace app\controller;
    use app\model\mainModel;

    class userController extends mainModel{
        //METODO LOGIN USURIO
        public function loginUser(){
            
            $usuario = $_POST['mail'];
            $clave = $_POST['clave'];
            if(empty($usuario) || empty($clave)){
                return 'Todos los campos son obligatorios';
                exit;
            }
            if($this->validateExpresion("^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$", $usuario) === false){
                return 'El correo no es valido';
                exit;
            }

            $validacion = $this->selection('one', 'usuarios', 'usuario', $usuario );

            if($validacion->rowCount() === 1){
                $validacion = $validacion->fetch();
                if(password_verify($clave, $validacion['clave'])){
                    $_SESSION['usuario'] = $validacion['usuario'];
                }else{
                    return 'Contraseña incorrecta';
                }
            }else{
                return 'el usuario no existe, vuelva a intentarlo';
            }
        }
        //METODO LOGOUT USUARIO 'cerrar session'
        public function logoutUser(){
            session_unset();
            session_destroy();
            header('Location:'.APP_URL.'login');
        }
        //METODO REGSISTRAR USUARIO
        public function registerUser(){
            $datos = $_POST;
            $datos['clave'] = password_hash($datos['clave'], PASSWORD_DEFAULT);
            $this->insertion('usuarios', $datos);
            header('Location:'.APP_URL.'login');
        }
    }