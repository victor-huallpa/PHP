<?php
    namespace app\model;

    class viewModel{
        //METODO PARA DEVOLVER VISTA
        public function getViewModel($view){
            $viewListWhite = ['asistencia'];
            if(in_array($view, $viewListWhite)){
                if(file_exists('../view/content/'.$view.'-view.php')){
                    return [
                        'view' => './../app/view/content/'.$view.'-view.php',
                        'includeHeaderFooter' => true
                    ];
                }else{
                    return [
                        'view' => './../app/view/content/404-view.php',
                        'includeHeaderFooter' => false
                    ];
                }
            }elseif($view === 'login' || $view === 'registro'){
                return [
                    'view' => './../app/view/content/'.$view.'-view.php',
                    'includeHeaderFooter' => false
                ];
            }else{
                return [
                    'view' => './../app/view/content/404-view.php',
                    'includeHeaderFooter' => false
                ];
            }
        }
    }