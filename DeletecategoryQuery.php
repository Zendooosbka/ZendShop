<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);  
    ini_set('display_startup_errors', 1); 

    require_once 'zs_admin/EditCategories.class.php';
    
    if (isset($_GET['id'])) {
        $q = new DeleteCategory(htmlspecialchars($_GET['id']));
        $q->make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }
?>