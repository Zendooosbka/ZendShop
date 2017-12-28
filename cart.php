<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 28.12.17
 * Time: 10:09
 */

    //ini_set('error_reporting', E_ALL);
    //ini_set('display_errors', 1);
    //ini_set('display_startup_errors', 1);

    require_once "zs_cart/CartPage.class.php";

    $q = new CartPage();
    $q->Draw();
?>