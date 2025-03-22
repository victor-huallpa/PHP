<?php
    namespace app\controllers;
    use  app\models\viewsModel;

    class viewsController extends viewsModel{
        #metodo
        public function obtenerVistaController ($vista){

            if($vista != ''){
                $respuesta = $this->obtenerVistaModelo($vista);
                // $respuesta = 'hola';

            }else{
                $respuesta = "login";
            }
            return $respuesta;
        }
    }