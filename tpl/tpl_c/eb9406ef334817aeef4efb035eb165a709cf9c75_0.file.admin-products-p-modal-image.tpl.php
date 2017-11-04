<?php
/* Smarty version 3.1.30, created on 2017-10-20 12:45:58
  from "/var/www/html/zendshop/tpl/tpl/admin-products-p-modal-image.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e9c5d678ec11_67473568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb9406ef334817aeef4efb035eb165a709cf9c75' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/admin-products-p-modal-image.tpl',
      1 => 1508492045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e9c5d678ec11_67473568 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['image']->value != "not") {?>
    <div id="ModalProductImage_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
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
