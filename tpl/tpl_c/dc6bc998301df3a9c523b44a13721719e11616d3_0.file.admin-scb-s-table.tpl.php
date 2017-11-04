<?php
/* Smarty version 3.1.30, created on 2017-10-16 10:29:02
  from "/var/www/html/zendshop/tpl/tpl/admin-scb-s-table.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e45fbe583de7_70374447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc6bc998301df3a9c523b44a13721719e11616d3' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/admin-scb-s-table.tpl',
      1 => 1508138939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e45fbe583de7_70374447 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</td>
    <td><a href="#" data-toggle="modal" data-target="#ModalSectionUpdateDialog" onclick="document.getElementById('updatesectionid').setAttribute('value', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
);"><span class="glyphicon glyphicon-pencil"></span></a></td>
    <td><a href="DeletesectionQuery.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>

                                    <?php }
}
