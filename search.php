<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);  
    ini_set('display_startup_errors', 1);

    require_once 'zs_search/SearchPage.class.php';

    $shearch_res = "";

    if (isset($_GET['q'])) {$shearch_res = htmlspecialchars($_GET['q']);}

    $d = new ShearchPage($shearch_res);
    $d->Draw();
?>