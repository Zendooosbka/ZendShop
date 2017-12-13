<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 14.11.17
 * Time: 16:06
 */

    require_once "zs_system/NoAdminEdit.php";

    class UpdateAccountLogin extends NoAdminEdit {
        private $newname;

        private function CheckAccoutLogin()
        {
            $this->query = $this->database->prepare("SELECT AccountCheckLogin(:new)");
            $this->query->bindParam(":new", $this->newname);
            $this->query->execute();
            return $this->query->fetch()[0];
        }

        public function Make()
        {
            global $ROOT_PATH;
            if ($this->session->isUser())
            {
                if (strlen($this->newname) > 7 && strlen($this->newname) < 30) {
                    if ($this->CheckAccoutLogin() == 0) {
                        $this->query = $this->database->prepare("CALL AccountUpdateLogin(:id, :new)");

                        $this->query->bindParam(":id", $this->session->GetUser());
                        $this->query->bindParam(":new", $this->newname);

                        $this->query->execute();

                        header('Location: http://' . $ROOT_PATH . '/account.php?good=Логин изменен');
                    } else {
                        header('Location: http://' . $ROOT_PATH . '/account.php?error=Такой логин уже существует');
                    }
                } else {
                    header('Location: http://' . $ROOT_PATH . '/account.php?error=Неправильный размер логина');
                }
            } else {
                header('Location: http://'.$ROOT_PATH.'/Index.php');
            }
        }

        public function __construct($newname)
        {
            parent::__construct();

            $this->newname = $newname;
        }
    }

    class UpdateAccountPassword extends NoAdminEdit {
        private $newname;

        public function Make()
        {
            global $ROOT_PATH;
            if ($this->session->isUser())
            {
                if (strlen($this->newname) > 7 && strlen($this->newname) < 30) {
                    $this->query = $this->database->prepare("CALL AccountUpdatePassword(:id, :new)");

                    $this->query->bindParam(":id", $this->session->GetUser());
                    $this->query->bindParam(":new", $this->newname);

                    $this->query->execute();

                    header('Location: http://' . $ROOT_PATH . '/account.php?good=Пароль изменен');
                } else {
                    header('Location: http://' . $ROOT_PATH . '/account.php?error=Неправильный размер пароля');
                }
            } else {
                header('Location: http://'.$ROOT_PATH.'/Index.php');
            }
        }

        public function __construct($newname)
        {
            parent::__construct();
            $this->newname = $newname;
        }
    }

    class UpdateAccountPhone extends NoAdminEdit {
        private $newname;

        private function CheckAccoutPhone()
        {
            $this->query = $this->database->prepare("SELECT AccountCheckPhone(:new)");
            $this->query->bindParam(":new", $this->newname);
            $this->query->execute();
            return $this->query->fetch()[0];
        }

        public function Make()
        {
            global $ROOT_PATH;
            if ($this->session->isUser())
            {
                if (strlen($this->newname) == 11) {
                    if ($this->CheckAccoutPhone() == 0) {
                        $this->query = $this->database->prepare("CALL AccountUpdatePhone(:id, :new)");

                        $this->query->bindParam(":id", $this->session->GetUser());
                        $this->query->bindParam(":new", $this->newname);

                        $this->query->execute();

                        header('Location: http://' . $ROOT_PATH . '/account.php?good=Номер изменен');
                    } else {
                        header('Location: http://' . $ROOT_PATH . '/account.php?error=Такой номер уже используется');
                    }
                } else {
                    header('Location: http://' . $ROOT_PATH . '/account.php?error=Неправильный размер номреа');
                }
            } else {
                header('Location: http://'.$ROOT_PATH.'/Index.php');
            }
        }

        public function __construct($newname)
        {
            parent::__construct();
            $this->newname = $newname;
        }
    }

    class UpdateAccountEmail extends NoAdminEdit {
        private $newname;

        private function CheckAccoutEmail()
        {
            $this->query = $this->database->prepare("SELECT AccountCheckEmail(:new)");
            $this->query->bindParam(":new", $this->newname);
            $this->query->execute();
            return $this->query->fetch()[0];
        }

        public function Make()
        {
            global $ROOT_PATH;
            if ($this->session->isUser())
            {
                if (strlen($this->newname) > 7 && strlen($this->newname) < 30) {
                    if ($this->CheckAccoutEmail() == 0) {
                        $this->query = $this->database->prepare("CALL AccountUpdateEmail(:id, :new)");

                        $this->query->bindParam(":id", $this->session->GetUser());
                        $this->query->bindParam(":new", $this->newname);

                        $this->query->execute();

                        header('Location: http://' . $ROOT_PATH . '/account.php?good=Почта изменена');
                    } else {
                        header('Location: http://' . $ROOT_PATH . '/account.php?error=Такая почта уже используется');
                    }
                } else {
                    header('Location: http://' . $ROOT_PATH . '/account.php?error=Неправильный размер почты');
                }
            } else {
                header('Location: http://'.$ROOT_PATH.'/Index.php');
            }
        }

        public function __construct($newname)
        {
            parent::__construct();
            $this->newname = $newname;
        }
    }


    class CreateNewTicketForCompany extends NoAdminEdit {
        // Название компании
        private $newname;

        // Описание компании
        private $descr;

        // Иннн компании
        private $inn;

        // Адрес компании
        private $addr;

        // Проверк на существование билета у пользователя
        private function CheckTickerts()
        {
            $this->query = $this->database->prepare("SELECT AccountCheckTicket(:new)");
            $this->query->bindParam(":new", $this->session->GetUser());
            $this->query->execute();
            return $this->query->fetch()[0];
        }

        public function Make()
        {
            global $ROOT_PATH;
            if ($this->session->isUser())
            {
                if (strlen($this->newname) > 7 && strlen($this->newname) < 49) {
                    if (strlen($this->inn) > 11 && strlen($this->inn) < 15) {
                        if (strlen($this->addr) > 7 && strlen($this->addr) < 49) {
                            if ($this->CheckTickerts() == 0) {
                                $this->query = $this->database->prepare("CALL AccountCreateTicketForCompany(:id, :newname, :addr, :inn, :descr)");

                                $this->query->bindParam(":id", $this->session->GetUser());
                                $this->query->bindParam(":newname", $this->newname);
                                $this->query->bindParam(":addr", $this->addr);
                                $this->query->bindParam(":inn", $this->inn);
                                $this->query->bindParam(":descr", $this->descr);

                                $this->query->execute();

                                header('Location: http://' . $ROOT_PATH . '/account.php?good=Заявка отправлена');
                            } else {
                                header('Location: http://' . $ROOT_PATH . '/account.php?error=Нельзя создавать несколько тикетов!');
                            }
                        } else {
                            header('Location: http://' . $ROOT_PATH . '/account.php?error=Неправильный адрес');
                        }
                    } else {
                        header('Location: http://' . $ROOT_PATH . '/account.php?error=Неправильный инн');
                    }
                } else {
                    header('Location: http://' . $ROOT_PATH . '/account.php?error=Неправильное название компании');
                }
            } else {
                header('Location: http://'.$ROOT_PATH.'/Index.php');
            }
        }

        public function __construct($newname, $addr, $inn, $desr)
        {
            parent::__construct();
            $this->newname = $newname;
            $this->addr = $addr;
            $this->descr = $desr;
            $this->inn = $inn;
        }
    }
?>