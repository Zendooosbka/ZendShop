<div id="ModalProductUpdateDialog" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <form action="UpdateproductQuery.php" method="post">
            <div class="modal-content">
                <input type="hidden" id="updateproductid" name="id" value="0">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Изменение продукта</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="productname">Название продукта</label>
                        <input type="text" id="productname" name="productname" class="form-control">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="prnameen"> Заменить название продукта?</label>
                    </div>

                    <div class="form-group">
                        <label for="productprice">Цена</label>
                        <input type="text" id="productprice" name="productprice" class="form-control">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="prpriceen"> Заменить цену продукта?</label>
                    </div>

                    <div class="form-group">
                        <label for="sectioncategory">Выберите категорию</label>
                        <select class="form-control" name="sectproductcateg">
                            {$categoryoptions}
                        </select>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="prcaten"> Заменить категорию продукта?</label>
                    </div>

                    <div class="form-group">
                        <label for="sectionbrand">Выберите Бенд</label>
                        <select class="form-control" name="secproductbrand">
                            {$brandoptions}
                        </select>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="prbranden"> Заменить бренд продукта?</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Изменить продукт</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="ChangePicureModalDialog" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <form enctype="multipart/form-data" action="UpdatepictureproductQuery.php" method="post">
            <input type="hidden" id="updatepictureproductid" name="id" value="0">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Изменение картинки продукта</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="login">Выберите изображение</label>
                        <span class="btn btn-default btn-file">
                            <input type="file" name="prodfile"/>
                        </span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Изменить картинку продукта</button>
                </div>
            </div>
        </form>
    </div>
</div>

{if $productid > 0}
<div id="ModalProductAttributeUpdateDialog" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <form action="UpdateproductattributeQuery,php.php" method="post">
            <div class="modal-content">
                <input type="hidden" id="updateproductattributeid" name="id" value="0">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Изменение атрибута продукта</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="productid" value="{$productid}">
                    <div class="form-group">
                        <label for="attrname">Название атрибута</label>
                        <input type="text" id="attrname" name="attrname" class="form-control">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="enattrname"> Заменить название атрибута продукта?</label>
                    </div>
                    <div class="form-group">
                        <label for="attrname">Значение атрибута</label>
                        <input type="attrname" id="attrname" name="attrvalue" class="form-control">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="enattrvalue"> Заменить значение атрибута продукта?</label>
                    </div>
                    <div class="form-group">
                        <label for="sectioncategory">Атрибут важный?</label>
                        <select class="form-control" name="attrimportant">
                            <option value="0">Нет</option>
                            <option value="1">Да</option>
                        </select>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="enattrimportant"> Заменить важность атрибута продукта?</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Изменить аттрибут продукта</button>
                </div>
            </div>
        </form>
    </div>
</div>
{/if}