<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 20.10.17
 * Time: 14:31
 */

    require_once "zs_admin/EditProducts.class.php";

    $a = 0;

    if (isset($_POST['id']) == false) {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }

    if (isset($_POST['productname']) && isset($_POST['prnameen'])) {$a++;}
    if (isset($_POST['productprice']) && isset($_POST['prpriceen'])) {$a++;}
    if (isset($_POST['sectproductcateg']) && isset($_POST['prcaten'])) {$a++;}
    if (isset($_POST['secproductbrand']) && isset($_POST['prbranden'])) {$a++;}

    if ($a == 0) {
        header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?error=Вы ничего не выбрали    ');
    }

    if (isset($_POST['productname']) && isset($_POST['prnameen'])) {
        $q = new UpdateProductName(htmlspecialchars($_POST['id']), htmlspecialchars($_POST['productname']));
        $q->make();

        $a--;

        if ($a == 0) {
            header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?good=Информация о продукте изменена');
        }
    }

    if (isset($_POST['productprice']) && isset($_POST['prpriceen'])) {
        $q = new UpdateProductPrice(htmlspecialchars($_POST['id']), htmlspecialchars($_POST['productprice']));
        $q->make();

        $a--;

        if ($a == 0) {
            header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?good=Информация о продукте изменена');
        }
    }

    if (isset($_POST['sectproductcateg']) && isset($_POST['prcaten'])) {
        $q = new UpdateProductCategory(htmlspecialchars($_POST['id']), htmlspecialchars($_POST['sectproductcateg']));
        $q->make();

        $a--;

        if ($a == 0) {
            header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?good=Информация о продукте изменена');
        }
    }

    if (isset($_POST['secproductbrand']) && isset($_POST['prbranden'])) {
        $q = new UpdateProductBrand(htmlspecialchars($_POST['id']), htmlspecialchars($_POST['secproductbrand']));
        $q->make();

        header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?good=Информация о продукте изменена');
    }

?>