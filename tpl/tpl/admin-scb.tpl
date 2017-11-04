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
                        {$sectiosntable}
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
                        {$categoriestable}   
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
                                    {$categoptions}
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
                        {$brandstable}
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
</div>