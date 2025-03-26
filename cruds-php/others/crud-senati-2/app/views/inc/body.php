<body class="cuerpo">

<?php 
    use app\controllers\viewController;
    $showView =  new viewController();
    $showView->showViewController($url[0]);
?>
    
</body>
</html>
