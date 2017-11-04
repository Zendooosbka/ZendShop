<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);  
    ini_set('display_startup_errors', 1);

    require_once 'zs_system/ZendDatabase.class.php';
    require_once 'zs_system/Session.class.php';

    $db = new ZendDatabase();
    $leave = new EndSession($db);

    header('Location: http://'.$ROOT_PATH.'/Index.php');
?>
    