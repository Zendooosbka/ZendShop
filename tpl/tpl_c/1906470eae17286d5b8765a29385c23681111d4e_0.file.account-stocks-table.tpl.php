<?php
/* Smarty version 3.1.30, created on 2017-12-12 17:34:50
  from "/var/www/html/zendshop/tpl/tpl/account-stocks-table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2fe90a529d57_08201899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1906470eae17286d5b8765a29385c23681111d4e' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/account-stocks-table.tpl',
      1 => 1513089288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2fe90a529d57_08201899 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</td>
    <td><a href="#" data-toggle="modal" data-target="#ModalStockOnMapDialog" onclick="SetTarget(<?php echo $_smarty_tpl->tpl_vars['coord_x']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['coord_y']->value;?>
)">Показать</td>
    <td><a href="#">Удалить!!!</a></td>
</tr>
<?php }
}
