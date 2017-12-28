<div class="col-sm-3">
    <div class="well">
        {if $image != "not"}
            <a href="showwindow.php?g={$ginsw}"><img src="pictures/{$image}" class="img-responsive" alt="Image"></a>
        {else}
            <a href="showwindow.php?g={$ginsw}">Нету изображения</a>
        {/if}
        <br>
        <h4><a href="showwindow.php?g={$ginsw}" style="color: darkred;">{$name}</a></h4>
        <br>
        <table class="table">
            <tbody>
            {$attrs}
            </tbody>
        </table>
        <hr>
        <h3>Цена: {$price} руб.</h3>
    </div>
</div>