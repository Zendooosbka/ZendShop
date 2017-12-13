<?php
/* Smarty version 3.1.30, created on 2017-12-13 22:56:25
  from "/var/www/html/zendshop/tpl/tpl/account-members-table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3185e9e6cc42_96578264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '391a38fbbeaa240d8910eda1e1b9aa2900d7ec7c' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/account-members-table.tpl',
      1 => 1513194867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3185e9e6cc42_96578264 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['fname']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['level']->value;?>
</td>
    <td><a href="#<?php echo $_smarty_tpl->tpl_vars['userid']->value;
echo $_smarty_tpl->tpl_vars['compid']->value;?>
">Уволить!</a></td>
</tr>
<?php }
}
