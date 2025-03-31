<?php
    namespace app\controllers;
    use app\models\mainModel,PDO;

    class userController extends mainModel{
        // METODO PARA MOSTAR LA LISTA DE USURIOAS
        public function getUserRegister(string $type = 'all', string $table = 'users', $id = null){
            if($type === 'all'){
                $registro = $this->selection($type, $table);

                if ($registro) {
                    // Ejecutar la consulta y obtener los resultados como un array asociativo
                    $resultados = $registro->fetchAll(PDO::FETCH_ASSOC);
                    $main = '';
                    foreach($resultados as $resultado){
                        $main .= '<tr>';
                        $main .= '<td>'.$resultado['id'].'</td>';
                        $main .= '<td>'.$resultado['usuario'].'</td>';
                        $main .= '<td>'.$resultado['clave'].'</td>';
                        $main .= '<td>'.$resultado['cargo'].'</td>';
                        $main .= '<td>';
                        $main .= '<a href="'.APP_URL.'edit-user/'.$resultado['id'].'" class="btn btn-secondary">';
                        $main .= '<i class="fas fa-marker"></i>';
                        $main .= '</a>';
                        $main .= '<form action="'.APP_URL.'../app/ajax/userAjax.php" method="POST" class="formAjax">';
                        $main .= '<input type="hidden" name="modulo-user" value="delete-user">';
                        $main .= '<input type="hidden" name="id-user" value="'.$resultado['id'].'">';
                        $main .= '<button class="btn-danger" name="update" >
                                    <i class="far fa-trash-alt"></i>
                                  </button>';
                        $main .= '</form>';
                        $main .= '</td>';
                        $main .= '</tr>';
                    }
                    return $main; // Ahora mostrará los datos de la tabla
                } else {
                    $main = '<tr><td colspan="5">No se encontraron regsitros</td></tr>';
                    return $main; // Ahora mostrará los datos de la tabla
                }
            }else if($type === 'one'){
                $registro = $this->selection($type, $table, 'id', $id);
                if($registro){
                    $resultados = $registro->fetch(PDO::FETCH_ASSOC);
                    $main = '<form action="'.APP_URL.'../app/ajax/userAjax.php" method="POST" class="formAjax">';
                    $main .= '<input type="hidden" name="modulo-user" value="update">';
                    $main .= '<input type="hidden" name="id-user" value="'.$resultados['id'].'">';
                    $main .= '<div class="form-group">
                                <input name="usuario" type="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" class="form-control" value="'.$resultados['usuario'].'" placeholder="Update Title">
                            </div>';
                    $main .= '<div class="form-group">
                                <input type="text" name="clave" class="form-control" value ="'.$resultados['clave'].'">
                             </div>';
                    $main .= '<button class="btn-success" name="update">
                                Update
                             </button>';
                    $main .= '</form>';
                    return $main;
                }else{
                    $main = '<h3>No se encontraron registros</h3>';
                    return $main;
                }
            }


        }
        //METODO PARA AACTUALIZAR UN USUARIO
        public function updateUser(){

            $id = $this->validateExpresion("[0-9]+", $_POST['id-user'])?$_POST['id-user'] : false;
            $usuario = $this->validateExpresion("^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$", $_POST['usuario']) ? $_POST['usuario'] :false; //no tine que existir dos titulosiguales
            $clave = $this->validateExpresion("[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9]+", $_POST['clave']) ? $_POST['clave'] : false ;

            if($id === false || $usuario === false || $clave === false){
                echo '<h3>error al actualizar los datos no cumplen con la validacion<?h3>';
                // header('location:'.APP_URL);
                exit();
            }

            $fields = [
                ['campo_nombre' => 'usuario', 'campo_marcador' => 'USER', 'campo_valor' => $usuario ],
                ['campo_nombre' => 'clave', 'campo_marcador' => 'CLAVE', 'campo_valor' => $clave]
            ];
            $condition = ['campo_nombre' => 'id', 'campo_valor' => $id];

            $actualizar = $this->update('users', $fields, $condition);
            if($actualizar){
                header('location:'.APP_URL);
                // echo 'se actualizo correctamente';
            }else{
                echo ' error al actualizar DATOS DE USUARIO';
            }  
        }
        //METODO PARA REGISTRAR UN USUARIO
        public function saveUser(){
            $table = 'users';
            $usuario = $this->validateExpresion("[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9]+", $_POST['usuario']) ? $_POST['usuario'] :false; //no tine que existir dos titulosiguales
            $clave = $this->validateExpresion("[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9]+", $_POST['clave']) ? $_POST['clave'] : false ;

            if($usuario === false || $clave === false){
                echo '<h3>error al actualizar los datos no cumplen con la validacion<?h3>';
                // header('location:'.APP_URL);
                exit();
            }
            if(empty($usuario) || empty($clave) || empty($table)){
                echo 'por favor los campos son obligatorios';
                exit();
            }
            echo $usuario;
            $validacion = $this->selection('one', $table, 'usuario', $usuario);
            if($validacion->rowCount() >= 1){
                $resultados = $validacion->fetch(PDO::FETCH_ASSOC);
                var_dump($resultados);
                if($resultados['usuario'] === $usuario){
                    echo 'El usurio que intentas registrar ya existe, prueva con otro usuario.';
                    exit();
                }
            }else if($validacion->rowCount() === 0){
                $fields = [
                    ['campo_nombre' => 'usuario', 'campo_marcador' => 'USER', 'campo_valor' => $usuario],
                    ['campo_nombre' => 'clave', 'campo_marcador' => 'CLAVE', 'campo_valor' => $clave],
                    ['campo_nombre' => 'privilegio', 'campo_marcador' => 'PRIVILEGION', 'campo_valor' => 'NO']
                ];
                if($this->insertion($table, $fields)){
                    header('location:'.APP_URL);
                }else{
                    echo 'error al insertar datos';
                    exit();
                }
            }else{
                echo 'Ocurrio un error al intentar registrar intente mas tarde';
                exit();
            }

        }
        //METODO PARA ELIMINAR UN USUARIO
        public function deleteUser(){
            $id = $_POST['id-user'];
            $table = 'users';
            $field = 'id';
            $delete = $this->deletion($table, $field, $id);
            if($delete){
                header('location:'.APP_URL);
            }else{
                echo 'OCURRIO UN ERROR AL ELIMINAR EL REGISTRO';
                exit();
            }
        }
    }