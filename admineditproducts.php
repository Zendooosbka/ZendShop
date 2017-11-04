<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 20.10.17
 * Time: 10:37
 */
    require_once "zs_admin/AdmineditproductsPage.class.php";

    $p = null;
    if (isset($_GET['productid'])) {
        $p = new AdmineditproductsPage("Редактирование продуктов", htmlspecialchars($_GET['productid']));
    } else {
        $p = new AdmineditproductsPage("Редактирование продуктов", 0);
    }

    $p->Draw();
?>