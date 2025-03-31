<?php
    namespace app\controllers;
    use app\models\mainModel,PDO;

    class taskController extends mainModel{
        //METODO PARA MANDAR LOS REGISTROS A LA VISTA
        public function getTaskRegister(string $type = 'all', string $table = 'task', $id = null){
            if($type === 'all'){
                $registro = $this->selection($type, $table);

                if ($registro) {
                    // Ejecutar la consulta y obtener los resultados como un array asociativo
                    $resultados = $registro->fetchAll(PDO::FETCH_ASSOC);
                    $main = '';
                    foreach($resultados as $resultado){
                        $main .= '<tr>';
                        $main .= '<td>'.$resultado['title'].'</td>';
                        $main .= '<td>'.$resultado['description'].'</td>';
                        $main .= '<td>'.$resultado['created_at'].'</td>';
                        $main .= '<td>';
                        $main .= '<a href="'.APP_URL.'edit-task/'.$resultado['id'].'" class="btn btn-secondary">';
                        $main .= '<i class="fas fa-marker"></i>';
                        $main .= '</a>';
                        $main .= '<form action="'.APP_URL.'../app/ajax/taskAjax.php" method="POST" class="formAjax">';
                        $main .= '<input type="hidden" name="modulo-task" value="delete-task">';
                        $main .= '<input type="hidden" name="id-task" value="'.$resultado['id'].'">';
                        $main .= '<button class="btn-danger" name="update" >
                                    <i class="far fa-trash-alt"></i>
                                  </button>';
                        // $main .= '<a href="../app/ajax/taskAjax.php?modulo-task=delete-task&id-task='.$resultado['id'].'" class="btn btn-danger">';
                        // $main .= '<i class="far fa-trash-alt"></i>';
                        // $main .= '</a>';

                        $main .= '</form>';
                        $main .= '</td>';
                        $main .= '</tr>';
                    }
                    return $main; // Ahora mostrará los datos de la tabla
                } else {
                    $main = '<tr><td colspan="4">No se encontraron regsitros</td></tr>';
                    return $main; // Ahora mostrará los datos de la tabla
                }
            }else if($type === 'one'){
                $registro = $this->selection($type, $table, 'id', $id);
                if($registro){
                    $resultados = $registro->fetch(PDO::FETCH_ASSOC);
                    $main = '<form action="'.APP_URL.'../app/ajax/taskAjax.php" method="POST" class="formAjax">';
                    $main .= '<input type="hidden" name="modulo-task" value="update-task">';
                    $main .= '<input type="hidden" name="id-task" value="'.$resultados['id'].'">';
                    $main .= '<div class="form-group">
                                <input name="title" type="text" pattern="[a-zA-Z-á-é-í-ó-ú-Á-É-Í-Ó-Ú-ñ-Ñ0-9]+" class="form-control" value="'.$resultados['title'].'" placeholder="Update Title">
                            </div>';
                    $main .= '<div class="form-group">
                                <textarea name="description" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9]+" class="form-control" cols="30" rows="10">'.$resultados['description'].'</textarea>
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
        //METODO PARA AACTUALIZAR UN REGISTROS
        public function updateTask(){

            $id = $this->validateExpresion("[0-9]+", $_POST['id-task'])?$_POST['id-task'] : false;
            $title = $this->validateExpresion("[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9]+", $_POST['title']) ? $_POST['title'] :false; //no tine que existir dos titulosiguales
            $description = $this->validateExpresion("[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9]+", $_POST['description']) ? $_POST['description'] : false ;

            if($id === false || $title === false || $description === false){
                echo '<h3>error al actualizar los datos no cumplen con la validacion<?h3>';
                // header('location:'.APP_URL);
                exit();
            }

            $fields = [
                ['campo_nombre' => 'title', 'campo_marcador' => 'TITLE', 'campo_valor' => $title ],
                ['campo_nombre' => 'description', 'campo_marcador' => 'DESCRIPTION', 'campo_valor' => $description]
            ];
            $condition = ['campo_nombre' => 'id', 'campo_valor' => $id];

            $actualizar = $this->update('task', $fields, $condition);
            if($actualizar){
                header('location:'.APP_URL);
                // echo 'se actualizo correctamente';
            }else{
                echo ' error al actualizar';
            }  
        }
        //METODO PARA REGISTRAR UNA TAREA
        public function saveTask(){
            $table = 'task';
            $title = $this->validateExpresion("[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9]+", $_POST['title']) ? strtoupper($_POST['title']) :false; //no tine que existir dos titulosiguales
            $description = $this->validateExpresion("[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9]+", $_POST['description']) ? $_POST['description'] : false ;

            if($title === false || $description === false){
                echo '<h3>error al actualizar los datos no cumplen con la validacion<?h3>';
                // header('location:'.APP_URL);
                exit();
            }
            if(empty($title) || empty($description) || empty($table)){
                echo 'por favor los campos son obligatorios';
                exit();
            }
            $validaicon = $this->selection('one', $table, 'title', $title);
            if($validaicon->rowCount() >= 1){
                $resultados = $validaicon->fetch(PDO::FETCH_ASSOC);
                if($resultados['title'] === $title){
                    echo 'Lo sentimos la tarea que ingresaste ya existe';
                    exit();
                }
            }else if($validaicon->rowCount() >= 0){
                $fields = [
                    ['campo_nombre' => 'title', 'campo_marcador' => 'TITLE', 'campo_valor' => $title],
                    ['campo_nombre' => 'description', 'campo_marcador' => 'DESCRIPTION', 'campo_valor' => $description]
                ];
                if($this->insertion($table, $fields)){
                    header('location:'.APP_URL);
                }else{
                    echo 'error al insertar datos';
                }
            }else{
                echo 'error al insertar tarea, vuelva a intentarlo mas tarde';
                exit();
            }
        }
        //METODO PARA ELIMINAR UN REGISTRO
        public function deleteTaks(){
            $id = $_POST['id-task'];
            $table = 'task';
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

