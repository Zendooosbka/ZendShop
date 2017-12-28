<?php
/* Smarty version 3.1.30, created on 2017-12-26 09:13:45
  from "/var/www/html/zendshop/tpl/tpl/shearch-product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a41e899d643b0_53887171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9e09e9293e5c2d8461f84e909b4365e5da6c622' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/shearch-product.tpl',
      1 => 1514268775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a41e899d643b0_53887171 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-sm-3">
    <div class="well">
        <?php if ($_smarty_tpl->tpl_vars['image']->value != "not") {?>
            <a href="showwindow.php?g=<?php echo $_smarty_tpl->tpl_vars['ginsw']->value;?>
"><img src="pictures/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" class="img-responsive" alt="Image"></a>
        <?php } else { ?>
            <a href="showwindow.php?g=<?php echo $_smarty_tpl->tpl_vars['ginsw']->value;?>
">Нету изображения</a>
        <?php }?>
        <br>
        <h4><a href="showwindow.php?g=<?php echo $_smarty_tpl->tpl_vars['ginsw']->value;?>
" style="color: darkred;"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></h4>
        <br>
        <table class="table">
            <tbody>
            <?php echo $_smarty_tpl->tpl_vars['attrs']->value;?>

            </tbody>
        </table>
        <hr>
        <h3>Цена: <?php echo $_smarty_tpl->tpl_vars['price']->value;?>
 руб.</h3>
    </div>
</div><?php }
}
