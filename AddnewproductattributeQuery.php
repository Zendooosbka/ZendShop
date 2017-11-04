<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 04.11.17
 * Time: 2:48
 */

    require_once "zs_admin/EditProductAttributes.class.php";

    if (isset($_POST['attrproductid']) &&
        isset($_POST['attrname']) &&
        isset($_POST['attrvalue']) &&
        isset($_POST['attrimportant'])) {
        $q = new AddProductAttribute(
            htmlspecialchars($_POST['attrname']),
            htmlspecialchars($_POST['attrvalue']),
            htmlspecialchars($_POST['attrproductid']),
            htmlspecialchars($_POST['attrimportant'])
        );

        $q->make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }
?>