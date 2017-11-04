<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 20.10.17
 * Time: 14:31
 */
    require_once 'zs_admin/EditProducts.class.php';
    require_once 'zs_system/AddPicture.class.php';

    $newfile = new AddPicture($_FILES, 'prodfile');

    if ($newfile->AddPict()) {
        $q = new UpdateProductPicture(htmlspecialchars($_POST['id']) , $newfile->getPictname());
        $q->make();
    }
?>