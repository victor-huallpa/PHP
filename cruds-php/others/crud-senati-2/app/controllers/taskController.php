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
                        $main .= '<a href="'.APP_URL.'delete-task/'.$resultado['id'].'" class="btn btn-danger">';
                        $main .= '<i class="far fa-trash-alt"></i>';
                        $main .= '</a>';
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
                                <input name="title" type="text" class="form-control" value="'.$resultados['title'].'" placeholder="Update Title">
                            </div>';
                    $main .= '<div class="form-group">
                                <textarea name="description" class="form-control" cols="30" rows="10">'.$resultados['description'].'</textarea>
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

    }

