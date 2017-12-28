<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 23.12.17
 * Time: 18:21
 */

    //ini_set('error_reporting', E_ALL);
    //ini_set('display_errors', 1);
    //ini_set('display_startup_errors', 1);

    require_once 'zs_account/CompanyAddProductPage.class.php';

    $shearch_res = "";
    $id_res = -1;

    if (isset($_GET['search'])) { $shearch_res = htmlspecialchars($_GET['search']);}
    if (isset($_GET['id'])) { $id_res = htmlspecialchars($_GET['id']);}

    $p = new CompanyAddProductPage($shearch_res, $id_res);
    $p->Draw();
?>