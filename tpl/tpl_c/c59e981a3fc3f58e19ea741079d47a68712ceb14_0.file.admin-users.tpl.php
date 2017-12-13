<?php
/* Smarty version 3.1.30, created on 2017-12-06 08:21:51
  from "/var/www/html/zendshop/tpl/tpl/admin-users.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a277e6fb4f8c8_82407220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c59e981a3fc3f58e19ea741079d47a68712ceb14' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/admin-users.tpl',
      1 => 1512537508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a277e6fb4f8c8_82407220 (Smarty_Internal_Template $_smarty_tpl) {
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
        <h3>Редактирование запросов на добавление компании в систему</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-default">
            <div class="panel-footer">
                <h5>Таблица активных билетов</h5>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Пользователь</th>
                        <th>Номер телефона</th>
                        <th>Емаил</th>
                        <th>Название компании</th>
                        <th>Дата создания</th>
                        <th>Добавить</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php echo $_smarty_tpl->tpl_vars['tiketstable']->value;?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-footer">
        <h3>Просмотр компаний находящихся в системе</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-default">
            <div class="panel-footer">
                <h5>Таблица компаний</h5>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Название</th>
                        <th>Адрес</th>
                        <th>Инн</th>
                        <th>Дата создания</th>
                        <th>Ид создателя</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php echo $_smarty_tpl->tpl_vars['companytable']->value;?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><?php }
}
