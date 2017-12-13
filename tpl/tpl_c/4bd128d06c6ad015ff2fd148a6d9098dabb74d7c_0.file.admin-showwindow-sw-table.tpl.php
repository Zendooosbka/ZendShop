<?php
/* Smarty version 3.1.30, created on 2017-11-13 00:23:33
  from "/var/www/html/zendshop/tpl/tpl/admin-showwindow-sw-table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a08bbd52323e2_44431236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bd128d06c6ad015ff2fd148a6d9098dabb74d7c' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/admin-showwindow-sw-table.tpl',
      1 => 1510521368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a08bbd52323e2_44431236 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['catname']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</td>
    <td><a href="admineditshowwindows.php?swid=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Показать товары</a></td>
    <td><a href="#" data-toggle="modal" data-target="#ModalShowWindowUpdateDialog" onclick="document.getElementById('showwindowid').setAttribute('value', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
);"><span class="glyphicon glyphicon-pencil"></span></a></td>
    <td><a href="DeleteshowwindowQuery.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&swid=<?php echo $_smarty_tpl->tpl_vars['productid']->value;?>
"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr><?php }
}
