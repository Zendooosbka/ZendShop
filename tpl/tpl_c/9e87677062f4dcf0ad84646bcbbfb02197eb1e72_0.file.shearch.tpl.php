<?php
/* Smarty version 3.1.30, created on 2017-12-24 11:52:20
  from "/var/www/html/zendshop/tpl/tpl/shearch.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3f6ac4dd71c4_18663195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e87677062f4dcf0ad84646bcbbfb02197eb1e72' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/shearch.tpl',
      1 => 1514105485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3f6ac4dd71c4_18663195 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['rescount']->value > 0) {?>
    <div class="row">
        <?php echo $_smarty_tpl->tpl_vars['results']->value;?>

    </div>
<?php } else { ?>
    <div class="jumbotron">
        <h1 class="display-3">Упс...</h1>
        <p class="lead">По вашему запросу ничего не найденно, проверьте правильность ввода, может быть что то измениться :)</p>
        <hr class="my-4">
        <p>Вполне возможно, что товар, который вы ищите, не продается в нашем магазине.</p>
    </div>
<?php }
}
}
