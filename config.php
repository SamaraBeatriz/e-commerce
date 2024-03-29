<?php
ini_set('default_charset','utf-8');

    require 'environment.php';

    global $config;
    global $db;

    $config = array();

    if(ENVIRONMENT == 'development'){
        define("BASE_URL","http://localhost/e-commerce/");
        $config['dbname'] = 'bancoloja';
        $config['host'] = 'localhost';
        $config['dbuser'] = 'root';
        $config['dbpass'] = '';
    }

    else{
        define("BASE_URL","");
        $config['dbname'] = '';
        $config['host'] = '';
        $config['dbuser'] = '';
        $config['dbpass'] = '';
    }

    $config['default_lang'] = 'pt-br';

    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
