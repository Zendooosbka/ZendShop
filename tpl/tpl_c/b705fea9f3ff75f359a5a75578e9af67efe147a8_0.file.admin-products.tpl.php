<?php
/* Smarty version 3.1.30, created on 2017-11-12 17:33:25
  from "/var/www/html/zendshop/tpl/tpl/admin-products.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a085bb5c13222_99215985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b705fea9f3ff75f359a5a75578e9af67efe147a8' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/admin-products.tpl',
      1 => 1510435789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a085bb5c13222_99215985 (Smarty_Internal_Template $_smarty_tpl) {
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

<div class="panel panel-default">
    <div class="panel-footer">
        <h3>Редактирование продукта</h3>
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
                    <th>Атрибуты</th>
                    <th>Изменить</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $_smarty_tpl->tpl_vars['productstable']->value;?>

            </tbody>
        </table>
        <div class="panel panel-default">
            <div class="panel-footer">
                <h5>Добавление продукта</h5>
            </div>
            <div class="panel-body">
                <form action="AddproductQuery.php" method="post">
                    <div class="form-group">
                        <label for="productname">Название продукта</label>
                        <input type="text" id="productname" name="productname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="productprice">Цена</label>
                        <input type="text" id="productprice" name="productprice" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="sectioncategory">Выберите категорию</label>
                        <select class="form-control" name="sectproductcateg">
                            <?php echo $_smarty_tpl->tpl_vars['categoryoptions']->value;?>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="sectionbrand">Выберите Бенд</label>
                        <select class="form-control" name="secproductbrand">
                            <?php echo $_smarty_tpl->tpl_vars['brandoptions']->value;?>

                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Добавить продукт</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['productid']->value > 0) {?>
<div class="panel panel-default">
    <div class="panel-footer">
        <h3>Редактирование аттрибутов продукта: <?php echo $_smarty_tpl->tpl_vars['productname']->value;?>
</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Название атрибута</th>
                <th>Значение атрибута</th>
                <th>Важный</th>
                <th>Дата создания атрибута</th>
                <th>Изменить</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
                <?php echo $_smarty_tpl->tpl_vars['importantattr']->value;?>

            </tbody>
        </table>
        <div class="panel panel-default">
            <div class="panel-footer">
                <h5>Добавление атрибута</h5>
            </div>
            <div class="panel-body">
                <form action="AddproductattributeQuery.php" method="post">
                    <input type="hidden" name="attrproductid" value="<?php echo $_smarty_tpl->tpl_vars['productid']->value;?>
">
                    <div class="form-group">
                        <label for="attrname">Название атрибута</label>
                        <input type="text" id="attrname" name="attrname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="attrname">Значение атрибута</label>
                        <input type="attrname" id="attrname" name="attrvalue" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="sectioncategory">Атрибут важный?</label>
                        <select class="form-control" name="attrimportant">
                            <option value="0">Нет</option>
                            <option value="1">Да</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Добавить атрибут</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-footer">
        <h3>Редактирование атрибутов товара: <?php echo $_smarty_tpl->tpl_vars['productname']->value;?>
 </h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Название атрибута</th>
                <th>Дата создания атрибута</th>
                <th>Изменить</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
                <?php echo $_smarty_tpl->tpl_vars['hatable']->value;?>

            </tbody>
        </table>
        <div class="panel panel-default">
            <div class="panel-footer">
                <h5>Добавление атрибута</h5>
            </div>
            <div class="panel-body">
                <form action="AddattributeQuery.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['productid']->value;?>
">
                    <div class="form-group">
                        <label for="attrname">Название атрибута</label>
                        <input type="attrname" id="attrname" name="attrname" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Добавить атрибут</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }
}
}
