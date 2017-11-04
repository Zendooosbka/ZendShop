<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 04.11.17
 * Time: 2:49
 */

    require_once "zs_admin/EditProductAttributes.class.php";

    if (isset($_GET['id']) && isset($_GET['productid'])) {
        $q = new DeleteProductAttribute(htmlspecialchars($_GET['id']), htmlspecialchars($_GET['productid']));
        $q->make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }
?>