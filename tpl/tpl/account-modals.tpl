<div id="ModalLoginUpdateDialog" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <form action="UpdateAcconutLoginQuery.php" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Изменение логина</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="login">Новый логин</label>
                        <input type="text" id="login" name="login" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Изменить логин</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="ModalPasswordUpdateDialog" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <form action="UpdateAccountPasswordQuery.php" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Изменение пароля</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="pass">Введите новый пароль</label>
                        <input type="password" id="pass" name="pass" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Изменить пароль</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="ModalPhoneUpdateDialog" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <form action="UpdateAcconutPhoneQuery.php" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Изменение телефона</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="phone">Введите новый телефон</label>
                        <input type="text" id="phone" name="phone" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Изменить номер телефона</button>
                </div>
            </div>
        </form>
    </div>
</div>


<div id="ModalEmailUpdateDialog" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <form action="UpdateAcconutEmailQuery.php" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Изменение почты</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="email">Введите новую почту</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Изменить почту</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="ModalStockOnMapDialog" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Склад на карте</h4>
            </div>
            <div class="modal-body">
                <div id="mapinchegototam" style="height: 300px"></div>
            </div>
        </div>
    </div>
</div>