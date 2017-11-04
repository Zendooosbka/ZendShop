<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);  
    ini_set('display_startup_errors', 1);

    require_once 'zs_index/SiteheaderPage.class.php';

    $h = new SiteHeader("Начальная страница");
    $h->Draw("Другой текст");
    $h->PrintClass();
?>