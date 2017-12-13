<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 28.11.17
 * Time: 13:42
 */

    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    require_once 'zs_admin/EditCompany.class.php';

    if (isset($_GET['ticketid'])) {
        $q = new AddCompany(htmlspecialchars($_GET['ticketid']));
        $q->make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }
?>