<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 11.11.17
 * Time: 22:25
 */

    require_once "zs_admin/AdmineditshowwindowPage.class.php";

    $p = null;
    if (isset($_GET['swid'])) {
        $p = new Admineditshowwindow("Редактирование витрин", htmlspecialchars($_GET['swid']));
    } else {
        $p = new Admineditshowwindow("Редактирование витрин", 0);
    }

    $p->Draw();
?>