<?php
/* Smarty version 3.1.30, created on 2017-11-04 03:44:18
  from "/var/www/html/zendshop/tpl/tpl/admin-products-ia-table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fd0d62808838_68671159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ba61738aa225e6ec81e26c98293b2a9761f8903' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/admin-products-ia-table.tpl',
      1 => 1509756200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fd0d62808838_68671159 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['im']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</td>
    <td><a href="#" data-toggle="modal" data-target="#ModalProductAttributeUpdateDialog" onclick="document.getElementById('updateproductattributeid').setAttribute('value', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
);"><span class="glyphicon glyphicon-pencil"></span></a></td>
    <td><a href="DeleteproductattributeQuery.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&productid=<?php echo $_smarty_tpl->tpl_vars['productid']->value;?>
"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr><?php }
}
