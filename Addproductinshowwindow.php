<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 12.11.17
 * Time: 18:23
 */

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
    require_once "zs_admin/EditShowWindow.class.php";

    if (isset($_GET['productid']) && isset($_GET['swid'])) {
        $q = new AddProductInShowTable(htmlspecialchars($_GET['swid']), htmlspecialchars($_GET['productid']));
        $q->make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }
?>