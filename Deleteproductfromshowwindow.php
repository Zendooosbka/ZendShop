<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 12.11.17
 * Time: 19:10
 */

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
    require_once "zs_admin/EditShowWindow.class.php";

    if (isset($_GET['id']) && isset($_GET['swid']))
    {
        $q = new DeleteProductFromShowTable(htmlspecialchars($_GET['id']), htmlspecialchars($_GET['swid']));
        $q->make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }