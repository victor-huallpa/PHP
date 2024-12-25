<body>
    <?php 
    if(empty($_GET['vista'])){
        $_GET['vista'] = 'login';
    }

    if(is_file("./views/".$_GET['vista'].".php") and $_GET['vista'] != 'login' and $_GET['vista'] != '404'){
        /*== Cerrar sesion ==*/
        if((!isset($_SESSION['id']) || $_SESSION['id']=="") || (!isset($_SESSION['usuario']) || $_SESSION['usuario']=="")){
            include "./views/logout.php";
            exit();
        }
        include_once "body_divition/header.php"; 
    
        include_once "./views/".$_GET['vista'].".php"; 
        
        include_once "body_divition/footer.php";
    }else{
        if($_GET['vista'] === 'login'){
            include_once "./views/login.php"; 
        }else{
            include_once "./views/404.php"; 
        }
    }

    
/*
NOTA: 
consulta mysql

SELECT * 
FROM nombre_tabla 
WHERE nombre_columna LIKE '%filtro%' 
ORDER BY nombre_columna ASC 
LIMIT 1, 3;

SELECT COUNT(*) 
FROM nombre_tabla 
WHERE nombre_columna LIKE '%filtro%' 
*/
    ?>
</body>
</html>