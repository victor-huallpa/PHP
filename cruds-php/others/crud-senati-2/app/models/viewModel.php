<?PHP
    namespace app\models;

    class viewModel{
        //MODELO PARA OBTENER VISTA
        public function getViewModel($view){
            $viewListWhite = ['home', 'edit'];
            if(in_array($view, $viewListWhite)){
                if(file_exists('./../app/views/content/'.$view.'-view.php')){
                    return [
                        'view' => './../app/views/content/' . $view . '-view.php',
                        'includeHeaderFooter' => true
                    ];
                }else{
                    return [
                        'view' => './../app/views/content/404-view.php',
                        'includeHeaderFooter' => false
                    ];
                }
            }elseif($view === 'login'){
                return [
                    'view' => './../app/views/content/login-view.php',
                    'includeHeaderFooter' => false
                ];
            }else{
                return [
                    'view' => './../app/views/content/404-view.php',
                    'includeHeaderFooter' => false
                ];
            }
        }
    }