<?php
/* Smarty version 3.1.30, created on 2017-11-03 18:24:29
  from "/var/www/html/zendshop/tpl/tpl/admin-products-p-table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fc8a2d5ff102_44431195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da1621b510654712bd5009fa483a8557f1d51ab4' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/admin-products-p-table.tpl',
      1 => 1509722662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fc8a2d5ff102_44431195 (Smarty_Internal_Template $_smarty_tpl) {
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
        <td>Добавить изоюражение -> <a href="#" data-toggle="modal" data-target="#ChangePicureModalDialog" onclick="document.getElementById('updatepictureproductid').setAttribute('value', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
);"><span class="glyphicon glyphicon-pencil"></span></a></td>
    <?php } else { ?>
        <td><a href="#" data-toggle="modal" data-target="#ModalProductImage_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lowpicture']->value;?>
&nbsp;&nbsp;&nbsp;</a><a href="#" data-toggle="modal" data-target="#ChangePicureModalDialog" onclick="document.getElementById('updatepictureproductid').setAttribute('value', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
);"><span class="glyphicon glyphicon-pencil"></span></a></td>
    <?php }?>
    <td><a href="admineditproducts.php?productid=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Показать аттрибуты</a></td>
    <td><a href="#" data-toggle="modal" data-target="#ModalProductUpdateDialog" onclick="document.getElementById('updateproductid').setAttribute('value', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
);"><span class="glyphicon glyphicon-pencil"></span></a></td>
    <td><a href="DeleteproductQuery.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>
<?php }
}
