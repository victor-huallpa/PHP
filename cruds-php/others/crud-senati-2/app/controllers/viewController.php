<?php
    namespace app\controllers;
    use app\models\viewModel;

    class viewController extends viewModel{
        //METODO PARA COMINUCAR VISTA
        public function showViewController($view){
            $viewModel = $this->getViewModel($view);
            //manejo de la vistas
            if ($viewModel['includeHeaderFooter']) {
                include './../app/views/inc/layout/header.php';
                include $viewModel['view'];
                include './../app/views/inc/layout/footer.php';
            } else {
                include $viewModel['view'];
            }
        }
    }