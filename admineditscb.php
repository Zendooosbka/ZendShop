<?php
    //ini_set('error_reporting', E_ALL);
    //ni_set('display_errors', 1);  
    //ini_set('display_startup_errors', 1);
    
    require_once 'zs_admin/AdmineditscbPage.class.php';
    
    $p = new AdmineditscbPage('Админ панель');
    $p->Draw();
    //$p->PrintClass();
?>