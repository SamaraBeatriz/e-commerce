<?php
ini_set('default_charset','utf-8');

    class langController extends controller{
        private $user;
       
        public function __construct(){
            parent::__construct();
        }
       
        public function set($lang){
            $_SESSION['lang'] = $lang;
            header("Location: ".BASE_URL);
        }
    }
