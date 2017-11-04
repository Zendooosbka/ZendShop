<?php
    /* Админ панель - редактирование брендов, категорий, цуацацу */

    require_once 'zs_admin/AdminheaderPage.class.php';

    class AdmineditscbPage extends AdminHeaderPage {
        
        // хранит таблицу разделов в готовом виде
        private $sectionstable;
        
        // хранит таблицу категорий в готовом виде
        private $categoriestable;
        
        // хранит таблицу брендов в готовом виде
        private $brandstable;
        
        // хранит разделы для редактирования категорий
        private $categoptions;
        
        // хранит дополнительные модальные диалоги
        private $modals;
        
        
        
        /* Функции */
        
        // Подготавливает таблицу разделов
        private function PrepareSectionsTable() {
            
            $this->query = $this->database->prepare("SELECT * FROM AdminSectionTable", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $this->query->execute();
            
            while ($this->result = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                $this->smarty->assign('id', $this->result[0]);
                $this->smarty->assign('name', $this->result[2]);
                $this->smarty->assign('date', $this->result[1]);
                
                $this->sectionstable .= $this->smarty->fetch("admin-scb-s-table.tpl");
                
                $this->smarty->assign('id', $this->result[0]);
                $this->smarty->assign('name', $this->result[2]);
                
                $this->categoptions .= $this->smarty->fetch("admin-scb-c-sections.tpl");
            }
        }
        
        // Подготавливает таблицу категорий
        private function PrepareCategoriesTable() {
            $this->query = $this->database->prepare("SELECT * FROM AdminCategoriesTable", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $this->query->execute();
            
            while ($this->result = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                $this->smarty->assign('id', $this->result[0]);
                $this->smarty->assign('name', $this->result[3]);
                $this->smarty->assign('sname', $this->result[1]);
                $this->smarty->assign('date', $this->result[2]);
                
                $this->categoriestable .= $this->smarty->fetch("admin-scb-c-table.tpl");
            }
        }

        // Подготавливает таблицу брендов
        private function PrepareBrandsTable() {
            global $ROOT_PATH;
            
            $this->query = $this->database->prepare("SELECT * FROM AdminBrandsTable", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $this->query->execute();
            
            while ($this->result = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                $this->smarty->assign('id', $this->result[0]);
                $this->smarty->assign('name', $this->result[1]);
                $this->smarty->assign('picture', $this->result[2]);
                $this->smarty->assign('date', $this->result[3]);
                $this->smarty->assign('lowpicture', substr($this->result[2], 0, 20).'...');
                $this->smarty->assign('desc', substr($this->result[4], 0, 20).'...');
                $this->smarty->assign('meme' ,'pictures/');
                
                $this->brandstable .= $this->smarty->fetch("admin-scb-b-table.tpl");
            }
        }
        
        // Подготавливает дополнительные диалоги для страницы
        private function PrepareModals() {
            $this->smarty->assign('categoptions', $this->categoptions);
            $this->modals = $this->smarty->fetch('admin-scb-modals.tpl');
            
            $this->query = $this->database->prepare("SELECT * FROM AdminBrandsTable", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $this->query->execute();
            
            while ($this->result = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                $this->smarty->assign('id', $this->result[0]);
                $this->smarty->assign('name', $this->result[1]);
                $this->smarty->assign('image', $this->result[2]);
                $this->smarty->assign('descr', $this->result[4]);
                
                $this->brandstable .= $this->smarty->fetch("admin-scb-b-modals.tpl");
            }
        }
        
        // Строит страницу
        private function BuildPage() {
            $this->smarty->assign('sectiosntable', $this->sectionstable);
            $this->smarty->assign('categoriestable', $this->categoriestable);
            $this->smarty->assign('brandstable', $this->brandstable);
            
            $this->smarty->assign('categoptions', $this->categoptions);
            
            $this->smarty->assign('good', $this->good);
            $this->smarty->assign('error', $this->error);
            
            return $this->smarty->fetch("admin-scb.tpl");
        }
        
        // Конструктор класса, в качестве параметра принимает заголовок страницы
        public function __construct($title) {
            parent::__construct($title, AdminHeaderPage::ADM_EDITPAGE_SCB);
            
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
            
            $this->PrepareSectionsTable();
            $this->PrepareCategoriesTable();
            $this->PrepareBrandsTable();
            $this->PrepareModals();
        }    
        
        // Выводит информацию о классе
        public function PrintClass() {
            parent::PrintClass();
            
            echo 'AdmineditscbPafe class<br>';
            echo '$this->sectionstable = '.$this->sectionstable.'<br>';
            echo '$this->categoriestable = '.$this->categoriestable.'<br>';
            echo '$this->categoptions = '.$this->categoptions.'<br>';
            echo '$this->good = '.($this->good == null ? 'is null' : 'not null').'<br>';
            echo '$this->error = '.($this->error == null ? 'is null' : 'not null').'<br><br>';
        }
        
        // Рисует страницу
        public function Draw() {
            $this->AddInnerText($this->modals);
            parent::Draw($this->BuildPage());
        }
    }
?>