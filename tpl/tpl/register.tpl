<!-- Если регистрация прошла успешно -->
{if $error == 0}
<div class="alert alert-success">
    <strong>Готово!</strong> Регистрация нового пользователя <strong>{$user}</strong> прошла успешно!
</div>
{/if}

{if $error > 0}
<!-- Если регистрация прошла успешно -->
<div class="alert alert-danger">
    <strong>Ошибка!</strong> Данные были введены неправильно!
</div>
{/if}
            
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
</div>