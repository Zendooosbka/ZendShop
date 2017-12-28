<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 28.12.17
 * Time: 8:46
 */

    require_once "zs_system/NoAdminEdit.php";

    // Добавить товар в корзину пользователя
    class AddGoodToCart extends NoAdminEdit
    {
        private $goodid;

        public function Make()
        {
            global $ROOT_PATH;

            if ($this->session->isUser())
            {
                $this->query = $this->database->prepare("CALL AddToCart(:id, :new)");

                $this->query->bindParam(":id", $this->goodid);
                $this->query->bindParam(":new", $this->session->GetUser());

                $this->query->execute();

                header('Location: http://'.$ROOT_PATH.'/showwindow.php?g='. $this->goodid. '&good=Товар добавлен в корзину');
            } else {
                header('Location: http://'.$ROOT_PATH.'/Index.php');
            }
        }

        public function __construct($goodid)
        {
            parent::__construct();

            $this->goodid = $goodid;
        }
    }

    // Удалить товар из корзины пользователя
    class DropGoodFromCart extends NoAdminEdit
    {
        private $goodid;

        public function Make()
        {
            global $ROOT_PATH;

            if ($this->session->isUser())
            {
                $this->query = $this->database->prepare("CALL DeleteFromCart(:id, :new)");

                $this->query->bindParam(":id", $this->goodid);
                $this->query->bindParam(":new", $this->session->GetUser());

                $this->query->execute();

                header('Location: http://'.$ROOT_PATH.'/cart.php?good=Товар удален из корзины');
            } else {
                header('Location: http://'.$ROOT_PATH.'/Index.php');
            }
        }

        public function __construct($goodid)
        {
            parent::__construct();

            $this->goodid = $goodid;
        }
    }
?>