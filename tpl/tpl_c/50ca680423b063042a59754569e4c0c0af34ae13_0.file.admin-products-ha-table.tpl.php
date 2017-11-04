<?php
/* Smarty version 3.1.30, created on 2017-11-04 23:56:26
  from "/var/www/html/zendshop/tpl/tpl/admin-products-ha-table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fe297a4c4be9_74073207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50ca680423b063042a59754569e4c0c0af34ae13' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/admin-products-ha-table.tpl',
      1 => 1509828922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fe297a4c4be9_74073207 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</td>
    <td><a href="#" data-toggle="modal" data-target="#ModalAttributeUpdateDialog" onclick="document.getElementById('updateattributeid').setAttribute('value', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
);"><span class="glyphicon glyphicon-pencil"></span></a></td>
    <td><a href="DeleteattributeQuery.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&productid=<?php echo $_smarty_tpl->tpl_vars['productid']->value;?>
"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr><?php }
}
