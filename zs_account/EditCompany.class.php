<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 12.12.17
 * Time: 18:07
 */

    require_once 'zs_system/NoAdminEdit.php';

    // Скрипт который добовляет пользователя в компанию
    class InvitePeople extends NoAdminEdit {
        // Ид компании
        private $compid;

        // Мд5 для добавления
        private $md5;

        // Мд5 настроящий
        private $truemd5;

        public function Make()
        {
            global $ROOT_PATH;

            if ($this->session->isUser())
            {
                $this->query = $this->database->prepare("SELECT AccountCheckUserInCompany(:new)");
                $this->query->bindParam(":new", $this->session->GetUser());
                $this->query->execute();

                if ($this->query->fetch()[0] == 0)
                {
                    if ($this->md5 == $this->truemd5)
                    {
                        $this->query = $this->database->prepare("CALL AccountAddUserInCompany(:usrud, :compid, 1)");

                        $this->query->bindParam(":compid", $this->session->GetUser());
                        $this->query->bindParam(":compid", $this->compid);

                        $this->query->execute();

                        header('Location: http://' . $ROOT_PATH . '/account.php?good=Вы были добавлены в компанию');
                    } else {
                        header('Location: http://' . $ROOT_PATH . '/account.php?error=Такой компании не существует либо вы ввели неправильную ссылку');
                    }
                } else {
                    header('Location: http://' . $ROOT_PATH . '/account.php?error=Вы уже состоите в компании');
                }
            } else {
                header('Location: http://'.$ROOT_PATH.'/Index.php');
            }
        }

        public function __construct($compid, $md5)
        {
            parent::__construct();

            $this->compid = $compid;
            $this->md5 = $md5;

            $this->query = $this->database->prepare("SELECT CreateDate, INN FROM AdminGetCompany WHERE Companyid = :id", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $this->query->bindParam(':id', $this->compid);
            $this->query->execute();

            $this->result = $this->query->fetch();
            $date = $this->result[0];
            $inn = $this->result[1];

            // md5 one love
            $this->truemd5 = md5(md5(md5($this->compid) . md5($date) . md5($inn)) . md5(intdiv(time(),3600)));
        }
    }

    // Добавляет новый склад
    class AddNewStock extends NoAdminEdit {
        // Название
        private $newname;

        // Адрес
        private $addr;

        // Коородинаты по x
        private $coord_x;

        // Коородинаты по y
        private $coord_y;

        // Компания в которой находится юзвер(0 если не в компании)
        private $company;

        public function Make()
        {
            global $ROOT_PATH;
            if ($this->session->isUser() && ($this->company > 0))
            {
                if (((mb_strlen($this->newname, 'utf8') > 7) && (mb_strlen($this->newname, 'utf8') < 30)) && ((mb_strlen($this->addr, 'utf8') > 7) && (mb_strlen($this->addr, 'utf8') < 45))) {
                    $this->query = $this->database->prepare("CALL AccountAddNewStock(:compid, :newname, :newadrr, :x, :y)");

                    $this->query->bindParam(":compid", $this->company);
                    $this->query->bindParam(":newname", $this->newname);
                    $this->query->bindParam(":newadrr", $this->addr);
                    $this->query->bindParam(":x", $this->coord_x);
                    $this->query->bindParam(":y", $this->coord_y);

                    $this->query->execute();

                    header('Location: http://' . $ROOT_PATH . '/account.php?good=Склад добавлен');
                } else {
                    header('Location: http://' . $ROOT_PATH . '/account.php?error=Неправильный размер пароля ');
                }
            } else {
                header('Location: http://'.$ROOT_PATH.'/Index.php');
            }
        }

        public function __construct($newname, $addr, $coord_x, $coord_y)
        {
            parent::__construct();
            $this->company = $this->CheckUserCompany();
            $this->newname = $newname;
            $this->addr = $addr;
            $this->coord_x = $coord_x;
            $this->coord_y = $coord_y;
        }
    }