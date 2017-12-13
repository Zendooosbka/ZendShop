<?php
/* Smarty version 3.1.30, created on 2017-11-13 00:23:33
  from "/var/www/html/zendshop/tpl/tpl/admin-showwindow-modals.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a08bbd52381e8_23253866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '224d9f63081b9543b16b6d79c29d7112e97da71a' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/admin-showwindow-modals.tpl',
      1 => 1510521733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a08bbd52381e8_23253866 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ModalShowWindowUpdateDialog" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <form action="UpdateshowwindowQuery.php" method="post">
            <div class="modal-content">
                <input type="hidden" id="showwindowid" name="swid" value="0">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Изменение витрины</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="attrname">Название витрины</label>
                        <input type="text" id="attrname" name="newname" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Изменить название витрины</button>
                </div>
            </div>
        </form>
    </div>
</div><?php }
}
