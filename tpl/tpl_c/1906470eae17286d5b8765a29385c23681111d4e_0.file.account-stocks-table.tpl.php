<?php
/* Smarty version 3.1.30, created on 2017-12-22 10:36:25
  from "/var/www/html/zendshop/tpl/tpl/account-stocks-table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3cb5f96b9934_59341703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1906470eae17286d5b8765a29385c23681111d4e' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/account-stocks-table.tpl',
      1 => 1513928181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3cb5f96b9934_59341703 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</td>
    <td><a href="#" data-toggle="modal" data-target="#ModalStockOnMapDialog" onclick="SetTarget(<?php echo $_smarty_tpl->tpl_vars['coord_x']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['coord_y']->value;?>
)">Показать</td>
    <td><a href="DeleteStockQuery.php?id=<?php echo $_smarty_tpl->tpl_vars['stockid']->value;?>
">Удалить!!!</a></td>
</tr>
<?php }
}
