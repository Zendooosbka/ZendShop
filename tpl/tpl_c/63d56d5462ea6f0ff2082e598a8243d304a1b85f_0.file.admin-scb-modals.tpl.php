<?php
/* Smarty version 3.1.30, created on 2017-10-17 19:23:50
  from "/var/www/html/zendshop/tpl/tpl/admin-scb-modals.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e62e962af589_22366749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63d56d5462ea6f0ff2082e598a8243d304a1b85f' => 
    array (
      0 => '/var/www/html/zendshop/tpl/tpl/admin-scb-modals.tpl',
      1 => 1508256821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e62e962af589_22366749 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ModalSectionUpdateDialog" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
        <form action="UpdatesectionQuery.php" method="post">
            <div class="modal-content">
                <input type="hidden" id="updatesectionid" name="id" value="0">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Изменение раздела</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="login">Название раздела</label>
                        <input type="text" class="form-control" name="newnamesection" id="newnamesection">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Изменить раздел</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="ModalCategoryUpdateDialog" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
        <form action="UpdatecategoryQuery.php" method="post">
            <div class="modal-content">
                <input type="hidden" id="updatecategoryid" name="id" value="0">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Изменение категории</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="login">Выберите раздел</label>
                        <select class="form-control" name="section">
                            <?php echo $_smarty_tpl->tpl_vars['categoptions']->value;?>

                        </select>
                        
                        <div class="checkbox">
                            <label><input type="checkbox" name="sectionenable"> Заменить раздел?</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Веберите категорию</label>
                        <input type="text" class="form-control" name="newnamecategory" id="newnamecategory">
                        <div class="checkbox">
                            <label><input type="checkbox" name="categoryenable"> Заменить название категории?</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Изменить категорию</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="ModalBrandUpdateDialog" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
        <form action="UpdatebrandQuery.php" method="post">
            <input type="hidden" id="updatebrandid" name="id" value="0">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Изменение бренда</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="login">Название бренда</label>
                        <input type="text" class="form-control" name="brandname" id="login">
                        
                        <div class="checkbox">
                            <label><input type="checkbox" name="brandnameenabled"> Изменить название?</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="desc">Описание бренда</label>
                        <textarea class="form-control" rows="5" name="desc"></textarea>
                        
                        <div class="checkbox">
                            <label><input type="checkbox" name="branddescenabled"> Изменить описание?</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Изменить бренд</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="ChangePicureModalDialog" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
        <form enctype="multipart/form-data" action="UpdatepicturebrandQuery.php" method="post">
            <input type="hidden" id="updatepicturebrandid" name="id" value="0">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Изменение картинки бренда</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="login">Выберите изображение</label>
                        <span class="btn btn-default btn-file">
                            <input type="file" name="brandfile"/>
                        </span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Изменить бренд</button>
                </div>
            </div>
        </form>
    </div>
</div><?php }
}
