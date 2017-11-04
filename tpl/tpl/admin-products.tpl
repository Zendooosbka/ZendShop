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
                {$productstable}
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
                            {$categoryoptions}
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="sectionbrand">Выберите Бенд</label>
                        <select class="form-control" name="secproductbrand">
                            {$brandoptions}
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Добавить продукт</button>
                </form>
            </div>
        </div>
    </div>
</div>

{if $productid > 0}
<div class="panel panel-default">
    <div class="panel-footer">
        <h3>Редактирование аттрибутов продукта: {$productname}</h3>
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
                {$importantattr}
            </tbody>
        </table>
        <div class="panel panel-default">
            <div class="panel-footer">
                <h5>Добавление атрибута</h5>
            </div>
            <div class="panel-body">
                <form action="AddnewproductattributeQuery.php" method="post">
                    <input type="hidden" name="attrproductid" value="{$productid}">
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
        <h3>Редактирование атрибутов товара: {$productname} </h3>
    </div>
    <div class="panel-body">

        <h2>Вы не выбрали продукт!!!</h2>
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
            <tr>
                <td>0</td>
                <td>Цвет</td>
                <td>Дата лалалалалал</td>
                <td><span class="glyphicon glyphicon-pencil"></span></td>
                <td><span class="glyphicon glyphicon-remove"></span></td>
            </tr>

            </tbody>
        </table>
        <div class="panel panel-default">
            <div class="panel-footer">
                <h5>Добавление атрибута</h5>
            </div>
            <div class="panel-body">
                <form action="AddnewhidenattributeQuery.php" method="post">
                    <input type="hidden" name="id" value="$productid">
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
{/if}