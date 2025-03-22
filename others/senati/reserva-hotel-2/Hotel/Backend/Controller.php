<?php

require('../ClassDB.php');

class Controller {
    private $table;
    private $DB;
    public function __construct($table)
    {
        $this->table = $table;
        $this->DB = new DB();
    }
    public function getData($conditions = null)
    {
        $filter = ($conditions != null) ? $conditions : array('order_by' => 'id DESC');
        $resp = $this->DB->getRows($this->table, $filter);
        return $resp;
    }
    public function seeData($id)
    {
        $conditions = array( 
            'where' => array( 
                'id' => $id 
            ), 
            'return_type' => 'single' 
        );
        $resp = $this->DB->getRows($this->table, $conditions);
        return $resp;
    }
    public function insert($data = array())
    {
        $resp = $this->DB->insert($this->table, $data);
        return $resp;
    }
    public function update($data = array(), $conditions = array())
    {
        $resp = $this->DB->update($this->table, $data, $conditions);
        return $resp;
    }
    public function delete($conditions = null)
    {
        $resp = $this->DB->delete($this->table, $conditions);
        return $resp;
    }
}