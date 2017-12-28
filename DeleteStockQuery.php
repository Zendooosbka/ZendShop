<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 22.12.17
 * Time: 11:12
 */
    //ini_set('error_reporting', E_ALL);
    //ini_set('display_errors', 1);
    //ini_set('display_startup_errors', 1);
    require_once "zs_account/EditCompany.class.php";

    if (isset($_GET['id'])) {
        $q = new DeleteStock(htmlspecialchars($_GET['id']));
        $q->Make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }
?>