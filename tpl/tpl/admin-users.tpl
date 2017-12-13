{if $good != null}
    <div class="alert alert-success">
        <strong>Готово!</strong> {$good}
    </div>
{/if}

{if $error != null}
    <!-- Если регистрация прошла успешно -->
    <div class="alert alert-danger">
        <strong>Ошибка!</strong> {$error}
    </div>
{/if}


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
                    {$tiketstable}
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
                    {$companytable}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>