<?php
/* Smarty version 3.1.30, created on 2017-11-13 00:06:18
  from "/var/www/html/zendshop/tpl/tpl/admin-showwnidow-p-in-sw-table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a08b7ca46bd88_42728011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3bdd324f08bb26f5ee0b6c3e582e6706263670f' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/admin-showwnidow-p-in-sw-table.tpl',
      1 => 1510520775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a08b7ca46bd88_42728011 (Smarty_Internal_Template $_smarty_tpl) {
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
    <td><a href="Deleteproductfromshowwindow.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&swid=<?php echo $_smarty_tpl->tpl_vars['swid']->value;?>
"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr><?php }
}
