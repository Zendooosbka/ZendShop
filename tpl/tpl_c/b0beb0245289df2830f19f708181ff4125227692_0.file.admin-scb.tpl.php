<?php
/* Smarty version 3.1.30, created on 2017-10-17 14:27:25
  from "/var/www/html/zendshop/tpl/tpl/admin-scb.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e5e91dc595e1_26282749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0beb0245289df2830f19f708181ff4125227692' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/admin-scb.tpl',
      1 => 1508239623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e5e91dc595e1_26282749 (Smarty_Internal_Template $_smarty_tpl) {
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
        <h3>Редактирование разделов и категорий</h3>
    </div>
    <div class="panel-body">    
        <div class="panel panel-default">
            <div class="panel-footer">
                <h5>Таблица разделов</h5>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Название раздела</th>
                            <th>Дата создания</th>
                            <th>Изменить</th>
                            <th>Удалить</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo $_smarty_tpl->tpl_vars['sectiosntable']->value;?>

                    </tbody>
                </table>
                <div class="panel panel-default">
                    <div class="panel-footer">
                        <h5>Добавление раздела</h5>
                    </div>
                    <div class="panel-body">
                        <form action="AddsectionQuery.php" method="post">
                            <div class="form-group">
                                <label for="sectionname">Название раздела</label>
                                <input type="text" id="sectionname" name="newname" class="form-control">
                            </div>
                        <button type="submit" class="btn btn-primary">Добавить раздел</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                    
        <div class="panel panel-default">
            <div class="panel-footer">
                <h5>Таблица категорий</h5>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Название категории</th>
                            <th>Принадлежит разделу</th>
                            <th>Дата создания</th>
                            <th>Изменить</th>
                            <th>Удалить</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo $_smarty_tpl->tpl_vars['categoriestable']->value;?>
   
                    </tbody>
                </table>
                <div class="panel panel-default">
                    <div class="panel-footer">
                        <h5>Добавление категорий</h5>
                    </div>
                    <div class="panel-body">
                        <form action="AddcategoryQuery.php" method="post">
                            <div class="form-group">
                                <label for="sectionname">Выберите раздел</label>
                                <select class="form-control" name="section">
                                    <?php echo $_smarty_tpl->tpl_vars['categoptions']->value;?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sectionname">Название категории</label>
                                <input type="text" id="categoryname" name="categoryname" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Добавить категорию</button>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
            
<div class="panel panel-default">
    <div class="panel-footer">
        <h3>Редактирование брендов</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-default">
            <div class="panel-footer">
                <h5>Таблица брендов</h5>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>id</th>
                        <th>Название бренда</th>
                        <th>Изображение бренда</th>
                        <th>Описание бренда</th>
                        <th>Дата создания</th>
                        <th>Изменить</th>
                        <th>Удалить</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo $_smarty_tpl->tpl_vars['brandstable']->value;?>

                    </tbody>
                </table>
                <div class="panel panel-default">
                    <div class="panel-footer">
                        <h5>Добавление брендов</h5>
                    </div>
                    <div class="panel-body">
                        <form action="AddbrandQuery.php" method="post">
                            <div class="form-group">
                                <label for="brandname">Название бренда</label>
                                <input type="text" name="brandname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="desc">Описание бренда</label>
                                <textarea class="form-control" rows="5" name="desc"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Добавить бренд</button>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
