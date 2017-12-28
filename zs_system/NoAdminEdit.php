<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 14.11.17
 * Time: 16:08
 */

    require_once 'zs_system/Session.class.php';
    require_once 'zs_system/ZendDatabase.class.php';

    /* Общий класс (Для того что бы не повторяться) */

    class NoAdminEdit {

        // Ссылка на PDO
        protected $database;

        // Выполняем запросы
        protected $query;

        // Сессия админа
        protected $session;



        /* Функции */

        // Конструктор
        public function __construct() {
            global $ROOT_PATH;

            $this->database = new ZendDatabase();
            $this->session = new Session($this->database);
        }

        // Проверка принадлежит ли юзер компании AccountCheckUserInCompany
        public function CheckUserCompany()
        {
            $this->query = $this->database->prepare("SELECT AccountCheckUserInCompany(:new)");
            $this->query->bindParam(":new", $this->session->GetUser());
            $this->query->execute();
            return $this->query->fetch()[0];
        }

        // Проверка принадлежит ли юзер компании
        public function CheckUserIdInCompany($userid)
        {
            $this->query = $this->database->prepare("SELECT AccountCheckUserInCompany(:new)");
            $this->query->bindParam(":new", $userid);
            $this->query->execute();
            return $this->query->fetch()[0];
        }

        // Проверка принадлежит ли склад компании
        public function CheckStockInComany($stockid, $compid)
        {
            $this->query = $this->database->prepare("SELECT AccountCheckStockInCompany(:stockid, :compid)");
            $this->query->bindParam(":stockid", $stockid);
            $this->query->bindParam(":compid", $compid);
            $this->query->execute();
            return $this->query->fetch()[0];
        }
    }
?>