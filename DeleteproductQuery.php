<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 20.10.17
 * Time: 12:15
 */

    require_once "zs_admin/EditProducts.class.php";

    if (isset($_GET['id'])) {
        $q = new DeleteProduct(htmlspecialchars($_GET['id']));
        $q->make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }
?>