{if $rescount > 0}
    <hr>
    <div class="row">
        <h3 align="center">Общая сумма товаров в корзине: {$price} <a href="#" class="btn btn-danger" style="vertical-align: center">Сделать заказ</a></h3>
    </div>
    <hr>
    <div class="row">
        {$results}
    </div>
    <hr>
{else}
    <div class="jumbotron">
        <h1 class="display-3">Упс...</h1>
        <p class="lead">Ваша корзина пуста :)</p>
        <hr class="my-4">
        <p>Вполне возможно, что вы ничего не выбирали в нашем магазине.</p>
    </div>
{/if}