{if $good != null}
    <div class="alert alert-success">
        <strong>Готово!</strong> {$good}
    </div>
{/if}

{if $error != null}
    <div class="alert alert-danger">
        <strong>Ошибка!</strong> {$error}
    </div>
{/if}

<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script src="js/yandexmapsp.js" type="text/javascript"></script>

<div class="row">
    <div class="col-sm-6">
        <div class="well">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th><h3>ФИ:</h3></th>
                    <th><h3>{$uname}</h3></th>
                    <th><h3>{$ufname}</h3></th>
                </tr>
                </thead>
                <tbody>
                <tr class="success">
                    <td>Логин:</td>
                    <td>{$login}</td>
                    <td><a href="#" data-toggle="modal" data-target="#ModalLoginUpdateDialog" >Изменить логин</a><td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>

                <tr class="success">
                    <td>Пароль:</td>
                    <td>*********</td>
                    <td><a href="#" data-toggle="modal" data-target="#ModalPasswordUpdateDialog" >Изменить пароль</a><td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr class="success">
                    <td>Ел. почта:</td>
                    <td>{$email}</td>
                    <td><a href="#" data-toggle="modal" data-target="#ModalEmailUpdateDialog" >Изменить почту</a><td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr class="info">
                    <td colspan="4">Почта нужна для того что бы кекать мемить писать какать в попу ибаться и для других крутых дел</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr class="success">
                    <td>Тел. номер:</td>
                    <td>+{$phonenumber}</td>
                    <td><a href="#" data-toggle="modal" data-target="#ModalPhoneUpdateDialog" >Изменить номер</a><td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr class="info">
                    <td colspan="4">Номер нужен для таких нужд как: Связь курьера с заказчиком (Для того что бы обговорить личную встречу или ещё что то); Для индефикации аккаунта; Для использования бота в телеграме.</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr class="success">
                    <td>Бот Telegram:</td>
                    <td>{$bottelegramstatus}</td>
                    <td>{$bottelegramswitch}<td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr class="info">
                    <td colspan="4">С помощью бота в телеграмме вы можете управлять своими заказами: Отменять заказы; Принимать заказы и прочие действия.....</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    {if $company == -1}
    <div class="col-sm-6">
        <div class="well">
            <div class="panel-heading">Подать заявку на регистрацию комании на сайте</div>
            <div class="panel">
                <div class="panel-body">
                    <form action="CreateTicketForCreateCompanyQuery.php" method="post">
                        <div class="form-group">
                            <label for="compname">Название компании:</label>
                            <input type="text" class="form-control" name="compname" id="compname">
                        </div>
                        <div class="form-group">
                            <label for="inn">Инн компании:</label>
                            <input type="text" class="form-control" id="inn" name="inn">
                        </div>
                        <div class="form-group">
                            <label for="adress">Юр. адрес компании:</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <div class="form-group">
                            <label for="descr">Краткое описание компании:</label>
                            <textarea class="form-control" rows="9" id="descr" name="descr"></textarea>
                        </div>
                        <button type="submit" class="btn btn-info">Подать заявку:</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {/if}
    {if $company == 0}
        <div class="col-sm-6">
            <div class="well">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th colspan="3"><h4>Заявка на регистрацию компании отправлена!</h4></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="danger">
                        <td>Номер заявки:</td>
                        <td colspan="2">#{$ticketid}</td>
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                    </tr>
                    <tr class="info">
                        <td colspan="4">Ваш уникальный индефикатор заявки на регистрацию компании на сайте. Используйте её для того что бы вы могли задать вопрос на счет вашей заявки администратору магазина</td>
                    </tr>

                    <tr>
                        <td colspan="4"></td>
                    </tr>
                    <tr class="danger">
                        <td>Название компании:</td>
                        <td colspan="4">{$compname}</td>
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                    </tr>

                    <tr class="danger">
                        <td>ИНН:</td>
                        <td colspan="3">{$compinn}</td>
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                    </tr>
                    <tr class="danger">
                        <td>Юр. адрес компании:</td>
                        <td colspan="3">{$compaddr}</td>
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                    </tr>
                    </tbody>
                </table>
                <div class="panel panel-danger">
                    <div class="panel-heading">Описание компании</div>
                    <div class="panel-body">{$compdescr}</div>
                </div>
            </div>
        </div>
    {/if}
    {if $company > 0}
        <div class="col-sm-6">
            <div class="well">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th colspan="4"><h4>Компания которую вы представляете</h4></th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr class="success">
                            <td>Название компании:</td>
                            <td colspan="3">{$compname}</td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                        </tr>

                        <tr class="success">
                            <td>Создатель компании:</td>
                            <td colspan="3">{$ownersurname} {$ownername}</td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                        </tr>
                        <tr class="success">
                            <td>ИНН:</td>
                            <td colspan="3">{$compinn}</td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                        </tr>
                        <tr class="success">
                            <td>Юр. адрес компании:</td>
                            <td colspan="3">{$compaddr}</td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="panel panel-success">
                    <div class="panel-heading">Описание компании</div>
                    <div class="panel-body">{$compdescr}</div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">Так как вы представляете свою компанию у нас в системе вы можете добавлять свои продукты</div>
                    <div class="panel-body">
                        <a href="companyaddnewproduct.php" class="btn btn-info">Добавить товар</a>
                        <a href="companyshowproducts.php" class="btn btn-info">Добавленные товары</a>
                        <a href="companyshowproducts.php" class="btn btn-info">Заказанные товары</a>
                    </div>
                </div>
            </div>
        </div>
    {/if}
</div>

{if $company > 0}
    <div class="panel panel-default">
        <div class="panel-footer">
            <h3>Просмотр складов компании</h3>
        </div>
        <div class="panel-body">
            <div class="panel panel-default">
                <div class="panel-footer">
                    <h5>Склады компании</h5>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Название склада</th>
                            <th>Адрес склада</th>
                            <th>Адрес склада на карте</th>
                            <th>Удалить</th>
                        </tr>
                        </thead>
                        <tbody>
                            {$stocktable}
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-footer">
                    <h5>Добавть склад</h5>
                </div>
                <div class="panel-body">
                    <form action="AddnewstockQuery.php" method="post">
                        <input type="hidden" id="maps-coord-x" name="maps-coord-x" value="1">
                        <input type="hidden" id="maps-coord-y" name="maps-coord-y" value="1">
                        <div class="form-group">
                            <label for="name">Название склада</label>
                            <input type="name" id="name" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="addr">Адрес склада</label>
                            <input type="addr" id="addr" name="addr" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="addr">Адрес склада на карте</label>
                            <div class="well">
                                <div id="map" style="height: 300px"></div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Добавить склад</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-footer">
            <h3>Просмотр участников компании</h3>
        </div>
        <div class="panel-body">
            <div class="panel panel-default">
                <div class="panel-footer">
                    <h5>Участники компании</h5>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Имя</th>
                            <th>Фамилия</th>
                            <th>Уровень</th>
                            <th>Уволить</th>
                        </tr>
                        </thead>
                        <tbody>
                        {$memberstable}
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-footer">
                    <h5>Добавить участника</h5>
                </div>
                <div class="panel-body">
                    <div class="alert alert-info">
                        Для добавления участника попросите его пройти по этой ссылке ниже. Ссылка обновляется каждый час ровно в 0 минут!
                    </div>
                    <div class="alert alert-success">
                        <strong> {$invitelink}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/if}