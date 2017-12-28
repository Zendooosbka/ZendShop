<div class="col-sm-3">
    <div class="well">
        <h4 align="center"><a href="showwindow.php?id={$id}" style="color: darkred;">{$name}</a></h4>
        <hr>
        {if $image != "not"}
            <a href="showwindow.php?id={$id}"><img src="pictures/{$image}" class="img-responsive" alt="Image"></a>
        {else}
            <a href="showwindow.php?id={$id}">Нету изображения</a>
        {/if}
    </div>
</div>