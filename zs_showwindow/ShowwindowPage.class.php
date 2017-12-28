<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 25.12.17
 * Time: 2:35
 */
    require_once "zs_index/SiteheaderPage.class.php";

    class ShowWindowPage extends SiteHeader
    {

        // Если все хорошо
        private $good;

        // Если все плохо
        private $error;

        // Ид товара в базе данных)
        private $realgoodid;

        // Ид товара на витрине
        private $goodid;

        // Ид витрины
        private $showwindowid;

        // Дает такой же выбор как и на озоне)
        private $actionattributes;

        // Таблица всех атрибутов
        private $attributestable;

        // Название продукта
        private $goodname;

        // Цена продукта
        private $price;

        // Картинка продукта
        private $image;

        // Название категории
        private $category;

        // Название бренда
        private $brand;

        // Подзапрос
        private $helpquery;

        // Подрезультат
        private $helpresult;


        // Проверяет находится ли товар в корзине
        private function CheckGoodInCart()
        {
            if ($this->session->isUser()) {
                $this->query = $this->database->prepare("SELECT CheckGoodInCart(:id, :new)");
                $this->query->bindParam(":id", $this->goodid);
                $this->query->bindParam(":new", $this->session->GetUser());
                $this->query->execute();
                return $this->query->fetch()[0];
            } else {
                return -1;
            }
        }

        // Полчяет информацию о продукте гшцукрапгшцук
        private function GetGoodInformation()
        {
            //AdminProductsTable
            $this->query = $this->database->prepare("SELECT * FROM AdminProductsTable WHERE id = :new");
            $this->query->bindParam(":new", $this->realgoodid);
            $this->query->execute();

            $this->result = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);

            $this->goodname = $this->result[1];
            $this->price = $this->result[2];
            $this->image = $this->result[3];
            $this->category = $this->result[5];
            $this->brand = $this->result[6];

            // P.ProductName AS Name, P.Price, P.PictureURL, P.CreateDate AS Date, C.CategoryName, B.BrandName
        }

        private function GetRealGoodId()
        {
            //SwhowwndowGetProductId
            $this->query = $this->database->prepare("SELECT * FROM SwhowwndowGetProductId WHERE ShowwindowProductsId = :new");
            $this->query->bindParam(":new", $this->goodid);
            $this->query->execute();
            return $this->query->fetch()[1];
        }

        // Получает витрину на которой стоит продукт
        private function CheckGoodShowWindow()
        {
            $this->query = $this->database->prepare("SELECT GetShowWindowFromShowwindowProduct(:new)");
            $this->query->bindParam(":new", $this->goodid);
            $this->query->execute();
            return $this->query->fetch()[0];
        }

        // Таблица характеристик продукта
        private function MakeAttributeTable()
        {
            $this->query = $this->database->prepare("SELECT * FROM ShowwindowGetProductAttribute WHERE ProductId = :new");
            $this->query->bindParam(":new", $this->realgoodid);
            $this->query->execute();

            while ($this->result = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT))
            {
                $this->attributestable .= '<tr><td>'.$this->result[0].'</td><td>'.$this->result[1].'</td></tr>';
            }

            //ShowwindowGetProductAttribute
        }

        // Создает атрибуты, по которым можно переходить на другие товары из той же витрины
        private function MakeActionAttributes()
        {
            // Получаем все возможные атрибуты которые могут у нас быть (берем все товары на витрине и смотрим какие у них атрибуты, после их группируем    )
            $this->query = $this->database->prepare("SELECT * FROM AdminProductAttributesTable WHERE ProductId IN (SELECT ProductId FROM GetProductsFromShowWindow WHERE ShowwindowId = :new) AND Important = 1 GROUP BY Name");
            $this->query->bindParam(":new", $this->showwindowid);
            $this->query->execute();

            while ($this->result = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT))
            {
                $this->helpquery = $this->database->prepare(
                    "SELECT A.ShowwindowProductsId, B.Value FROM GetProductsFromShowWindow AS A INNER JOIN (
                    SELECT * FROM ShowwindowGetProductAttribute WHERE ProductId IN (
                    SELECT ProductId FROM GetProductsFromShowWindow WHERE ShowwindowId = :id)
                     AND PAName = :attr) AS B ON A.ProductId = B.ProductId"
                );

                $this->helpquery->bindParam(":id", $this->showwindowid);
                $this->helpquery->bindParam(":attr", $this->result[2]);

                $this->helpquery->execute();

                $this->actionattributes .= '<div class="alert alert-danger  "><strong>'. $this->result[2]. " : </strong>";

                while ($this->helpresult = $this->helpquery->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT))
                {
                    if ($this->goodid == $this->helpresult[0])
                        $this->actionattributes .= '<a href="#" class="btn btn-danger btn-sm">'. $this->helpresult[1].'</a> ';
                    else
                        $this->actionattributes .= '<a href="showwindow.php?g='. $this->helpresult[0]. '" class="btn btn-default btn-sm">'. $this->helpresult[1].'</a> ';
                }

                $this->actionattributes .= '</div>';
            }
        }

        private function Build()
        {
            $this->smarty->assign("good", $this->good);
            $this->smarty->assign("error", $this->error);

            $this->smarty->assign("goodid", $this->goodid);

            $this->smarty->assign("goodincart", $this->CheckGoodInCart());

            $this->smarty->assign("name", $this->goodname);
            $this->smarty->assign("image", $this->image);
            $this->smarty->assign("price", $this->price );
            //$this->smarty->assign("category", $this->showwindowid);
            //$this->smarty->assign("brand", $this->showwindowid);

            $this->smarty->assign("actionattributes", $this->actionattributes);

            $this->smarty->assign("showwindow", $this->showwindowid);
            $this->smarty->assign("attrtable", $this->attributestable);
            //$this->smarty->assign("kuk", $this->goodid);

            return $this->smarty->fetch("showwindow.tpl");
        }

        public function Draw($other)
        {
            parent::Draw($this->Build()); // TODO: Change the autogenerated stub
        }

        public function __construct($goodid)
        {
            parent::__construct("Витринка");

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

            $this->goodid = $goodid;

            $this->realgoodid = $this->GetRealGoodId();
            $this->showwindowid = $this->CheckGoodShowWindow();

            $this->MakeAttributeTable();
            $this->MakeActionAttributes();
            $this->GetGoodInformation();
        }
    }