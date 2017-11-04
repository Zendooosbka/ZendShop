<?php
    /* Запрос создающий нового пользователя */

    class RegNewUser {
        
        /* Переменные для базы данных */
        
        // Ссылка на PDO
        private $database;
        
        // Для запроса в базу данных
        private $query;
        
        
        
        /* Данные пользователя */
        
        // Логин пользователя
        private $login;
        
        // Имя пользователя
        private $name;
        
        // Фамилия пользователя
        private $surname;
        
        // Пароль пользователя
        private $password;
        
        // Пароль пользователя в мд5
        private $md5password;
        
        // Электронная почта пользователя
        private $email;
        
        // Телефон пользователя
        private $phone;
        
        
        
        /* Функции */
        
        // Конструктор класса, в параметрах принимает ссылку на объект PDO
        public function __construct($database) {
            $this->database = $database;
            $this->login = htmlspecialchars($_POST["login"]);
            $this->password = htmlspecialchars($_POST["password"]);
            $this->name = htmlspecialchars($_POST["name"]);
            $this->surname = htmlspecialchars($_POST["surname"]);
            $this->email = htmlspecialchars($_POST["email"]);
            $this->phone = htmlspecialchars($_POST["phone"]);
            $this->md5password = md5($this->password);
        }
        
        // Выводит информацию о классе
        public function PrintClass() {
            //echo $this->database;
            echo 'Class RegNewUser<br>';
            echo '$this->login'.$this->login.'<br>';
            echo '$this->password'.$this->password.'<br>';
            echo '$this->name '.$this->name.'<br>';  
            echo '$this->surname'.$this->surname.'<br>';
            echo '$this->email'.$this->email.'<br>';
            echo '$this->phone'.$this->phone.'<br>';
        }
        
        // Регестрирует нового пользователя
        public function Register() {
            if ((strlen($this->login) > 30) || (strlen($this->login) < 8))
                return 1;
            else if ((strlen($this->password) > 30) || (strlen($this->password) < 8))
                return 2;
            else if ((strlen($this->name) > 30) || (strlen($this->name) < 5))
                return 3;
            else if ((strlen($this->surname) > 30) || (strlen($this->surname) < 5))
                return 4;
            else if ((strlen($this->email) > 30) || (strlen($this->email) < 5))
                return 5;
            else {
                $this->query = $this->database->prepare("SELECT AddNewUser(:UserLogin, :UserName, :UserSurname, :UserPassMd5, :UserMail, :UserPhoneNumber)");
                $this->query->bindParam(':UserLogin', $this->login);
                $this->query->bindParam(':UserName', $this->name);
                $this->query->bindParam(':UserPassMd5', $this->md5password);
                $this->query->bindParam(':UserMail', $this->email);
                $this->query->bindParam(':UserSurname', $this->surname);
                $this->query->bindParam(':UserPhoneNumber', $this->phone);
                
                $this->query->execute();
                
                return 0;   
            }
        }
    }
?>