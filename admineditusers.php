<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 28.11.17
 * Time: 10:55
 */

    //ini_set('error_reporting', E_ALL);
    //ini_set('display_errors', 1);
    //ini_set('display_startup_errors', 1);

    require_once 'zs_admin/AdmineditusersPage.class.php';

    $p = new AdmineditusersPage('Админ панель : Редактирование пользователей');
    $p->Draw();

?>