<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);  
    ini_set('display_startup_errors', 1); 

    require_once 'zs_admin/EditBrands.class.php';
    
    if (!isset($_POST['id'])) {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }

    if (!(isset($_POST['brandnameenabled']) || isset($_POST['branddescenabled']))) {
        header('Location: http://'.$ROOT_PATH.'/admineditscb.php?error=Вы не выбрали данные для редакиторвания');
    }

    if (isset($_POST['brandnameenabled']) && isset($_POST['brandname']) && isset($_POST['id'])) {
        $q = new UpdateBrandName(htmlspecialchars($_POST['id']), htmlspecialchars($_POST['brandname']), isset($_POST['branddescenabled']));
        $q->make();
    }
    
    if (isset($_POST['branddescenabled']) && isset($_POST['desc']) && isset($_POST['id'])) {
        $q = new UpdateBrandDescription(htmlspecialchars($_POST['id']), htmlspecialchars($_POST['desc']));
        $q->make();
    }
?>
