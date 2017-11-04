<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);  
    ini_set('display_startup_errors', 1); 

    require_once 'zs_admin/EditBrands.class.php';
    
    if (isset($_POST['brandname']) && isset($_POST['desc'])) {
        $q = new AddBrand(htmlspecialchars($_POST['brandname']), htmlspecialchars($_POST['desc']));
        $q->make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }
?>
