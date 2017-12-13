<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 20.10.17
 * Time: 8:06
 */

    require_once 'zs_admin/AdminheaderPage.class.php';

    class AdmineditproductsPage extends AdminHeaderPage {

        // Если продукт не выбран
        const ADM_PRODUCT_DONT_SELECT = -1;

        // Содержит ид продукта в случае если редактируются атрибуты продукта
        private $productid;

        // Содержит имя продукта в случае если редактируются атрибуты продукта
        private $productname;

        // Содержит таблицу продуктов
        private $productstable;

        // Содержит таблицу важных атрибутов
        private $importantattrtable;

        // Содержит таблицу скрытых атрибутов
        private $hidenattrtable;

        // Содержит в себе все модальные диалоги
        private $modals;

        // Содержит в себе категории для создания нового продукта
        private $categoryoptions;

        // Содержит в себе бренды для создания нового продукта
        private $brandoptions;



        /* Функии */

        // Подготавливает категории для создания нового продукта
        public function Preparecategoryoptions() {
            $this->query = $this->database->prepare("SELECT * FROM AdminCategoryForProductsTable", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $this->query->execute();

            while ($this->result = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
               $this->smarty->assign('id', $this->result[0]);
               $this->smarty->assign('name', $this->result[1]);

               $this->categoryoptions .= $this->smarty->fetch("admin-products-section-brand-or-category.tpl");
            }
        }

        // Подготавливает бренды для создания нового продукта
        public function Preparebrandoptions() {
            $this->query = $this->database->prepare("SELECT * FROM AdminBrandsForProductsTable", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $this->query->execute();

            while ($this->result = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                $this->smarty->assign('id', $this->result[0]);
                $this->smarty->assign('name', $this->result[1]);

                $this->brandoptions .= $this->smarty->fetch("admin-products-section-brand-or-category.tpl");
            }
        }

        // Подготавливает таблицу продуктов
        public function Prepareproductstable() {
            $this->query = $this->database->prepare("SELECT * FROM AdminProductsTable", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $this->query->execute();

            while ($this->result = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                $this->smarty->assign('id', $this->result[0]);
                $this->smarty->assign('name', $this->result[1]);
                $this->smarty->assign('price', $this->result[2]);
                $this->smarty->assign('image', $this->result[3]);
                $this->smarty->assign('lowpicture', substr($this->result[3], 0, 10).'...');
                $this->smarty->assign('date', $this->result[4]);
                $this->smarty->assign('categoryname', $this->result[5]);
                $this->smarty->assign('brandname', $this->result[6]);

                $this->productstable .= $this->smarty->fetch("admin-products-p-table.tpl");

                $this->smarty->assign('image', $this->result[3]);
                $this->smarty->assign('name', $this->result[1]);
                $this->smarty->assign('id', $this->result[0]);
                $this->smarty->assign('meme', "pictures/");

                $this->modals .= $this->smarty->fetch("admin-products-p-modal-image.tpl");
            }
        }

        // Подготавливает таблицу важных атрибутов
        public function Prepareimportantattrtable() {

            if ($this->productid > 0) {
                $this->query = $this->database->prepare("SELECT * FROM AdminProductAttributesTable WHERE ProductId = :id", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                $this->query->bindParam(':id', $this->productid);
                $this->query->execute();

                while ($this->result = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                    $this->smarty->assign('id', $this->result[0]);
                    $this->smarty->assign('name', $this->result[2]);
                    $this->smarty->assign('value', $this->result[3]);
                    $this->smarty->assign('im', ($this->result[4] > 0) ? "Да" : "Нет");
                    $this->smarty->assign('date', $this->result[5]);
                    $this->smarty->assign('productid', $this->productid);

                    $this->importantattrtable .= $this->smarty->fetch("admin-products-ia-table.tpl");
                }
            }
        }

        // Подготавливает таблицу скртых атрибутов
        public function Preparehidenattrtabletable() {
            if ($this->productid > 0) {
                $this->query = $this->database->prepare("SELECT * FROM AdminAttributesTable WHERE ProductId = :id", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                $this->query->bindParam(':id', $this->productid);
                $this->query->execute();

                while ($this->result = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                    $this->smarty->assign('id', $this->result[0]);
                    $this->smarty->assign('name', $this->result[2]);
                    $this->smarty->assign('date', $this->result[3]);
                    $this->smarty->assign('productid', $this->productid);

                    $this->hidenattrtable .= $this->smarty->fetch("admin-products-ha-table.tpl");
                }
            }
        }

        public function PrepareModals () {
            $this->smarty->assign("categoryoptions", $this->categoryoptions);
            $this->smarty->assign("brandoptions", $this->brandoptions);
            $this->smarty->assign("productid", $this->productid);

            $this->modals .= $this->smarty->fetch("admin-products-modals.tpl");
        }

        // Строит всю страницу
        public function Build() {
            $this->smarty->assign("productstable", $this->productstable);
            $this->smarty->assign("categoryoptions", $this->categoryoptions);
            $this->smarty->assign("brandoptions", $this->brandoptions);
            $this->smarty->assign("productid", $this->productid);
            $this->smarty->assign("productname", $this->productname);
            $this->smarty->assign("importantattr", $this->importantattrtable);
            $this->smarty->assign('hatable', $this->hidenattrtable);
            $this->smarty->assign('good', $this->good);
            $this->smarty->assign('error', $this->error);

            return $this->smarty->fetch("admin-products.tpl");
        }

        // Конструктор, в качестве параметра принимает заголовок страницы и ид продукта для показа его атрибутов
        public function __construct($title, $productid) {
            parent::__construct($title, AdminHeaderPage::ADM_EDITPAGE_PRODUCTS);

            $this->productid = $productid;
            if ($this->productid > 0) {
                $this->query = $this->database->prepare("SELECT CONCAT(Name, ' (', id, ')') FROM AdminProductsTable WHERE id = :id", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                $this->query->bindParam(':id', $this->productid);
                $this->query->execute();

                $this->productname = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)[0];
            }

            if (isset($_GET['good'])) {
                $this->good = htmlspecialchars($_GET['good']);
            } else {
                $this->good = null;
            }

            if (isset($_GET['error'])) {
                $this->error = htmlspecialchars($_GET['error']);
            } else {
                $this->error = null;
            }

            $this->Preparebrandoptions();
            $this->Preparecategoryoptions();
            $this->Preparehidenattrtabletable();
            $this->Prepareimportantattrtable();
            $this->Prepareproductstable();
            $this->PrepareModals();

            $this->AddInnerText($this->modals);
        }

        // Рисует страницу
        public function Draw() {
            parent::Draw($this->Build()); // TODO: Change the autogenerated stub
        }

    }
?>