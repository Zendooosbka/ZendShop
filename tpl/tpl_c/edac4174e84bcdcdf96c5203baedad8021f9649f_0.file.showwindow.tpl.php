<?php
/* Smarty version 3.1.30, created on 2017-12-28 09:17:18
  from "/var/www/html/zendshop/tpl/tpl/showwindow.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a448c6e710771_08573984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edac4174e84bcdcdf96c5203baedad8021f9649f' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/showwindow.tpl',
      1 => 1514441782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a448c6e710771_08573984 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['good']->value != null) {?>
    <div class="alert alert-success">
        <strong>Готово!</strong> <?php echo $_smarty_tpl->tpl_vars['good']->value;?>

    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['error']->value != null) {?>
    <!-- Если регистрация прошла успешно -->
    <div class="alert alert-danger">
        <strong>Ошибка!</strong> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['showwindow']->value > 0) {?>

<hr><h3 align="center"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h3><hr>

<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
        <div class="well">
            <?php if ($_smarty_tpl->tpl_vars['image']->value != "not") {?>
                <img src="pictures/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" class="img-responsive" alt="Image">
            <?php } else { ?>
                <h3>Нету изображения</h3>
            <?php }?>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="well">
            <?php echo $_smarty_tpl->tpl_vars['actionattributes']->value;?>

            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><strong class="navbar-brand">Цена: <?php echo $_smarty_tpl->tpl_vars['price']->value;?>
 руб.</strong></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if ($_smarty_tpl->tpl_vars['goodincart']->value == 0) {?>
                            <li><a href="AddtocartQuery.php?id=<?php echo $_smarty_tpl->tpl_vars['goodid']->value;?>
">Добавить в корзину</a></li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['goodincart']->value == 1) {?>
                            <li><a href="#">Товар уже в корзине</a></li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['goodincart']->value == -1) {?>
                            <li><a href="№">Для добавления в корзину авторизуйтесь</a></li>
                        <?php }?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="col-sm-1"></div>
</div>

<hr><h3 align="center">Характеристики товара</h3><hr>

<div class="well">
    <div class="row">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Характерстика</th>
                <th>Значение характеристики</th>
            </tr>
            </thead>
            <tbody>
                <?php echo $_smarty_tpl->tpl_vars['attrtable']->value;?>

            </tbody>
        </table>
    </div>
</div>

    <hr><h3 align="center">Отзывы покупателей</h3><hr>

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
