<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);  
    ini_set('display_startup_errors', 1); 

    require_once 'zs_admin/EditSections.class.php';
    
    if (isset($_POST['newnamesection']) && isset($_POST['id'])) {
        $q = new UpdateSection(htmlspecialchars($_POST['id']), htmlspecialchars($_POST['newnamesection']));
        $q->make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }
?>
