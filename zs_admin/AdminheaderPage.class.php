<?php
    /* Часть админ панели которая отвечает за то, на какой странице находиться админ */

    require_once 'zs_index/SiteheaderPage.class.php';

    class AdminHeaderPage extends SiteHeader {
        
        // Странца на которой находится админ
        private $page;
        
        // Константа страницы редактирования разделов
        const ADM_EDITPAGE_SCB = 0;
        
        // Константа страницы редактирования товаров
        const ADM_EDITPAGE_PRODUCTS = 1;
        
        // Константа страницы редактирования витрин
        const ADM_EDITPAGE_SHOWWINDOW = 2;
        
        // Константа страницы редактирования пользователей
        const ADM_EDITPAGE_USERS = 3;

        // Если ошибка то вернуть строку иначе нулл
        protected $error;

        // Если результат успешен вернуть строку иначе нулл
        protected $good;


        
        /* Функции */
        
        // Конструктор класса, в качестве параметров принимает заголовок страницы и тип страницы админа
        public function __construct($title, $typepage) {
            global $ROOT_PATH;
            
            $this->page = $typepage;
            parent::__construct($title);
            
            if ($this->session->isadmin() == false) {
                // Когда дебаг прекратится убрать этот коммент header('Location: http://'.$ROOT_PATH.'/Index.php');
            }
        }
        
        // Выводит страницу
        public function Draw($admother) {
            $this->smarty->assign('page', $this->page);
            $this->smarty->assign('admother', $admother);
            
            parent::Draw($this->smarty->fetch('admin-header.tpl'));
        }
        
        // Выводит информацию о классе
        public function PrintClass() {
            parent::PrintClass();
            
            echo "Class AdminHeader <br>";
            echo '$this->page = '.$this->page.'<br><br>';
        }
    }
?>