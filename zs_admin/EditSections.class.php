<?php
    require_once 'zs_admin/Edit.class.php';

    /* Удаляет раздел */

    class DeleteSection extends Edit {
        
        // ид удаляемого
        private $id;
        
        
        
        /* Функции */
        
        // Конструктор класса, в качестве параметров принимает ссылку на PDO и ид удаляемого раздела
        public function __construct($id) {
            parent::__construct();
            $this->id = $id;
        }
        
        // Удаляет элемент
        public function make() {
            global $ROOT_PATH;
            
            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL DeleteSection(:id)');
                $this->query->bindParam(':id', $this->id);
                $this->query->execute();
            
                header('Location: http://'.$ROOT_PATH.'/admineditscb.php?good=Раздел удален');

            }
        }
    }

    /* Доавляет раздел */

    class AddSection extends Edit {
        
        // Название нового раздела
        private $newname;
        
        
        /* Функции */
        
        // Конструктор класса, в качестве параметра принимает ссылку на объект пдо и имя нового раздела
        public function __construct($newname) {
            parent::__construct();
            
            $this->newname = $newname;
        }
        
        // Добавляет элемент
        public function make() {
            global $ROOT_PATH;
            
            if ($this->session->isadmin()) {
                if (strlen($this->newname) > 30) {
                    header('Location: http://'.$ROOT_PATH.'/admineditscb.php?error=Очень длинное название');
                } else {
            
                    $this->query = $this->database->prepare('CALL AddNewSection(:name)');
                    $this->query->bindParam(':name', $this->newname);
                    $this->query->execute();
            
                    header('Location: http://'.$ROOT_PATH.'/admineditscb.php?good=Новый раздел добавлен');
                }
            }
        }
    }

    /* Изменяет раздел */

    class UpdateSection extends Edit {
        
        // Название измененного раздела раздела
        private $newname;
        
        // Ид изменяемого раздела
        private $id;
        
        
        /* Функции */
        
        // Конструктор класса, в качестве параметра принимает ссылку на объект пдо ,ид и имя нового раздела
        public function __construct($id, $newname) {
            parent::__construct();
            $this->id = $id;
            $this->newname = $newname;
        }
        
        // Изменяет элемент
        public function make() {
            global $ROOT_PATH;
            
            if ($this->session->isadmin()) {
                if (strlen($this->newname) > 30) {
                    header('Location: http://'.$ROOT_PATH.'/admineditscb.php?error=Очень длинное название');
                } else {
            
                    $this->query = $this->database->prepare('CALL UpdateSectionName(:id, :name)');
                    $this->query->bindParam(':id', $this->id);
                    $this->query->bindParam(':name', $this->newname);
                    $this->query->execute();
            
                    header('Location: http://'.$ROOT_PATH.'/admineditscb.php?good=Раздел изменен');
                }
            }
        }
    }
?>