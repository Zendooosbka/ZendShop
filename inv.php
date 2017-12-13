<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 13.12.17
 * Time: 4:13
 */

    require_once 'zs_account/EditCompany.class.php';


    if (isset($_GET['i']) && isset($_GET['p'])) {
        $q = new InvitePeople(htmlspecialchars($_GET['i']), htmlspecialchars($_GET['p']));
        $q->make();
    } else {
        header('Location: http://'.$ROOT_PATH.'/Index.php');
    }
?>