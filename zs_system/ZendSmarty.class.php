<?php
    require_once 'libs/Smarty.class.php';

    class ZendSmarty extends Smarty {
        function __construct() {
            parent::__construct();
            $SMARTY_PATH = $_SERVER['DOCUMENT_ROOT'].'/zendshop';
            
            $this->template_dir = $SMARTY_PATH.'/tpl/tpl';
            $this->compile_dir = $SMARTY_PATH.'/tpl/tpl_c';
            $this->config_dir = $SMARTY_PATH.'/tpl/cfg';
            $this->cache_dir = $SMARTY_PATH.'/tpl/cache';
        }
    }
?>