<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 04.11.17
 * Time: 19:26
 */

    require_once 'zs_admin/EditAttributes.class.php';

    if ($_GET['id'] && isset($_GET['productid'])) {
        $q = new DeleteAttribute(htmlspecialchars($_GET['id']), htmlspecialchars($_GET['productid']));
        $q->make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }
?>