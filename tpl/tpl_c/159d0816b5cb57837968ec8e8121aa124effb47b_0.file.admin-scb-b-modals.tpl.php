<?php
/* Smarty version 3.1.30, created on 2017-10-17 18:51:41
  from "/var/www/html/zendshop/tpl/tpl/admin-scb-b-modals.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e6270ddcb680_93634399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '159d0816b5cb57837968ec8e8121aa124effb47b' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/admin-scb-b-modals.tpl',
      1 => 1508255421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e6270ddcb680_93634399 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ModalBrandDescription_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h4>
            </div>
            <div class="modal-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h5><?php echo $_smarty_tpl->tpl_vars['descr']->value;?>
</h5>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="buton" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['image']->value != "not") {?>
<div id="ModalBrandImage_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h4>
            </div>
            <div class="modal-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['meme']->value;
echo $_smarty_tpl->tpl_vars['image']->value;?>
" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="buton" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<?php }
}
}
