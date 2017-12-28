<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);  
    ini_set('display_startup_errors', 1);

    require_once 'zs_index/IndexPage.class.php';

    $h = new IndexPage();
    $h->Draw();
?>