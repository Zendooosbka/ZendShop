<?php
/* Smarty version 3.1.30, created on 2017-10-20 13:04:02
  from "/var/www/html/zendshop/tpl/tpl/admin-scb-b-table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e9ca12af6901_59638046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a785b75d5b680a65cf4e2c908057998e13492d2f' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/admin-scb-b-table.tpl',
      1 => 1508493835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e9ca12af6901_59638046 (Smarty_Internal_Template $_smarty_tpl) {
?>

<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
    <?php if ($_smarty_tpl->tpl_vars['picture']->value == "not") {?>
    <td>Добавить изоюражение -> <a href="#" data-toggle="modal" data-target="#ChangePicureModalDialog" onclick="document.getElementById('updatepicturebrandid').setAttribute('value', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
);"><span class="glyphicon glyphicon-pencil"></span></a></td>
    <?php } else { ?>
    <td><a href="#" data-toggle="modal" data-target="#ModalBrandImage_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lowpicture']->value;?>
&nbsp;&nbsp;&nbsp;</a><a href="#" data-toggle="modal" data-target="#ChangePicureModalDialog" onclick="document.getElementById('updatepicturebrandid').setAttribute('value', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
);"><span class="glyphicon glyphicon-pencil"></span></a></td>
    <?php }?>
    <td><a href="#" data-toggle="modal" data-target="#ModalBrandDescription_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-zoom-in"></span></a></td>
    <td><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</td>
    <td><a href="#" data-toggle="modal" data-target="#ModalBrandUpdateDialog" onclick="document.getElementById('updatebrandid').setAttribute('value', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
);"><span class="glyphicon glyphicon-pencil"></span></a></td>
    <td><a href="DeletebrandQuery.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr><?php }
}
