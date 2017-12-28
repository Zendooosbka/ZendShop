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

{if $showwindow > 0}

<hr><h3 align="center">{$name}</h3><hr>

<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
        <div class="well">
            {if $image != "not"}
                <img src="pictures/{$image}" class="img-responsive" alt="Image">
            {else}
                <h3>Нету изображения</h3>
            {/if}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="well">
            {$actionattributes}
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><strong class="navbar-brand">Цена: {$price} руб.</strong></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        {if $goodincart == 0}
                            <li><a href="AddtocartQuery.php?id={$goodid}">Добавить в корзину</a></li>
                        {/if}

                        {if $goodincart == 1}
                            <li><a href="#">Товар уже в корзине</a></li>
                        {/if}

                        {if $goodincart == -1}
                            <li><a href="№">Для добавления в корзину авторизуйтесь</a></li>
                        {/if}
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="col-sm-1"></div>
</div>

<hr><h3 align="center">Характеристики товара</h3><hr>

<div class="well">
    <div class="row">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Характерстика</th>
                <th>Значение характеристики</th>
            </tr>
            </thead>
            <tbody>
                {$attrtable}
            </tbody>
        </table>
    </div>
</div>

    <hr><h3 align="center">Отзывы покупателей</h3><hr>

{else}
    <div class="jumbotron">
        <h1 class="display-3">Упс...</h1>
        <p class="lead">По вашему запросу ничего не найденно, проверьте правильность ввода, может быть что то измениться :)</p>
        <hr class="my-4">
        <p>Вполне возможно, что товар, который вы ищите, не продается в нашем магазине.</p>
    </div>
{/if}