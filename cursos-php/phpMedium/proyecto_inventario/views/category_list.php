<main>
    <div class="container is-fluid mb-6">
        <h1 class="title">Categorías</h1>
        <h2 class="subtitle">Lista de categoría</h2>
    </div>

    <div class="container pb-6 pt-6">

    <?php  
        // codigo para ver errores que se generan
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        require_once "./php/main.php";

        # Eliminar categoria #
        if(isset($_GET['category_id_del'])){
            require_once "./php/categoria_eliminar.php";
        }

        if(!isset($_GET['page'])){
            $pagina=1;
        }else{
            $pagina=(int) $_GET['page'];
            if($pagina<=1){
                $pagina=1;
            }
        }

        $pagina=limpiar_cadena($pagina);
        $url="index.php?vista=category_list&page=";
        $registros=15;
        $busqueda="";

        # Paginador usuario #
        require_once "./php/categoria_lista.php";
    ?>


        
    </div>
</main>