<?php
    namespace app\controller;
    use app\model\viewModel;

    class viewController extends viewModel{
        //METODO PARA DEVOLER VISTA
        public function showView($view){
            if(!empty($_SESSION['usuario']) && $view !== 'login'){
                $viewModel = $this->getViewModel($view);
            }else if($view === 'login' || $view === 'registro'){
                $viewModel = $this->getViewModel($view);
            }else{
                $viewModel = $this->getViewModel('404');
            }
            return $viewModel;
        }
    }