<?php
ini_set('default_charset','utf-8');

    class notFoundController extends controller {
        public function __construct() {
            parent::__construct();
        }
        
        public function index() {
            $dados = array();
            
            $this->loadview('404', $dados);
        }
    }
