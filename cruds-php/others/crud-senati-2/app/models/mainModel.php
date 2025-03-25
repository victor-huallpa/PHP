<?php
    namespace app\models;
    use app\models\dbModel,PDO;

    class mainModel{
        //atributos
        private $conection;

        //constructor // obtiene conexion a base de datos
        public function __construct(){
            $this->conection = dbModel::getInstance();
        }
        //metodo ejecutar consulta
        public function execution($query, $params = []){
            $query = $this->conection->getconect()->prepate($query);
            if(isset($params) && count($params) > 0){
                foreach($params as $param){
                    $query->bindparam($param[0], $param[1], $param[2]);
                }
            }
            $query->execute();
            return $query;
        }
        //METODO PARA LIMPIAR CADENAS
        public function clearString($string){
			$palabras=["<script>","</script>","<script src","<script type=","SELECT * FROM","SELECT "," SELECT ","DELETE FROM","INSERT INTO","DROP TABLE","DROP DATABASE","TRUNCATE TABLE","SHOW TABLES","SHOW DATABASES","<?php","?>","--","^","<",">","==","=",";","::"];
            //quitamos espacios al principio y final
            $string = trim($string);
            //eliminamos barras invertidas
            $string = stripslashes($string);
            //itermaos las palabras prohibidas y remplazamos por ""
            foreach($palabras as $palabra){
                $string = str_ireplace($palabra, "", $string);
            }
            //quitamos de neuvo espcios y varras invertidas
            $string = trim($string);
            $string = stripslashes($string);
            //retornamos el string limpio
            return $string;
        }
        //METODO PARA VERIFICAR EXPRESIONES REGULARES
        public function validateExpresion($expression, $string){
            //validamos con preg_match en una condicional
            if(preg_match("/^".$expression."$/", $string)){
                return false;
            }
            else{
                return true;
            }
        }
        //METODO PARA SELECCIONAR DATOS/REGSITROS
        public function selection($type, $table, $field, $id){
            //reseteamos datos
            $type = $this->clearString($type);
            $table = $this->clearString($table);
            $field = $this->clearString($field);
            $id = $this->clearString($id);
            //tipo de adquisision de dato all or one
            if($type === "all"){
                $query = "SELECT * FROM :TAB";
                $params = [
                    [":TAB", $table, PDO::PARAM_STR]
                ];
            }elseif($type === "one"){
                $query = "SELECT * FROM :TAB WHERE :FIELD = :ID";
                $params = [
                    [":TAB", $table, PDO::PARAM_STR],
                    [":FIELD", $field, PDO::PARAM_STR],
                    [":ID", $id, PDO::PARAM_INT]
                ];
            }
            return $this->execution($query, $params);
        }
        //METODO PARA INSERTAR DATOS/REGSITROS
        public function insertion($table, $fields, $values){
            //reseteamos datos
            $table = $this->clearString($table);
            $fields = $this->clearString($fields);
            $values = $this->clearString($values);
            //preparamos la consulta
            $query = "INSERT INTO :TAB ";
            $contador = 0;
            foreach($fields as $field){
                if($contador > 0){$query .= ", ";}
                $query .= $field;
            }
        }
    }