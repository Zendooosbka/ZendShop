<?php
/* Smarty version 3.1.30, created on 2017-11-12 18:24:19
  from "/var/www/html/zendshop/tpl/tpl/admin-showwindow-p-table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0867a3eec2c8_08224146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4831d9e958b5d2beeab7fba7febf03d3164d824e' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/admin-showwindow-p-table.tpl',
      1 => 1510500218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0867a3eec2c8_08224146 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['categoryname']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['brandname']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</td>
    <?php if ($_smarty_tpl->tpl_vars['image']->value == "not") {?>
        <td>Нету изображения</td>
    <?php } else { ?>
        <td><a href="#" data-toggle="modal" data-target="#ModalProductImage_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lowpicture']->value;?>
</a></td>
    <?php }?>
    <td><a href="Addproductinshowwindow.php?productid=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&swid=<?php echo $_smarty_tpl->tpl_vars['swid']->value;?>
""><span class="glyphicon glyphicon-plus-sign"></span></a></td>
</tr><?php }
}
