<?php
/* Smarty version 3.1.30, created on 2017-12-28 08:07:55
  from "/var/www/html/zendshop/tpl/tpl/account.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a447c2be21dd2_00075426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af1506cd7f852d844439458ef16c87ea2a4da93f' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/account.tpl',
      1 => 1514437673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a447c2be21dd2_00075426 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php echo '<script'; ?>
 src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/yandexmapsp.js" type="text/javascript"><?php echo '</script'; ?>
>

<div class="row">
    <div class="col-sm-6">
        <div class="well">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th><h3>ФИ:</h3></th>
                    <th><h3><?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</h3></th>
                    <th><h3><?php echo $_smarty_tpl->tpl_vars['ufname']->value;?>
</h3></th>
                </tr>
                </thead>
                <tbody>
                <tr class="success">
                    <td>Логин:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</td>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</td>
                    <td><a href="#" data-toggle="modal" data-target="#ModalEmailUpdateDialog" >Изменить почту</a><td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr class="info">
                    <td colspan="4">Почта нужна для дополнительного источника связи</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr class="success">
                    <td>Тел. номер:</td>
                    <td>+<?php echo $_smarty_tpl->tpl_vars['phonenumber']->value;?>
</td>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['bottelegramstatus']->value;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['bottelegramswitch']->value;?>
<td>
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
    <?php if ($_smarty_tpl->tpl_vars['company']->value == -1) {?>
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
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['company']->value == 0) {?>
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
                        <td colspan="2">#<?php echo $_smarty_tpl->tpl_vars['ticketid']->value;?>
</td>
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
                        <td colspan="4"><?php echo $_smarty_tpl->tpl_vars['compname']->value;?>
</td>
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                    </tr>

                    <tr class="danger">
                        <td>ИНН:</td>
                        <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['compinn']->value;?>
</td>
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                    </tr>
                    <tr class="danger">
                        <td>Юр. адрес компании:</td>
                        <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['compaddr']->value;?>
</td>
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                    </tr>
                    </tbody>
                </table>
                <div class="panel panel-danger">
                    <div class="panel-heading">Описание компании</div>
                    <div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['compdescr']->value;?>
</div>
                </div>
            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['company']->value > 0) {?>
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
                            <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['compname']->value;?>
</td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                        </tr>

                        <tr class="success">
                            <td>Создатель компании:</td>
                            <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['ownersurname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['ownername']->value;?>
</td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                        </tr>
                        <tr class="success">
                            <td>ИНН:</td>
                            <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['compinn']->value;?>
</td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                        </tr>
                        <tr class="success">
                            <td>Юр. адрес компании:</td>
                            <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['compaddr']->value;?>
</td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="panel panel-success">
                    <div class="panel-heading">Описание компании</div>
                    <div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['compdescr']->value;?>
</div>
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
    <?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['company']->value > 0) {?>
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
                            <?php echo $_smarty_tpl->tpl_vars['stocktable']->value;?>

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
                        <?php echo $_smarty_tpl->tpl_vars['memberstable']->value;?>

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
                        <strong> <?php echo $_smarty_tpl->tpl_vars['invitelink']->value;?>
</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }
}
}
