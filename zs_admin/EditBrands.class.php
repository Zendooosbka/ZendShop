<?php
    require_once 'zs_admin/Edit.class.php';

    /* Удаляет брэнд */

    class DeleteBrand extends Edit {
        
        // ид удаляемого
        private $id;
        
        
        
        /* Функции */
        
        // Конструктор класса, в качестве параметров принимает ссылку на ид удаляемого бренда
        public function __construct($id) {
            parent::__construct();
            $this->id = $id;
        }
        
        // Удаляет элемент
        public function make() {
            global $ROOT_PATH;
            
            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL DeleteBrand(:id)');
                $this->query->bindParam(':id', $this->id);
                $this->query->execute();
            
                header('Location: http://'.$ROOT_PATH.'/admineditscb.php?good=Бренд удален');
            }
        }
    }

    /* Доавляет бренд */

    class AddBrand extends Edit {
        
        // Название бренда
        private $newname;
        
        // Описание бренда
        private $description;
        
        /* Функции */
        
        // Конструктор класса, в качестве параметра принимает новое имя и ид раздела
        public function __construct($newname, $desc) {
            parent::__construct();
            
            $this->description = $desc;
            $this->newname = $newname;
        }
        
        // Добавляет элемент
        public function make() {
            global $ROOT_PATH;
            
            if ($this->session->isadmin()) {
                if (strlen($this->newname) > 50) {
                    header('Location: http://'.$ROOT_PATH.'/admineditscb.php?error=Очень длинное название '.$this->newname);
                } else {
            
                    $this->query = $this->database->prepare('CALL AddNewBrand(:name, :descr)');
                    $this->query->bindParam(':name', $this->newname);
                    $this->query->bindParam(':descr', $this->description);
                    $this->query->execute();
            
                    header('Location: http://'.$ROOT_PATH.'/admineditscb.php?good=Новый бренд добавлен');
                }
            }
        }
    }

    /* Изменяет название бренда */

    class UpdateBrandName extends Edit {
        
        // Название измененного раздела раздела
        private $newname;
        
        // Ид изменяемого раздела
        private $id;
        
        // будет ли изменятся описание бренда
        private $descredting;
        
        
        
        /* Функции */
        
        // Конструктор класса, в качестве параметра принимает ид, имя нового раздела и булево значение которое говорит о том будет ли редактироваться описание бренда потом
        public function __construct($id, $newname, $descredting) {
            parent::__construct();
            
            $this->newname = $newname;
            $this->id = $id;
            $this->descredting = $descredting;
            
        }
        
        // Изменяет элемент
        public function make() {
            global $ROOT_PATH;
            
            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL UpdateBrandName(:id, :name)');
                $this->query->bindParam(':name', $this->newname);
                $this->query->bindParam(':id', $this->id);
                $this->query->execute();
                
                if ($this->descredting == false) {
                    header('Location: http://'.$ROOT_PATH.'/admineditscb.php?good=Название бренда изменено');
                }
            }
        }
    }

    /* Изенить описание бренда */

    class UpdateBrandDescription extends Edit {
        
        // Описание изменяемого бренда
        private $desc;
        
        // Ид изменяемого бренда
        private $id;
        
        
        
        /* Функции */
        
        // Конструктор класса, в качестве параметра принимает ид и новое описане бренда
        public function __construct($id, $newname) {
            parent::__construct();
            
            $this->desc = $newname;
            $this->id = $id;
            
        }
        
        // Изменяет элемент
        public function make() {
            global $ROOT_PATH;
            
            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL UpdateBrandDescription(:id, :name)');
                $this->query->bindParam(':name', $this->desc);
                $this->query->bindParam(':id', $this->id);
                $this->query->execute();
                
                //print_r($this->query->errorInfo());
                header('Location: http://'.$ROOT_PATH.'/admineditscb.php?good=Описание бренда было изменено');
            }
        }
    }

    /* Изенить картинку бренда */

    class UpdateBrandPicture extends Edit {
        
        // Путь к картинке
        private $path;
        
        // Ид изменяемого брнеда
        private $id;
        
        
        
        /* Функции */
        
        // Конструктор класса, в качестве параметра принимает ид и имя нового раздела
        public function __construct($id, $newpath) {
            parent::__construct();
            
            $this->path = $newpath;
            $this->id = $id;
            
        }
        
        // Изменяет элемент
        public function make() {
            global $ROOT_PATH;
            
            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL UpdateBrandPicture(:id, :name)');
                $this->query->bindParam(':name', $this->path);
                $this->query->bindParam(':id', $this->id);
                $this->query->execute();
                
                //print_r($this->query->errorInfo());
                header('Location: http://'.$ROOT_PATH.'/admineditscb.php?good=Картинка бренда была изменена '.$id);
            }
        }
    }
?>