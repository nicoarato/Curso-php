<?php

require_once 'config/database.php';

class ModeloBase{
    public $db;
    
    public function __construct(){
        $this->db= database::conectar();
    }
    
    
    
    public function conseguirTodos($tabla){
        //var_dump($this->db); // debe devolver un obj mysqli
        $query = $this->db->query("SELECT * FROM $tabla ORDER BY id DESC");

        return $query;
    }

    

}