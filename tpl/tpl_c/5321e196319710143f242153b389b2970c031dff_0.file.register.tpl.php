<?php
/* Smarty version 3.1.30, created on 2017-06-17 09:58:23
  from "/var/www/html/tpl/tpl/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5944d30fb78580_21381157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5321e196319710143f242153b389b2970c031dff' => 
    array (
      0 => '/var/www/html/tpl/tpl/register.tpl',
      1 => 1497682701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5944d30fb78580_21381157 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Если регистрация прошла успешно -->
<?php if ($_smarty_tpl->tpl_vars['error']->value == 0) {?>
<div class="alert alert-success">
    <strong>Готово!</strong> Регистрация нового пользователя <strong><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</strong> прошла успешно!
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['error']->value > 0) {?>
<!-- Если регистрация прошла успешно -->
<div class="alert alert-danger">
    <strong>Ошибка!</strong> Данные были введены неправильно!
</div>
<?php }?>
            
<!-- Меню регистрации нового юзверя -->
<form action="RegnewuserQuery.php" method="post">
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Регистрация нового пользователя</h1></div>
        <div class="panel-body">
            <div class="form-group">
                <label for="login">Логин <strong style="color: red;">*</strong></label>
                <input type="text" class="form-control" id="login" name="login">
            </div>
            <div class="form-group">
                <label for="pass">Пароль *</label>
                <input type="password" class="form-control" id="pass" name="password">
            </div>
            <hr>
            <div class="form-group">
                <label for="name">Имя *</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="surname">Фамилия *</label>
                <input type="text" class="form-control" id="surname" name="surname">
            </div>
            <div class="form-group">
                <label for="email">Email *</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="phone">Телофон</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <button type="submit" class="btn btn-primary">Регистрация</button>
        </div>
    </div>
</form>
            
<div class="alert alert-info">
    <strong>Внимание!</strong> Нажимая кнопнку <strong>Регистрация</strong> вы принимаете условия чего то там я забыл
</div><?php }
}
