<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 12.12.17
 * Time: 20:04
 */

    require_once "zs_account/EditCompany.class.php";

    if (isset($_POST['name']) &&
    isset($_POST['addr']) &&
    isset($_POST['maps-coord-x']) &&
    isset($_POST['maps-coord-y'])) {
    $q = new AddNewStock(
        htmlspecialchars($_POST['name']),
        htmlspecialchars($_POST['addr']),
        htmlspecialchars($_POST['maps-coord-x']),
        htmlspecialchars($_POST['maps-coord-y'])
    );

    $q->make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }
?>