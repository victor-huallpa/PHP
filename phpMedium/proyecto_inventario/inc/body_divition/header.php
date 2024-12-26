
    <header>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="index.php?vista=home">
                    <img src="img/logo.png" alt="">
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="index.php?vista=home">
                        Home
                    </a>

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">Usuarios</a>

                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="index.php?vista=user_new">Nuevos</a>
                            <a class="navbar-item" href="index.php?vista=user_list">Lista</a>
                            <a class="navbar-item" href="index.php?vista=user_search">Buscar</a>
                        </div>

                    </div>

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">Categorias</a>

                        <div class="navbar-dropdown">
                            <a href="index.php?vista=category_new" class="navbar-item">Nuevos</a>
                            <a href="index.php?vista=category_list" class="navbar-item">Lista</a>
                            <a href="index.php?vista=category_search" class="navbar-item">Buscar</a>
                        </div>

                    </div>

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">Productos</a>

                        <div class="navbar-dropdown">
                            <a class="navbar-item">Nuevos</a>
                            <a class="navbar-item">Lista</a>
                            <a class="navbar-item">Categoria</a>
                            <a class="navbar-item">Buscar</a>
                        </div>

                    </div>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a href="index.php?vista=user_update&user_id_up=<?php echo $_SESSION['id']; ?>" class="button is-primary is-rounded">
                                Mi Cuenta
                            </a>
                            <a href="index.php?vista=logout" class="button is-light is-rounded">
                                Salir
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>