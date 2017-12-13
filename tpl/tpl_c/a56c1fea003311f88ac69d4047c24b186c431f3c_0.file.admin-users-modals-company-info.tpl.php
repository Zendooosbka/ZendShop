<?php
/* Smarty version 3.1.30, created on 2017-11-28 12:00:33
  from "/var/www/html/zendshop/tpl/tpl/admin-users-modals-company-info.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1d25b1d643b8_34645600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a56c1fea003311f88ac69d4047c24b186c431f3c' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/admin-users-modals-company-info.tpl',
      1 => 1511859628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1d25b1d643b8_34645600 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ModalCompanyInfo_<?php echo $_smarty_tpl->tpl_vars['ticketid']->value;?>
" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Информация о компаннии</h4>
                </div>
                <div class="modal-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <b>Название копмании:</b>  <?php echo $_smarty_tpl->tpl_vars['compname']->value;?>
 <br><hr>
                            <b>Инн:</b> <?php echo $_smarty_tpl->tpl_vars['inn']->value;?>
 <br><hr>
                            <b>Адрес:</b> <?php echo $_smarty_tpl->tpl_vars['address']->value;?>
 <br><hr>
                            <b>Описание:</b> <?php echo $_smarty_tpl->tpl_vars['address']->value;?>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
    </div>
</div><?php }
}
