<?php
/* Smarty version 3.1.30, created on 2017-12-06 08:21:51
  from "/var/www/html/zendshop/tpl/tpl/admin-users-company-table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a277e6fb43a13_44712080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '124498d104abda1ee192234304cd52c2d44bba29' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/admin-users-company-table.tpl',
      1 => 1512537130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a277e6fb43a13_44712080 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['inn']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 <a href="#" data-toggle="modal" data-target="#ModalCompanyInfo_<?php echo $_smarty_tpl->tpl_vars['ticketid']->value;?>
">(...)</a></td>
    <td><?php echo $_smarty_tpl->tpl_vars['ownerid']->value;?>
</td>
</tr><?php }
}
