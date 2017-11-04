<?php
/* Smarty version 3.1.30, created on 2017-10-16 10:32:06
  from "/var/www/html/zendshop/tpl/tpl/admin-scb-c-table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e460769336d4_11292746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d01ebfaef6658bb6786a711aed1075fbc4e38f9' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/admin-scb-c-table.tpl',
      1 => 1508139121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e460769336d4_11292746 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['sname']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</td>
    <td><a href="#" data-toggle="modal" data-target="#ModalCategoryUpdateDialog" onclick="document.getElementById('updatecategoryid').setAttribute('value', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
);"><span class="glyphicon glyphicon-pencil"></span></a></td>
    <td><a href="DeletecategoryQuery.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>
<?php }
}
