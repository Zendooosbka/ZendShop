<?php
/* Smarty version 3.1.30, created on 2017-12-24 00:56:56
  from "/var/www/html/zendshop/tpl/tpl/company-add-product-result-table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ed1282e0180_51922256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8a5bc084e6788dab2066808076f4b0702e95724' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/company-add-product-result-table.tpl',
      1 => 1514066214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3ed1282e0180_51922256 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['brandname']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['sectionname']->value;?>
</td>
    <td><a href="companyaddnewproduct.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Выбрать</a></td>
</tr><?php }
}
