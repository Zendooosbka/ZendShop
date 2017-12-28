<?php
/* Smarty version 3.1.30, created on 2017-12-24 01:26:46
  from "/var/www/html/zendshop/tpl/tpl/company-add-product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ed8265698b7_56103115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '591656f952317661741f71be5272b12b3568e736' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/company-add-product.tpl',
      1 => 1514067947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3ed8265698b7_56103115 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['good']->value != null) {?>
    <div class="alert alert-success">
        <strong>Готово!</strong> <?php echo $_smarty_tpl->tpl_vars['good']->value;?>

    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['error']->value != null) {?>
    <div class="alert alert-danger">
        <strong>Ошибка!</strong> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </div>
<?php }?>

<form method="get" action="companyaddnewproduct.php">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-1">
            <button type="submit" class="btn btn-info" >Поиск</button>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Введите название товара" name="search">
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</form>
<div class="panel panel-default">
    <div class="panel-footer">
        <h3>Результаты поиска</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Название товара</th>
                <th>Бренд</th>
                <th>Категория</th>
                <th>Выбрать</th>
            </tr>
            </thead>
            <tbody>
                <?php echo $_smarty_tpl->tpl_vars['resulttable']->value;?>

            </tbody>
        </table>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['productid']->value > 0) {?>
<div class="panel panel-default">
    <div class="panel-footer">
        <h3>Добавления продукта <?php echo $_smarty_tpl->tpl_vars['productname']->value;?>
</h3>
    </div>
    <div class="panel-body">
        <form method="post" action="AddcompanygoodQuery.php">
            <?php echo $_smarty_tpl->tpl_vars['attrform']->value;?>

            <div class="form-group">
                <label for="stock">Выберите склад</label>
                <select class="form-control" name="stock">
                    <?php echo $_smarty_tpl->tpl_vars['stocksection']->value;?>

                </select>
            </div>
            <button type="submit" class="btn btn-info">Добавить!</button>
        </form>
    </div>
</div>
<?php }
}
}
