<?php
/* Smarty version 3.1.30, created on 2017-11-13 01:28:12
  from "/var/www/html/zendshop/tpl/tpl/admin-showwindow.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a08cafce382d4_74234613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80e0c707c93ef86b5c064dc55330598cc4a52ab7' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/admin-showwindow.tpl',
      1 => 1510524276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a08cafce382d4_74234613 (Smarty_Internal_Template $_smarty_tpl) {
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

<div class="panel panel-default">
    <div class="panel-footer">
        <h3>Редактирование витрин</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Название</th>
                <th>Категория</th>
                <th>Дата создания</th>
                <th>Показать</th>
                <th>Изменить</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            <?php echo $_smarty_tpl->tpl_vars['showwindowtable']->value;?>

            </tbody>
        </table>
        <div class="panel panel-default">
            <div class="panel-footer">
                <h5>Добавление витрины</h5>
            </div>
            <div class="panel-body">
                <form action="AddshowwindowQuery.php" method="post">
                    <div class="form-group">
                        <label for="swname">Название витрины</label>
                        <input type="text" id="productname" name="swname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="sectioncategory">Выберите категорию</label>
                        <select class="form-control" name="sectswctcateg">
                            <?php echo $_smarty_tpl->tpl_vars['categoryoptions']->value;?>

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Добавить витрину</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['swid']->value > 0) {?>
    <div class="panel panel-default">
        <div class="panel-footer">
            <h3>Список продуктов на витрине : <?php echo $_smarty_tpl->tpl_vars['swname']->value;?>
</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Категория</th>
                    <th>Бренд</th>
                    <th>Дата создания</th>
                    <th>Картинка</th>
                    <th>Удалить</th>
                </tr>
                </thead>
                <tbody>
                <?php echo $_smarty_tpl->tpl_vars['productsinshowcasetable']->value;?>

                </tbody>
            </table>
            <?php if ($_smarty_tpl->tpl_vars['productsonshowwindowcout']->value > 1) {?>
            <hr>
            <h5>Эти продукты объеденяются по атрибутам: <?php echo $_smarty_tpl->tpl_vars['attrlist']->value;?>
</h5>
            <?php }?>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-footer">
            <h3>Список всех продуктов подходящих к этой витрине</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Название</th>
                        <th>Цена</th>
                        <th>Категория</th>
                        <th>Бренд</th>
                        <th>Дата создания</th>
                        <th>Картинка</th>
                        <th>Добавить</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $_smarty_tpl->tpl_vars['otherproductstable']->value;?>

                </tbody>
            </table>
        </div>
    </div>
<?php }
}
}
