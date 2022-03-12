<?php
    namespace Xavierdan\GalaxySwissBourdin\Models;
    
    use Xavierdan\GalaxySwissBourdin\App\Database;

    class MainModel{
        protected $db;
        
        public function __construct(){
            $this->db = new Database();
        }
        
        public function read($stmt, $param = null){
            return $this->db->query($stmt,[$param])->fetchAll();
        }
    }
    