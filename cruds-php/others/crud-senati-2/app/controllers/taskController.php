<?php
    namespace app\controllers;
    use app\models\mainModel,PDO;

    class taskController extends mainModel{
        //METODO PARA MANDAR LOS REGISTROS A LA VISTA
        public function getTaskRegister(){
            $registro = $this->selection('all', 'task');
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

        }
    }

