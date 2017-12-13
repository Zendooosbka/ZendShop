<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 20.10.17
 * Time: 11:19
 */
    require_once 'zs_admin/Edit.class.php';

    /* Удаляет продукт */

    class DeleteProduct extends Edit {

        // ид удаляемого
        private $id;



        /* Функции */

        // Конструктор класса, в качестве параметров принимает ид удаляемого раздела
        public function __construct($id) {
            parent::__construct();
            $this->id = $id;
        }

        // Удаляет элемент
        public function make() {
            global $ROOT_PATH;

            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL DeleteProduct(:id)');
                $this->query->bindParam(':id', $this->id);
                $this->query->execute();

                header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?good=Продукт удален');
            }
        }
    }

    /* Доавляет категорию */

    class AddProduct extends Edit {

        // Название нового продукта
        private $newname;

        // Цена
        private $price;

        // Категория продукта
        private $categoryid;

        // Бренд продукта
        private $brandid;

        /* Функции */

        // Конструктор класса, в качестве параметра принимает новое имя, цену продукта, ид категории, ид бренда
        public function __construct($newname, $price, $categoryid, $brandid) {
            parent::__construct();

            $this->newname = $newname;
            $this->price = $price;
            $this->categoryid = $categoryid;
            $this->brandid = $brandid;
        }

        // Добавляет элемент
        public function make() {
            global $ROOT_PATH;

            if ($this->session->isadmin()) {
                /*if (!is_numeric($this->prise)) {
                    header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?error=Цена не является числом '.$this->newname);
                } else*/ if (strlen($this->newname) > 50) {
                    header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?error=Очень длинное название '.$this->newname);
                } else {

                    $this->query = $this->database->prepare('CALL AddNewProduct(:name, :price, :categid, :brandid)');
                    $this->query->bindParam(':name', $this->newname);
                    $this->query->bindParam(':price', $this->price);
                    $this->query->bindParam(':categid', $this->categoryid);
                    $this->query->bindParam(':brandid', $this->brandid);
                    $this->query->execute();

                    header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?good=Новый продукт был добавлен');
                }
            }
        }
    }

    /* Изменяет название продукта */

    class UpdateProductName extends Edit {

        // Название измененного продукта
        private $newname;

        // Ид изменяемого продукта
        private $id;



        /* Функции */

        // Конструктор класса, в качестве параметра принимает ид и имя нового имени продукта
        public function __construct($id, $newname) {
            parent::__construct();

            $this->newname = $newname;
            $this->id = $id;

        }

        // Изменяет элемент
        public function make() {
            global $ROOT_PATH;

            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL UpdateProductName(:id, :name)');
                $this->query->bindParam(':name', $this->newname);
                $this->query->bindParam(':id', $this->id);
                $this->query->execute();


                //print_r($this->query->errorInfo());
                //header('Location: http://'.$ROOT_PATH.'/admineditscb.php?good=Название продукта было изменено');
            }
        }
    }

    // Меняет цену продукта
    class UpdateProductPrice extends Edit {

        // Цена
        private $newprice;

        // Ид изменяемого продукта
        private $id;



        /* Функции */

        // Конструктор класса, в качестве параметра принимает ссылку ,ид и ид нового значения цен
        public function __construct($id, $newprice) {
            parent::__construct();

            $this->newprice = $newprice;
            $this->id = $id;
        }

        // Изменяет элемент
        public function make() {
            global $ROOT_PATH;

            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL UpdateProductPrice(:id, :ids)');
                $this->query->bindParam(':id', $this->id);
                $this->query->bindParam(':ids', $this->newprice);
                $this->query->execute();

                // header('Location: http://'.$ROOT_PATH.'/admineditscb.php?good=Категория была изменена');
            }
        }
    }

    // Меняет категорию продукта
    class UpdateProductCategory extends Edit {

        // Ид новой категории
        private $newcat;

        // Ид изменяемого продукта
        private $id;


        /* Функции */

        // Конструктор класса, в качестве параметра принимает ссылку ,ид и ид нового значения цен
        public function __construct($id, $newnewcat) {
            parent::__construct();

            $this->newcat = $newnewcat;
            $this->id = $id;
        }

        // Изменяет элемент
        public function make() {
            global $ROOT_PATH;

            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL UpdateProductCategory(:id, :ids)');
                $this->query->bindParam(':id', $this->id);
                $this->query->bindParam(':ids', $this->newcat);
                $this->query->execute();

            // header('Location: http://'.$ROOT_PATH.'/admineditscb.php?good=Категория была изменена');
            }
        }
    }

    // Меняет бренд продукта
    class UpdateProductBrand extends Edit {

        // Ид нового бренда
        private $newbrd;

        // Ид изменяемого продукта
        private $id;



        /* Функции */

        // Конструктор класса, в качестве параметра принимает ссылку ,ид и ид нового бренда
        public function __construct($id, $newbrd) {
            parent::__construct();

            $this->newbrd = $newbrd;
            $this->id = $id;
        }

        // Изменяет элемент
        public function make() {
            global $ROOT_PATH;

            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL UpdateProductBrand(:id, :ids)');
                $this->query->bindParam(':id', $this->id);
                $this->query->bindParam(':ids', $this->newbrd);
                $this->query->execute();

                // header('Location: http://'.$ROOT_PATH.'/admineditscb.php?good=Категория была изменена');
            }
        }
    }

    // Меняет категорию продукта
    class UpdateProductPicture extends Edit {

        // Путь к новой картинке
        private $newpicture;

        // Ид изменяемого продукта
        private $id;



        /* Функции */

        // Конструктор класса, в качестве параметра принимает ссылку ,ид и ид нового картинки
        public function __construct($id, $newpicture) {
            parent::__construct();

            $this->newpicture = $newpicture;
            $this->id = $id;
        }

        // Изменяет элемент
        public function make() {
            global $ROOT_PATH;

            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL UpdateProductPicture(:id, :ids)');
                $this->query->bindParam(':id', $this->id);
                $this->query->bindParam(':ids', $this->newpicture);
                $this->query->execute();

                header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?good=Картинка была изменена');
            }
        }
    }
?>