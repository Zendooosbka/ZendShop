<?php
/* Smarty version 3.1.30, created on 2017-10-20 11:16:28
  from "/var/www/html/zendshop/tpl/tpl/admin-header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e9b0dc16ff29_40413178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '330c28b5ac3ba655c17b4d93efd91627332014e5' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/admin-header.tpl',
      1 => 1508487366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e9b0dc16ff29_40413178 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default">
    <div class="panel-body">
        <div clas="row">
            <div class="col-sm-3">
                <a href="admineditscb.php" class="btn btn-info <?php if ($_smarty_tpl->tpl_vars['page']->value == 0) {?> disabled <?php }?>">Редакторование разделов, брендов</a>
            </div>
            <div class="col-sm-3">
                <a href="admineditproducts.php" class="btn btn-success <?php if ($_smarty_tpl->tpl_vars['page']->value == 1) {?> disabled <?php }?>">Редакторование товаров</a>
            </div>
            <div class="col-sm-3">
                <a href="" class="btn btn-success <?php if ($_smarty_tpl->tpl_vars['page']->value == 2) {?> disabled <?php }?>">Редакторование витрин</a>
            </div>
            <div class="col-sm-3">
                <a href="" class="btn btn-danger <?php if ($_smarty_tpl->tpl_vars['page']->value == 3) {?> disabled <?php }?>">Редакторование пользователей</a>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['admother']->value;
}
}
