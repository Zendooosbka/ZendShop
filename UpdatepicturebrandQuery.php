<?php
    require_once 'zs_admin/EditBrands.class.php';
    require_once 'zs_system/AddPicture.class.php';

    $newfile = new AddPicture($_FILES, 'brandfile');

    if ($newfile->AddPict()) {
        $q = new UpdateBrandPicture(htmlspecialchars($_POST['id']) , $newfile->getPictname());
        $q->make();
    }

    //echo 'Некоторая отладочная информация:';

    //print_r($_POST);
    //echo htmlspecialchars($_POST['id']);
    //print_r($_FILES);

?>