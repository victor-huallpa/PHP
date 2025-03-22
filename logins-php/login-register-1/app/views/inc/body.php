<body>
    <?php 
    // codigo para ver errores que se generan
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
        use app\controllers\viewsController;

        $viewController = new viewsController();
        #guardamos la ruta de lo que captura la captura de la url
        $vista = $viewController->obtenerVistaController($url[0]);
        
        #validar vista
        if($vista == 'login' || $vista == '404'){
        ?>
            <!-- incluir el contenido de la pagina -->
            <main>
                <?php include_once './app/views/content/'.$vista.'-view.php'; ?>
            </main>
            <?php include_once 'layouts/footer.php';

        }else{
            include_once 'layouts/header.php'; 
            ?>
            <!-- incluir el contenido de la pagina -->
            <main>
                <?php include_once $vista; ?>
            </main>
        <?php
            include_once 'layouts/footer.php';
        }
    ?>
</body>
</html>