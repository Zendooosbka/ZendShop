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

<form method="get" action="companyaddnewproduct.php">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-1">
            <button type="submit" class="btn btn-info" >Поиск</button>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Введите название товара" name="search">
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</form>
<div class="panel panel-default">
    <div class="panel-footer">
        <h3>Результаты поиска</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Название товара</th>
                <th>Бренд</th>
                <th>Категория</th>
                <th>Выбрать</th>
            </tr>
            </thead>
            <tbody>
                {$resulttable}
            </tbody>
        </table>
    </div>
</div>

{if $productid > 0}
<div class="panel panel-default">
    <div class="panel-footer">
        <h3>Добавления продукта {$productname}</h3>
    </div>
    <div class="panel-body">
        <form method="post" action="AddcompanygoodQuery.php">
            {$attrform}
            <div class="form-group">
                <label for="stock">Выберите склад</label>
                <select class="form-control" name="stock">
                    {$stocksection}
                </select>
            </div>
            <button type="submit" class="btn btn-info">Добавить!</button>
        </form>
    </div>
</div>
{/if}