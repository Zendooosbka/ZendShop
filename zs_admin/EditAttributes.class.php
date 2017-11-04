<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 03.11.17
 * Time: 17:42
 */
    require_once 'zs_admin/Edit.class.php';

    /* Удаляет атрибут */

    class DeleteAttribute extends Edit {

        // ид удаляемого
        private $id;

        // Ид продукта
        private $productid;

        /* Функции */

        // Конструктор класса, в качестве параметров принимает ссылку на PDO и ид удаляемого атрибута
        public function __construct($id, $productid) {
            parent::__construct();
            $this->id = $id;
            $this->productid = $productid;
        }

       // Удаляет элемент
        public function make() {
            global $ROOT_PATH;

            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL DeleteAttribute(:id)');
                $this->query->bindParam(':id', $this->id);
                $this->query->execute();

                header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?productid='.$this->productid.'&good=Атрибут удален');
            }
        }
    }

    /* Доавляет атрибут */

    class AddAttribute extends Edit {

        // Название нового атрибута
        private $newname;

        // Ид продукта
        private $productid;

        /* Функции */

        // Конструктор класса, в качестве параметра принимает новое имя и ид раздела
        public function __construct($newname, $productid) {
            parent::__construct();

            $this->newname = $newname;
            $this->productid = $productid;
        }

        // Добавляет элемент
        public function make() {
            global $ROOT_PATH;

            if ($this->session->isadmin()) {
                if (strlen($this->newname) > 50) {
                    header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?productid='.$this->productid.'&error=Очень длинное название '.$this->newname);
                } else {

                    $this->query = $this->database->prepare('CALL AddNewAttribute(:name, :id)');
                    $this->query->bindParam(':name', $this->newname);
                    $this->query->bindParam(':id', $this->productid);
                    $this->query->execute();

                    header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?productid='.$this->productid.'&good=Новый атрибут добавлен');
                }
            }
        }
    }

    /* Изменяет название атрибута */

    class UpdateAttributeName extends Edit {

        // Название измененного атрибута
        private $newname;

        // Ид изменяемого атрибута
        private $id;

        // Ид продукта
        private $productid;

        /* Функции */

        // Конструктор класса, в качестве параметра принимает ид и имя нового раздела
        public function __construct($id, $newname, $productid) {
            parent::__construct();

            $this->newname = $newname;
            $this->id = $id;
            $this->productid = $productid;

        }

        // Изменяет элемент
        public function make() {
            global $ROOT_PATH;

            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL UpdateAttributeName(:id, :name)');
                $this->query->bindParam(':name', $this->newname);
                $this->query->bindParam(':id', $this->id);
                $this->query->execute();


                header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?productid='.$this->productid.'&good=Атрибут был изменен');
            }
        }
    }
?>