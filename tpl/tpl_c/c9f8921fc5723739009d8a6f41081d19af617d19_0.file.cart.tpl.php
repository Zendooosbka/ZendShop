<?php
/* Smarty version 3.1.30, created on 2017-12-28 10:38:57
  from "/var/www/html/zendshop/tpl/tpl/cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a449f910d6669_42486549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9f8921fc5723739009d8a6f41081d19af617d19' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/cart.tpl',
      1 => 1514446736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a449f910d6669_42486549 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['rescount']->value > 0) {?>
    <hr>
    <div class="row">
        <h3 align="center">Общая сумма товаров в корзине: <?php echo $_smarty_tpl->tpl_vars['price']->value;?>
 <a href="#" class="btn btn-danger" style="vertical-align: center">Сделать заказ</a></h3>
    </div>
    <hr>
    <div class="row">
        <?php echo $_smarty_tpl->tpl_vars['results']->value;?>

    </div>
    <hr>
<?php } else { ?>
    <div class="jumbotron">
        <h1 class="display-3">Упс...</h1>
        <p class="lead">Ваша корзина пуста :)</p>
        <hr class="my-4">
        <p>Вполне возможно, что вы ничего не выбирали в нашем магазине.</p>
    </div>
<?php }
}
}
