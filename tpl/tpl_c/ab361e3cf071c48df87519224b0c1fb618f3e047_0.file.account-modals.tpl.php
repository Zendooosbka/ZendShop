<?php
/* Smarty version 3.1.30, created on 2017-12-12 17:38:16
  from "/var/www/html/zendshop/tpl/tpl/account-modals.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2fe9d813de31_61164771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab361e3cf071c48df87519224b0c1fb618f3e047' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/account-modals.tpl',
      1 => 1513089494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2fe9d813de31_61164771 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
</div><?php }
}
