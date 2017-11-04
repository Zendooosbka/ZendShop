<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 04.11.17
 * Time: 19:26
 */

    require_once "zs_admin/EditAttributes.class.php";

    if (isset($_POST['id']) && isset($_POST['attrname']))
    {
        $q = new AddAttribute(
            htmlspecialchars($_POST['attrname']),
            htmlspecialchars($_POST['id'])
        );

        $q->make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }
?>