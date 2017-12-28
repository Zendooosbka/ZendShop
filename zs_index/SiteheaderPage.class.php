<?php
    /* Основная часть каждой страницы */

    require_once 'zs_system/Session.class.php';
    require_once 'zs_system/ZendDatabase.class.php';
    require_once 'zs_system/ZendSmarty.class.php';

    class SiteHeader {
        
        /* Переменные для использования базы данных */
        
        // Содержит в себе готовые элементы для меню выбора раздела
        private $sectionsmenu;
        
        // Через эту штуку можно использовать базу данных
        protected $database;
        
        // Через нее можно сделать запрос в базу данных
        protected $query;
        
        // Через нее можно узнать что вернул запрос
        protected $result;
        
        
        
        /* Смарти и другие елементы для построения страницы */
        
        // Для использования смарти
        protected $smarty;
        
        // Заголовок страницы
        protected $title;
        
        // Нужна для получения ошибок при запросе
        protected $badlogin;
        
        
        
        /* Сессия и данные пользователя (админа) */
        
        
        // Сессия юзера
        protected $session;
        
        // Имя юзера
        protected $name;
        
        // Фамилия юзера
        protected $surname;
        
        // Проверка на то юзер ли это или аноним
        protected $isuser;
        
        // Хранит ид пользователя для дальнейшнего использования
        protected $userid;
        
        // Хранит информацию о том админ ли пользователь или нет
        protected $isadmin;
        
        // Тут храниться все что находиться вне страничного пространства
        protected $innertext;
        
        
        
        /* Процедуры */

        // Проверка принадлежит ли юзер компании AccountCheckUserInCompany
        protected function CheckUserCompany()
        {
            $this->query = $this->database->prepare("SELECT AccountCheckUserInCompany(:new)");
            $this->query->bindParam(":new", $this->session->GetUser());
            $this->query->execute();
            return $this->query->fetch()[0];
        }


        public function MakeSectionsMenu() {
            $this->query = $this->database->prepare("SELECT id, Name FROM AdminSectionTable", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $this->query->execute();
            
            while ($this->result = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                $this->smarty->assign('id', $this->result[0]);
                $this->smarty->assign('name', $this->result[1]);
                
                $this->sectionsmenu .= $this->smarty->fetch("header-c.tpl");
            }
        }
        
        // Конструктор класса, в качестве параметра получает заголовок страницы
        public function __construct($title) {
            if (isset($_GET['badlogin']) == true)
                $this->badlogin = 1;
            
            $this->innertext = "";
            
            $this->database = new ZendDatabase();
            $this->smarty = new ZendSmarty();
            $this->session = new Session($this->database);
            
            $this->MakeSectionsMenu();
            
            $this->isuser = $this->session->isUser();
            $this->isadmin = $this->session->isAdmin();
            $this->userid = $this->session->GetUser();
            $this->title = $title;
            
            if ($this->isuser) {
                $this->query = $this->database->prepare("SELECT GetUserName(:id)");
                $this->query->bindParam(':id', $this->userid);
                
                $this->query->execute();
                $this->result = $this->query->fetch();
                $this->name = $this->result[0];
                
                $this->query = $this->database->prepare("SELECT GetUserSurName(:id)");
                $this->query->bindParam(':id', $this->userid);
                
                $this->query->execute();
                $this->result = $this->query->fetch();
                $this->surname = $this->result[0];
            } else {
                $this->name = "not";
                $this->surname = "user";
            }
        }
        
        // Позволяет добавлять текст вне страницы
        protected function AddInnerText($text) {
            $this->innertext = $text;
        }
        
        // Вывод содержимого класса
        public function PrintClass() {
            echo "Class SiteHeader <br>";
            echo '$this->isuser = '.($this->isuser ? 1 : 0).'<br>';
            echo '$this->isadmin = '.($this->isadmin ? 1 : 0).'<br>';
            echo '$this->userid = '.$this->userid.'<br>';
            echo '$this->title = '.$this->title.'<br>';
            echo '$this->innertext = '.$this->innertext.'<br>';
            echo '$this->name = '.$this->name.'<br>';
            echo '$this->surname = '.$this->surname.'<br><br>';
            //echo ''..'<br>';
            //echo ''..'<br>';
        }
        
        // Рисует страницу
        public function Draw($other) {            
            $this->smarty->assign('title', $this->title);
            $this->smarty->assign('isadmin', $this->isadmin);
            $this->smarty->assign('isuser', $this->isuser);
            $this->smarty->assign('name', $this->name);
            $this->smarty->assign('surname', $this->surname);
            $this->smarty->assign('other', $other);
            $this->smarty->assign('loginerror', $this->badlogin);
            $this->smarty->assign('innertext', $this->innertext);
            $this->smarty->assign('sectionmenu', $this->sectionsmenu);
            $this->smarty->display('header.tpl');
        }
    }
?>