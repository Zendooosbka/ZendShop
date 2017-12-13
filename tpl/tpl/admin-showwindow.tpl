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
            {$showwindowtable}
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
                            {$categoryoptions}
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Добавить витрину</button>
                </form>
            </div>
        </div>
    </div>
</div>

{if $swid > 0}
    <div class="panel panel-default">
        <div class="panel-footer">
            <h3>Список продуктов на витрине : {$swname}</h3>
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
                {$productsinshowcasetable}
                </tbody>
            </table>
            {if $productsonshowwindowcout > 1}
            <hr>
            <h5>Эти продукты объеденяются по атрибутам: {$attrlist}</h5>
            {/if}
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
                    {$otherproductstable}
                </tbody>
            </table>
        </div>
    </div>
{/if}