<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 28.11.17
 * Time: 12:05
 */
    require_once 'zs_admin/Edit.class.php';

    /* Удаляет категорию */

    class AddCompany extends Edit {
        // Ид билета
        private $ticketid;

        public function Make()
        {
            global $ROOT_PATH;

            if ($this->session->isadmin()) {
                $this->query = $this->database->prepare('CALL CreateCompany(:id)');
                $this->query->bindParam(':id', $this->ticketid);
                $this->query->execute();

                header('Location: http://'.$ROOT_PATH.'/admineditusers.php?good=Компания добавлена в систему');
            }
        }

        public function __construct($ticketid)
        {
            parent::__construct();
            $this->ticketid = $ticketid;
        }

    }
?>