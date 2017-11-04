<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);  
    ini_set('display_startup_errors', 1);
    
    require_once 'zs_system/ZendDatabase.class.php';
    require_once 'zs_system/Session.class.php';
       
    $login = htmlspecialchars($_POST["login"]);
    $pass = htmlspecialchars($_POST["pwd"]);
        
    $db = new ZendDatabase();
    $newsession = new MakeSession($db, $login, $pass);

    if ($newsession->GetResult() > -1) {
        $newsession->MakeCockie();
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php?badlogin=1');
    }
?>