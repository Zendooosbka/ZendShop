<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);  
    ini_set('display_startup_errors', 1);
    
    require_once 'zs_system/ZendDatabase.class.php';
    require_once 'zs_reg/RegNewUser.class.php';
    
    $db = new ZendDatabase();
    $newuser = new RegNewUser($db);

    if ($newuser->Register() == 0) {
        header('Location: http://'.$ROOT_PATH.'/registration.php?error=0&user='.htmlspecialchars($_POST["login"]));
    } else {
        header('Location: http://'.$ROOT_PATH.'/registration.php?error=1');
    }
?>