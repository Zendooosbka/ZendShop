<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);  
    ini_set('display_startup_errors', 1); 

    require_once 'zs_admin/EditCategories.class.php';
    
    if (isset($_POST['categoryname']) && isset($_POST['section'])) {
        $q = new AddCategory(htmlspecialchars($_POST['categoryname']), htmlspecialchars($_POST['section']));
        $q->make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }
?>
