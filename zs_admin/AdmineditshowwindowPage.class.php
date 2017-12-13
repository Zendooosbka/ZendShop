<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 11.11.17
 * Time: 21:07
 */

    require_once "zs_admin/AdminheaderPage.class.php";

    class Admineditshowwindow extends AdminHeaderPage
    {
        // Таблица витрин
        private $showwindowtable;

        // Для хранения категорий
        private $categoryoptions;

        // Таблица продуктов
        private $productstable;

        // Таблица продуктов на витрине
        private $productsinshowwindow;

        // Ид редактируемой витрины
        private $swid;

        // Имя витрины
        private $swname;

        // Сколько продукции находится на витрине
        private $productsonshowwindowcout;

        // Имя витрины
        private $swcategoryid;

        // список объеденяющих атрибутов
        private $attributionlist;

        // Содержит в себе все модальные диалоги
        private $modals;


        // Подготавливает модальные диалоги
        private function Preparemodals() {
            $this->modals .= $this->smarty->fetch("admin-showwindow-modals.tpl");
        }

        private function Prepareattributionlist() {

            $this->query = $this->database->prepare("SELECT DISTINCT Name FROM AdminProductAttributesTable WHERE ProductId IN (SELECT ProductId FROM AdminProductsInShowWindow WHERE ShowwindowId = :swid) AND Important > 0", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $this->query->bindParam(':swid', $this->swid);
            $this->query->execute();

            while ($this->result = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                $this->attributionlist .= "[". $this->result[0] . "] ";
            }
        }
        // Подготавливает категории для создания нового продукта
        private function Preparecategoryoptions() {
            $this->query = $this->database->prepare("SELECT * FROM AdminCategoryForShowWindowTable", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $this->query->execute();

            while ($this->result = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                $this->smarty->assign('id', $this->result[0]);
                $this->smarty->assign('name', $this->result[1]);

                $this->categoryoptions .= $this->smarty->fetch("admin-showwindow-sw-category-section.tpl");
            }
        }

        // Генерирует таблицу витрин
        private function Makeshowwindowtable()
        {
            $this->query = $this->database->prepare("SELECT * FROM AdminShowWindowsTable", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $this->query->execute();

            while ($this->result = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                $this->smarty->assign('id', $this->result[0]);
                $this->smarty->assign('name', $this->result[1]);
                $this->smarty->assign('catname', $this->result[2]);
                $this->smarty->assign('date', $this->result[3]);
                $this->showwindowtable .= $this->smarty->fetch("admin-showwindow-sw-table.tpl");
            }
        }

        // Подготавливает таблицу продуктов
        private function Makeproductstable() {
            $this->query = $this->database->prepare("SELECT * FROM AdminProductsTableForShowWindow WHERE CategoryId = :catid AND id NOT IN (SELECT ProductId FROM AdminProductsInShowWindow WHERE ShowwindowId = :swid)", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $this->query->bindParam(":catid", $this->swcategoryid);
            $this->query->bindParam(":swid", $this->swid);
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
                $this->smarty->assign('swid', $this->swid);
                $this->productstable .= $this->smarty->fetch("admin-showwindow-p-table.tpl");

                $this->smarty->assign('image', $this->result[3]);
                $this->smarty->assign('name', $this->result[1]);
                $this->smarty->assign('id', $this->result[0]);
                $this->smarty->assign('meme', "pictures/");

                $this->modals .= $this->smarty->fetch("admin-products-p-modal-image.tpl");
            }
        }

        // Генерирует таблицу важных атрибутов
        private function Makeimprattr()
        {
            //AdminProductsInShowWindow

            $this->query = $this->database->prepare("SELECT * FROM AdminProductsInShowWindow WHERE ShowwindowId = :catid", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $this->query->bindParam(":catid", $this->swid);
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
                $this->smarty->assign('swid', $this->swid);
                $this->productsinshowwindow .= $this->smarty->fetch("admin-showwnidow-p-in-sw-table.tpl");

                $this->smarty->assign('image', $this->result[3]);
                $this->smarty->assign('name', $this->result[1]);
                $this->smarty->assign('id', $this->result[0]);
                $this->smarty->assign('meme', "pictures/");

                $this->modals .= $this->smarty->fetch("admin-products-p-modal-image.tpl");
            }
        }

        private function Build()
        {
            $this->smarty->assign("categoryoptions", $this->categoryoptions);
            $this->smarty->assign("showwindowtable", $this->showwindowtable);
            $this->smarty->assign('otherproductstable', $this->productstable);
            $this->smarty->assign('productsinshowcasetable', $this->productsinshowwindow );
            $this->smarty->assign('good', $this->good);
            $this->smarty->assign('error', $this->error);
            $this->smarty->assign('swid', $this->swid);
            $this->smarty->assign('swname', $this->swname);
            $this->smarty->assign('productsonshowwindowcout', $this->productsonshowwindowcout);
            $this->smarty->assign('attrlist', $this->attributionlist);

            return $this->smarty->fetch("admin-showwindow.tpl");
        }

        public function __construct($title, $swid)
        {
            parent::__construct($title, AdminHeaderPage::ADM_EDITPAGE_SHOWWINDOW);

            $this->swid = $swid;

            if ($this->swid > 0) {
                $this->query = $this->database->prepare("SELECT CONCAT(Name, ' (', id, ')'), CategoryId FROM AdminShowWindowsTable WHERE id = :id", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                $this->query->bindParam(':id', $this->swid);
                $this->query->execute();

                $resquery = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
                $this->swname = $resquery[0];
                $this->swcategoryid = $resquery[1];


                $this->query = $this->database->prepare("SELECT COUNT(*) FROM AdminProductsInShowWindow WHERE ShowwindowId = :id", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                $this->query->bindParam(':id', $this->swid);
                $this->query->execute();

                $this->productsonshowwindowcout = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)[0];
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

            $this->Makeshowwindowtable();
            $this->Preparecategoryoptions();
            $this->Makeproductstable();
            $this->Makeimprattr();
            $this->Preparemodals();
            $this->Prepareattributionlist();

            $this->AddInnerText($this->modals);
        }

        // Выдает результат
        public function Draw()
        {
            parent::Draw($this->Build()); // TODO: Change the autogenerated stub
        }
    }