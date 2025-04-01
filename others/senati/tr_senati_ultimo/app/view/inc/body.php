<body>
    <?php 
        if($viewController['includeHeaderFooter'] === true){
            //footer
            include_once './../app/view/inc/layout/header.php';
            //main
            include_once $viewController['view'];
            //footer
            include_once './../app/view/inc/layout/footer.php';
            //script
        }else{
            //login || 404
            include_once $viewController['view'];
            //script
        }
    ?>
</body>