<?php
    /* Страница регистрации нового юзера */

    require_once 'zs_index/SiteheaderPage.class.php';

    class RegNewUserPage extends SiteHeader {
        
        // Хранит в себе ошибки при регистрации
        private $regerror;
        
        // Имя нового пользователя
        private $reguser;
        
        
        
        /* Функции */
        
        // Конструктор класса, в качестве параметра принимает заголовок страницы
        public function __construct($title) {
            if (isset($_GET['error']) == true) {
                $this->regerror = htmlspecialchars($_GET['error']);
                if ($this->regerror == 0)
                    $this->reguser = htmlspecialchars($_GET['user']);
                else
                    $this->reguser = -1;
            } else {
                $this->regerror = -1;
                $this->reguser = -1;
            }
            parent::__construct($title);
        }
        
        // Рисует страницу
        public function Draw() {
            $this->smarty->assign('error', $this->regerror);
            $this->smarty->assign('user', $this->reguser);
            
            parent::Draw($this->smarty->fetch('register.tpl'));
        }
        
        // Выводит содержимое класса
        public function PrintClass() {
            parent::PrintClass();
            
            echo 'Class RegNewUserPage<br>';
            echo '$this->regerror = '.$this->regerror.'<br>';
            echo '$this->reguser = '.$this->reguser.'<br>';
        }
    }
?>