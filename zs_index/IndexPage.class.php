<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 25.12.17
 * Time: 22:36
 */

    require_once "zs_index/SiteheaderPage.class.php";

    class IndexPage extends SiteHeader
    {
        // Нужен для запроса
        private $helpquery;

        // Нужен для запроса
        private $helpresult;

        // Карусель страницы
        private $carousel;

        // Бренды
        private $randombrands;

        // Другие товары
        private $randomgoods;

        // Размер таблицы
        private $sizeoftable;

        // Ид продуктов которые попадут на страницу
        private $productids;

        private function CheckNumberInArray($number)
        {
            if ($this->sizeoftable < 4) return false;

            for($i = 0; $i < 4; $i++)
            {
                if ($this->productids[$i] == $number) return true;
            }

            return false;
        }


        private function PrepareRandomBrands()
        {
            $this->helpquery = $this->database->prepare("SELECT COUNT(*) FROM AdminBrandsTable", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $this->helpquery->execute();
            $this->sizeoftable = $this->helpquery->fetch()[0];

            $this->productids = array(0, 0, 0, 0);

            for ($i = 0; $i < 4; $i++)
            {

                do {
                    $this->query = $this->database->prepare("SELECT * FROM AdminBrandsTable LIMIT " . rand(0, $this->sizeoftable - 1) . ", 1", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                    $this->query->execute();
                    $this->result = $this->query->fetch();
                } while ($this->CheckNumberInArray($this->result[0]));

                $this->productids[$i] = $this->result[0];

                $this->smarty->assign('id', $this->result[0]);
                $this->smarty->assign('name', $this->result[1]);
                $this->smarty->assign('image', $this->result[2]);

                $this->randombrands .= $this->smarty->fetch("index-brands.tpl");
            }
        }

        private function PrepareRandomGoods()
        {
            $this->helpquery = $this->database->prepare("SELECT COUNT(*) FROM SearchResultTable", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $this->helpquery->execute();
            $this->sizeoftable = $this->helpquery->fetch()[0];

            // IW.ShowwindowId, IW.ShowwindowProductsId, P.ProductId, P.ProductName, P.Price, P.PictureURL

            $this->productids = array(0, 0, 0, 0);

            for ($i = 0; $i < 4; $i++)
            {

                do {
                    $this->query = $this->database->prepare("SELECT * FROM SearchResultTable LIMIT " . rand(0, $this->sizeoftable - 1) . ", 1", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                    $this->query->execute();
                    $this->result = $this->query->fetch();
                } while ($this->CheckNumberInArray($this->result[1]));

                $this->productids[$i] = $this->result[1];

                $this->smarty->assign('ginsw', $this->result[0]);
                $this->smarty->assign('name', $this->result[2]);
                $this->smarty->assign('price', $this->result[3]);
                $this->smarty->assign('image', $this->result[4]);

                $productid = $this->result[1];
                $attrstring = "";

                $this->helpquery = $this->database->prepare("SELECT * FROM SearchGetProductAttributes WHERE ProductId = :Id AND Important = 1", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                $this->helpquery->bindParam(":Id", $productid);
                $this->helpquery->execute();

                // PAName, Value, ProductId
                while ($this->helpresult = $this->helpquery->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT))
                {
                    $attrstring .= '<tr><td>'. $this->helpresult[0]. ':</td><td style="vertical-align: middle;"><span class="label label-danger">'. $this->helpresult[1].'</span></td></tr>';
                }

                $this->smarty->assign('attrs', $attrstring);

                $this->randomgoods .= $this->smarty->fetch("shearch-product.tpl");
            }
        }

        private function PrepareCarousel()
        {

        }

        private function Build()
        {
            $this->smarty->assign("randomgoods", $this->randomgoods);
            $this->smarty->assign("randombrands", $this->randombrands);

            return $this->smarty->fetch("index.tpl");
        }

        public function Draw()
        {
            parent::Draw($this->Build()); // TODO: Change the autogenerated stub
        }

        public function __construct()
        {
            parent::__construct("Главная страница");

            $this->PrepareRandomGoods();
            $this->PrepareCarousel();
            $this->PrepareRandomBrands();
        }
    }
?>