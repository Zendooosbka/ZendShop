<div id="ModalShowWindowUpdateDialog" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <form action="UpdateshowwindowQuery.php" method="post">
            <div class="modal-content">
                <input type="hidden" id="showwindowid" name="swid" value="0">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Изменение витрины</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="attrname">Название витрины</label>
                        <input type="text" id="attrname" name="newname" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Изменить название витрины</button>
                </div>
            </div>
        </form>
    </div>
</div>