<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 13.11.17
 * Time: 8:40
 */

    require_once 'zs_admin/AdminheaderPage.class.php';

    class AdmineditusersPage extends AdminHeaderPage {
        // Таблица запросов на создание компании
        private $ticketstable;

        // Таблица существующих компаний
        private $companytable;

        // Модальные диалоги
        private $modals;

        // Подготавливает таблицу запросов на создание компании
        private function Prepareticketstable()
        {
            //AdminGetTickets
            $this->query = $this->database->prepare("SELECT * FROM AdminGetTickets WHERE State = 0", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $this->query->execute();

            while ($this->result = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                $this->smarty->assign('ticketid', $this->result[0]);
                $this->smarty->assign('username', $this->result[3]);
                $this->smarty->assign('phone', $this->result[4]);
                $this->smarty->assign('email', $this->result[5]);
                $this->smarty->assign('compname', $this->result[6]);
                $this->smarty->assign('date', $this->result[10]);

                $this->ticketstable .= $this->smarty->fetch("admin-users-tickets-table.tpl");

                $this->smarty->assign('ticketid', $this->result[0]);
                $this->smarty->assign('compname', $this->result[6]);
                $this->smarty->assign('inn', $this->result[8]);
                $this->smarty->assign('address', $this->result[7]);

                $this->modals .= $this->smarty->fetch("admin-users-modals-company-info.tpl");
            }
        }

        // Готовит таблицу компаний
        private function Preparecompanystable()
        {
            //AdminGetTickets
            $this->query = $this->database->prepare("SELECT * FROM AdminGetCompany", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $this->query->execute();

            while ($this->result = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                $this->smarty->assign('id', $this->result[0]);
                $this->smarty->assign('name', $this->result[1]);
                $this->smarty->assign('address', $this->result[2]);
                $this->smarty->assign('inn', $this->result[3]);
                $this->smarty->assign('date', $this->result[4]);
                $this->smarty->assign('ownerid', $this->result[5]);

                $this->companytable .= $this->smarty->fetch("admin-users-company-table.tpl");

                //$this->smarty->assign('ticketid', $this->result[0]);
                //$this->smarty->assign('compname', $this->result[6]);
                //$this->smarty->assign('inn', $this->result[8]);
                //$this->smarty->assign('address', $this->result[7]);

                //$this->modals .= $this->smarty->fetch("admin-users-modals-company-info.tpl");
            }
        }

        private function Build()
        {
            $this->smarty->assign('companytable', $this->companytable);
            $this->smarty->assign('tiketstable', $this->ticketstable);
            $this->smarty->assign('good', $this->good);
            $this->smarty->assign('error', $this->error);

            return $this->smarty->fetch("admin-users.tpl");
        }

        public function Draw()
        {
            parent::Draw($this->Build());
        }

        public function __construct($title)
        {
            parent::__construct($title, ADM_EDITPAGE_USERS);

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

            $this->Prepareticketstable();
            $this->Preparecompanystable();

            $this->AddInnerText($this->modals);
        }
    }