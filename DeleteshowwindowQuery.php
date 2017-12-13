<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 12.11.17
 * Time: 17:34
 */

    require_once "zs_admin/EditShowWindow.class.php";

    if (isset($_GET['id']) && isset($_GET['swid'])) {
        $q = new DeleteShowWindow(htmlspecialchars($_GET['id']), htmlspecialchars($_GET['swid']));
        $q->make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }
?>