<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 27.11.17
 * Time: 9:19
 */

    require_once "zs_account/EditAccount.class.php";

    if (isset($_POST['compname']) &&
        isset($_POST['address']) &&
        isset($_POST['inn']) &&
        isset($_POST['descr'])) {

        $q = new CreateNewTicketForCompany(
            htmlspecialchars($_POST['compname']),
            htmlspecialchars($_POST['address']),
            htmlspecialchars($_POST['inn']),
            htmlspecialchars($_POST['descr'])
        );

        $q->Make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }

?>