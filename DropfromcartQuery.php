<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 28.12.17
 * Time: 11:02
 */

    //ini_set('error_reporting', E_ALL);
    //ini_set('display_errors', 1);
    //ini_set('display_startup_errors', 1);

    require_once "zs_cart/CartEdit.class.php";

    if (isset($_GET['g'])) {
        $q = new DropGoodFromCart(htmlspecialchars($_GET['g']));
        $q->Make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }

?>