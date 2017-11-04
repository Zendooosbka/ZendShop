<div class="panel panel-default">
    <div class="panel-body">
        <div clas="row">
            <div class="col-sm-3">
                <a href="admineditscb.php" class="btn btn-info {if $page == 0} disabled {/if}">Редакторование разделов, брендов</a>
            </div>
            <div class="col-sm-3">
                <a href="admineditproducts.php" class="btn btn-success {if $page == 1} disabled {/if}">Редакторование товаров</a>
            </div>
            <div class="col-sm-3">
                <a href="" class="btn btn-success {if $page == 2} disabled {/if}">Редакторование витрин</a>
            </div>
            <div class="col-sm-3">
                <a href="" class="btn btn-danger {if $page == 3} disabled {/if}">Редакторование пользователей</a>
            </div>
        </div>
    </div>
</div>

{$admother}