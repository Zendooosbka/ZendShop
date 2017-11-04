<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 04.11.17
 * Time: 2:50
 */


    require_once "zs_admin/EditProductAttributes.class.php";

    $a = 0;

    if (isset($_POST['id']) && isset($_POST['productid'])) {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }

    if (isset($_POST['attrname']) && isset($_POST['enattrname'])) {$a++;}
    if (isset($_POST['attrvalue']) && isset($_POST['enattrvalue'])) {$a++;}
    if (isset($_POST['attrimportant']) && isset($_POST['enattrimportant'])) {$a++;}

    if ($a == 0) {
        header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?productid='.htmlspecialchars($_POST['productid']).'&error=Вы ничего не выбрали');
    }

    if (isset($_POST['attrname']) && isset($_POST['enattrname'])) {
        $q = new UpdateProductAttributeName(htmlspecialchars($_POST['id']), htmlspecialchars($_POST['attrname']));
        $q->make();

        $a--;

        if ($a == 0) {
            header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?productid='.htmlspecialchars($_POST['productid']).'&good=Название атрибута продукта изменено');
        }
    }

    if (isset($_POST['attrvalue']) && isset($_POST['enattrvalue'])) {
        $q = new UpdateProductAttributeValue(htmlspecialchars($_POST['id']), htmlspecialchars($_POST['attrvalue']));
        $q->make();

        $a--;

        if ($a == 0) {
            header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?productid='.htmlspecialchars($_POST['productid']).'&good=Значение атрибута продукта изменено');
        }
    }

    if (isset($_POST['attrimportant']) && isset($_POST['enattrimportant'])) {
        $q = new UpdateProductAttributeImportant(htmlspecialchars($_POST['id']), htmlspecialchars($_POST['attrimportant']));
        $q->make();

        $a--;

        if ($a == 0) {
            header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?productid='.htmlspecialchars($_POST['productid']).'&good=Важность атрибута продукта изменена');
        }
    }

?>