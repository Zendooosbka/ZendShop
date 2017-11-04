<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);  
    ini_set('display_startup_errors', 1); 

    require_once 'zs_admin/EditCategories.class.php';
    
    if (!isset($_POST['id'])) {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }

    if (!(isset($_POST['sectionenable']) || isset($_POST['categoryenable']))) {
        header('Location: http://'.$ROOT_PATH.'/admineditscb.php?error=Вы не выбрали данные для редакиторвания');
    }

    if (isset($_POST['sectionenable']) && isset($_POST['section']) && isset($_POST['id'])) {
        $q = new UpdateCategorySection(htmlspecialchars($_POST['id']), htmlspecialchars($_POST['section']), isset($_POST['categoryenable']));
        $q->make();
    }
    
    if (isset($_POST['newnamecategory']) && isset($_POST['categoryenable']) && isset($_POST['id'])) {
        $q = new UpdateCategoryName(htmlspecialchars($_POST['id']), htmlspecialchars($_POST['newnamecategory']));
        $q->make();
    }
?>
