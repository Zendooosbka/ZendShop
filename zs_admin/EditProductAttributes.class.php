<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 04.11.17
 * Time: 2:52
 */

    require_once 'zs_admin/Edit.class.php';

    /* Удаляет атрибут продукта*/

    class DeleteProductAttribute extends Edit {

        // ид удаляемого
        private $id;

        // Для правильного перехода
        private $productid;

        /* Функции */

        // Конструктор класса, в качестве параметров принимает ссылку на PDO и ид удаляемого атрибута продукта
        public function __construct($id, $productid) {
            parent::__construct();
            $this->id = $id;
            $this->productid = $productid;
        }

        // Удаляет элемент
        public function make() {
            global $ROOT_PATH;

            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL DeleteProductAttribute(:id)');
                $this->query->bindParam(':id', $this->id);
                $this->query->execute();

                header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?productid='.$this->productid.'&good=Атрибут удален');
            }
        }
    }

    /* Доавляет атрибут продукта */

    class AddProductAttribute extends Edit {

        // Название нового раздела
        private $newname;

        // Значение
        private $value;

        // Ид продукта
        private $productid;

        // Важность
        private $important;

        /* Функции */

        // Конструктор класса, в качестве параметра принимает новое имя и ид раздела
        public function __construct($newname, $value, $productid, $important) {
            parent::__construct();

            $this->newname = $newname;
            $this->value = $value;
            $this->productid = $productid;
            $this->important = $important;
        }

        // Добавляет элемент
        public function make() {
            global $ROOT_PATH;

            if ($this->session->isadmin()) {
                if (strlen($this->newname) > 50) {
                    header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?productid='.$this->productid.'&error=Очень длинное название '.$this->newname);
                } else {

                    $this->query = $this->database->prepare('CALL AddNewProductAttribute(:name, :value, :important, :productid)');
                    $this->query->bindParam(':name', $this->newname);
                    $this->query->bindParam(':value', $this->value);
                    $this->query->bindParam(':important', $this->important);
                    $this->query->bindParam(':productid', $this->productid);
                    $this->query->execute();

                    header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?productid='.$this->productid.'&good=Новый аттрибут продукта был добавлен');
                }
            }
        }
    }

    /* Изменяет название аттрибута продукта */

    class UpdateProductAttributeName extends Edit {

        // Название измененного атрибута продукта
        private $newname;

        // Ид изменяемого атрибута
        private $id;



        /* Функции */

        // Конструктор класса, в качестве параметра принимает ид , новое имя атрибута продукта и ид продукта
        public function __construct($id, $newname) {
            parent::__construct();

            $this->newname = $newname;
            $this->id = $id;

        }

        // Изменяет элемент
        public function make() {
            global $ROOT_PATH;

            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL UpdateProductAttributeName(:id, :name)');
                $this->query->bindParam(':name', $this->newname);
                $this->query->bindParam(':id', $this->id);
                $this->query->execute();


                //print_r($this->query->errorInfo());
            }
        }
    }

    class UpdateProductAttributeValue extends Edit {

        // Название измененного названия атрибута продукта
        private $newname;

        // Ид изменяемого атрибута
        private $id;


        /* Функции */

        // Конструктор класса, в качестве параметра принимает ид , новое значение атрибута продукта и ид продукта
        public function __construct($id, $newvalue) {
            parent::__construct();

            $this->newname = $newvalue;
            $this->id = $id;

        }

        // Изменяет элемент
        public function make() {
            global $ROOT_PATH;

            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL UpdateProductAttributeValue(:id, :name)');
                $this->query->bindParam(':name', $this->newname);
                $this->query->bindParam(':id', $this->id);
                $this->query->execute();


                //print_r($this->query->errorInfo());
            }
        }
    }

    class UpdateProductAttributeImportant extends Edit {

        // Название измененного названия атрибута продукта
        private $newname;

        // Ид изменяемого атрибута
        private $id;

        // Ид продукта
        private $productid;



        /* Функции */

        // Конструктор класса, в качестве параметра принимает ид , новое значение атрибута продукта и ид продукта
        public function __construct($id, $newvalue) {
            parent::__construct();

            $this->newname = $newvalue;
            $this->id = $id;

        }

        // Изменяет элемент
        public function make() {
            global $ROOT_PATH;

            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL UpdateProductAttributeImportant(:id, :name)');
                $this->query->bindParam(':name', $this->newname);
                $this->query->bindParam(':id', $this->id);
                $this->query->execute();


            //print_r($this->query->errorInfo());
            }
        }
    }
?>