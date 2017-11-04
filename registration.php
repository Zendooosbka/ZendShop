<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);  
    ini_set('display_startup_errors', 1);   

    require_once 'zs_reg/RegnewuserPage.class.php';

    $page = new RegNewUserPage("Регистрация нового пользователя");
    $page->Draw();
    //$page->PrintClass();
?>