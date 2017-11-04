<?php
    $ROOT_PATH = $_SERVER['SERVER_ADDR'].'/zendshop';

    class ZendDatabase extends PDO {
        private $Password;
        private $User;
        private $Mysqlstring;

        public function __construct() {
            $Password = '111111';
            $User = 'root';
            $Mysqlstring = 'mysql:host=localhost:3306;dbname=ZendShopDataBase';
            
            parent::__construct($Mysqlstring, $User, $Password);
            
            $this->exec("SET NAMES 'UTF-8'");
            $this->exec("SET CHARACTER SET 'utf8'");
        }
    }
?>