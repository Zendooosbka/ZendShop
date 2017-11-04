<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);  
    ini_set('display_startup_errors', 1); 

    require_once 'zs_admin/EditSections.class.php';
    
    if (isset($_POST['newname'])) {
        $q = new AddSection(htmlspecialchars($_POST['newname']));
        $q->make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }
?>
