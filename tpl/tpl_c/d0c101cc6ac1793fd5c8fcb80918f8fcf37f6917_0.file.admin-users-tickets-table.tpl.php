<?php
/* Smarty version 3.1.30, created on 2017-11-28 13:48:52
  from "/var/www/html/zendshop/tpl/tpl/admin-users-tickets-table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1d3f145f9772_84033390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0c101cc6ac1793fd5c8fcb80918f8fcf37f6917' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/admin-users-tickets-table.tpl',
      1 => 1511866129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1d3f145f9772_84033390 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['ticketid']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['compname']->value;?>
 <a href="#" data-toggle="modal" data-target="#ModalCompanyInfo_<?php echo $_smarty_tpl->tpl_vars['ticketid']->value;?>
">(...)</a></td>
    <td><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</td>
    <td><a href="CreatecompanyQuery.php?ticketid=<?php echo $_smarty_tpl->tpl_vars['ticketid']->value;?>
"><span class="glyphicon glyphicon-plus"></span></a></td>
</tr><?php }
}
