<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 27.11.17
 * Time: 2:43
 */

    //ini_set('error_reporting', E_ALL);
    //ini_set('display_errors', 1);
    //ini_set('display_startup_errors', 1);
    require_once "zs_account/EditAccount.class.php";

    if (isset($_POST['login'])) {
        $q = new UpdateAccountLogin(htmlspecialchars($_POST['login']));
        $q->Make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }
?>