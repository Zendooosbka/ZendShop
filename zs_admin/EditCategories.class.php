<?php
    require_once 'zs_admin/Edit.class.php';

    /* Удаляет категорию */

    class DeleteCategory extends Edit {
        
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
                $this->query = $this->database->prepare('CALL DeleteCategory(:id)');
                $this->query->bindParam(':id', $this->id);
                $this->query->execute();
            
                header('Location: http://'.$ROOT_PATH.'/admineditscb.php?good=Категория удалена');
            }
        }
    }

    /* Доавляет категорию */

    class AddCategory extends Edit {
        
        // Название нового раздела
        private $newname;
        
        // Номер раздела
        private $sectionid;
        
        /* Функции */
        
        // Конструктор класса, в качестве параметра принимает новое имя и ид раздела
        public function __construct($newname, $sectid) {
            parent::__construct();
            
            $this->sectionid = $sectid;
            $this->newname = $newname;
        }
        
        // Добавляет элемент
        public function make() {
            global $ROOT_PATH;
            
            if ($this->session->isadmin()) {
                if (strlen($this->newname) > 50) {
                    header('Location: http://'.$ROOT_PATH.'/admineditscb.php?error=Очень длинное название '.$this->newname);
                } else {
            
                    $this->query = $this->database->prepare('CALL AddNewCategory(:name, :id)');
                    $this->query->bindParam(':name', $this->newname);
                    $this->query->bindParam(':id', $this->sectionid);
                    $this->query->execute();
            
                    header('Location: http://'.$ROOT_PATH.'/admineditscb.php?good=Новая категория добавлена');
                }
            }
        }
    }

    /* Изменяет название категории */

    class UpdateCategoryName extends Edit {
        
        // Название измененного раздела раздела
        private $newname;
        
        // Ид изменяемого раздела
        private $id;
        
        
        
        /* Функции */
        
        // Конструктор класса, в качестве параметра принимает ид и имя нового раздела
        public function __construct($id, $newname) {
            parent::__construct();
            
            $this->newname = $newname;
            $this->id = $id;
            
        }
        
        // Изменяет элемент
        public function make() {
            global $ROOT_PATH;
            
            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL UpdateCategoryName(:id, :name)');
                $this->query->bindParam(':name', $this->newname);
                $this->query->bindParam(':id', $this->id);
                $this->query->execute();
            
                
                //print_r($this->query->errorInfo());
                header('Location: http://'.$ROOT_PATH.'/admineditscb.php?good=Название категории было изменено');
            }
        }
    }

    // Меняет раздел категории
    class UpdateCategorySection extends Edit {
        
        // Ид измененного раздела
        private $newsectid;
        
        // Ид изменяемой категории
        private $id;
        
        // Проверяет, будет ли запрос на изменение разделов
        private $enredirect;
        
        
        
        /* Функции */
        
        // Конструктор класса, в качестве параметра принимает ссылку ,ид и ид нового раздела
        public function __construct($id, $newsectid, $enredirect) {
            parent::__construct();
            
            $this->newsectid = $newsectid;
            $this->id = $id;
            $this->enredirect = $enredirect;
        }
        
        // Изменяет элемент
        public function make() {
            global $ROOT_PATH;
            
            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL UpdateCategorySection(:id, :ids)');
                $this->query->bindParam(':id', $this->id);
                $this->query->bindParam(':ids', $this->newsectid);
                $this->query->execute();
            
                if (!($this->enredirect)) {
                    header('Location: http://'.$ROOT_PATH.'/admineditscb.php?good=Категория была изменена');
                }
            }
        }
    }
?>