<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 13.11.17
 * Time: 8:49
 */

    require_once "zs_index/SiteheaderPage.class.php";

    class AccountPage extends SiteHeader {

        // Если действия успешные, то тут будет уведомление об этом
        private $good;

        // Тут находится сообщение если что то пошло не так
        private $error;

        // Имя пользователя
        private $username;

        // Фамилия пользователя
        private $userfname;

        // Логин пользователя
        private $userlogin;

        // Почта пользователя
        private $useremail;

        // Номер пользователя
        private $userphonenumber;

        // Говорит о том, причастен ли пользователь к какой нибудь компании или он ждет одобрения его компании или вообще ничего
        private $company;

        // Работает ли с этим аккаунтом телеграм бот
        private $telegrambotstatus;

        // Модальные диалоги
        private $modals;

        // Номер билета
        private $ticketid;

        // Название компании
        private $companyname;

        // Адрес компании
        private $addrcompany;

        // Описание компании
        private $descriptioncompany;

        // Иннн
        private $inncompany;

        // Имя создателя компании
        private $ownername;

        // Фамилия создателя компании
        private $ownersurname;

        // Таблица складов
        private $stocktable;

        // Таблица участников
        private $memberstable;

        // Приграшение в компанию
        private $invitelink;

        private function PrepareInviteLink()
        {
            global $ROOT_PATH;

            $this->query = $this->database->prepare("SELECT CreateDate, INN FROM AdminGetCompany WHERE Companyid = :id", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $this->query->bindParam(':id', $this->company);
            $this->query->execute();

            $this->result = $this->query->fetch();
            $date = $this->result[0];
            $inn = $this->result[1];

            // md5 one love
            $md5pass = md5(md5(md5($this->company) . md5($date) . md5($inn)) . md5(intdiv(time(),3600)));

            // Тут несовсем ясно что делать с хттп
            $this->invitelink = 'http://'.$ROOT_PATH.'/inv.php?i='.$this->company.'&p='.$md5pass;
        }

        // Подготовка таблицы работников
        private function PrepareMembersTable()
        {
            $this->query = $this->database->prepare("SELECT * FROM AccoutGetCompanyWorkers WHERE Companyid = :id", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $this->query->bindParam(':id', $this->company);
            $this->query->execute();

            while ($this->result = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                $this->smarty->assign('compid', $this->result[0]);
                $this->smarty->assign('userid', $this->result[1]);
                $this->smarty->assign('name', $this->result[2]);
                $this->smarty->assign('fname', $this->result[3]);
                $this->smarty->assign('level', ($this->result[4] > 0 ? "Работник" : "Создател"));

                $this->memberstable .= $this->smarty->fetch("account-members-table.tpl");
            }
        }

        // Подготовка таблиц складов
        private function PrepareStockTable()
        {
            $this->query = $this->database->prepare("SELECT * FROM AccoutGetStock WHERE Companyid = :id", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $this->query->bindParam(':id', $this->company);
            $this->query->execute();

            while ($this->result = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                //$this->smarty->assign('stockid', $this->result[0]);
                //$this->smarty->assign('companyid', $this->result[1]);
                $this->smarty->assign('name', $this->result[2]);
                $this->smarty->assign('address', $this->result[3]);
                $this->smarty->assign('coord_x', $this->result[4]);
                $this->smarty->assign('coord_y', $this->result[5]);

                $this->stocktable .= $this->smarty->fetch("account-stocks-table.tpl");
            }
        }

        // Проверк на существование билета у пользователя
        private function CheckTickerts()
        {
            $this->query = $this->database->prepare("SELECT AccountCheckTicket(:new)");
            $this->query->bindParam(":new", $this->session->GetUser());
            $this->query->execute();
            return $this->query->fetch()[0];
        }

        // Проверка принадлежит ли юзер компании AccountCheckUserInCompany
        private function CheckUserCompany()
        {
            $this->query = $this->database->prepare("SELECT AccountCheckUserInCompany(:new)");
            $this->query->bindParam(":new", $this->session->GetUser());
            $this->query->execute();
            return $this->query->fetch()[0];
        }

        private function PrepareModals()
        {
            $this->modals = $this->smarty->fetch("account-modals.tpl");
        }

        // Готовит информацию о пользователе
        private function MakeAccountInformation()
        {
            $this->query = $this->database->prepare("SELECT * FROM AccountUserInformation WHERE id = :id");
            $this->query->bindParam(":id", $this->session->GetUser());

            $this->query->execute();

            $res = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);

            $this->userlogin = $res[1];
            $this->username = $res[2];
            $this->userfname = $res[3];
            $this->userphonenumber = $res[4];
            $this->useremail = $res[5];

        }

        // Готовит информацию о заявке
        private function MakeTicketInformation()
        {
            if ($this->company == 0) {
                $this->query = $this->database->prepare("SELECT * FROM AccoutTicketInfo WHERE UserId = :id");
                $this->query->bindParam(":id", $this->session->GetUser());

                $this->query->execute();

                $res = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);

                $this->ticketid = $res[0];
                $this->companyname = $res[1];
                $this->addrcompany = $res[2];
                $this->inncompany = $res[3];
                $this->descriptioncompany = $res[4];
            }
        }

        // Готовит информацию о компании
        private function MakeCompanyInformation()
        {
            if ($this->company > 0) {
                $this->query = $this->database->prepare("SELECT * FROM AccountGetCompanyInfo WHERE CompanyId = :id");
                $this->query->bindParam(":id", $this->company);

                $this->query->execute();

                $res = $this->query->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);

                $this->companyname = $res[1];
                $this->addrcompany = $res[2];
                $this->inncompany = $res[3];
                $this->descriptioncompany = $res[4];
                $this->ownername = $res[5];
                $this->ownersurname = $res[6];
            }
        }

        // Собирает все воедино
        private function Build()
        {
            $this->smarty->assign("uname", $this->username);
            $this->smarty->assign("ufname", $this->userfname);
            $this->smarty->assign("login", $this->userlogin);
            $this->smarty->assign("phonenumber", $this->userphonenumber);
            $this->smarty->assign("email", $this->useremail);

            if ($this->company > -1) {
                $this->smarty->assign("compname", $this->companyname);
                $this->smarty->assign("compaddr", $this->addrcompany);
                $this->smarty->assign("compinn", $this->inncompany);
                $this->smarty->assign("compdescr", $this->descriptioncompany);
                if ($this->company == 0) $this->smarty->assign("ticketid", $this->ticketid);

                if ($this->company > 0)
                {
                    $this->smarty->assign("ownername", $this->ownername);
                    $this->smarty->assign("ownersurname", $this->ownersurname);
                    $this->smarty->assign("stocktable", $this->stocktable);
                    $this->smarty->assign('invitelink', $this->invitelink);
                    $this->smarty->assign('memberstable', $this->memberstable);
                }
            }

            $this->smarty->assign("good", $this->good);
            $this->smarty->assign("error", $this->error);

            $this->smarty->assign("company", $this->company);

            // Работает ли с этим аккаунтом телеграм бот
            $this->telegrambotstatus = 1;
            $this->smarty->assign("bottelegramstatus", $this->telegrambotstatus > 0 ? "Включен" : "Выключен");
            $this->smarty->assign("bottelegramswitch", $this->telegrambotstatus > 0 ?
                "<a href=\"Disabletelegrambot.php\">Выключить бота</a>" : "<a href=\"Enabletelegrambot.php\">Включить бота</a>"
            );
            return $this->smarty->fetch("account.tpl");
        }

        public function Draw()
        {
            parent::Draw($this->Build()); // TODO: Change the autogenerated stub
        }

        public function __construct($title)
        {
            global $ROOT_PATH;
            parent::__construct($title);

            if (!$this->session->isUser())
                header('Location: http://'.$ROOT_PATH.'/Index.php');

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

            $this->company = ($this->CheckUserCompany() > 0) ? $this->CheckUserCompany() : $this->CheckTickerts()-1;
            $this->MakeAccountInformation();

            if ($this->company == 0) $this->MakeTicketInformation();
            if ($this->company > 0) $this->MakeCompanyInformation();

            $this->PrepareStockTable();
            $this->PrepareModals();
            $this->PrepareInviteLink();
            $this->PrepareMembersTable();

            $this->AddInnerText($this->modals);
        }
    }