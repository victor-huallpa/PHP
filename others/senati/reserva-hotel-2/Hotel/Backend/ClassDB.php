<?php
class Conexion{
    static public function conectar(){
        $dbHost     = "localhost"; 
        $dbUsername = "root"; 
        $dbPassword = ""; 
        $dbName     = "hotel";
        try{ 
            $conn = new PDO("mysql:host=".$dbHost.";dbname=".$dbName, $dbUsername, $dbPassword); 
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn -> exec("set names utf8");
            return $conn; 
        }catch(PDOException $e){ 
            die("Failed to connect with MySQL: " . $e->getMessage()); 
        }
    }
}
class DB{
    public function insert($table,$data){
        $resp = array();
        if(!empty($data) && is_array($data)){ 
            //$columns = ''; 
            //$values  = ''; 
            //$i = 0; 
            if(!array_key_exists('created',$data)){ 
                $data['created'] = date("Y-m-d H:i:s"); 
            } 
            if(!array_key_exists('modified',$data)){ 
                $data['modified'] = date("Y-m-d H:i:s"); 
            } 
 
            $columnString = implode(',', array_keys($data)); 
            $valueString = ":".implode(',:', array_keys($data)); 
            $sql = "INSERT INTO ".$table." (".$columnString.") VALUES (".$valueString.")";
            $conexion =  Conexion::conectar(); //optimizacion
            $query = $conexion->prepare($sql); 
            foreach($data as $key=>$val){ 
                 $query->bindValue(':'.$key, $val); 
            } 
            $insert = $query->execute();
            $resp['sql'] = $sql;
            $resp['resp'] = $insert? $conexion->lastInsertId():false;
            return $resp;
        }else{ 
            $resp['sql'] = '';
            $resp['resp'] = false;
            return $resp; 
        } 
    }
    public function getRows($table,$conditions = array()){
        $resp = array();
        $sql = 'SELECT '; 
        $sql .= array_key_exists("select",$conditions)?$conditions['select']:'*'; 
        $sql .= ' FROM '.$table; 
        if(array_key_exists("where",$conditions)){ 
            $sql .= ' WHERE '; 
            $i = 0; 
            foreach($conditions['where'] as $key => $value){ 
                $pre = ($i > 0)?' AND ':''; 
                $sql .= $pre.$key." = '".$value."'"; 
                $i++; 
            } 
        } 
         
        if(array_key_exists("order_by",$conditions)){ 
            $sql .= ' ORDER BY '.$conditions['order_by'];  
        } 
         
        if(array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){ 
            $sql .= ' LIMIT '.$conditions['start'].','.$conditions['limit'];  
        }elseif(!array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){ 
            $sql .= ' LIMIT '.$conditions['limit'];  
        } 
         
        $query = Conexion::conectar()->prepare($sql); 
        $query->execute(); 
         
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){ 
            switch($conditions['return_type']){ 
                case 'count': 
                    $data = $query->rowCount(); 
                    break; 
                case 'single': 
                    $data = $query->fetch(PDO::FETCH_ASSOC); 
                    break; 
                default: 
                    $data = ''; 
            } 
        }else{ 
            if($query->rowCount() > 0){ 
                $data = $query->fetchAll(); 
            } 
        }
        $resp['sql'] = $sql;
        $resp['resp'] = !empty($data)?$data:false;
        return $resp;
    }
    public function update($table,$data,$conditions){
        $resp = array();
        if(!empty($data) && is_array($data)){ 
            $colvalSet = ''; 
            $whereSql = ''; 
            $i = 0; 
            if(!array_key_exists('modified',$data)){ 
                $data['modified'] = date("Y-m-d H:i:s"); 
            } 
            foreach($data as $key=>$val){ 
                $pre = ($i > 0)?', ':''; 
                $colvalSet .= $pre.$key."='".$val."'"; 
                $i++; 
            } 
            if(!empty($conditions)&& is_array($conditions)){ 
                $whereSql .= ' WHERE '; 
                $i = 0; 
                foreach($conditions as $key => $value){ 
                    $pre = ($i > 0)?' AND ':''; 
                    $whereSql .= $pre.$key." = '".$value."'"; 
                    $i++; 
                } 
            } 
            $sql = "UPDATE ".$table." SET ".$colvalSet.$whereSql; 
            $query = Conexion::conectar()->prepare($sql); 
            $update = $query->execute();
            $resp['sql'] = $sql;
            $resp['resp'] = $update?$query->rowCount():false;
            return $resp; 
        }else{ 
            $resp['sql'] = '';
            $resp['resp'] = false;
            return $resp; 
        } 
    }
    public function delete($table,$conditions){
        $resp = array();
        $whereSql = ''; 
        if(!empty($conditions)&& is_array($conditions)){ 
            $whereSql .= ' WHERE '; 
            $i = 0; 
            foreach($conditions as $key => $value){ 
                $pre = ($i > 0)?' AND ':''; 
                $whereSql .= $pre.$key." = '".$value."'"; 
                $i++; 
            } 
        } 
        $sql = "DELETE FROM ".$table.$whereSql; 
        $delete = Conexion::conectar()->exec($sql);
        $resp['sql'] = $sql;
        $resp['resp'] = $delete?$delete:false; 
        return $resp; 
    }
}