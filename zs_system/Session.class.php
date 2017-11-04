<?php
    /*
        Класс сессии. Нужен для того, что бы определять
        кто сидит на сайте Юзверь или Аноним, я так и не понял как юзать $_SESSION
    */

    class Session {
        
        /* Внутренние переменные */
        
        // Ид пользователя
        private $userid;
        
        // Проверка на анониним или пользователь
        private $isuser;
        
        // Ид сессии
        private $sessionid;
        
        // Проверяет админ ли это
        private $isadmin;
        
        
        
        /* Переменные для базы данных */
        
        // Ссылка на PDO
        private $database;
        
        // Используется для отправки запросов базе данных
        private $query;
        
        // Используется для получения запросов от базы данных
        private $result;
        
        
        
        /* Процедуры */
        
        // Конструктор класса, в качестве параметра получает ссылку на обеъкт PDO
        public function __construct($database) {
            $this->database = $database;
            
            setlocale (LC_CTYPE, "ru_RU.UTF-8");
            
            $this->database->query("SET GLOBAL log_bin_trust_function_creators = 1");
            
            if (!empty($_COOKIE['ZednShop_session'])) {
                $this->query = $database->prepare("SELECT GetUserForSession(:SessionMd5, :IpAddress)");
                $this->query->bindParam(':SessionMd5', $_COOKIE['ZednShop_session']);
                $this->query->bindParam(':IpAddress', $_SERVER['REMOTE_ADDR']);
                
                $this->query->execute();
                $this->result = $this->query->fetch();
                
                $this->userid = $this->result[0];
                if ($this->result[0] > -1) {
                    $this->isuser = true;
                    
                    $this->query = $database->prepare("SELECT GetUserType(:UserId)");
                    $this->query->bindParam(':UserId', $this->userid);
                
                    $this->query->execute();
                    $this->result = $this->query->fetch();
                
                    if ($this->result[0] == 0) {
                        $this->isadmin = true;
                    } else {
                        $this->isadmin = false;
                    }
                } else {
                    $this->isuser = false;
                    $this->isadmin = false;
                }
            } else {
                $this->userid = -1;
                $this->isuser = false;
                $this->isadmin = false;
            }
        }
        
        // Получает ид пользователя
        public function GetUser() {
            return $this->userid;
        }
        
        // Проверяет юзер ли это или аноним
        public function isUser() {
            return $this->isuser;
        }
        
        // Проверяет админ это или юзер
        public function isAdmin() {
            return $this->isadmin;
        }
        
    }

    /*
        Класс создает новую сессию и так же закрывает все прошлые сессии с этого аккаунта если они есть
    */

    class MakeSession {
        
        /* Переменные базы данных */
        
        // Используется для отправки запросов базе данных 
        private $query;
        
        // Используется для получения данных из бд
        private $result;
        
        
        
        /* Внутренние переменные */
        
        // Храниться пароль пользователя в мд5 формате
        private $md5password;
        
        // Хранится куки пользователя
        private $md5Cockie;
        
        
        
        /* Процедуры */
        
        // Конструктор класса, в качестве параметров получает объект PDO, логин и пароль пользователя
        public function __construct($database, $login, $password) {
            $this->md5Cockie = md5($_SERVER['REMOTE_ADDR'] . $login . rand());
            $this->md5password = md5($password);
            
            $this->query = $database->prepare("SELECT CreateNewSession(:UserLogin, :UserPassMd5, :SessionMd5, :IpAddress)");
            $this->query->bindParam(':UserLogin', $login);
            $this->query->bindParam(':UserPassMd5', $this->md5password);
            $this->query->bindParam(':SessionMd5', $this->md5Cockie);
            $this->query->bindParam(':IpAddress', $_SERVER['REMOTE_ADDR']);
            
            $this->query->execute();
            $this->result = $this->query->fetch();
        }
        
        // Получает куки пользователя
        public function GetMd5Cockie() {
            return $this->md5Cockie;
        }
        
        // Получает результат создания пользователя
        public function GetResult() {
            return $this->result[0];
        }
        
        // Создает новые куки пользователю
        public function MakeCockie() {
            if ($this->result[0] > -1)
                setcookie("ZednShop_session", $this->md5Cockie);
        }
    }

    /*
        Класс завершающий сессию с юзером
    */
    
    class EndSession {
        
        /* Переменные для баз данных */
        
        // Используется для отправки запросов базе данных
        private $query;
        
        // Используется для получение результата от базы данных
        private $result;
        
        
        
        /* Внутренние переменные */
        
        // Куки пользователя которые надо анулировать
        private $md5hashended;
        
        
        
        /* Процедуры */
        
        // Конструктор, в качестве параметра принимает объект PDO
        public function __construct($database) {
            if (!empty($_COOKIE['ZednShop_session'])) {
                $this->md5hashended = $_COOKIE['ZednShop_session'];
                
                $this->query = $database->prepare("SELECT EndSession(:Md5)");
                $this->query->bindParam(':Md5', $this->md5hashended);
            
                $this->query->execute();
                $this->result = $this->query->fetch();
            }
        }
        
        // Получает результат завершения сессий
        public function GetResult() {
            return $this->result[0];
        }
    }
?>