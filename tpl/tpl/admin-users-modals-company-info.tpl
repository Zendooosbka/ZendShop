<div id="ModalCompanyInfo_{$ticketid}" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Информация о компаннии</h4>
                </div>
                <div class="modal-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <b>Название копмании:</b>  {$compname} <br><hr>
                            <b>Инн:</b> {$inn} <br><hr>
                            <b>Адрес:</b> {$address} <br><hr>
                            <b>Описание:</b> {$address}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
    </div>
</div>