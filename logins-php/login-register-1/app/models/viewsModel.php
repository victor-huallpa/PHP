<?php
    namespace app\models;

    class viewsModel{
        #metodo obtener la vista
        protected function obtenerVistaModelo ($vista){
            $listaBlanca = ['home'];

            if(in_array($vista,$listaBlanca)){
                if((!isset($_SESSION['id']) || $_SESSION['id']=="") || (!isset($_SESSION['usuario']) || $_SESSION['usuario']=="")){
                    $this->session();
                    exit();
                }
                if(is_file("./app/views/content/".$vista."-view.php")){
                    $contenido = "./app/views/content/".$vista."-view.php";
                }else{
                    $contenido = "404";
                }
            }elseif($vista == 'login' || $vista == 'index'){
                // echo $vista;
                $contenido = "login";
            }else{
                $contenido = "404";
            }
            return $contenido;
        }

        #metodo para verificar la sesion
        private function session(){
            session_destroy();
	
            if(headers_sent()){
                echo "<script> window.location.href='index.php?vista=login'; </script>";
            }else{
                header("Location: index.php?vista=login");
            }
        }

    }