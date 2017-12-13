<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 12.11.17
 * Time: 0:27
 */

    require_once "zs_admin/EditShowWindow.class.php";

    if (isset($_POST['swname']) && isset($_POST['sectswctcateg']))
    {
        $q = new AddShowWindow(htmlspecialchars($_POST['swname']), htmlspecialchars($_POST['sectswctcateg']));
        $q->make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }
?>