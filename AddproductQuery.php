<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 20.10.17
 * Time: 11:41
 */

    require_once "zs_admin/EditProducts.class.php";

    if (isset($_POST['productname']) &&
        isset($_POST['productprice']) &&
        isset($_POST['sectproductcateg']) &&
        isset($_POST['secproductbrand'])) {
            $q = new AddProduct(
                htmlspecialchars($_POST['productname']),
                htmlspecialchars($_POST['productprice']),
                htmlspecialchars($_POST['sectproductcateg']),
                htmlspecialchars($_POST['secproductbrand'])
            );

            $q->make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }
?>