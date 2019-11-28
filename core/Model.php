<?php
ini_set('default_charset','utf-8');


    class model {
        
        protected $db;
        
        public function __construct() {
            global $db;
            $this->db = $db;
        }
    }
?>