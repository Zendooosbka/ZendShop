<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 04.11.17
 * Time: 2:50
 */


    require_once "zs_admin/EditProducts.class.php";

    $a = 0;

    if (isset($_POST['id']) && isset($_POST['productid'])) {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }

    if (isset($_POST['attrname']) && isset($_POST['enattrname'])) {$a++;}
    if (isset($_POST['attrvalue']) && isset($_POST['enattrvalue'])) {$a++;}
    if (isset($_POST['ttrimportant']) && isset($_POST['enttrimportant'])) {$a++;}

    if ($a == 0) {
        header('Location: http://'.$ROOT_PATH.'/admineditproducts.php?productid='.htmlspecialchars($_POST['productid']).'&error=Вы ничего не выбрали');
    }
?>