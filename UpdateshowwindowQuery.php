<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 13.11.17
 * Time: 0:16
 */

    require_once "zs_admin/EditShowWindow.class.php";

    if (isset($_POST['newname']) && isset($_POST['swid']))
    {
        $q = new UpdateShowWindowName(htmlspecialchars($_POST['swid']), htmlspecialchars($_POST['newname']));
        $q->make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }
?>