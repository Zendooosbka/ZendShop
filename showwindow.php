<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 26.12.17
 * Time: 9:32
 */

    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    require_once "zs_showwindow/ShowwindowPage.class.php";

    if (isset($_GET['g']))
    {
        $q = new ShowWindowPage(htmlspecialchars($_GET['g']));
        $q->Draw();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }
?>