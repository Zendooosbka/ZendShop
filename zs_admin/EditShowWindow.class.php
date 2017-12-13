<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 12.11.17
 * Time: 0:02
 */

    require_once 'zs_admin/Edit.class.php';

    /* Удаляет витрину */

    class DeleteShowWindow extends Edit {

        // ид удаляемого
        private $id;



        /* Функции */

        // Конструктор класса, в качестве параметров принимает ид удаляемой витрины
        public function __construct($id) {
            parent::__construct();
            $this->id = $id;
        }

        // Удаляет элемент
        public function make() {
            global $ROOT_PATH;

            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL DeleteShowWindow(:id)');
                $this->query->bindParam(':id', $this->id);
                $this->query->execute();

                header('Location: http://'.$ROOT_PATH.'/admineditshowwindows.php?good=Витрина удалена');
            }
        }
    }

    /* Доавляет витрину */

    class AddShowWindow extends Edit {

        // Название нового продукта
        private $newname;


        // Категория витрины
        private $categoryid;


        /* Функции */

        // Конструктор класса, в качестве параметра принимает новое имя, ид категории
        public function __construct($newname, $categoryid) {
            parent::__construct();

            $this->newname = $newname;
            $this->categoryid = $categoryid;
        }

        // Добавляет элемент
        public function make() {
            global $ROOT_PATH;
            if ($this->session->isadmin()) {
                if (strlen($this->newname) > 50) {
                    header('Location: http://'.$ROOT_PATH.'/admineditshowwindows.php?error=Очень длинное название '.$this->newname);
                } else {

                    $this->query = $this->database->prepare('CALL AddNewShowWindow(:name, :categid)');
                    $this->query->bindParam(':name', $this->newname);
                    $this->query->bindParam(':categid', $this->categoryid);
                    $this->query->execute();

                    header('Location: http://'.$ROOT_PATH.'/admineditshowwindows.php?good=Новая витрина была добавлена');
                }
            }
        }
    }

    /* Изменяет название витрины */

    class UpdateShowWindowName extends Edit {

        // Название измененной витрины
        private $newname;

        // Ид изменяемого витрины
        private $id;



        /* Функции */

        // Конструктор класса, в качестве параметра принимает ид и имя витрины
        public function __construct($id, $newname) {
            parent::__construct();

            $this->newname = $newname;
            $this->id = $id;

        }

        // Изменяет элемент
        public function make() {
            global $ROOT_PATH;

            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL UpdateShowWindowName(:id, :name)');
                $this->query->bindParam(':name', $this->newname);
                $this->query->bindParam(':id', $this->id);
                $this->query->execute();


                //print_r($this->query->errorInfo());
                header('Location: http://'.$ROOT_PATH.'/admineditshowwindows.php?good=Название витрины было изменено');
            }
        }
    }


    class AddProductInShowTable extends Edit {

        // Номер витрины
        private $swid;

        // Ид продукта
        private $productid;



        /* Функции */

        // Конструктор класса, в качестве параметра принимает ссылку ,ид и ид нового значения цен
        public function __construct($swid, $prodcutid) {
            parent::__construct();

            $this->swid = $swid;
            $this->productid = $prodcutid;
        }

        // Изменяет элемент
        public function make() {
            global $ROOT_PATH;

            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL AddPoductInShowWindow(:id, :ids)');
                $this->query->bindParam(':id', $this->swid);
                $this->query->bindParam(':ids', $this->productid);
                $this->query->execute();

                header('Location: http://'.$ROOT_PATH.'/admineditshowwindows.php?swid='.$this->swid .'&good=Продукт добавлен на витрину');
            }
        }
    }

    class DeleteProductFromShowTable extends Edit {

        // Ид записи в таблице ""
        private $id;

        // Номер витрин
        private $swid;



        /* Функции */

        // Конструктор класса, в качестве параметра принимает ид
        public function __construct($id, $swid) {
            parent::__construct();

            $this->id = $id;
            $this->swid = $swid;
        }

        // Изменяет элемент
        public function make() {
            global $ROOT_PATH;

            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL DeleteProductFromShowWindow(:id)');
                $this->query->bindParam(':id', $this->id);
                $this->query->execute();

                header('Location: http://'.$ROOT_PATH.'/admineditshowwindows.php?swid='.$this->swid .'&good=Продукт убран с витрины');
            }
        }
    }