{if $rescount > 0}
    <div class="row">
        {$results}
    </div>
{else}
    <div class="jumbotron">
        <h1 class="display-3">Упс...</h1>
        <p class="lead">По вашему запросу ничего не найденно, проверьте правильность ввода, может быть что то измениться :)</p>
        <hr class="my-4">
        <p>Вполне возможно, что товар, который вы ищите, не продается в нашем магазине.</p>
    </div>
{/if}