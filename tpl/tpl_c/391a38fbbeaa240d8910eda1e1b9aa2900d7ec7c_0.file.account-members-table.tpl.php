<?php
/* Smarty version 3.1.30, created on 2017-12-23 18:04:18
  from "/var/www/html/zendshop/tpl/tpl/account-members-table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3e7072659f33_01422946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '391a38fbbeaa240d8910eda1e1b9aa2900d7ec7c' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/account-members-table.tpl',
      1 => 1513932021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3e7072659f33_01422946 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['fname']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['level']->value;?>
</td>
    <td><a href="DeletePeopleFromCompany?id=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
">Уволить!</a></td>
</tr>
<?php }
}
