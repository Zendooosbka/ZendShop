<?php
/* Smarty version 3.1.30, created on 2017-12-26 01:49:25
  from "/var/www/html/zendshop/tpl/tpl/index-brands.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a41807585d8f1_27380579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bb2da5c76dd09dfa0e06914f345d68028221e5e' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/index-brands.tpl',
      1 => 1514242164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a41807585d8f1_27380579 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-sm-3">
    <div class="well">
        <h4 align="center"><a href="showwindow.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="color: darkred;"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></h4>
        <hr>
        <?php if ($_smarty_tpl->tpl_vars['image']->value != "not") {?>
            <a href="showwindow.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><img src="pictures/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" class="img-responsive" alt="Image"></a>
        <?php } else { ?>
            <a href="showwindow.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Нету изображения</a>
        <?php }?>
    </div>
</div><?php }
}
