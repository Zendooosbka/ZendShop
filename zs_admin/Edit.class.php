<?php
    require_once 'zs_system/Session.class.php';
    require_once 'zs_system/ZendDatabase.class.php';

    /* Общий класс (Для того что бы не повторяться) */

    class Edit {
        
        // Ссылка на PDO
        protected $database;
        
        // Выполняем запросы
        protected $query;
        
        // Сессия админа
        protected $session;
        
        
        
        /* Функции */
        
        // Конструктор
        public function __construct() {
            global $ROOT_PATH;
            
            $this->database = new ZendDatabase();
            $this->session = new Session($this->database);
            
            if ($this->session->isadmin() == false) {
                header('Location: http://'.$ROOT_PATH.'/Index.php');
            }
        }
    }
?>